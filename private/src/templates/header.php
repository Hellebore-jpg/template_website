<!-- Entête importée automatiquement -->
<header class="site-header" id="top">
    <div class="brand"> <!-- Logo du site -->
        <a class="brand-logo" href="/<?= LANG ?>/accueil" aria-label="<?= t('nav_home', 'header') ?>">
            <img src="/assets/img/favicon.svg" alt="Logo">
        </a>
        <h1>> <?= t('website_title', '') ?></h1> <!-- Titre du site -->
    </div>
</header>

<nav class="main-nav" aria-label="Navbar">
    <div class="nav-links"> <!-- Liens d'accès rapides -->
        <a href="/<?= LANG ?>/accueil"><?= t('nav_home', 'header') ?></a>
        <a href="https://github.com/Hellebore-jpg"><?= t('about', 'header') ?></a>
        <?= $headerExtraLinks ?? '' ?>
    </div>
</nav>