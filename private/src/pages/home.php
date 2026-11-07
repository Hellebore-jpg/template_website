<?php
setSection('home');

ob_start(); ?> <!-- <head> -->

    <link rel="stylesheet" href="/assets/css/home.css">

<?php $headExtra = ob_get_clean();

ob_start(); ?> <!-- <body> -->

    <h1>Hellor world from Hellebore-jpg</h1>

<?php $content = ob_get_clean();

ob_start(); ?> <!-- <header><navlinks> -->

    <a href="https://github.com/Hellebore-jpg/template_website"><?= t('git', 'header') ?></a>

<?php $headerExtraLinks = ob_get_clean();

include __DIR__ . '/../templates/template.php';
?>