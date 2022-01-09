<?php
// aktifkan fungsi session
session_start();
// definisi nama dan sandi
$username = 'ilham';
$password = '67890';
// logika jika user mengeklik tombol login
if (isset($_POST['username'])) {
// cek komponen input
if (($_POST['username'] == $username) && ($_POST['password'] == $password)) {
$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];

//set definisi baru
$user = $_SESSION['username'];
$pass = $_SESSION['password'];

// user telah login .
echo " <a href='home.html'></a>";
}
// logika kesalahan
else {
echo " Kesalahan saat login <br /> ";
echo " <a href='login_nodatabase.php'> << Back </a>";
}
}
else {

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Membuat Login System Tanpa Database</title>
</head>

<body>
<fieldset>
<legend>Login User</legend>
<form action="login.html" method="post" name="login" id="login">
<p>Username :
<input name="username" type="text" id="username">
</p>
<p>Password :
<input name="password" type="text" id="password">
</p>
<p>
<input type="submit" name="Submit" value="Login">
</p>
</form>
</fieldset>
</body>
</html>
<?php
}
?>