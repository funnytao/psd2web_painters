<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
  </head>
  <body>
    <header>
      <img id="logo" src="img/logo.png" alt="logo">
      <div class="call-number"><span id="call">CALL</span>&nbsp;<span id="num">555-123-4567</span></div>
    </header>
    <div class="main-page">
      <div class="main-tag">
        <div class="main-title">
          <h2><span>PROFESSIONAL</span> PAINTERS</h2>
          <h3>OF LARGO, CLEARWATER, TAMPA</h3>
          <div class="underline"></div>
          <h4>We Care About More Than Paint!</h4>
        </div>
        <div class="main-subtitle">
          <h5>SCHEDULE YOUR FREE ESTIMATE</h5>
          <h5>TO REDEEM PROMO CODE FOR</h5>
          <h1>$150 OFF</h1>
          <h6>ANY JOB OF $3000 OR MORE!</h6>
        </div>
        <form class="main-form" method="post" action="mailer.php" id="contact-form">
          <div class="row">
            <span class="col-md-3 col-xs-3">NAME</span>
            <input type="text" name="name" class="col-md-6 col-xs-6" id="name">
          </div>
          <div class="row">
            <span class="col-md-3 col-xs-3">EMAIL</span>
            <input type="email" name="email" class="col-md-6 col-xs-6" id="email">
          </div>
          <div class="row">
            <span class="col-md-3 col-xs-3">PHONE</span>
            <input type="tel" name="tel" class="col-md-6 col-xs-6" id="tel">
          </div>
          <button type="button" onclick="validate()">SAVE $150</button>
          <div class="row phpbox">
              <?php
                  if($_GET['success']==1) {
                      echo "<div class=\"alert alert-success\">Thank you for your submit!</div>";
                  }
                  if($_GET['success']==-1) {
                      echo "<div class=\"alert alert-danger\">OOPS, something went wrong...</div>";
                  }
              ?>
          </div>
          <div id="error-box" class="alert alert-danger"></div>
        </form>
        <div class="main-footer">
          <div class="bonus"><span class="glyphicon glyphicon-ok-sign"></span>&nbsp;Quality Work&nbsp;</div>
          <div class="bonus"><span class="glyphicon glyphicon-ok-sign"></span>&nbsp;Professional Painters&nbsp;</div>
          <div class="bonus"><span class="glyphicon glyphicon-ok-sign"></span>&nbsp;Flexible Schedules&nbsp;</div>
        </div>
      </div>
    </div>
    <div class="content-page">
      <div class="content-text">
        <h2>Professional Painters</h2>
        <h4>Tackling Residential & Commercial Painting Projects</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus gravida massa pharetra, tempor ligula ut, aliquet nulla. Quisque eu quam turpis. Sed porttitor mauris nec quam dignissim, et placerat odio scelerisque. In hac habitasse platea dictumst. Proin et accumsan nunc, sit amet bibendum purus. Proin at euismod ante. Phasellus ipsum orci, feugiat tristique mollis vitae, sagittis sollicitudin libero. In tempus ex non ipsum pretium, ac consequat justo fringilla. </p>
        <h4>Why Clients Choose to Hire Our Team:</h4>
        <ul class="bullet-point">
          <li>Mauris sit amet urna et leo pulvinar tristique.</li>
          <li>Nam eu eros mollis. interdum sapien tincidunt, accumsan erat.</li>
          <li>Maecenas rutrum libero ac diam volutpat, eu vehicula risus molestie.</li>
          <li>Mauris at tellus in lacus efficitur fringilla.</li>
          <li>Nullam lacinia nulla eget quam ornare blandit.</li>
          <li>Sed mollis magna eu mi aliquet scelerisque.</li>
        </ul>
        <p>Donec aliquam sit amet nisi sed consequat. Etiam non gravida nisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean feugiat lacinia velit non lacinia. Proin eget tristique leo.</p>
      </div>
    </div>
    <footer>
      <span id="footer-title">SCHEDULE YOUR FREE ESTIMATE!&nbsp;</span><span id="footer-num">555-123-4567</span>
    </footer>
  </body>
</html>
