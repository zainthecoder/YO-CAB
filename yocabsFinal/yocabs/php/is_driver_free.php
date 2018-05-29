  <?php


// sql to create table
$sql = "SELECT * FROM driver where bookingid is null limit 1";
$result = mysqli_query($conn, $sql);
$driverid=-1;
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    if($row = mysqli_fetch_assoc($result)) {
        $driverid=$row["driverid"];
        // $flagD=1;
        // echo $address;
      }
    }
      ?>
