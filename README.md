# Website Template v1.0

Modèle d'arborescence et de fichiers de base pour le développement d'un site web.

<img src="md_files\latest_homepage_screenshot.png" alt="Dernière capture d'écran du site web" width="800">

## Sommaire
- [Fonctionnalités](#fonctionnalités)
- [Technologies](#technologies)
- [Setup](#setup)
    - [Prerequis](#prerequis)
    - [Optionnel](#optionnel)
    - [Compatibilité](#compatibilité)
    - [Installation](#installation)
    - [Administration](#administration)
- [Arborescence](#arborescence)
- [Autheur](#autheur)
- [Crédits](#crédits)
    - [APIs et Dépendences](#apis-et-dépendences)
    - [Ressources](#ressources)
- [Licence](#licence)

## Fonctionnalités

- Dossier publique et privé
- Modèle de routeur
- Fichiers .htaccess et robots.txt
- Licence MIT, libre d'utilisation, crédits requis.

## Technologies

- HTML5 (dans les pages PHP)
- CSS3
- JavaScript
- PHP
- XAMPP (Apache + MySQL)

## Setup

### Prerequis

- N'importe quel navigateur moderne : Chrome, Brave, Firefox... (Le Javascript doit être activé)
- [XAMPP](https://www.apachefriends.org/download.html) installé

### Optionnel

- [DBeaver CE](https://dbeaver.io/download/) installé

### Compatibilité

Testé avec :

| Logiciel | Version / détails                                          |
|----------|------------------------------------------------------------|
| OS       | Windows 11 26h2                                            |
| Browser  | Brave 1.98.62                                              |
| XAMPP    | 8.5.12 (Apache 2.4.65, PHP 8.5.12, MySQL/MariaDB 10.11.16) |

### Installation

1. Cloner le dépot dans le dossier htdocs de XAMPP, pour que le projet soit stocké dans `htdocs/template_website/`
    ```bash
    cd chemin/vers/xampp/htdocs # C:/xampp/htdocs par défaut
    git clone https://github.com/Hellebore-jpg/template_website.git template_website
    ```
2. Configurer Apache pour servir le dossier `public/` du projet, sans toucher au reste de XAMPP :
    1. Ouvrir `chemin/vers/xampp/apache/conf/extra/httpd-vhosts.conf` (`C:/xampp/apache/conf/extra/httpd-vhosts.conf` par défaut).
    2. Ajouter ce bloc à la fin du fichier (adapter le chemin si XAMPP n'est pas dans `C:/xampp`) :
        ```apache
        Listen 8080
        <VirtualHost *:8080>
            DocumentRoot "C:/xampp/htdocs/template_website/public"
            <Directory "C:/xampp/htdocs/template_website/public">
                Options Indexes FollowSymLinks
                AllowOverride All
                Require all granted
            </Directory>
        </VirtualHost>
       ```
    3. Vérifier que la ligne `Include conf/extra/httpd-vhosts.conf` n'est pas commentée (pas de `#` devant) dans `apache/conf/httpd.conf`.
3. Ouvrir le panel de contrôl XAMPP et démarrer Apache et MySQL.
4. Renommer le fichier `private/ex.congig.local.php` en `private/config.local.php`.
5. Installer la base de donnée sur [phpMyAdmin](http://localhost/phpmyadmin/) :
    - **MODIFIER** `private/database.sql`.
    - Aller dans Importer et choisir `private/database.sql` (Crée la base de données et ses tables).
6. Ouvrir l'URL : http://localhost:8080/

### Administration

Disponible à `/chemin/vers/admin` uniquement pour l'administrateur.

| Nom d'utilisateur | Mot de passe |
|-------------------|--------------|
| `admin`           | `123456789`  |

> Ces identifiants ne servent qu'à faire des test, veuillez les changer dès que possible.

## Arborescence

```
template_website/
├── private/    → PHP, identifiants, ressources uploadées
│   ├── lang/   → Fichiers de traduction
│   ├── src/    → Pages et code
│   │   ├── pages/  → Pages web
│   │   ├── php/    → Scripts PHP
│   │   └── templates/  → Modèles de pages
│   ├── uploads/    → Ressources uploadées
│   ├── config.local.php    → Indentifiants
│   └── database.sql    → Script de création de la base de données
└── public/ → Racine web & Ressources publiques
    ├── assets/ → Stockage des ressources
    │   ├── css/    → Feuilles de style
    │   ├── font/   → Polices d'écriture
    │   ├── img/    → Images
    │   │   └── placeholders/   → Images par défaut
    │   └── js/     → Scripts JavaScript
    └── index.php   → Routeur
```

## Autheur
<!-- Dévelopement seul -->
Fait par [Hellebore-jpg](https://github.com/Hellebore-jpg) pour le projet **Modèle d'arborescence et de fichiers de base pour le développement d'un site web**, 2026.

<!-- Dévelopement en équipe
Fait par **{Nombre} collaborateurs** pour le projet **{Nom du projet}** à {Lieu}, {Date/Année} :

- [Vous](https://github.com/Vous) Chef de projet
- [Collaborateur-2](https://github.com/Collaborateur-2) {Rôle}
- [Collaborateur-3](https://github.com/Collaborateur-3) {Rôle}
- [Collaborateur-etc](https://github.com/Collaborateur-etc) {Rôle}
-->

## Crédits

Fabriqué avec [Website Template](https://github.com/Hellebore-jpg/template_website) par [Hellebore-jpg](https://github.com/Hellebore-jpg)

### APIs et Dépendences
- [API](#lien-vers-le-site)
- [Module](#lien-vers-le-site)
- [Script](#lien-vers-le-site)

### Ressources
- [Image-1](#lien-vers-le-site)
- [Image-2](#lien-vers-le-site)
- [Image-3](#lien-vers-le-site)
- 
## Licence

Ce projet est sous licence MIT.
Voir le fichier [LICENSE](LICENSE) pour le texte intégral.
