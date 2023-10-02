
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">



</head>
<body>

 
<?php
 session_start();
 header ("location:UserViewAppointment.php" );
 
 $con = mysqli_connect('localhost','root');
 

mysqli_select_db($con, 'signup1');

    $appointfor     = $_POST ['type'];
    $Paitent_Name   = $_POST ['paitent'];
    $Doctor         = $_POST ['Doctor'];
    $email          = $_POST ['email'];
    $number         = $_POST ['pnum'];
    $date           = $_POST ['date'];
    $time           = $_POST ['time'];
    $message        = $_POST ['message'];
        
    $q= "select * from  appointment where Pname= '$Paitent_Name' && date1 ='$date' ";
    $result =mysqli_query($con ,$q);
    $num = mysqli_num_rows($result);
    if($num==1)
        {
            
            echo "Data already Exist";

    }
    else
    {
        $qy = "insert into appointment(AppointFor, Pname , Doctor ,Email , phone ,date1,time ,Message) values ('$appointfor','$Paitent_Name','$Doctor','$email','$number','$date','$time','$message')";
        mysqli_query($con,$qy);
        
    }
    

     ?>
    
</body>
</html>