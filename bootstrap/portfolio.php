<?php include'header.php'?>

<div id="web">
<strong><span style="color:#54284e; font-size:1.3em">Web Design<br/></span>
<a href="http://www.lunwing.com/niagra"><img src="img/Niagra.png"></a>
<a href="http://www.lunwing.com/ffs"><img src="img/logo.png"></a>
<a href="http://www.lunwing.com/booderee"><img src="booderee/img/logo.png"></a>
</div>


<br/>
<br/>


<div id="thumbsarea">
<strong><span style="color:#54284e; font-size:1.3em">Graphic Design<br/></span>
 <?php
      $datadir = "projects";
     foreach (glob("$datadir/*", GLOB_ONLYDIR) as $category_path) {
          $category = basename($category_path);
          foreach (glob("$category_path/*", GLOB_ONLYDIR) as $project_path) {
              $project = basename($project_path);
              	$thumb = "thumb.jpg";
			

			 echo '<a href="projectpage?'."$project_path".'" alt=""><img src="'."$project_path/$thumb".'" alt=""></a>';
			 
          }
      }
	
    ?>
    
    
   
</div>



  

	
 <?php include'footer.php'?>

       