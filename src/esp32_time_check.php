<?php

$servername = "localhost";
$dBUsername = "id18842182_electronoobs";
$dBPassword = "4(M(&g6!RjzK2c6{";
$dBName = "id18842182_esp32";
$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);
$sql = "SELECT * FROM Time ORDER BY date_time ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo $row["date_time"];
} else {
    echo "0 results";
}

$conn->close();
?>
