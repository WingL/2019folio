<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link href="//getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link rel="icon" type="image/png" href="img/favicon.ico">
<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900' rel='stylesheet'>
<link rel="stylesheet" type="text/css" media="all" href="css/style.css">
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- <script src="js/jquery.event.move.js" type="text/javascript"></script> -->
<script src="js/jquery.twentytwenty.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/twentytwenty.css" type="text/css" media="screen" />
<script type="text/javascript" src="js/index.js"></script>
<?php $filename = basename($_SERVER['PHP_SELF']);
$pagename = substr($filename,0,-4);
?>
</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div id="name" class="col-xs-2 col-sm-2 col-md-2">
                    <a href="index">Lun Wing &copy;</a>
                    <br/>
                </div>
                <div id="menu" class="col-sm-8 col-md-8 show-in-big">
                    <ul class="row">
                        <a href="http://blog.lunwing.com">
                            <li class="col-sm-2 col-md-2">Blog</li>
                        </a>
                        <a href="aboutme">
                            <li class="col-sm-2 col-md-2">About Me</li>
                        </a>
                        <a href="portfolio">
                            <li class="col-sm-2 col-md-2">Portfolio</li>
                        </a>
                        <a href="contactme">
                            <li class="col-sm-2 col-md-2">Contact Me</li>
                        </a>
                    </ul>
                </div>
                <div id="menu" class="col-xs-6 hidden-in-big">
                    <ul class="row">
                        <a href="http://blog.lunwing.com">
                            <li class="col-xs-3"><img src="img/blogger.gif"></li>
                        </a>
                        <a href="aboutme">
                            <li class="col-xs-3"><img src="img/about.gif"></li>
                        </a>
                        <a href="portfolio">
                            <li class="col-xs-3"><img src="img/portfolio.gif"></li>
                        </a>
                        <a href="contactme">
                            <li class="col-xs-3"><img src="img/contact.gif"></li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
        </div>
        <!--container-->
    </header>
    <!--
    <div id="contentwrap">
<div class="container">
<!--no closing tags on header for BODY or HTML this is is done in the footer.php-->
    -->