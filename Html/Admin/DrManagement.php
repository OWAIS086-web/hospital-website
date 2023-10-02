<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    body{
        background-color: lightgray;

    }
    .header {
  overflow: hidden;
  background-color: rgb(10, 96, 153);
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}

   .vc_custom{
    background-color: #2272ad !important;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #291d1d25;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
.btn {
    padding: 10px;
    font-size: 15px;
    color: white;
    background: #5F9EA0;
    border: none;
    border-radius: 5px;
}


.del_btn {
    text-decoration: none;
    padding: 2px 5px;
    color: white;
    border-radius: 3px;
    background: #800000;
}




</style>
</head>
<body>
        <div class="header">

                <img src="../../Pictures/download1.jpg" class="logo" width="90" height="70"></a>
                 <div class="header-right" class="navbar-nav">
                   <a href="HomeAdmin.html">Home</a>
                   <a href="AdminAccount.html">Admin Account</a>
                   <a href="#">Log out</a>
                   
                 </div>
               </div>
        <div id="Services" class="Services-box">
                <h2 style="font-size: 35px;margin-bottom:2%; color: #ffffff;text-align: center" class="vc_custom">Doctor Details</h2>
                </div>
                <table class="table table-hover">
                  <tr>
                  <th>Sr No</th>
                    <th>Doctor Name</th>
                    <th>Spacilist</th>
                    <th>E-mail</th>
                    <th>Date of Birth</th>
                    <th>Action</th>
                  </tr> 
                  <?php
                  $conn = mysqli_connect("localhost","root","","signup1");
                  if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT Sr, name, spe ,email,dob FROM test where usertype = 'Doctor'" ;
                $result = $conn->query($sql);
                ?>
              
                <?php while($row = $result->fetch_assoc()) { ?>
		<tr>

			<td><?php echo $row['Sr']; ?></td>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['spe']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['dob']; ?></td>
      <td>
       <a href="delete2.php?del=<?php echo $row['Sr']; ?>" class="del_btn">Delete</a> 
      


			</td>
		</tr>
	<?php } ?>


                </table>

              
</body> 

</html>
