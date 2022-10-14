<?php


function fetchRooms() {
try {
    require 'db.php';
    $sql = "SELECT * FROM rooms";
    $result = mysqli_query($db, $sql);
    // return $result;

    $roomsArray = [];
    if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
   $roomsArray[] = $row['room_type'];
  }
echo "<pre>";
var_dump( json_encode($roomsArray));
echo "</pre>";
return $roomsArray;

} else {
  echo "0 results";
}

} catch (\Throwable $th) {
    var_dump($th);
}
};

 $rooms = fetchRooms();


?>