<?php
require_once __DIR__.'/includes/auth.php'; require_login();
require_once __DIR__.'/includes/db.php';

$userId = current_user_id();
$name = trim($_POST['name'] ?? '');
$parent = isset($_POST['parent_id']) && $_POST['parent_id']!=='' ? (int)$_POST['parent_id'] : null;

if ($name) {
  // Validar parent (si aplica)
  if ($parent) {
    $stmt=$pdo->prepare('SELECT id FROM folders WHERE id=? AND user_id=?');
    $stmt->execute([$parent,$userId]);
    if (!$stmt->fetch()) $parent=null;
  }
  $stmt=$pdo->prepare('INSERT INTO folders (user_id, name, parent_id) VALUES (?,?,?)');
  $stmt->execute([$userId, $name, $parent]);
}

header('Location: dashboard.php'.($parent?'?folder='.$parent:''));