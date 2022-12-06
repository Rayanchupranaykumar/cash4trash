<?php
session_start(); 
$conn = new mysqli('localhost', 'root', '', 'trash');
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
$sql="update visitor set points=".$_SESSION['points']." where email='".$_SESSION['user']."'";
$conn->query($sql);
session_unset();

session_destroy();

header("Location: ./login.php");
exit;
?>