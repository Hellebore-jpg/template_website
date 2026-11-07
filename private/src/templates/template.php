<!DOCTYPE html>
<html lang="<?= LANG ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?= $pageDescription ?? t('page_description') ?>"> <!-- Description de la page -->
    <title><?= $pageTitle ?? t('page_title') ?></title> <!-- Marque & titre de la page -->
    <link rel="stylesheet" href="/assets/css/style.css"> <!-- CSS de base du site, il inclue tout les éléments qui sont importés dans cette template -->
    <link rel="icon" href="/assets/img/favicon.svg" type="image/svg+xml">
    <?= $headExtra ?? '' ?> <!-- Ajouts aux metadonnées du site selon les pages -->
</head>

<body>
    <div class="crt-overlay" aria-hidden="true"></div>
    <site-header><?php include __DIR__ . '/../templates/header.php'; ?></site-header> <!-- Entête importée -->

    <?= $content ?? '' ?> <!-- HTML de la page -->

    <site-footer><?php include __DIR__ . '/../templates/footer.php'; ?></site-footer> <!-- Pied de page importé -->
</body>

</html>