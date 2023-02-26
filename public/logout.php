<?php

define('TITLE', 'Logout');
include '../partials/header.php';

if (isset($_SESSION['user'])) {
	unset($_SESSION['user']);
}

echo '<p>Bạn đã đăng xuất.</p>';

include '../partials/footer.php';
?>