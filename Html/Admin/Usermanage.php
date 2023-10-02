
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
                <h2 style="font-size: 35px;margin-bottom:2%; color: #ffffff;text-align: center" class="vc_custom">User Details</h2>
                </div>
           
                <table>
                  <tr>
                    <th>Sr No</th>
                    <th>User Name</th>
                    <th>Father Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                  </tr>
                  <?php
                  $conn = mysqli_connect("localhost","root","","signup1");
                  if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT Sr, name, fname ,email,pnumber FROM test where usertype = 'Patient'" ;
                $result = $conn->query($sql);
                if ($result-> num_rows > 0) {
                   // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["Sr"]. "</td><td>" . $row["name"]. "</td><td>" . $row["fname"]. "</td><td>". $row["email"]. "</td><td>" . $row["pnumber"]. "</td></tr>" ;
                    }
                    echo "</table>";
                } else {
                    echo "0 results";
                }
                $conn->close();
?>             
                </table>

              
</body> 

</html>
