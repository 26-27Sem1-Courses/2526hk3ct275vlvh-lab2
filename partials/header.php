<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function is_administrator($user = 'me')
{
    return (isset($_SESSION['user']) && ($_SESSION['user'] === $user));
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" media="all" href="css/style.css">
    <title><?php
            if (defined('TITLE')) {
                echo TITLE;
            } else {
                echo 'Trang các Trích dẫn';
            }
            ?></title>
</head>

<body>
    <div id="container">
        <h1>Trang các Trích dẫn</h1>
        <br>
        <!-- BEGIN CHANGEABLE CONTENT. -->