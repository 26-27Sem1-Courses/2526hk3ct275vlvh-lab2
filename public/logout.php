<?php

define('TITLE', 'Logout');
include_once __DIR__ . '/../partials/header.php';

if (isset($_SESSION['user'])) {
    unset($_SESSION['user']);
}

echo '<p>Bạn đã đăng xuất.</p>';

include_once __DIR__ . '/../partials/footer.php';
