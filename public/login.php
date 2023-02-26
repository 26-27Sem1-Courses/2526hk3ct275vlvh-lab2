<?php

define('TITLE', 'Login');
include '../partials/header.php';

$loggedin = false;
$error_message = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	if (!empty($_POST['email']) && !empty($_POST['password'])) {

		if ((strtolower($_POST['email']) == 'me@example.com') && ($_POST['password'] == 'testpass')) {
			$_SESSION['user'] = 'me';
			$loggedin = true;
		} else {
			$error_message = 'Địa chỉ email và mật khẩu không khớp!';
		}
	} else {
		$error_message = 'Hãy đảm bảo rằng bạn cung cấp đầy đủ địa chỉ email và mật khẩu!';
	}
}

if ($error_message) {
	include '../partials/show_error.php';
}

if ($loggedin) {
	echo '<p>Bạn đã đăng nhập!</p>';
} else {
	echo '<h2>Login Form</h2>
	<form action="login.php" method="post">
	<p><label>Địa chỉ Email <input type="email" name="email"></label></p>
	<p><label>Mật khẩu <input type="password" name="password"></label></p>
	<p><input type="submit" name="submit" value="Đăng nhập!"></p>
	</form>';
}

include '../partials/footer.php';
