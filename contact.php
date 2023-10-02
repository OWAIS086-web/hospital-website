
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
 header ("location:Home.html" );
 
 $con = mysqli_connect('localhost','root');
 

mysqli_select_db($con, 'signup1');

    $name   = $_POST ['name'];
    $email         = $_POST ['email'];
    $subject          = $_POST ['subject'];
    $phone         = $_POST ['phone'];
    $message          = $_POST ['message'];
    
        
    $q= "select * from  contact where name= '$name' && message ='$message' ";
    $result =mysqli_query($con ,$q);
    $num = mysqli_num_rows($result);
    if($num==1)
        {
            
            echo "Message already send";

    }
    else
    {
        $qy = "insert into contact ( name , email, subject, phone, message) VALUES ('$name','$email','$subject','$phone','$message')";
        mysqli_query($con,$qy);
        
    }
    

     ?>
    
</body>
</html>