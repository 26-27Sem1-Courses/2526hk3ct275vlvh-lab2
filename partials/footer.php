<!-- END CHANGEABLE CONTENT. -->
<?php

if ( (is_administrator() && (basename($_SERVER['PHP_SELF']) != 'logout.php'))
		|| ! (empty($loggedin)) ) {

	echo '<hr><p><a href="add_quote.php">Thêm Trích dẫn</a> <->
	<a href="view_quotes.php">Xem tất cả Trích dẫn</a> <->
	<a href="logout.php">Đăng xuất</a></p>';

} else {
	echo '<hr><p><a href="/">Trang chủ</a> <-> <a href="login.php">Đăng nhập</a></p>'; 
}

?>
	</div><!-- container -->
	<div id="footer">Content &copy; 2022</div>
</body>
</html>