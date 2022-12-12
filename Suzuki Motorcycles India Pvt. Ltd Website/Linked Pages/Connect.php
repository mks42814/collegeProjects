<?php
$conn = mysqli_connect('localhost','root','','booking info');
if(!$conn){
    die('Connection Failed : '.$conn->connect_error);
}
?>