<?php
/* Đoạn mã xử lý PHP. */

define('TITLE', 'Xóa một Trích dẫn');

require_once __DIR__ . '/../partials/header.php';
require_once __DIR__ . '/../partials/footer.php';

$has_access = ensure_admin_access();
$error_message = null;

if (!$has_access) {
    $error_message = 'Bạn không có quyền truy cập trang này';
}

?>

<!--
    Đoạn mã HTML trình bày nội dung trang web.
-->
<?php render_page_header(); ?>

<h2>Xóa một Trích dẫn</h2>

<?php if (!empty($error_message)): ?>
    <?php include __DIR__ . '/../partials/show_error.php'; ?>
<?php endif; ?>

<?php if ($has_access): ?>
    <p>Trang đang được xây dựng...</p>
<?php endif; ?>

<?php render_page_footer(); ?>