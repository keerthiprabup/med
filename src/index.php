<?php

$servername = "localhost";
$dBUsername = "id18842182_electronoobs";
$dBPassword = "4(M(&g6!RjzK2c6{";
$dBName = "id18842182_esp32";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $datetime = $_POST['datetime'];

    $sql = "INSERT INTO Time (date_time) VALUES ('$datetime')";

    if (mysqli_query($conn, $sql)) {
        echo "Date and time saved successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Save Date and Time</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        form {
            max-width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="datetime-local"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <form action="/" method="post">
        <label for="datetime">Select Date and Time:</label>
        <input type="datetime-local" id="datetime" name="datetime" required>
        <input type="submit" value="Save">
    </form>
</body>
</html>
