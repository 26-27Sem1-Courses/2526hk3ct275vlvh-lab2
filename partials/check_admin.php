<?php

if (!is_administrator()) {
	echo '<h2>Truy cập bị từ chối!</h2>';

	$error_message = 'Bạn không có quyền truy xuất trang này';
	include 'show_error.php';

	include 'footer.php';
	exit();
}
