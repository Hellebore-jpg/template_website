<?php
define('PUBLIC_DIR', __DIR__);
define('PRIVATE_DIR', dirname(__DIR__) . '/private');
$ROOT = PRIVATE_DIR . '/src/';

require $ROOT . 'php/i18n.php';
require $ROOT . 'php/errors.php';

// Préparation de l'URL pour le rendre propre & gestion de la langue
$request = trim($_GET['url'] ?? '', '/');
$request = preg_replace('#[^a-zA-Z0-9\-/]#', '', $request);
$request = trim(preg_replace('#/+#', '/', $request), '/');
$parts = $request === '' ? [] : explode('/', $request);
if (!$parts || !in_array($parts[0], SUPPORTED_LANGS, true)) {
    header('Location: /' . preferredLang() . '/' . ($request ?: 'home'), true, 302);
    exit;
}
loadLang(array_shift($parts));
if (!$parts) $parts = ['home'];
define('PAGE_PATH', implode('/', $parts));

// Séparation de l'URL pour trouver le paramètre d'ID au format {page}/[id}
$id = null;
if (count($parts) > 1 && ctype_digit(end($parts))) {
    $id = (int) array_pop($parts);
    $_GET['id'] = $_REQUEST['id'] = $id;
}
$page = implode('/', $parts);

// Routeur d'URL propres vers les fichiers
switch ($page) {
    case 'home':
        include $ROOT . 'pages/home.php';
        break;
    default:
        // Page 404 si aucune page ne correspond à l'URL
        renderError(404);
}