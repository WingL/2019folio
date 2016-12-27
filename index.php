<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title> Welcome to Lun Wing Creative | Web and Graphic Designer </title>
  <meta name="description" content="Lun Wing Creative is a portfolio site owned by Ying Lun. Ying is a Web and Graphic Designer in Brisbane and Logan area, Queensland Australia. ">
  <meta name="keywords" content="Lunwing, Lun Wing, Ying Lun, Web Design, Graphic Design, Brisbane, Brisbane Graphic Design, Springwood Graphic Design, Springwood">
  <meta name="author" content="Ying Lun">
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

<body id="indexbody">
  <!--header-->
  <header id="indexheader">
    <div class="container">
      <!-- header container -->
      <div class="row">
        <!--include "name" & menu -->
        <!-- id=name -->
        <div id="name" class="col-xs-2 col-sm-2 col-md-2">
          <a href="index" target="_blank" title="LinkedIn">Lun Wing &copy;</a>
        </div>
        <!-- end id=name -->
        <!-- id=menu -->
        <!--show in big -->
        <div id="menu" class="col-sm-8 col-md-8 show-in-big">
          <ul class="row">
            <!--blog-->
            <a href="http://blog.lunwing.com">
              <li class="col-sm-2 col-md-2">Blog</li>
            </a>
            <!--about me -->
            <a href="aboutme">
              <li class="col-sm-2 col-md-2">About Me</li>
            </a>
            <!-- porfolio -->
            <a href="portfolio">
              <li class="col-sm-2 col-md-2">Portfolio</li>
            </a>
            <!--contact me-->
            <a href="contactme">
              <li class="col-sm-2 col-md-2">Contact Me</li>
            </a>
          </ul>
        </div>
        <!--end show in big-->
        <!-- show in small-->
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
        <!-- end show in small-->
      </div>
      <!-- end menu row -->
    </div>
    <!-- end header container -->
  </header>
  <!--end Header-->
  <section>
    <div class="container">
      <div class="hello col-sm-8 col-md-8 col-md-push-2 col-sm-push-2">
        <h1>Visual + Code </h1>
        <h3>Portfolio of Ying Lun, graphic and web designer in Brisbane</h3>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="aboutme col-sm-8 col-md-8 col-md-push-2 col-sm-push-2">
        <h1> Who I am?</h1>
        <h3> Name on Passport &#58; Ying Lun </h3>
        <p> Hi, I am a graphic &#38; web designer based in Logan/Brisbane, Queensland Australia.<br/> I like people call me Wing,
          due to the first language. I graduated from CATC Design. Although it is small college but I learn a lot.</p>
        <p> Currently, I am looking for an oppotunity to work in design&#47;advertising agency. </p>
        <p>I brand myself as a fast learner, a loyal employee and a hard worker.</p>
        <button class="hiremebtn"> Hire Me </button>
        <div id="hiremepop">
          <div class="closebtn" onclick="closepop()">&times;</div>
          <form>
            <div class="form-group">
              <label for="company">Company Name:</label>
              <input type="text" class="form-control" id="email" placeholder="Enter your company name">
            </div>
            <div class="form-group">
              <label for="name">Your Name:</label>
              <input type="text" class="form-control" id="yourname" placeholder="Enter your name">
            </div>
            <div class="form-group">
              <label for="email">Your email:</label>
              <input type="email" class="form-control" id="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
              <label for="role">Please tell me about the role:</label>
              <textarea id="role" class="form-control" placeholder="Tell me about the role"></textarea>
            </div>
            <button type="submit" class="submit">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="myprogramme col-sm-8 col-md-8 col-md-push-2 col-sm-push-2">
        <h1> What I do?</h1>
        <h3> Graphic + Web + Front End + UI </h3>
        <br/>
        <p> Love to create, passion about web. That's why I always like to learn every bit of design, and create work for variety
          platforms. </p>
        <p> <b>Programme I use:</b></p>
        <p> <b>Adobe Creative Suite </b>is a must
          </br> <b>Coding Tools:</b> Visual Studio Code, Notepad++
          <br/> <b>Languages I know:</b> HTML, CSS, JavaSricpt, PHP, English, Mandarin, Cantonese
          <br/> <b>Other stuff I touched:</b> Git, Source Tree, Wamp, WordPress, Wix, Audacity, Canva, Filezilla, Cyberduck,
          Microsoft Office Suite
        </p>
      </div>
    </div>
  </section>
</body>

</html>