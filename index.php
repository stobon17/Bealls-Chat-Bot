<?php
  include_once 'header.php';
?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<!--- Image Slider -->
<div id="slides" class="carousel slide" data-ride="carousel" >
<div class="carousel-inner">  
  <div class="carousel-item active">
      <img src="//images.beallsflorida.com/i/beallsflorida/MFHP_110820_Hero?fmt=jpeg">
      <div class="carousel-caption">
          <h1 class="dvtitle">SHOES</h1>
          <h3 class="dvdesc"> BOGO 50% OFF</h3>
          <button type="button" class="btn btn-primary btn-lg" onclick="window.location.href=">GO TO</button>
      </div>
    </div>
</div>
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
  chat-title="BeallsBot"
  agent-id="96a5049c-6530-4915-a98b-28f2f8f7820b"
  language-code="en"
></df-messenger>


</body>
<!-- Footer -->
<?php
  include_once 'footer.php';
?>
</html>
