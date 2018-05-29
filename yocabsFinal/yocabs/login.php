 
      <?php
if (isset($_POST['submit'])) {
      $email= $_POST['email'];
      
      $pas=$_POST['password'];
     

     
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yocab";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "SELECT * FROM customer where password='$pas' and email='$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) 
{
    // output data of each row
                          if($row = mysqli_fetch_assoc($result)) {
                              ?>
                              <!-- <table border='1'>
                                <tr>
                                  <td>id: <?php echo $row["name"]?></td>
                                <td> email: <?php echo $row["email"] ?></td>
                                 <td> address: <?php echo $row["address"] ?></td>
                                </tr>
                              </table> -->

                              <?php
                              session_start();
                              $_SESSION["flag"]=1;
                              $_SESSION["username"]=$row["email"];
                              $_SESSION["userid"]=$row["userid"];
                              $_SESSION['name']=$row['name'];
                              $_SESSION['img']=$row['image'];
                              
                              ?>
                              <script type="text/javascript">
                           
                            window.open('home1.php','_self');
                          </script>
                          <?php
                          }
} 
else {

                  $sql = "SELECT * FROM driver where password='$pas' and email='$email'";
                  $result = mysqli_query($conn, $sql);

                  if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      if($row = mysqli_fetch_assoc($result)) {
                         
                          session_start();
                          $_SESSION["flag"]=2;
                          $_SESSION["username"]=$row["email"];
                           $_SESSION['name']=$row['name'];
                              $_SESSION['img']=$row['image'];
                          
                          ?>
                          <script type="text/javascript">
                       
                        window.open('home1.php','_self');
                      </script>
                      <?php
                      }
                  } 
                  else{
                    if($email=="admin@gmail.com"  &&  $pas=="admin"){
                        
                          ?>
                          <script type="text/javascript">
                       
                        window.open('admintest.php','_self');
                      </script>
                      <?php
                    }
                      ?>
                      <script type="text/javascript">
                        alert("please enter valid email or password...");
                        window.open('home1.php','_self');
                      </script>
                      <?php

                        }

       }

     mysqli_close($conn);
    }
          ?>