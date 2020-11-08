<?php
  include_once 'header.php';
?>

<!--- Image Slider -->
<div id="slides" class="carousel slide" data-ride="carousel">
<ul class="carousel-indicators">
  <li data-target="#slides" data-slide-to="0" class="active"></li>
  <li data-target="#slides" data-slide-to="1"></li>
  <li data-target="#slides" data-slide-to="2"></li>
</ul>
<div class="carousel-inner">
  <div class="carousel-item active">
      <img src="img/place_holder.jpg">
      <div class="carousel-caption">
          <h1 class="dvtitle">XXX</h1>
          <h3 class="dvdesc"> XXX</h3>
          <button type="button" class="btn btn-primary btn-lg" onclick="window.location.href=">GO TO</button>
      </div>

  </div>
  <div class="carousel-item">
      <img src="img/place_holder.jpg">
    <div class="carousel-caption">
      <h1 class="display-2">XXX</h1>
      <h3>XXX</h3>
      <button type="button" class="btn btn-primary btn-lg" onclick="window.location.href=">GO TO</button>
    </div>
  </div>
  <div class="carousel-item">
      <img src="img/place_holder.jpg">
      <div class="carousel-caption">
        <h1 class="display-2">XXX</h1>
        <h3> XXX </h3>
        <button type="button" class="btn btn-primary btn-lg" onclick="window.location.href=">GO TO</button>
      </div>
  </div>
</div>

<a class="carousel-control-prev" href="#slides" role="button" data-slide="prev">
   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
   <span class="sr-only">Previous</span>
 </a>
 <a class="carousel-control-next" href="#slides" role="button" data-slide="next">
   <span class="carousel-control-next-icon" aria-hidden="true"></span>
   <span class="sr-only">Next</span>
 </a>
</div>

<!--- Welcome Section/Project Overview -->
<div class="container-fluid padding">
<div class="row welcome text-center">
      <div class="col-12">
        <h1 class="display-4">Project Goals: </h1>
      </div>
      <hr>
      <div class="col-12">
          <p class="lead">
            Our goal is to deliver an intelligent Chat-Bot to streamline sales and user experience for our "client" Bealls!
          </p>
</div>
<hr>
</div>

<!--- Three Column Section -->
<div class="container-fluid padding">
<div class="row text-center padding">
    <div class="col-xs-12 col-sm-6 col-md-4">
        <i class="fab fa-html5"></i>
          <h3>HTML5</h3>
          <p>Built using HTML5.</p>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4">
        <i class="fas fa-bold"></i>
          <h3>BOOTSTRAP</h3>
          <p>Built using the Bootstrap 4 framework.</p>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4">
        <i class="fab fa-css3"></i>
          <h3>CSS3</h3>
          <p>Built using CSS3.</p>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4">
        <i class="fas fa-database"></i>
          <h3>mySQL</h3>
          <p>Built using a mySQL database.</p>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4">
        <i class="fab fa-php"></i>
          <h3>PHP</h3>
          <p>Backend Development Language.</p>
    </div>
</div>
<hr class="my-4">
</div>

<!--- Fixed background -->
<figure>
    <div class="fixed-wrap">
        <div id="fixed">
        </div>
      </div>
</figure>


<!--- Chat-Bot -->
<script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
<df-messenger
  intent="WELCOME"
  chat-title="Bealls-chatbot"
  agent-id="7f6e2cf2-0121-4497-84e7-6afbc9339ece"
  language-code="en"
  chat-icon="img/chat_bot_image.png"
></df-messenger>

</body>
<!-- Footer -->
<?php
  include_once 'footer.php';
?>
</html>
