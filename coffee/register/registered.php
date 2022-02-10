<?php
include('../connect/conn.php');

$username = $_POST['username'];
$password = $_POST['password'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$birthday = $_POST['birthday'];
$email = $_POST['email'];
$tel = $_POST['tel'];

$sql = "INSERT INTO `user` (`username`, `password`, `f_name`, `l_name`, `email`, `tel`, `birthday`) 
VALUES ( '$username', '$password', '$fname', '$lname', '$email', '$tel', '$birthday')";

$query =  mysqli_query($conn, $sql); //added

$status = "";

if ($query) {
    $status = "sent";
} else {
    $status = "unsend";
}



echo json_encode(array("status" => $status));

