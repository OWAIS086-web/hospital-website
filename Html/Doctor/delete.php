 <?php
                  $conn = mysqli_connect('localhost','root');
                  mysqli_select_db($conn,'signup1');

                
                                 /*   if (isset($_GET['del'])) {
                    $id = $_GET['del'];
                    mysqli_query($db, "DELETE FROM 'appointment' WHERE Sr=$id");
                    $_SESSION['message'] = "Address deleted!"; 
                    header('location: DrViewAppointment2.php');
                }
                    */


                    $Sr = $_GET['del'];
                    $q= "DELETE FROM appointment WHERE Sr='$Sr' ";
                    mysqli_query($conn,$q) ;
                    
                    header('location:DrViewAppointment.php');
                
               ?> 