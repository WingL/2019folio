<?php include'head.php' ?>

<body id="portfolio">
<?php include'header.php' ?>
<section>
    <div class="container" >
        <div class="thumbsarea">
            <div class="col-sm-3 col-md-3 col-xs-12">
                <div class="ratio">
    <a href="../niagra"><img src="img/niagra.jpg"></a>
    <a href="http://www.lunwing.com/ffs"><img src="img/ffs.jpg"></a>
    </div>
    </div>


    <?php
      $datadir = "projects";
     foreach (glob("$datadir/web", GLOB_ONLYDIR) as $category_path) {
          $category = basename($category_path);
          foreach (glob("$category_path/*", GLOB_ONLYDIR) as $project_path) {
              $project = basename($project_path);
              if (file_exists ("thumb.png") ){
              $thumb = "thumb.png";}
              else{
                $thumb="thumb.jpg";
              }
			

			 echo '<a href="projectpage?'."$project_path".'" alt="" class="col-sm-3 col-md-3 col-xs-12">
             <div class="ratio" >
             <img src="'."$project_path/$thumb".'" alt="">
             </div>
             </a>'; 
          }
      }	
     ?>
    </div>
    </div>
    </section>

<section>
    <div class="container" >
        <div class="thumbsarea">
    <?php
      $datadir = "projects";
     foreach (glob("$datadir/nac", GLOB_ONLYDIR) as $category_path) {
          $category = basename($category_path);
          foreach (glob("$category_path/*", GLOB_ONLYDIR) as $project_path) {
              $project = basename($project_path);
              	$thumb = "thumb.png";
			

			 echo '<a href="projectpage?'."$project_path".'" alt="" class="col-sm-3 col-md-3 col-xs-12">
             <div class="ratio" >
             <img src="'."$project_path/$thumb".'" alt="">
             </div>
             </a>';
			 
          }
      }
	
     ?>
     </div>
     </div>
</section>
<section>
    <div class="container" >
        <div class="thumbsarea">
    <?php
      $datadir = "projects";
     foreach (glob("$datadir/graphic", GLOB_ONLYDIR) as $category_path) {
          $category = basename($category_path);
          foreach (glob("$category_path/*", GLOB_ONLYDIR) as $project_path) {
              $project = basename($project_path);
              if (file_exists ("thumb.png") ){
              $thumb = "thumb.png";}
              else{
                $thumb="thumb.jpg";
              }
			

			 echo '<a href="projectpage?'."$project_path".'" alt="" class="col-sm-3 col-md-3 col-xs-12">
             <div class="ratio" >
             <img src="'."$project_path/$thumb".'" alt="">
             </div>
             </a>'; 
          }
      }	
     ?>

     </div>
     </div>
</section>

</body>
