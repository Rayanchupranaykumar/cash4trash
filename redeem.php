<?php
session_start(); 
$conn = new mysqli('localhost', 'root', '', 'trash');
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
$_SESSION['points']=$_SESSION['points']-$_POST['rpoint'];
$sql="update visitor set points=".$_SESSION['points']." where email='".$_SESSION['user']."'";
$conn->query($sql);
?>
