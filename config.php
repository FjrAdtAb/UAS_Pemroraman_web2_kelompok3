<?php 
 
$server = "localhost";
$user = "root";
$pass = "";
$database = "dbbansos";
 
$conn = mysqli_connect($host, $user, $password, $database);
 
if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
 
?>