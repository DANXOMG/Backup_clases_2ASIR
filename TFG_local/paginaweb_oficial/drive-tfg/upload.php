<?php
require_once __DIR__.'/includes/auth.php'; require_login();
require_once __DIR__.'/includes/db.php';
require_once __DIR__.'/includes/functions.php';

$userId = current_user_id();
$folderId = isset($_GET['folder']) ? (int)$_GET['folder'] : null;

// Validar carpeta destino (si existe)
if ($folderId) {
  $stmt=$pdo->prepare('SELECT id FROM folders WHERE id=? AND user_id=?');
  $stmt->execute([$folderId,$userId]);
  if (!$stmt->fetch()) $folderId=null;
}

if (!isset($_FILES['file']) || $_FILES['file']['error'] !== UPLOAD_ERR_OK) {
  header('Location: dashboard.php'.($folderId?'?folder='.$folderId:'')); exit;
}

$original = sanitize_filename($_FILES['file']['name']);
$tmp = $_FILES['file']['tmp_name'];
$mime = mime_content_type($tmp);
$size = (int)$_FILES['file']['size'];

$dir = ensure_user_upload_dir($userId);
$stored = bin2hex(random_bytes(16)).'__'.$original;
$dest = $dir . DIRECTORY_SEPARATOR . $stored;

if (move_uploaded_file($tmp, $dest)) {
  $stmt = $pdo->prepare('INSERT INTO files (user_id, folder_id, original_name, stored_name, mime_type, size) VALUES (?,?,?,?,?,?)');
  $stmt->execute([$userId, $folderId, $original, $stored, $mime, $size]);
}
header('Location: dashboard.php'.($folderId?'?folder='.$folderId:''));