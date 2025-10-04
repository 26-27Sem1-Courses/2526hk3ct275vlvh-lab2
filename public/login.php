<?php
/* Đoạn mã xử lý PHP. */

define('TITLE', 'Login');

require_once __DIR__ . '/../partials/header.php';
require_once __DIR__ . '/../partials/footer.php';

$loggedin = isset($_SESSION['user']);
$error_message = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = strtolower(trim($_POST['email'] ?? ''));
    $password = $_POST['password'] ?? '';

    if ($email !== '' && $password !== '') {
        if ($email === 'me@example.com' && $password === 'testpass') {
            $_SESSION['user'] = 'me';
            $loggedin = true;
        } else {
            $error_message = 'Địa chỉ email và mật khẩu không khớp!';
        }
    } else {
        $error_message = 'Hãy đảm bảo rằng bạn cung cấp đầy đủ địa chỉ email và mật khẩu!';
    }
}
?>

<!--
    Đoạn mã HTML trình bày nội dung trang web.
-->
<?php render_page_header(); ?>

<?php if (!empty($error_message)): ?>
    <?php include __DIR__ . '/../partials/show_error.php'; ?>
<?php endif; ?>

<?php if ($loggedin): ?>
    <p>Bạn đã đăng nhập!</p>
<?php else: ?>
    <h2>Form Đăng nhập</h2>
    <form action="login.php" method="post">
        <p>
            <label>Địa chỉ Email
                <input type="email" name="email" value="<?= html_escape($_POST['email'] ?? '') ?>">
            </label>
        </p>
        <p>
            <label>Mật khẩu
                <input type="password" name="password">
            </label>
        </p>
        <p><input type="submit" name="submit" value="Đăng nhập!"></p>
    </form>
<?php endif; ?>

<?php render_page_footer($loggedin); ?>