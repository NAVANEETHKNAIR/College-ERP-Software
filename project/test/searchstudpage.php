<?php
session_start();
if(!isset($_SESSION['user'] ))
{
	header("Location: login.html");
}
?>

<!DOCTYPE HTML>
<html>

<head>
  <title>SCT ASSISTANT</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>

<body>
  <div id="main">
    <header>
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1>SCT ASSISTANT</h1>
         
        </div>
      </div>
      <nav>
        <ul class="sf-menu" id="nav">
          <li><a href="home.php">HOME</a></li>
          <li><a href="#">STUDENT</a>
          <ul>
           <li class="selected"><a href="searchstudpage.php">Search</a>
            <li><a href="sessionalpage.php">Sessional</a>
            </ul>
            </li>

           
          <li><a href="#">ATTENDENCE</a></li>
          

          
          <li><a href="#">TEACHER'S DIARY</a>
            <ul>
              <li><a href="#">Assignment</a>
              <ul>
              <li><a href="assign.php">Set</a></li>
              </ul>
              </li>
              <li><a href="daily_coursework.php">Daily Course Work</a>
              
              </li>
              <li><a href="#">Timetable</a></li>
              
            </ul>
          </li>
          <li><a href="logout.php">LOGOUT</a></li>
          
        </ul>
      </nav>
    </header>
    <div id="site_content">
      <div class="gallery">
        <ul class="images">
          <li class="show"><img src="images/50DAYS.png" width="960" height="527"></li>
          <li><img src="images/FB_IMG_1436462311944.jpg" width="960" height="527"></li>
           <li><img src="images/11011456_787326061342573_8274311906941130285_n.jpg" width="960" height="540"></li>
         
        </ul>
      </div>
    
        
      </div>
      <div id="form">
       
       <form action="searchstud.php" method="post">
          <div class="form_settings">
          <h2>SEARCH STUDENT</h2>
          <p><span>ADMISSION NUMBER</span><input type="search" name="search" maxlength="6" value="" /></p>
           <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="submit" value="SEARCH" /></p>
          </div>
        </form>


        <form action="searchclass.php" method="post">
          <div class="form_settings">
          <h2>CLASS LIST</h2>
          <p><span>COURSE</span>
      			<select id="id" name="course">
      						<li><option value="btech">BTECH</option></li>
      						<li><option value="mtech">MTECH</option></li>	
  </select></p>
      		<p><span>DEPARTMENT</span>
      			<select id="id" name="dept">
      						<li><option value="M">M</option></li>
      						<li><option value="U">U</option></li>	
      						<li><option value="P">P</option></li>
      						<li><option value="Ta">T-A</option></li>
                  <li><option value="Tb">T-B</option></li>
      						<li><option value="R">R</option></li>
      						<li><option value="B">B</option></li>
      			</select></p>
      			
      			<p><span>SEMESTER</span>
      				<select id="id" name="sem">
      						<option value="1">1</option>
      						<option value="2">2</option>
      						<option value="3">3</option>
      						<option value="4">4</option>
      						<option value="5">5</option>
      						<option value="6">6</option>
      						<option value="7">7</option>
      						<option value="8">8</option>
      			</select></p>
           <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="submit" value="GET LIST" /></p>
          </div>
        </form>
      </div>
    </div>
    
  <p>&nbsp;</p>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
  <script type="text/javascript" src="js/image_fade.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
    });
  </script>
</body>
</html>
