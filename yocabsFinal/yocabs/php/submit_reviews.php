 <?php
$d=strtotime("now");
$dat=date("y-m-d h:i:s", $d) ;
 $email="guest@yocab.com";
 session_start();
if (isset($_SESSION['username'])) {
     $email=$_SESSION['username'];

  }
  if(isset($_POST['submit'])){


  		$comments=$_POST['comments'];
  		$rate=$_POST['rating'];
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
		$sql = "insert into reviews(rate,comments,curr_time,email)
				    values('$rate','$comments','$dat','$email')";


		
		if (mysqli_query($conn, $sql)) {
		     ?>
		     	<script type="text/javascript">
		     		alert("your review submited successfully!");
		     		window.open("../home1.php","_self");


		     	</script>



		     <?php
		} else {
		    echo "Error insertin data: " . mysqli_error($conn);
		}

mysqli_close($conn);







}



