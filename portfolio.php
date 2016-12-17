<?php include'header.php'?>

<div id="thumbsarea">

<p><strong><span style="font-size:1.5em">Web Design<br/></span></strong></p><a 
href="../niagra"><img src="img/niagra.jpg"></a><a 
<a href="http://www.lunwing.com/ffs"><img src="img/ffs.jpg"></a>



<?php
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


<!--
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
-->


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
    

<br/>
<br/>

<p><strong><span style="font-size:1.5em">nac(nundah activity centre)<br/></span></p>
<?php
      $datadir = "projects";
     foreach (glob("$datadir/nac", GLOB_ONLYDIR) as $category_path) {
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

       