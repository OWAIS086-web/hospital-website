 <?php
                  $conn = mysqli_connect('localhost','root');
                  mysqli_select_db($conn,'signup1');

                


                    $Sr = $_GET['del'];
                    $q= "DELETE FROM test WHERE Sr='$Sr' ";
                    mysqli_query($conn,$q) ;
                    header('location:DrManagement.php');
                
               ?> 