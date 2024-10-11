<?php
$connection = mysqli_connect('localhost', 'root', '', 'aiot-global.local');
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully!";
?>