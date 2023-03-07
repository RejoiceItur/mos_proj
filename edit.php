<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>St. Xavier's College, Mumbai</title>
    <link rel="icon" href="clg_logo.png" type="image/icon type">
</head>
<style>
    body{
        background-color: #f2cac8;
    }
    table,th,td{
        border: 2px solid black;
        width: 1100px;
        background-color: lightgreen;
    }
    a{
        text-decoration: none;
        text-align: center;
    }
    .style{
        text-align: center;
    }
</style>
<body>
    <center>
        <h1>Search data by name</h1>

        <div>
            <form action="" method="POST">
                <input type="text" name="name" placeholder="Enter your name" required>
                <input type="submit" name="search" value="Search">
                <div>&nbsp;</div>
            </form>
            
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
                if(isset($_POST['search'])){
                    $name=$_POST['name'];

                    $sql="SELECT * FROM `info` where fname='$name'";
                    $sql_run=mysqli_query($con,$sql);

                    while($row=mysqli_fetch_array($sql_run)){

                        echo "<table>";
                        
                           echo"<tr>";
                           echo"<th>Sno</th>";
                           echo"<th>Fname</th>";
                           echo"<th>Lname</th>";
                           echo"<th>Course</th>";
                           echo"<th>Gender</th>";
                           echo"<th>Phone</th>";
                           echo"<th>Email</th>";
                           echo"<th>Address</th>";
                           echo"</tr>";
                        echo "
                        <tr>
                            <td>".$row['sno']."</td>
                            <td>".$row['fname']."</td>
                            <td>".$row['lname']."</td>
                            <td>".$row['course']."</td>
                            <td>".$row['gender']."</td>
                            <td>".$row['phone']."</td>
                            <td>".$row['email']."</td>
                            <td>".$row['address']."</td>
                            <td><a href='update.php?fn=$row[fname]&ln=$row[lname]&cr=$row[course]&gn=$row[gender]&pn=$row[phone]&em=$row[email]&add=$row[address]'>
                            Edit</a></td>
                        </tr>
                        <tr>
                            
                        </tr>";
                    
                    }
                }
            ?>
                
            </table>
            
        </div>
    </center>
</body>
</html>