<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin page</title>
    <link rel="icon" href="clg_logo.png" type="image/icon type">
</head>
<style>
    body{
        background-color: #f2cac8;
    }
    img{
        height: 71px;
        width: 80px;
    }
    input{
        padding:10px 20px;
        width: 10%;
    }
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
    #logo{
      height: 20%;
      width: 20%;
    }
    #bgimg{
      width: 100%;
      height: 10%;
      opacity: 40%;
    }
</style>
<body>
    <div class="container1">
    <img src="clg_img1.jpg" alt="" id="bgimg">

    <div class="centered">
      <img src="clg_logo.png" alt="" id="logo"><br>
      <h1 class="heading">St. Xavier's College, Mumbai <br>(Autonomous)</h1>
    </div>
</div>
    <center>
    
    <form action="stud_reco.php">
        <input type="submit" name="students_rec" value="Students info">
    </form><br>
    <form action="it_stud.php">
        <input type="submit" name="syit_rec" value="IT Students"> 
    </form><br>
    <form action="subject.php">
        <input type="submit" name="subject" value="Subject">
    </form><br>
    <form action="attendance.php">
        <input type="submit" name="attendence_rec" value="Attendance Sheet">
    </form><br>
    <form action="marksheet.php">
        <input type="submit" name="marksheet_rec" value="Marksheet">
    </form>

</body>
</html>