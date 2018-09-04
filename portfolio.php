<?php include'head.php' ?>

<body id="portfolio">
    <?php include'header.php' ?>
    <div class="container">
        <div class="thumbsarea display-animation col-sm-10 col-md-10 col-md-push-1 col-sm-push-1 col-xs-12 ">
           
           <a href="http://www.lunwing.com/ffs" class="col-sm-4 col-md-4 col-xs-12">
                <div class="ratio">
                    <img src="img/ffs.png">
                </div>
            </a>

            <a href="http://www.prolinemedical.com.au" class="col-sm-4 col-md-4 col-xs-12">
                <div class="ratio">
                    <img src="img/proline.png">
                </div>
            </a>


            <?php
                            $datadir = "projects";
                            foreach (glob("$datadir/*", GLOB_ONLYDIR) as $project_path) {
                            
                            $project = basename($project_path);
                            $thumb="thumb.png";
                            

			                 echo '
                             <a href="projectpage?'."$project_path".'" alt="" class="col-sm-4 col-md-4 col-xs-12">
                                 <div class="ratio">
                                <img src="'."$project_path/$thumb".'" alt="" ></div>
                            </a>';
                       
      }	
     ?>

        </div>

    </div>
    </div>

    <script>
        /*---------------Portfolio Page--------------*/
        (function ($) {
            var speed = 2000;
            console.log('1000')
            var container = $('.display-animation');
            console.log('2000')
            container.each(function () {
                var elements = $(this).children();
                elements.each(function () {
                    var elementOffset = $(this).offset();
                    var offset = elementOffset.left * 1 + elementOffset.top * 1;
                    var delay = parseFloat(offset / speed).toFixed(2);
                    console.log(delay)
                    $(this)
                        .css("-webkit-transition-delay", delay + 's')
                        .css("-o-transition-delay", delay + 's')
                        .css("transition-delay", delay + 's')
                        .addClass('animated');
                    console.log('6000')
                });
            });
        })(jQuery);
    </script>


</body>
</html>