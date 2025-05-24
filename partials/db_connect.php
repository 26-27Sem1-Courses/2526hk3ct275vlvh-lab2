<?php

try {
  $pdo = new PDO('pgsql:host=localhost;dbname=ct275_lab2', 'postgres', 'postgres');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  $error_message = 'Không thể kết nối đến CSDL';
  $reason = $e->getMessage();
  include 'show_error.php';

  include_once 'footer.php';
  exit();
}
