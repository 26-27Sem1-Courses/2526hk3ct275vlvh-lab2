<?php
/* Đoạn mã xử lý PHP. */

define('TITLE', 'Thêm một Trích dẫn');

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

<h2>Thêm một Trích dẫn</h2>

<?php if (!empty($error_message)): ?>
    <?php include __DIR__ . '/../partials/show_error.php'; ?>
<?php endif; ?>


<?php if ($has_access): ?>
    <p>Trang đang được xây dựng...</p>

    <form action="add_quote.php" method="post">
        <p>
            <label>Trích dẫn
                <textarea name="quote" rows="5" cols="30"></textarea>
            </label>
        </p>
        <p>
            <label>Nguồn
                <input type="text" name="source" value="">
            </label>
        </p>
        <p>
            <label>Đây là trích dẫn yêu thích?
                <input type="checkbox" name="favorite" value="yes">
            </label>
        </p>
        <p><input type="submit" name="submit" value="Thêm Trích dẫn này!"></p>
    </form>
<?php endif; ?>

<?php render_page_footer(); ?>