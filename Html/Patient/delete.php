 <?php
                  $conn = mysqli_connect('localhost','root');
                  mysqli_select_db($conn,'signup1');



                    $Sr = $_GET['del'];
                    $q= "DELETE FROM appointment WHERE Sr='$Sr' ";
                    mysqli_query($conn,$q) ;
                    header('location:UserViewAppointment.php');
                
               ?> 