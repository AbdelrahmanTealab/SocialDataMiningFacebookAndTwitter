<?php 

  $servername = "";
  $username = "";
  $password = "";
  $dbname = "";
  
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  #$conn->close();
  
  ?>

<!DOCTYPE html>
<html>
<title>Assignment 2</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="jquery-3.5.1.min.js"></script>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">
  
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="/images/profilepic.png" style="width:45%;" class="w3-round"><br><br>
    <h4><b>Abdelrahman Tealab</b></h4>
    <p class="w3-text-grey">ID: 200416659</p>
  </div>
  <div class="w3-bar-block">
    <a href="#portfolio" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-facebook-official w3-margin-right"></i>Facebook Data</a> 
    <a href="#portfolio2" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-twitter w3-margin-right"></i>Twitter Data</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>CONTACT</a>
  </div>
  <div class="w3-panel w3-large">
    <a href="https://www.facebook.com/kage.oni.564/"><i class="fa fa-facebook-official w3-hover-opacity" ></i></a>
    <a href="https://www.instagram.com/kagzei/"><i class="fa fa-instagram w3-hover-opacity"></i></a>
    <a href="https://twitter.com/AbdelrahmanTae1"><i class="fa fa-twitter w3-hover-opacity"></i></a>
    <a href="https://www.linkedin.com/in/abdelrahman-tealab-a8b13a1a2/"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer;" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;  background-color:#3b5998">

  <!-- Header -->
  <header style="background-color:#ffffff;" id="portfolio">
    <a href="#"><img src="/images/logo.png" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container" style="text-align:center">
    <h1><b></b>Social Data Mining Techniques</b></h1>
    <p>Assignment 2</p>
    </div>
  </header>

    <!-- Facebook Section-->
  <div class="w3-center w3-padding-32"  style="background-color:#3b5998; color:#ffffff">
    <div class="w3-bar">
      <h1><b>Facebook Data</b>
    </div>
  </div>
  <script type="text/javascript">
  var autoload = setInterval(
    function()
    {
      $('#loadF').load('facebook.php').fadeIn("Slow");
    },1000);
  </script>
  <div id = "loadF">

  </div>

  <!-- Twitter section -->
  <div class="w3-center w3-padding-32"  style="background-color:#1DA1F2; color:#ffffff">
    <div class="w3-bar">
      <h1><b>Twitter Data</b>
    </div>
  </div>
  <script type="text/javascript">
  var autoload = setInterval(
    function()
    {
      $('#portfolio2').load('twitter.php').fadeIn("Slow");
    },1000);
  </script>
  <div id="portfolio2" class="w3-container" style="background-color:#1DA1F2">
  
  
  </div>
  <!-- Contact Section -->
  <div class="w3-container" style="background-color:#DDDDDD">
    <h4 id="contact"><b>Contact Me</b></h4>
    <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-envelope w3-xxlarge w3-text-light-grey"></i></p>
        <p>Hostname@domain.organization.on.ca</p>
      </div>
      <div class="w3-third w3-teal">
        <p><i class="fa fa-map-marker w3-xxlarge w3-text-light-grey"></i></p>
        <p>Barrie, ON</p>
      </div>
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-phone w3-xxlarge w3-text-light-grey"></i></p>
        <p>Phone Number</p>
      </div>
    </div>
    <hr class="w3-opacity">
    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" type="text" name="Message" required>
      </div>
      <button type="submit" class="w3-button w3-black w3-margin-bottom"><i class="fa fa-paper-plane w3-margin-right"></i>Send Message</button>
    </form>
  </div>

  <!-- Footer -->
  <footer class="w3-container w3-padding-32 w3-dark-grey">
  <div class="w3-row-padding">
    <div class="w3-third">
      <h3>Description</h3>
      <p>The data was brought from Facebook's GraphAPI and Twitter's API by creating a python script using facebook-sdk and tweepy libraries. The data was then parsed from json into a pandas' dataframe to be uploaded properly by using sqlalchemy into the cloud's database on AWS.</p>
    </div>
  
    <div class="w3-third">
      <h3>API links</h3>
      <ul class="w3-ul w3-hoverable">
        <li class="w3-padding-16">
          <a href="https://developers.facebook.com/docs/graph-api/">
            <span class="w3-large">Facebook's</span><br>
            <span>GraphAPI</span>
          </a>
        </li>
        <li class="w3-padding-16">
          <a href="https://developer.twitter.com/en/docs/tweets/post-and-engage/api-reference/post-statuses-update">
            <span class="w3-large">Twitter's</span><br>
            <span>API</span>
          </a>
        </li> 
      </ul>
    </div>

    <div class="w3-third">
      <h3>TAGS</h3>
      <p>
        <span class="w3-tag w3-grey w3-small w3-margin-bottom">Facebook</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">API</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">pandas</span>
        <span class="w3-tag w3-grey w3-small w3-margin-bottom">Twitter</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Python</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">tweepy</span>
        <span class="w3-tag w3-grey w3-small w3-margin-bottom">Analysis</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">mysql</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">facebook-sdk</span>
        <span class="w3-tag w3-grey w3-small w3-margin-bottom">Data Science</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">AWS</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">json</span>
        <span class="w3-tag w3-grey w3-small w3-margin-bottom">Big Data</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">html</span>
      </p>
    </div>

  </div>
  </footer>
  
  <div class="w3-black w3-center w3-padding-24">Created by Abdelrahman Tealab</div>

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
