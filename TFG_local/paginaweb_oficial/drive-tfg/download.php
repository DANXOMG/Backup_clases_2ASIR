<?php
require_once __DIR__.'/includes/auth.php'; require_login();
require_once __DIR__.'/includes/db.php';
require_once __DIR__.'/includes/functions.php';

$userId = current_user_id();
$id = (int)($_GET['id'] ?? 0);

$stmt=$pdo->prepare('SELECT * FROM files WHERE id=? AND user_id=?');
$stmt->execute([$id,$userId]);
$file=$stmt->fetch();
if (!$file) { http_response_code(404); echo 'No encontrado'; exit; }

$path = ensure_user_upload_dir($userId) . DIRECTORY_SEPARATOR . $file['stored_name'];
if (!is_file($path)) { http_response_code(404); echo 'No encontrado'; exit; }

header('Content-Description: File Transfer');
header('Content-Type: '.$file['mime_type']);
header('Content-Disposition: attachment; filename="'.$file['original_name'].'"');
header('Content-Length: '.filesize($path));
readfile($path);