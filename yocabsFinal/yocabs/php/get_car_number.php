  <?php


// sql to create table
$sql = "SELECT * FROM car where type='$type' and bookingid is null limit 1";
$result = mysqli_query($conn, $sql);
$flag=0;
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    if($row = mysqli_fetch_assoc($result)) {
        $car_number=$row["car_number"];
        $flag=1;
        // echo $address;
      }
    }
      ?>
