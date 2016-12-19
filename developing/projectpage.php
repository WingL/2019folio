<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title> <?php echo $projectpage?> | Lun Wing Design </title>
<meta name="description" content="Lun Wing Design is portfolio site owned by Ying Lun">
<meta name="keywords" content="Lunwing, Lun Wing, Ying Lun, Web Design, Graphic Design, Brisbane, Brisbane Graphic Design, Springwood Graphic Design, Springwood">
<meta name="author" content="Ying Lun">


<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<link href="//getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"> 
<link rel="icon" type="image/png" href="img/favicon.ico">
<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" media="all" href="style.css">



<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script src="js/jquery.event.move.js" type="text/javascript"></script>
<script src="js/jquery.twentytwenty.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/twentytwenty.css" type="text/css" media="screen" />


<?php $filename = basename($_SERVER['PHP_SELF']);
$pagename = substr($filename,0,-4);
?>

	 
     
</head>


<body style="height:100vh;">

<header>
<div class="container">
<div class="row">

<div id="logo" class="col-xs-2 col-sm-2 col-md-2"><a href="index"><img src="img/logo_big.gif" alt="lunwing.com"></div></a>
<div id="name" class="col-xs-2 col-sm-2 col-md-2"><a href="http://au.linkedin.com/pub/ying-lun/64/b59/aba" target="_blank" title="LinkedIn">Lun Wing &copy;</a><br/></div>

<div id="menu" class="col-sm-8 col-md-8 col-md-push-4 col-sm-push-4 show-in-big">
<ul class="row">
<a href="http://blog.lunwing.com"><li class="col-sm-2 col-md-2">Blog</li></a>
<a href="aboutme"><li class="col-sm-2 col-md-2">About Me</li></a>
<a href="portfolio"><li class="col-sm-2 col-md-2">Portfolio</li></a>
<a href="contactme"><li class="col-sm-2 col-md-2">Contact Me</li></a>
</ul>
</div>

<div id="menu" class="col-xs-6 hidden-in-big">
<ul class="row">
<a href="http://blog.lunwing.com"><li class="col-xs-3"><img src="img/blogger.gif"></li></a>
<a href="aboutme"><li class="col-xs-3"><img src="img/about.gif"></li></a>
<a href="portfolio"><li class="col-xs-3"><img src="img/portfolio.gif"></li></a>
<a href="contactme"><li class="col-xs-3"><img src="img/contact.gif"></li></a>
</ul>
</div>

</div>
</div><!--container-->
</header>


<?php 
$path = $_SERVER["QUERY_STRING"];
$extention = array("jpg","png");$img = "$path/main.jpg";
$img_after = ("$path/after.jpg");
$info = "$path/info.txt";
$use_2020 = file_exists($img_after);
if ($use_2020) {
	$img = "$path/before.jpg";
}
?>

 <?php $fo = fopen($info,'r');
$lines = file($info);
$id=$lines[1]; 
fclose($fo);?>

<?php $pre = ($id-1);
         function find_project_for_id($find_id) {
        # the found project ... (empty until we find it)
        $found_project = "";
 
        # look in every project folder ...
        foreach (glob("projects/*/*", GLOB_ONLYDIR) as $directory) {
            $project_file = "$directory/info.txt";
			
            # read information file
            $lines = file($project_file);
 
            # line 1 is the ID ...
            $project_id = $lines[1];
 
            # if this is the ID we're looking for, put it in $found_project
            # and then jump out of the loop
            if ($project_id == $find_id) {
                $found_project = $directory;
                break;
            }
        }
      return $found_project;
    }
    ?>


<div id="porfoliorow">


        
		<div id="mainpic">
		  <img src="<?php echo $img?>" alt="">
		  <?php
		    if ($use_2020) {
	      ?>
			 <img src="<?php echo $img_after ?>" alt="">
			 <script type="text/javascript">
				$(window).load(function(){
					$("#mainpic").twentytwenty();
				});
			 </script>
	  	  <?php } ?>  
		</div>
		



	<div id="info">

		<div id="previousproject"> 
        <?php 
		if(($id-1)!=0){
		echo
		"<a href=\"projectpage.php?" . find_project_for_id($id-1) . "\" alt=\"\">  &lt;&lt; previous project</a>";}	
		else{
        echo "no previous project";}
        ?>
        </div>
		<div id="nextproject"> <?php 
		if(($id+1)!=19){
		echo
		"<a href=\"projectpage.php?" . find_project_for_id($id+1) . "\" alt=\"\"> next project &gt;&gt;</a>";}	
		else{
        echo "no next project";}
        ?> </div>

		<div id="description">
		<h3>
		<?php
		$fo = fopen($info,'r');
		$lines = file($info);
		echo $lines[0]; 
		fclose($fo);
		?>
		</h3>

		<div>
		<?php $fo = fopen($info,'r');
		echo $lines[2];
		fclose($fo);
		?>
		</div>

		</div>

	</div>
	
</div>
</div>
</body>