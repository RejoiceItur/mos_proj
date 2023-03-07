<?php   
     $server="localhost";
     $username="root";
     $password="";
     $database="stud_rec";
     $conn=mysqli_connect("localhost","root","","stud_rec"); //database connection  
     
     //  if ($conn) {  
     //       echo "Connection successfully";  
     //  }else{  
     //       echo "Error";  
     //  }  
     //check database connect or not  
     
     $query="SELECT * FROM `attendance`";  
     $connect=mysqli_query($conn,$query);  
     $num=mysqli_num_rows($connect); //check in database any data have or not  
 ?>  
 <!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <title>Admin page</title>
      <style type="text/css">  
           *{  
                padding: 0;  
                margin: 0;  
                box-sizing: border-box;  
           }  
           body{  
                width: 100%;  
                min-height: 100vh;  
                background-color: #f2cac8;  
           }  
           .container{  
                max-width: 900px;  
                margin: auto auto;  
                width: 100%;  
           }  
           table{  
                border-collapse: collapse;  
                width: 100%;  
           }  
           table th{  
                background-color: red;  
                color: #fff;  
                padding: 10px;  
           }  
           table td{  
                padding: 12px;  
                color: black;  
                font-size: 1em;  
                text-align: center;  
           }  
           table tr:nth-child(odd){  
                background-color: #f2cac8;  
           }  
      </style>  
 </head>  
 <body>  
     <div>&nbsp;</div>
     <div>&nbsp;</div>
     <div>&nbsp;</div>
     <div>&nbsp;</div>
     <center>
          <h1>Attendance sheet(SYIT)</h1>
     </center>
 <div class="container">  
      <table border="1">  
           <tr>  
                <th>uid</th>  
                <th>rno</th>
                <th>name</th>
                <th>june</th>
                <th>july</th>
                <th>august</th>  
                  
           </tr>  
           <?php   
                if ($num>0) {  
                     while($data=mysqli_fetch_assoc($connect)){  
                          echo "  
                               <tr>  
                               <td>".$data['uid']."</td>  
                               <td>".$data['rno']."</td>
                               <td>".$data['name']."</td>  
                               <td>".$data['june']."</td>
                               <td>".$data['july']."</td>
                               <td>".$data['august']."</td> 
                               </tr>  
                          ";  
                     }  
                }  
           ?>  
      </table>  
 </div>  
 </body>  
 </html> 