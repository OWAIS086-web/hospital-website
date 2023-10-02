<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    body{
        margin: 0;
        padding: 0;
        background: url(../../Pictures/12.jpeg);
        background-size: cover;
        background-position: unset;
        font-family: sans-serif;
        font-size: 15;

    }
    .loginbox{
        width: 340px;
        height: 470px;
        background: black;
        color: #fff;
        top: 50%;
        left: 50% ;
        position: absolute;
        transform: translate(-50% ,-50%);
        box-sizing: border-box;
        padding:60px 30px;
        border: solid;
        
    }
    .ava{
            width: 100px;
            height: 100px;
            border-radius: 50%;
            position: absolute;
            top: -50px;
            left: calc(50% - 50px);
        }
        h1{
            margin: 0;
            padding: 0 0 20px;
            text-align: center;
            font-size: 22px;
        }
        .loginbox p{
            margin: 0;
            padding: 0;
            font-weight: bold;
        }
        .loginbox input{
            width: 100%;
          margin-bottom: 20px ;
        }
        .loginbox input[type="text"] ,input[type="Password"]
        {
            width: 80%;
            padding: 15px;
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
            height: 20px;
            color: #fff;
            font-size: 16px ;
        }
        .loginbox select{

            border: none;
            border-bottom: 1px solid #fff;
            background: black;
            outline: none;
            height: 40px;
            color: #fff;
            font-size: 16px ;

        }
        .loginbox button[type="submit"]
        {
            border: none;
            outline: none;
            height: 40px;
            width: 270px;
            background: #46bae2;
            color: #fff;
            font-size: 18px;
            border-radius:20px;
        }
        .loginbox button[type="submit"]:hover
        {
            cursor: pointer;
        background: #fb2525;
        color: #fff;
        }
        .loginbox a{
            text-decoration: none;
            font-size: 12px;
            line-height: 20px;
            color: darkgray;
        }
        .loginbox a:hover
        {
            color: #ffc107;
            
        }
</style>
</head>
<body>
    <div class="loginbox">
        <img src="../../Pictures/112.jpeg" class="ava">
        <h1> Login Here</h1>
        <form  method="POST">
            <p> User Type</p>
            <td>
                <select name="type" required>
                    <option value="-1">Select User Type</option>
                    <option value="Admin">AS a Admin</option>
                    <option value="Doctor">AS a Doctor</option>
                    <option value="Patient">AS a Patient</option>
                </select>
            </td>
            <br />
            <br />
            
            <p> User Name</p>
            <input type="text" name="username" , placeholder="Enter user name" required>
            <p> Password </p>
            <input type="password" name="password" , placeholder="Enter password" required>
            <button type="submit" name="submit" > Login </button>
            <br/>
            <a href="#"> Lost your Password?</a> <br>
            <a href="Signup.html"> Don't Have an Account?</a> <br>

    
        </form>
    </div>

</body>
</html>

<?php

 
 $con = mysqli_connect('localhost','root');
 if (!$con)
 {
     echo "Connection Faild".mysqli_error();
 }
    $db = mysqli_select_db($con, 'signup1');
if(!$db)
{
    echo "Database not found".mysqli_error();
   
}
if (isset($_POST['submit']))
{
    $user = $_POST ['type'];
    $username = $_POST ['username'];
    $pass = $_POST ['password'];
    $q= "select * from test where  name = '$username'  &&  password ='$pass' && usertype ='$user' ";
    $result =mysqli_query($con,$q);
    while($row=mysqli_fetch_array($result)){
        if($row['name']==$username && $row['password'] == $pass && $row['usertype']=='Admin')
        
        {
            header ("location:../Admin/HomeAdmin.html" ); 
        }
    elseif ($row['name']==$username && $row['password']==$pass && $row['usertype'] =='Doctor')
        {
            header ("location:../Doctor/HomeDoctor.html" );   
        }    
        elseif ($row['name']==$username && $row['password']==$pass && $row['usertype'] =='Patient')
        {
            header ("location:../Patient/HomePatient.html" );
        }
    else{

        echo "Invalid Name , Password or user type";
       
        }
    
    }

}
?>