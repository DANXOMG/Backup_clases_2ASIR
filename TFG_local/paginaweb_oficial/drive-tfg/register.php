<?php
require_once __DIR__.'/includes/db.php';
$error = ''; $ok='';
if ($_SERVER['REQUEST_METHOD']==='POST') {
  $name = trim($_POST['name']??'');
  $email = trim($_POST['email']??'');
  $pass = $_POST['password']??'';
  if (!$name || !$email || !$pass) { $error='Rellena todos los campos'; }
  else {
    $hash = password_hash($pass, PASSWORD_DEFAULT);
    try{
      $stmt = $pdo->prepare('INSERT INTO users (email,password_hash,name) VALUES (?,?,?)');
      $stmt->execute([$email,$hash,$name]);
      $ok='Usuario creado. Ya puedes iniciar sesión.';
    } catch(Exception $e){ $error='Email ya registrado.'; }
  }
}
?>
<!doctype html><html lang="es"><head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
assets/style.css<title>Registro</title>
</head><body>
<div class="topbar"><div class="brand">Drive TFG</div></div>
<div class="form card">
  <h2>Registro</h2>
  <?php if($error):?><div class="alert"><?=htmlspecialchars($error)?></div><?php endif;?>
  <?php if($ok):?><div class="alert" style="background:#e6f4ea;color:#137333;border-color:#ceead6;"><?=htmlspecialchars($ok)?></div><?php endif;?>
  <form method="post">
    <label>Nombre</label><input name="name" required>
    <label>Email</label><input type="email" name="email" required>
    <label>Contraseña</label><input type="password" name="password" required>
    <button class="btn" type="submit">Crear cuenta</button>
  </form>
</div>
</body></html>