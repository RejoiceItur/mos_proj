
<!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title>St. Xavier's College, Mumbai</title>
  <link rel="icon" href="clg_logo.png" type="image/icon type">
<style>  
body{  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: pink;  
}  
.container {  
    padding: 50px;  
  background-color: #f2cac8;  
}  
  
input[type=text], input[type=password], textarea {  
  width: 100%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
input[type=text]:focus, input[type=password]:focus {  
  background-color: orange;  
  outline: none;  
}  
 div {  
            padding: 10px 0;  
         }  
hr {  
  border: 1px solid #f1f1f1;  
  margin-bottom: 25px;  
}  
.registerbtn {  
  border: 0;
    background: none;
    /* display: block; */
    margin: 20px auto;
    text-align: center;
    border: 2px solid #2ecc71;
    padding: 14px 40px;
    outline: none;
    color: white;
    background-color: #2ecc71;
    border-radius: 24px;
    cursor: pointer;
}  
.registerbtn:hover {  
  background: #049b43;  
}  
.resetbtn {  
  border: 0;
    background: none;
    /* display: block; */
    margin: 20px auto;
    text-align: center;
    border: 2px solid #2ecc71;
    padding: 14px 40px;
    outline: none;
    color: white;
    background-color: #2ecc71;
    border-radius: 24px;
    cursor: pointer;
}  
.resetbtn:hover {  
  background: #049b43;  
}  
.logo{
      height: 71px;
      width: 80px;
    }
a{
    text-decoration: solid;
    
}
  .edit{
    float: right;
  }
</style>  
</head>  
<body>  
<?php
    $server="localhost";
    $username="root";
    $password="";
    $database="stud_rec";
            
    $con=mysqli_connect($server,$username,$password,$database);
        if(!$con){
        die("not connected due to ". mysqli_connect_error());
        }
        // else{
        //     echo'Connected';
        // }
        error_reporting(0);
        $fn = $_GET['fn'];
        $ln = $_GET['ln'];
        $cr = $_GET['cr'];
        $gn = $_GET['gn'];
        $pn = $_GET['pn'];
        $em = $_GET['em'];
        $add = $_GET['add'];
?>
 
  <div class="container"> 
    <center> 
    <img class="logo" src="clg_logo.png" alt=""> 
    <h1>St. Xavier's College Mumbai</h1>
    <h2> Student Registeration Form</h2> 
  </center>  
  <hr>  
  <div class="edit"> 
    <a href="index.php"><b>Home</b></a><br>
  </div>
  <div>&nbsp;</div>
  <form action="" method="get"> 
  <label> Firstname </label>   
<input type="text" name="fname" value="<?php echo"$fn"?>" placeholder= "Firstname" size="15" required />      
<label> Lastname: </label>    
<input type="text" name="lname" value="<?php echo "$ln"?>" placeholder="Lastname" size="15"required />   

<label>   
Phone :  
</label>  
<input type="text" name="phone" value="<?php echo"$pn"?>" placeholder="phone no." size="10"/ required>   
<label>Email</label>  
 <input type="email" value="<?php echo"$em"?>" placeholder="Enter Email" name="email" required><br>
<label>
 Address :
</label>  
<input type="text" name="address" value="<?php echo"$add"?>" placeholder="Current address"/ required>  
    <input type="submit" name="submit" class="registerbtn" value="Update">  
    <input type="submit" name="delete" class="registerbtn" value="Delete">
</form>  
<?php

if($_GET['submit']){
    $fname = $_GET['fname'];
    $lname = $_GET['lname'];
    $phone = $_GET['phone'];
    $email = $_GET['email'];
    $address = $_GET['address'];

    $sql="UPDATE `info` SET fname='$fname',lname='$lname', phone='$phone', email='$email', address='$address'
    where fname='$fname'";
    $sql_run=mysqli_query($con,$sql);

    if(!$sql_run){
        echo'Failed';
    }

    if($sql_run){
        echo"<script>alert('Record updated')</script>";
    }

}

if($_GET['delete']){
    $fname = $_GET['fname'];
    $lname = $_GET['lname'];
    $phone = $_GET['phone'];
    $email = $_GET['email'];
    $address = $_GET['address'];

    $sql="DELETE FROM `info` where fname='$fname'";
    $sql_run=mysqli_query($con,$sql);

    if(!$sql_run){
        echo'Failed';
    }

    if($sql_run){
        echo"<script>alert('Record deleted')</script>";
    }

}
?>
</body>  
</html>  