<html>
<head>
 <title>Error Handling</title>
</head>
<?php
/******************
Halaman ini merupakan halaman contoh penciptaan session. Perintah session_start() harus
ditaruh di perintah pertama tanpa spasi di depannya. Perintah session_start() harus ada pada
setiap halaman yang berhubungan dengan session
*******************/
//echo "Hallo...";
session_start();
if (isset ($_POST['Login'])) {
$user = $_POST['user'];
$pass = $_POST['pass'];//periksa login
if ($user == "rahadian" && $pass = "123") {
//menciptakan session
$_SESSION['login'] = $user;
//menuju ke halaman pemeriksaan session
echo "<h1>Anda berhasil LOGIN</h1>";
echo "<h2>Klik <a href='index.php'>di sini
(Halaman Awal)</a>
untuk menuju ke halaman awal";
} else{
echo "user tidak bisa login";
echo "<h2>Klik <a href='uts.php'>di sini
(Halaman Login)</a>
untuk menuju ke halaman login";

}
} else {
?>
<html>
<head>
<title>APLIKASI BANSOS</title>
</head>
<body>
<center>
<form action="" method="post">
<h2>APLIKASI BANSOS</h2>
Username : <input type="text" name="user"><br>
Password : <input type="password" name="pass"><br>
<input type="submit" name="Login" value="Log In">
</form>
</center>
</body>
</html>
<?php
}?>