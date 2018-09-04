<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title> <?php echo $projectpage?> | Lun Wing Design </title>
<meta name="description" content="Lun Wing Design is portfolio site owned by Ying Lun">
<meta name="keywords" content="Lunwing, Lun Wing, Ying Lun, Web Design, Graphic Design, Brisbane, Brisbane Graphic Design, Springwood Graphic Design, Springwood">
<meta name="author" content="Ying Lun">


<?php include'header.php'?>

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


<div class="row">

	<div class="col-sm-8">    
		
        
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
		
        <div class="spacer">&nbsp;</div>
	</div>

	<div class="col-sm-4">

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
	
<?php include'footer.php'?>
</div>
        