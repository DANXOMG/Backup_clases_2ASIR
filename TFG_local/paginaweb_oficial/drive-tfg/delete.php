<?php
require_once __DIR__.'/includes/auth.php'; require_login();
require_once __DIR__.'/includes/db.php';
require_once __DIR__.'/includes/functions.php';

$userId = current_user_id();
$id = (int)($_GET['id'] ?? 0);

$stmt=$pdo->prepare('SELECT * FROM files WHERE id=? AND user_id=?');
$stmt->execute([$id,$userId]);
$file=$stmt->fetch();
if ($file) {
  $path = ensure_user_upload_dir($userId) . DIRECTORY_SEPARATOR . $file['stored_name'];
  if (is_file($path)) @unlink($path);
  $pdo->prepare('DELETE FROM files WHERE id=?')->execute([$id]);
}
header('Location: dashboard.php');