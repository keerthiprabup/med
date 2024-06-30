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
    $delete_sql = "DELETE FROM Time WHERE id = " . $row["id"];
    if ($conn->query($delete_sql) === TRUE) {
        echo " Record deleted successfully";
    } else {
        echo " Error deleting record: " . $conn->error;
    }
} else {
    echo "0 results";
}

$conn->close();
?>
