 <?php
 session_start();
 header('location:AdminAccount.html');
 $con = mysqli_connect('localhost','root');
 
mysqli_select_db($con, 'signup1');

    $user = $_POST ['type'];
    $username = $_POST ['username'];
    $fname = $_POST ['fathername'];
    $spe = $_POST ['spe'];
    $dob = $_POST ['dob'];
    $email = $_POST ['email'];
    $number = $_POST['number'];
    $pass = $_POST ['password'];
    $confirmpass = $_POST ['confirmpassword'];
        
    $q= "select * from test where name = '$username' && password ='$pass' ";
    $result =mysqli_query($con ,$q);
    $num = mysqli_num_rows($result);
    if($num==1)
    {
        array_push($errors , "Data already exist");

    }
    else
    {
        $qy = "insert into test(usertype,name,fname ,spe,dob, email , pnumber,password,cpassword) values ('$user','$username','$fname','$spe','$dob','$email','$number','$pass','$confirmpass')";
        mysqli_query($con,$qy);
    }

     ?>