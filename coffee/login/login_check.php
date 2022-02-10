<?php
include("../connect/conn.php");

$username = $_POST['username'];
$password = $_POST['password'];
$status = "";

$check = "SELECT * FROM `user` WHERE username = '$username' AND password = '$password'";

$result = mysqli_query($conn, $check);
$num = mysqli_num_rows($result);

$row = mysqli_fetch_array($result);

if ($num > 0) {
    session_start();
    $_SESSION['username'] = $row['username'];
    $_SESSION['lname'] = $row['l_name'];
    $_SESSION['fname'] = $row['f_name'];
    $status = "logedin";
} else {
    $status = "logedinfailed";
}
echo json_encode(array("status" => $status));
