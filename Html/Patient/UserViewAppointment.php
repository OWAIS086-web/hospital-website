<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style type="text/css">
    .bs-example{
    	margin: 20px;
    }
</style>
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
.edit_btn {
    text-decoration: none;
    padding: 2px 5px;
    background: #2E8B57;
    color: white;
    border-radius: 3px;
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
                   <a href="HomePatient.html">Home</a>
                   <a href="MyAccount.html">My Account</a>
                   <a href="#">Log out</a>
                   
                 </div>
               </div>
        <div id="Services" class="Services-box">
                <h2 style="font-size: 35px;margin-bottom:2%; color: #ffffff;text-align: center" class="vc_custom">View Appointment</h2>
                </div>
           
                <table class="table table-hover">
                  <tr>
                  <th>Patient Name</th>
                        <th>Doctor Name</th>
                        <th>Appointment For</th>
                        <th>Date </th>
                        <th>Time</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr> 
                  <?php
                  $conn = mysqli_connect("localhost","root","","signup1");
                  if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT Sr, pname,Doctor, AppointFor ,date1, time FROM appointment ";
                $result = $conn->query($sql);
                ?>
              
                <?php while($row = $result->fetch_assoc()) { ?>
		<tr>

			<td><?php echo $row['pname']; ?></td>
      <td><?php echo $row['Doctor']; ?></td>
      <td><?php echo $row['AppointFor']; ?></td>
      <td><?php echo $row['date1']; ?></td>
      <td><?php echo $row['time']; ?></td>
      <td></td>
      <td>
       <a href="delete.php?del=<?php echo $row['Sr']; ?>" class="del_btn">Delete</a> 
      


			</td>
		</tr>
	<?php } ?>


                </table>

              
</body> 

</html>
