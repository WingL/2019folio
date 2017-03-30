	<?php include'head.php' ?>

<body id="indexbody">
<?php include'header.php' ?>
  <!--end Header-->


  <section id="welcome">
    <div class="container">
      <div class="hello col-sm-8 col-md-8 col-md-push-2 col-sm-push-2">
        <h1>Visual + Code </h1>
        <h3>Portfolio of Ying Lun, graphic and web designer in Brisbane</h3>
        <div class="scroll"><a href="#about">&#10095</a></div>
      </div>
    </div>
  </section>
<!-- End Welcome Section-->

  <section id="about">
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

          <form  form role="form" id="hireme">
            <div class="form-group">
              <label for="company">Company Name</label>
              <input type="text" class="form-control" id="company" placeholder="Enter your company name">
            </div>
            <div class="form-group">
              <label for="name">Your Name</label>
              <input type="text" class="form-control" id="yourname" placeholder="Enter your name">
            </div>
            <div class="form-group">
              <label for="email">Your email</label>
              <input type="email" class="form-control" id="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
              <label for="role">Please tell me about the role</label>
              <textarea id="role" class="form-control" placeholder="Tell me about the role"></textarea>
            </div>
            <button id="submit" class="submit">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </section>
<!-- End About Section -->

  <section id="ability">
    <div class="container">
      <div class="myprogramme col-sm-8 col-md-8 col-md-push-2 col-sm-push-2">
        <h1> What I do?</h1>
        <h3> Graphic + Web + Front End + UI </h3>
        <br/>
        <p> Love to create, passion about the web. That's why I always like to learn every bit of design, and create works for variety
          platforms. </p>
        <p> <b>Programme I use:</b></p>
        <p> <b>Adobe Creative Suite </b>is a must
          </br> <b>Coding Tools:</b> Visual Studio Code, Notepad++
          <br/> <b>Languages I know:</b> HTML, CSS, JavaSricpt, PHP, English, Mandarin, Cantonese
          <br/> <b>Other stuff I touched:</b> Git, Source Tree, Wamp, WordPress, Wix, Audacity, Canva, Filezilla, Cyberduck,
          Microsoft Office Suite
        </p>
        <a href="https://au.linkedin.com/in/lunwing"><button class="linkedin">My LinkedIn Profile</button></a>
      </div>
    </div>
  </section>
<!-- End Ability Section-->


  <section id="contact">
    <div class="container">
      <div class="contact col-sm-8 col-md-8 col-md-push-2 col-sm-push-2">
        <h2>Opinions? <br/>Advice? <br/>Question? </h2>
        <button class="contactbtn">Tell me your thought</button>
        <div id="contactpop">
          <div class="closebtn" onclick="closepop()">&times;</div>

          <form name="contact form" method="post" id="hireme">
            <div class="form-group">
              <label for="company">Your Name</label>
              <input type="text" class="form-control" id="yourname" placeholder="Enter your name">
            </div>
            <div class="form-group">
              <label for="name">Your Email</label>
              <input type="text" class="form-control" id="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
              <label for="email">About You</label>
              <input type="email" class="form-control" id="yourrole" placeholder="Tell me about you">
            </div>
            <div class="form-group">
              <label for="role">Your Thought</label>
              <textarea id="role" class="form-control" placeholder="Tell me what you are thinking"></textarea>
            </div>
            <button type="submit" class="submit">Submit</button>
          </form>
        </div>
      </div>
      </div>
    </div>
  </section>
</body>

</html>