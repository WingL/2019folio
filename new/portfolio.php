<?php include'header.php'?>

<div id="thumbsarea">

<p><strong><span style="font-size:1.5em">Web Design<br/></span></strong></p><a 
href="http://www.lunwing.com/niagra"><img src="img/niagra.gif"></a><a 
href="http://www.lunwing.com/booderee"><img src="img/booderee.gif"></a><a
 href="http://www.lunwing.com/ffs"><img src="img/ffs.gif"></a><?php
      $datadir = "projects";
     foreach (glob("$datadir/web", GLOB_ONLYDIR) as $category_path) {
          $category = basename($category_path);
          foreach (glob("$category_path/*", GLOB_ONLYDIR) as $project_path) {
              $project = basename($project_path);
              	$thumb = "thumb.jpg";
			

			 echo '<a href="projectpage?'."$project_path".'" alt=""><img src="'."$project_path/$thumb".'" alt=""></a>';
			 
          }
      }
	
    ?>




<br/>
<br/>


<p><strong><span style="font-size:1.5em">Pen Australia<br/></span></p>
<?php
      $datadir = "projects";
     foreach (glob("$datadir/pen_australia", GLOB_ONLYDIR) as $category_path) {
          $category = basename($category_path);
          foreach (glob("$category_path/*", GLOB_ONLYDIR) as $project_path) {
              $project = basename($project_path);
              	$thumb = "thumb.jpg";
			

			 echo '<a href="projectpage?'."$project_path".'" alt=""><img src="'."$project_path/$thumb".'" alt=""></a>';
			 
          }
      }
	
    ?>



<br/>
<br/>


<p><strong><span style="font-size:1.5em">Graphic Design<br/></span></p>

 <?php

      $datadir = "projects";
     foreach (glob("$datadir/graphic_design", GLOB_ONLYDIR) as $category_path) {
          $category = basename($category_path);
          foreach (glob("$category_path/*", GLOB_ONLYDIR) as $project_path) {
              $project = basename($project_path);
              	$thumb = "thumb.jpg";
			

			 echo '<a href="projectpage?'."$project_path".'" alt=""><img src="'."$project_path/$thumb".'" alt="" class="thumbs"></a>';
			 
          }
      }
	
    ?>
    
    
   
</div>



  

	
 <?php include'footer.php'?>

       