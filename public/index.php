<?php
/* Đoạn mã xử lý PHP. */

require_once __DIR__ . '/../partials/header.php';
require_once __DIR__ . '/../partials/footer.php';

$query = 'SELECT id, quote, source, favorite FROM quotes ORDER BY date_entered DESC LIMIT 1';

if (isset($_GET['random'])) {
    $query = 'SELECT id, quote, source, favorite FROM quotes ORDER BY RANDOM() LIMIT 1';
} elseif (isset($_GET['favorite'])) {
    $query = 'SELECT id, quote, source, favorite FROM quotes WHERE favorite = true ORDER BY RANDOM() LIMIT 1';
}

$latest_quote = null;
$error_message = null;
$reason = null;
$pdo = null;

try {
    $pdo = get_database_connection();
} catch (PDOException $e) {
    $error_message = 'Không thể kết nối đến cơ sở dữ liệu';
    $reason = $e->getMessage();
}

if ($pdo instanceof PDO) {
    try {
        $statement = $pdo->prepare($query);
        $statement->execute();
        $latest_quote = $statement->fetch();
    } catch (PDOException $e) {
        $error_message = 'Không thể lấy dữ liệu';
        $reason = $e->getMessage();
    }
}

?>

<!--
    Đoạn mã HTML trình bày nội dung trang web.
-->
<?php render_page_header(); ?>

<?php if (!empty($latest_quote)): ?>
    <div>
        <blockquote><?= html_escape($latest_quote['quote']) ?></blockquote>
        <p>- <?= html_escape($latest_quote['source']) ?>
            <?php if (!empty($latest_quote['favorite'])): ?>
                <strong> | Yêu thích!</strong>
            <?php endif; ?>
        </p>

        <?php if (is_administrator()): ?>
            <p>
                <strong>Quản trị Trích dẫn:</strong>
                <a href="edit_quote.php?id=<?= urlencode($latest_quote['id']) ?>">Sửa</a> <->
                    <a href="delete_quote.php?id=<?= urlencode($latest_quote['id']) ?>">Xóa</a>
            </p>
        <?php endif; ?>
    </div>
<?php elseif (!empty($error_message)): ?>
    <?php include __DIR__ . '/../partials/show_error.php'; ?>
<?php else: ?>
    <p>Không có trích dẫn nào để hiển thị.</p>
<?php endif; ?>

<p>
    <a href="index.php">Mới nhất</a> <->
        <a href="index.php?random=true">Ngẫu nhiên</a> <->
            <a href="index.php?favorite=true">Yêu thích</a>
</p>

<?php render_page_footer(); ?>