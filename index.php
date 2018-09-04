	<?php include'head.php' ?>

<body id="indexbody">
    
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PBRQQST"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php include'header.php' ?>
  <!--end Header-->


  <section id="welcome">
    
      <div class="hello col-sm-12 col-md-12">
       <!--
          <div id="logo">
          <img src="http://lunwing.com/img/logo-white.svg" alt="Lun Wing Logo">
        </div>
        -->
        <h2 style="color:#77bc1f;">Hello! I'm Wing Lun</h2>
        <h3>In Brisbane, Australia</h3>
        <div class="scroll"><a href="#about">&#10095</a></div>
      </div>
    
  </section>
<!-- End Welcome Section-->

  <section id="about">
    <div class="container">
      <div class="aboutme col-sm-12 col-md-12">
        <h2 style="color:#77bc1f"> Who am I?</h2>
        <h3> Name &#58; Wing Lun</h3>
        <p> A graphic &#38; web designer </p>
        <p> A marketing graduate</p>
        <p>Fast learner, loyal employee &amp; hard worker</p>
        <p>Based in Logan/Brisbane, Queensland Australia</p>
        
        <p> Language: Cantonese, Mandarin &amp; English for sure </p>
        
        <button class="hiremebtn"> Hire Me </button>
        
        <div id="hiremepop" class="col-sm-8 col-md-8 col-xs-12">
          <div class="closebtn" onclick="closepop()">&times;</div>
    <div class="formcontent">
    <h4>Hiring me for...?</h4>
    <form role="form" id="hire" class="contactForm">

            <div class="form-group col-sm-12">
                <label for="company-name">The Company</label>
                <input type="text" class="form-control" id="company-name" placeholder="Enter name" required data-error="NEW ERROR MESSAGE">
                <div class="help-block with-errors"></div>
            </div>

            <div class="form-group col-sm-12">
                <label for="person-name">Your Name</label>
                <input type="text" class="form-control" id="person-name" placeholder="Enter name" required data-error="NEW ERROR MESSAGE">
                <div class="help-block with-errors"></div>
            </div>

            <div class="form-group col-sm-12">
                <label for="email">Your Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" required>
                <div class="help-block with-errors"></div>
            </div>

        <div class="form-group col-sm-12">
            <label for="role-detail">About the role</label>
            <textarea id="role-detail" class="form-control" rows="3" placeholder="Enter your message" required></textarea>
            <div class="help-block with-errors"></div>
        </div>
        <button type="submit" id="form-submit" class="submit ">Submit</button>
        <div id="msgSubmit" class="h3 text-center hidden"></div>
        <div class="clearfix"></div>
    </form>
    </div>

<!---end Form -->
        </div>
      </div>
    </div>
  </section>
<!-- End About Section -->

  <section id="ability">
    <div class="container">
      <div class="myprogramme col-sm-12 col-md-12">
        <h2 style="color:#77bc1f"> What do I do?</h2>
        <h3> Graphic +  UI + Web + Front End + Marketing</h3>
        <p> <b>Expert: </b> Illustrator, Photoshop, InDesign</p>
        <p> <b>Coding Tools:</b> Visual Studio Code, Notepad++</p>
        <p> <b>Web:</b> HTML, CSS, Javascript, PHP, WordPress, Wix </p>
        <p> <b>Intermediate:</b> Premier Pro, After Effect, Git, Source Tree</p>
        <p> <b>Advance: </b> Dreamweaver, Mailchimp, Vision6, Microsoft Office Suite, Canva, Venngage</p>
        <p> <b>Marketing</b>: SEO, Google Ad, eDM, Research, Data analyst</p>
        <a href="https://au.linkedin.com/in/lunwing"><button class="linkedin">My LinkedIn Profile</button></a>
      </div>
    </div>
  </section>
<!-- End Ability Section-->


  <section id="contact">
    <div class="container">
      <div class="contact col-sm-12 col-md-12">
        <h2 style="color:#77bc1f; line-height:1.5">Opinions? Advice? Questions? </h2>
        <button class="contactbtn">Tell me your thoughts</button>
            <div id="contactpop" class="col-sm-6 col-md-6 col-xs-12">
          <div class="closebtn" onclick="closepop()">&times;</div>
    <div class="formcontent">
    <form role="form" id="thought" class="contactForm">

            <div class="form-group col-sm-12">
                <label for="feedback-name">Your Name</label>
                <input type="text" class="form-control" id="feedback-name" placeholder="Enter name" required data-error="NEW ERROR MESSAGE">
                <div class="help-block with-errors"></div>
            </div>

            <div class="form-group col-sm-12">
                <label for="feedback-email">Your Email</label>
                <input type="email" class="form-control" id="feedback-email" placeholder="Enter email" required>
                <div class="help-block with-errors"></div>
            </div>

            <div class="form-group col-sm-12">
                <label for="feedback-detail">Something about you</label>
                <input type="text" class="form-control" id="feedback-detail" placeholder="Enter name" required data-error="NEW ERROR MESSAGE">
                <div class="help-block with-errors"></div>
            </div>

        <div class="form-group col-sm-12">
            <label for="feedback-message">Your thought</label>
            <textarea id="feedback-message" class="form-control" rows="3" placeholder="Enter your message" required></textarea>
            <div class="help-block with-errors"></div>
        </div>
        <button type="submit" id="form-submit" class="submit ">Submit</button>
        <div id="ThoughtSubmit" class="h3 text-center hidden"></div>
        <div class="clearfix"></div>
    </form>
    </div>

<!---end Form -->
        </div>
      </div>
    </div>
  </section>
</body>
<script type="text/javascript" src="js/form-scripts.js"></script>

</html>