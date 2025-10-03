<?php

define('TITLE', 'Logout');

require_once __DIR__ . '/../partials/header.php';
require_once __DIR__ . '/../partials/footer.php';

$is_loggedin = isset($_SESSION['user']);

if ($is_loggedin) {
    unset($_SESSION['user']);
}

?>
<?php render_page_header(); ?>

<p>Bạn đã đăng xuất.</p>

<?php render_page_footer(); ?>