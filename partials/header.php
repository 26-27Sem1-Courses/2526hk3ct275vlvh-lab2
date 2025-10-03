<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function is_administrator(string $user = "me"): bool
{
    return isset($_SESSION['user']) && $_SESSION['user'] === $user;
}

function ensure_admin_access(): bool
{
    if (is_administrator()) {
        return true;
    }

    http_response_code(403);

    return false;
}

function get_database_connection(): ?PDO
{
    static $pdo = null;

    if ($pdo instanceof PDO) {
        return $pdo;
    }

    // Tạo đối tượng PDO để kết nối đến database

    return $pdo;
}

function html_escape(string $string): string
{
    return htmlspecialchars($string, ENT_QUOTES, "UTF-8");
}

function render_page_header(): void
{
    $title = defined('TITLE') ? TITLE : 'Trang các Trích dẫn';
?>
    <!doctype html>
    <html lang="vi">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" media="all" href="css/style.css">
        <title><?= html_escape($title) ?></title>
    </head>

    <body>
        <div id="container">
            <h1>Trang các Trích dẫn</h1>
            <br>
            <!-- BEGIN CHANGEABLE CONTENT. -->
        <?php
    }
