<!DOCTYPE html>
<html>
<head>
  <title>St. Xavier's College, Mumbai</title>
  <link rel="icon" href="clg_logo.png" type="image/icon type">

  <link rel="stylesheet" href="style.css">
  <style>
    .container1 {
      position: relative;
      text-align: center;
    }
    .centered {
      position: absolute;
      top: 55%;
      left: 50%;
      transform: translate(-50%, -50%);
    }
    .announce{
      text-align: center;
    }
    table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
    }
    #logo{
      height: 20%;
      width: 20%;
    }
    #bgimg{
      width: 100%;
      opacity: 40%;
    }
    .heading{
      font-size: 45px;
    }
    .navbar{
      list-style-type: none;
      text-align: center;
      padding: 15px;
      background-color: #4fa3a5;
    }

    li{
      display: inline;
      
    }
    a{
      text-decoration: none;
      padding: 1%;
      font-size: larger;
      color: #63c5ea;
    }
    .contact {
    position: relative;
    text-align: left;
    width: 100%;
    line-height: 30px;
    }
    .apply_btn{
      text-decoration:bold;
      padding: 10px;
      background-color: red;
      color: white;
      cursor: pointer;
    }

  </style>
</head>
<body>

   <div class="container1">
    <img src="clg_img1.jpg" alt="" id="bgimg">

    <div class="centered">
      <img src="clg_logo.png" alt="" id="logo"><br>
      <h1 class="heading">St. Xavier's College, Mumbai <br>(Autonomous)</h1>
    </div>
  </div>       <!--first div ended-->


  <div> <!--navbar starts-->
    <nav>
      <ul class="navbar">
        <li><a href="#">ABOUT US</a></li>
        <li><a href="#">COURSES & ADMISSION</a></li>
        <li><a href="#">ACADEMICS</a></li>
        <li><a href="#">STUDENT SUPPORT</a></li>
        <li><a href="#">IQAC</a></li>
        <li><a href="#">ALUMNI</a></li>
        <li><a href="login_page.html">MORE</a></li>
      </ul>
    </nav>
  </div>   <!--navbar ends-->
   
  <div class = "announce" >
  <center> 
    <table>
      <tr>
        <th>Imp ANNOUNCEMENTS</th>
      </tr>
      <tr>
        <td>M.A. / M.Sc. Attendance Defaulter List Nov 2022 - Feb 2023</td>
      </tr>
      <tr>
        <td>M.A. / M.Sc. Attendance Defaulter List Nov 2022 - Feb 2023</td>
      </tr>
      <tr>
        <td>M.A. / M.Sc. Attendance Defaulter List Nov 2022 - Feb 2023</td>
      </tr>
    </table>
    </center>
  </div>
  

  <div class="degree">
    <h1 id="degree_heading">Degree courses</h1>
  </div>

  <div class="container">    <!--container starts-->
    <div class="box">
      <div class="imgBx">
        <img src="under_gra.png">
      </div>
      <div class="content">
        <div>
          <h2 style="color:black;">Under Graduate</h2>
        </div>
      </div>
    </div>
    <div class="box">
      <div class="imgBx">
        <img src="post_gra.jpg">
      </div>
      <div class="content">
        <div>
          <h2 style="color:black;">Post Graduate</h2>
        </div>
      </div>
    </div>
    <div class="box">
      <div class="imgBx">
        <img src="phd.jpg">
      </div>
      <div class="content">
        <div>
          <h2 style="color:black;">PhD</h2>
        </div>
      </div>
    </div>
  </div>          <!--container ends-->
  
  <div>&nbsp;</div>
  <div>&nbsp;</div>
  <div>&nbsp;</div>
  <div>
    <form action="registration.html" method="POST">
      <center><input class="apply_btn" type="submit" name="Apply" value="Apply now"></center>
    </form>
  </div>
  <div>&nbsp;</div>

  <div class="contact">

    <nav style="background-color: #4fa3a5;">
    <div style="display:inline-block;vertical-align:top;">  
    <div>&nbsp;</div>
      <img src="map.jpg" alt="img"/>
    </div>
    <div style="display:inline-block;" >
    <div>&nbsp;</div>
      <h1>Contact us</h1>
      <h4>Phone - +91-22-22620661 </h4>
      <h4>Email - webadmin@xaviers.edu</h4>
      <h4>Add - 5, Mahapalika Marg, Mumbai- 400001, Maharashtra</h4>
      <h4><b>Principal's Visiting Hours:</b> Monday to Friday 10:30 AM to 12:30 PM</h4>
      </div>
      <div>&nbsp;</div>
    </nav>
  </div>

   

  </body>
</html>