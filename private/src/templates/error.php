<?php
$errorCode = $errorCode ?? (http_response_code() ?: 500);
setSection('errors');

$pageTitle = "{$errorCode} - " . t("{$errorCode}_title");

ob_start(); ?> <!-- <head> -->

    <meta name="robots" content="noindex">
    <link rel="stylesheet" href="/assets/css/error.css">

<?php $headExtra = ob_get_clean();

ob_start(); ?> <!-- <body> -->
    <main>
        <p class="error-code" data-text="<?= $errorCode ?>"><?= $errorCode ?></p>
        <h1 class="error-title"><?= t("{$errorCode}_title") ?></h1>
        <p class="error-text"><?= t("{$errorCode}_text") ?></p>
        <a class="btn" href="/<?= LANG ?>/accueil"><?= t('back_home') ?></a>
    </main>

<?php $content = ob_get_clean();

include __DIR__ . '/template.php';
?>