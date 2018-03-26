<?php
require_once("inc/config.php");
include_once(ROOT_PATH . "inc/header.php");
include_once(ROOT_PATH . "inc/analyticstracking.php");
include_once(ROOT_PATH . "inc/navbar.php");
?>
<!-- Jumbotron -->
<header id="top" class="jumbotron">
  <div class="container text-center">
    <div class="row">
      <div class="col-xs-6 col-xs-offset-3">
        <img class="img-responsive center-block logo" src="assets/imgs/td-logo.png" alt="TD Logo">
      </div>
      <div class="col-xs-12">
        <h1 class="title">Hi! My name is Tiffany.</h1>
        <p>I like to design and code user-friendly websites.</p>
        <p>Nice to meet you.</p>
        <a class="btn td-btn outline green scroll mt-30" href="#content" title="Learn more about me!"><span class="glyphicon glyphicon-triangle-bottom"></span> Learn more</a>
      </div>
    </div>
  </div>
</header>
<!-- Main Content Begins -->
<div id="content" class="container-fluid text-center">
  <!-- About Me Section -->
  <section id="about" class="row bg-white bg-shadow">
    <div class="row">
      <div class="col-xs-12">
        <h1 class="mb-30">About Me</h1>
      </div>
    </div>
    <div class="row mb-30">
      <div class="col-xs-12 col-md-3 col-md-offset-1 col-lg-2 col-lg-offset-2">
        <img class="img-responsive center-block profile mb-30" src="assets/imgs/profile-hex.png" alt="Tiffany Du's Profile Photo">
      </div>
      <div class="col-sm-8 col-sm-offset-2 col-md-7 col-md-offset-0 col-lg-6 text-left">
        <h4>Hello there! I'm a front-end developer and aspiring UX designer based in Chicago.</h4>
        <p>Having spent a large chunk of my life in art school, I've finally found my passion at the crossroads of design and technology. I started off as an undergrad in industrial design, then worked some graphic design gigs, and later went back to school for web design and new media. The one lesson that stood out throughout this journey was the importance of the end user. Whether a physical or digital product, its purpose needs to be obvious, and the product itself has to be easy to use. So no matter what I'm working on, I always have the user in mind and try my hardest to create an enjoyable experience for them.</p>
        <p>Currently, I spend most of my time designing websites and marketing material for small businesses and participating in the <a href="https://goo.gl/jhil8F" target="_blank">#100DaysOfCode</a> challenge to keep my skills sharp. When I'm not busy, you can find me obsessing over food, cats, skincare, and video games, or working on one of my many hobbies like playing the ukulele or crocheting. I tend to switch things up every few months, so if you want to know what I'm up to, just <a class="scroll" href="#follow-me">follow me!</a> :)</p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1">
      <hr class="dashed">
        <h2 class="mb-60">What I Do</h2>
      </div>
      <div class="col-sm-3 col-lg-2 col-lg-offset-2">
        <img class="img-responsive center-block icon" src="assets/icons/work/rwd-icon.png" alt="Responsive Web Design Icon">
        <p>Responsive Web Design</p>
      </div>
      <div class="col-sm-3 col-lg-2">
        <img class="img-responsive center-block icon" src="assets/icons/work/ui-ux-icon.png" alt="UI/UX Design Icon">
        <p>UI/UX Design</p>
      </div>
      <div class="col-sm-3 col-lg-2">
        <img class="img-responsive center-block icon" src="assets/icons/work/dev-icon.png" alt="Development Icon">
        <p>Development</p>
      </div>
      <div class="col-sm-3 col-lg-2 mb-30">
        <img class="img-responsive center-block icon" src="assets/icons/work/star-icon.png" alt="Identity and Branding Icon">
        <p>Identity &amp; Branding</p>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <button class="btn td-btn outline green mt-30" data-toggle="modal" data-target="#resumeModal">View my Resume</button>
      </div>
    </div>
  </section>
  <!-- Portfolio Section -->
  <section id="portfolio" class="row bg-star-y">
    <div class="row">
      <div class="col-xs-12">
        <h1 class="mb-60">Portfolio</h1>
      </div>
    </div>
    <div class="row">
      <?php include_once(ROOT_PATH . "inc/portfolio-teasers.php"); ?>
    </div><!-- /.row -->
  </section>
  <!-- Contact Me Section -->
  <section class="row bg-pink bg-shadow">
    <div class="col-xs-12">
      <h1 class="mb-30">Like what you see?</h1>
      <button class="btn btn-default td-btn outline white" data-toggle="modal" data-target="#contactModal">Send me a message!</button>
    </div>
  </section>
<?php
// Include modals
foreach(glob(ROOT_PATH . "modals/*.php") as $file) {
  include_once $file;
}
include_once(ROOT_PATH . "inc/footer.php"); // Include footer
?>