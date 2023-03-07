<?php
    $server="localhost";
    $username="root";
    $password="";

    $con=mysqli_connect($server,$username,$password);
    if(!$con){
        die("not connected due to ". mysqli_connect_error());
    }
    //echo"connected"
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $course = $_POST['course'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    $sql="INSERT INTO `stud_rec`.`info` (`fname`, `lname`, `course`, `gender`, `phone`, `email`, `address`) VALUES ('$fname', '$lname',
     '$course', '$gender', '$phone', '$email', '$address');";
     //echo $sql;

     if($con->query($sql)==true){
        $referer = $_SERVER['HTTP_REFERER'];
        header("Location: index.php");
        

     }
     else{
        echo "Error: $sql <br> $con->error";
     }
     $con->close();
 ?>

 