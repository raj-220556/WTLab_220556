<?php
// 1. Path to vendor (relative to this file)
require_once __DIR__ . '/../../vendor/autoload.php';

use Dotenv\Dotenv;

try {
    // 2. Point directly to /opt/lampp/htdocs/sudoschool/ where .env lives
    $dotenv = Dotenv::createImmutable(__DIR__ . "/../../");
    $dotenv->load();
} catch (Exception $e) {
    die("Dotenv Error: " . $e->getMessage());
}

// 3. Define constants
define('GITHUB_CLIENT_ID', $_ENV['GITHUB_CLIENT_ID'] ?? '');
define('GITHUB_CLIENT_SECRET', $_ENV['GITHUB_CLIENT_SECRET'] ?? '');
define('REDIRECT_URL', $_ENV['GITHUB_REDIRECT_URL'] ?? '');

define('AUTHORIZE_URL', 'https://github.com/login/oauth/authorize');
define('TOKEN_URL', 'https://github.com/login/oauth/access_token');
define('USER_URL', 'https://api.github.com/user');
?>