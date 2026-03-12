<?php
require_once __DIR__.'/includes/db.php';
require_once __DIR__.'/includes/auth.php';

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = trim($_POST['email'] ?? '');
  $password = $_POST['password'] ?? '';
  $stmt = $pdo->prepare('SELECT id, password_hash, name FROM users WHERE email=?');
  $stmt->execute([$email]);
  $user = $stmt->fetch();
  if ($user && password_verify($password, $user['password_hash'])) {
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['name'] = $user['name'];
    header('Location: dashboard.php'); exit;
  } else {
    $error = 'Credenciales inválidas';
  }
}
?>
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
assets/style.css
<title>Iniciar sesión</title>
</head>
<body>
<div class="topbar"><div class="brand">Drive TFG</div></div>
<div class="form card">
  <h2>Iniciar sesión</h2>
  <?php if ($error): ?><div class="alert"><?=htmlspecialchars($error)?></div><?php endif; ?>
  <form method="post" autocomplete="off">
    <label>Email</label>
    <input type="email" name="email" required>
    <label>Contraseña</label>
    <input type="password" name="password" required>
    <button class="btn" type="submit">Entrar</button>
  </form>
  <p class="meta">Usuario de prueba: crea uno en register.php (opcional)</p>
</div>
</body></html>