<?php
require_once __DIR__ . '/includes/auth.php';
require_login();
require_once __DIR__ . '/includes/db.php';
require_once __DIR__ . '/includes/functions.php';

$userId = current_user_id();
$currentFolder = isset($_GET['folder']) ? (int) $_GET['folder'] : null;

// Carpeta actual (si aplica) y breadcrumb simple
$folder = null;
$breadcrumb = [];

if ($currentFolder) {
    $stmt = $pdo->prepare('SELECT * FROM folders WHERE id=? AND user_id=?');
    $stmt->execute([$currentFolder, $userId]);
    $folder = $stmt->fetch();

    if (!$folder) {
        header('Location: dashboard.php');
        exit;
    }

    // Breadcrumb: subir hasta parent_id null
    $f = $folder;

    while ($f) {
        $breadcrumb[] = $f;

        if ($f['parent_id']) {
            $q = $pdo->prepare('SELECT * FROM folders WHERE id=? AND user_id=?');
            $q->execute([$f['parent_id'], $userId]);
            $f = $q->fetch();
        } else {
            $f = null;
        }
    }

    $breadcrumb = array_reverse($breadcrumb);
}

// Listar subcarpetas y archivos
if ($currentFolder) {
    $stmt = $pdo->prepare('SELECT * FROM folders WHERE user_id=? AND parent_id=? ORDER BY name');
    $stmt->execute([$userId, $currentFolder]);
} else {
    $stmt = $pdo->prepare('SELECT * FROM folders WHERE user_id=? AND parent_id IS NULL ORDER BY name');
    $stmt->execute([$userId]);
}
$folders = $stmt->fetchAll();

if ($currentFolder) {
    $stmt = $pdo->prepare('SELECT * FROM files WHERE user_id=? AND folder_id=? ORDER BY created_at DESC');
    $stmt->execute([$userId, $currentFolder]);
} else {
    $stmt = $pdo->prepare('SELECT * FROM files WHERE user_id=? AND folder_id IS NULL ORDER BY created_at DESC');
    $stmt->execute([$userId]);
}
$files = $stmt->fetchAll();
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    assets/style.css
    <title>Mi unidad</title>
</head>
<body>

    <div class="topbar">
        <div class="brand">Drive TFG</div>

        <div class="actions">
            <!-- Subir archivo -->
            <form action="upload.php<?= $? " 
                  method="post" enctype="multipart/form-data" 
                  style="display: flex; gap: 8px;">
                <input type="file" name="file" required />
                <button class="btn" type="submit">Subir</button>
            </form>

            <!-- Crear carpeta -->
            folder_create.php
                <input type="hidden" name="parent_id" value="<?= $currentFolder ? (int)$currentFolder : '' ?>" />
                <input type="text" name="name" placeholder="Nueva carpeta" />
                <button class="btn outline" type="submit">Crear</button>
            </form>

            <!-- Cerrar sesión -->
            logout.phpSalir</a>
        </div>
    </div>

    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <a class="btn outline"</a>
        </div>

        <!-- Contenido principal -->
        <div class="content">

            <!-- Breadcrumb -->
            <?php if ($breadcrumb): ?>
                <div class="meta">
                    Ruta:
                    dashboard.phpMi unidad</a>
                    <?php foreach ($breadcrumb as $b): ?>
                        &raquo; 
                        dashboard.php?folder=<?= (int)$b[">
                            <?= htmlspecialchars($b['name']) ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <h2>Contenido</h2>

            <!-- Carpetas -->
            <h3>Carpetas</h3>
            <div class="grid">
                <?php if ($folders): ?>
                    <?php foreach ($folders as $f): ?>
                        <div class="tile">
                            <strong>
                                📁 
                                <a href="dashboard.php?folder=<?= (int)$f['id                           <?= htmlspecialchars($f['name']) ?>
                                </a>
                            </strong>
                            <div class="meta">Creada: <?= htmlspecialchars($f['created_at']) ?></div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="meta">Sin carpetas.</div>
                <?php endif; ?>
            </div>

            <!-- Archivos -->
            <h3>Archivos</h3>

            <div class="list">
                <div class="head">Nombre</div>
                <div class="head">Tamaño</div>
                <div class="head">Fecha</div>
                <div class="head">Acciones</div>

                <?php if ($files): ?>
                    <?php foreach ($files as $file): ?>
                        <div class="row">
                            <div><?= htmlspecialchars($file['original_name']) ?></div>
                            <div><?= format_bytes((int)$file['size']) ?></div>
                            <div><?= htmlspecialchars($file['created_at']) ?></div>
                            <div>
                                <a class="btn outline" href="download.php?id=<?= (int                          delete.php?id=<?= (int)$file[" 
                                   onclick="return confirm('¿Borrar archivo?')">
                                    Borrar
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="row">
                        <div class="meta">Sin archivos.</div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                <?php endif; ?>
            </div>

        </div>
    </div>

</body>
</html>