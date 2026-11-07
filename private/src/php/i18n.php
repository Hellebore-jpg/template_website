<?php
# Gère les traductions du site
$GLOBALS['t_section'] = '';
# Permet d'établir une section par défaut dans une page pour ne pas la réécrire partout
function setSection(string $section = ''): void {
    $GLOBALS['t_section'] = $section;
}
const SUPPORTED_LANGS = ['fr', 'en']; # Langues supportés
const DEFAULT_LANG = 'fr'; # Langue par défaut

# Renvoie la langue enregistrée, la langue préférée du navigateur ou la langue par défaut
function preferredLang(): string {
    if (in_array($_COOKIE['lang'] ?? '', SUPPORTED_LANGS, true)) {
        return $_COOKIE['lang'];
    }
    $browser = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? '', 0, 2);
    return in_array($browser, SUPPORTED_LANGS, true) ? $browser : DEFAULT_LANG;
}

# Charge le fichier de traduction approprié
function loadLang(string $lang): void {
    define('LANG', $lang);
    $file = PRIVATE_DIR . "/lang/$lang.json";
    $GLOBALS['translations'] = json_decode(file_get_contents($file), true) ?? [];

    if (($_COOKIE['lang'] ?? '') !== $lang) {
        setcookie('lang', $lang, [
            'expires'  => time() + 60 * 60 * 24 * 365,
            'path'     => '/',
            'samesite' => 'Lax',
        ]);
    }
}

# Recherche la traduction requise en fonction de la clé
function lookup(array $data, string $path): ?string {
    foreach (explode('.', $path) as $segment) {
        if (!is_array($data) || !array_key_exists($segment, $data)) {
            return null;
        }
        $data = $data[$segment];
    }
    return is_string($data) ? $data : null;
}

# Renvoie la traduction de clé demandée en fonction de la section précisée
# La section précisée ecrase celle par défaut
function t(string $key, ?string $section = null): string {
    $section ??= $GLOBALS['t_section'];
    $tr = $GLOBALS['translations'];

    $value = ($section !== '' ? lookup($tr, "$section.$key") : null)
          ?? lookup($tr, $key)
          ?? $key;

    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}