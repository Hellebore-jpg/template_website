<?php
# Inclue le template d'erreur avec le bon code
# Affiche une page personalisée sur les erreurs supportées, utilise l'erreur 500 si elle ne l'est pas.
function renderError(int $code): void {
    # Check si l'erreur est prise en charge
    if (!in_array($code, [400, 401, 403, 404, 405, 429, 500, 502, 503, 504], true)) {
        $code = 500;
    }
    http_response_code($code);
    
    # Définit la langue de la page si aucune langue n'a été précisée
    if (!defined('LANG')) loadLang(preferredLang());

    $errorCode = $code;
    include __DIR__ . '/../templates/error.php';
    exit;
}

# Redirige les autres erreurs sur le code 500
set_exception_handler(function (Throwable $e) {
    error_log($e);
    renderError(500);
});