<?php

define('TITLE', 'Thêm một Trích dẫn');
include_once __DIR__ . '/../partials/header.php';

echo '<h2>Thêm một Trích dẫn</h2>';

require_once __DIR__ . '/../partials/check_admin.php';

echo '<p>Trang đang được xây dựng...</p>';

?>

<form action="add_quote.php" method="post">
    <p><label>Trích dẫn <textarea name="quote" rows="5" cols="30"></textarea></label></p>
    <p><label>Nguồn <input type="text" name="source"></label></p>
    <p><label>Đây là trích dẫn yêu thích? <input type="checkbox" name="favorite" value="yes"></label></p>
    <p><input type="submit" name="submit" value="Thêm Trích dẫn này!"></p>
</form>

<?php include_once __DIR__ . '/../partials/footer.php'; ?>