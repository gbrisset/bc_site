<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3_bc.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-white">

<!-- Top container -->
<div class="w3-container w3-top w3-black w3-large w3-padding" style="z-index:4">
 <button class="w3-btn w3-hide-large w3-padding-0 w3-hover-text-grey" onclick="w3_open();"><i class="fa fa-bars"></i></button> 
  <h2><code>&lt;WEBDEV&nbsp;fname=&quot;Georges&quot;&nbsp;lname=&quot;Brisset&quot;/&gt;</code></h2>
</div>



<!-- Sidenav/menu -->

<nav class="w3-sidenav w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidenav">
  <div class="w3-container">
    <h2>Welcome</h2>
  </div>

  <a href="#" class="w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>

  <a href="#" class="w3-padding"><i class="fa fa-cog fa-fw" aria-hidden="true"></i>&nbsp;Technologies</a>
  <a href="#" class="w3-padding"><i class="fa fa-briefcase fa-fw" aria-hidden="true"></i>&nbsp;Employment</a>
  <a href="#" class="w3-padding"><i class="fa fa-user fa-fw" aria-hidden="true"></i>&nbsp;Personal profile</a>
  <a href="#" class="w3-padding"><i class="fa fa-envelope fa-fw" aria-hidden="true"></i>&nbsp;Contact</a>
  <a href="#" class="w3-padding"><i class="fa fa-envelope fa-fw" aria-hidden="true"></i>&nbsp;GitHell</a>
  <a href="#" class="w3-padding"><i class="fa fa-envelope fa-fw" aria-hidden="true"></i>&nbsp;GitRocks</a>
  <a href="#" class="w3-padding"><i class="fa fa-envelope fa-fw" aria-hidden="true"></i>&nbsp;Test from Wamp/www</a>
  <a href="#" class="w3-padding"><i class="fa fa-envelope fa-fw" aria-hidden="true"></i>&nbsp;Test from Wamp64/www @ work</a>
</nav>


<!-- Overlay effect when opening sidenav on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:82px;">

  <!-- Header -->

  <header>
    <h2><b><i class="fa fa-cog fa-fw" aria-hidden="true"></i>&nbsp;Technologies</b></h2>
  </header>

  <div class="w3-w3-padding-16 w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class="fa fa-database w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>52</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Messages</h4>
      </div>
    </div>

  <div class="w3-container w3-section">
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-third">
        <h5>Regions</h5>
        <img src="/w3images/region.jpg" style="width:100%" alt="Google Regional Map">
      </div>
      <div class="w3-twothird">
        <h5>Feeds</h5>
        <table class="w3-table w3-striped w3-white">
          <tr>
            <td><i class="fa fa-user w3-blue w3-padding-tiny"></i></td>
            <td>New record, over 90 views.</td>
            <td><i>10 mins</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-bell w3-red w3-padding-tiny"></i></td>
            <td>Database error.</td>
            <td><i>15 mins</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-users w3-orange w3-text-white w3-padding-tiny"></i></td>
            <td>New record, over 40 users.</td>
            <td><i>17 mins</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-comment w3-red w3-padding-tiny"></i></td>
            <td>New comments.</td>
            <td><i>25 mins</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-bookmark w3-light-blue w3-padding-tiny"></i></td>
            <td>Check transactions.</td>
            <td><i>28 mins</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-laptop w3-red w3-padding-tiny"></i></td>
            <td>CPU overload.</td>
            <td><i>35 mins</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-share-alt w3-green w3-padding-tiny"></i></td>
            <td>New shares.</td>
            <td><i>39 mins</i></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>General Stats</h5>
    <p>New Visitors</p>
    <div class="w3-progress-container w3-grey">
      <div id="myBar" class="w3-progressbar w3-green" style="width:25%">
        <div class="w3-center w3-text-white">+25%</div>
      </div>
    </div>

    <p>New Users</p>
    <div class="w3-progress-container w3-grey">
      <div id="myBar" class="w3-progressbar w3-orange" style="width:50%">
        <div class="w3-center w3-text-white">50%</div>
      </div>
    </div>

    <p>Bounce Rate</p>
    <div class="w3-progress-container w3-grey">
      <div id="myBar" class="w3-progressbar w3-red" style="width:75%">
        <div class="w3-center w3-text-white">75%</div>
      </div>
    </div>
  </div>
  <hr>

  <div class="w3-container">
    <h5>Countries</h5>
    <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
      <tr>
        <td>United States</td>
        <td>65%</td>
      </tr>
      <tr>
        <td>UK</td>
        <td>15.7%</td>
      </tr>
      <tr>
        <td>Russia</td>
        <td>5.6%</td>
      </tr>
      <tr>
        <td>Spain</td>
        <td>2.1%</td>
      </tr>
      <tr>
        <td>India</td>
        <td>1.9%</td>
      </tr>
      <tr>
        <td>France</td>
        <td>1.5%</td>
      </tr>
    </table><br>
    <button class="w3-btn">More Countries  <i class="fa fa-arrow-right"></i></button>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Recent Users</h5>
    <ul class="w3-ul w3-card-4 w3-white">
      <li class="w3-padding-16">
        <span onclick="this.parentElement.style.display='none'" class="w3-closebtn w3-padding w3-margin-right w3-medium">x</span>
        <img src="/w3images/avatar2.png" class="w3-left w3-circle w3-margin-right" style="width:35px">
        <span class="w3-xlarge">Mike</span><br>
      </li>
      <li class="w3-padding-16">
        <span onclick="this.parentElement.style.display='none'" class="w3-closebtn w3-padding w3-margin-right w3-medium">x</span>
        <img src="/w3images/avatar5.png" class="w3-left w3-circle w3-margin-right" style="width:35px">
        <span class="w3-xlarge">Jill</span><br>
      </li>
      <li class="w3-padding-16">
        <span onclick="this.parentElement.style.display='none'" class="w3-closebtn w3-padding w3-margin-right w3-medium">x</span>
        <img src="/w3images/avatar6.png" class="w3-left w3-circle w3-margin-right" style="width:35px">
        <span class="w3-xlarge">Jane</span><br>
      </li>
    </ul>
  </div>
  <hr>

  <div class="w3-container">
    <h5>Recent Comments</h5>
    <div class="w3-row">
      <div class="w3-col m2 text-center">
        <img class="w3-circle" src="/w3images/avatar3.png" style="width:96px;height:96px">
      </div>
      <div class="w3-col m10 w3-container">
        <h4>John <span class="w3-opacity w3-medium">Sep 29, 2014, 9:12 PM</span></h4>
        <p>Keep up the GREAT work! I am cheering for you!! Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><br>
      </div>
    </div>

    <div class="w3-row">
      <div class="w3-col m2 text-center">
        <img class="w3-circle" src="/w3images/avatar1.png" style="width:96px;height:96px">
      </div>
      <div class="w3-col m10 w3-container">
        <h4>Bo <span class="w3-opacity w3-medium">Sep 28, 2014, 10:15 PM</span></h4>
        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><br>
      </div>
    </div>
  </div>
  <br>
  <div class="w3-container w3-dark-grey w3-padding-32">
    <div class="w3-row">
      <div class="w3-container w3-third">
        <h5 class="w3-bottombar w3-border-green">Demographic</h5>
        <p>Language</p>
        <p>Country</p>
        <p>City</p>
      </div>
      <div class="w3-container w3-third">
        <h5 class="w3-bottombar w3-border-red">System</h5>
        <p>Browser</p>
        <p>OS</p>
        <p>More</p>
      </div>
      <div class="w3-container w3-third">
        <h5 class="w3-bottombar w3-border-orange">Target</h5>
        <p>Users</p>
        <p>Active</p>
        <p>Geo</p>
        <p>Interests</p>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="w3-container w3-padding-16 w3-light-grey">
    <h4>FOOTER</h4>
    <p>Powered by <a href="http://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
  </footer>

  <!-- End page content -->
</div>

<script>
// Get the Sidenav
var mySidenav = document.getElementById("mySidenav");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidenav, and add overlay effect
function w3_open() {
    if (mySidenav.style.display === 'block') {
        mySidenav.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidenav.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidenav with the close button
function w3_close() {
    mySidenav.style.display = "none";
    overlayBg.style.display = "none";
}
</script>

</body>
</html>
