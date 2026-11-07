<?php
setSection('template');

$pageTitle = t("page_title");
$pageDescription = t("page_description");

ob_start(); ?> <!-- <head> -->

    <!-- Contenu suplémentaire dans la balise <head> -->

<?php $headExtra = ob_get_clean();

ob_start(); ?> <!-- <body> -->

    <!-- Contenu suplémentaire dans la balise <body> -->

<?php $content = ob_get_clean();

ob_start(); ?> <!-- <header><navlinks> -->

    <!-- Contenu suplémentaire dans la balise <header><navlinks> -->

<?php $headerExtraLinks = ob_get_clean();

include __DIR__ . '/../templates/template.php';
?>