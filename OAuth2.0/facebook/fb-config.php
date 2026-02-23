<?php
require_once __DIR__ . '/../../vendor/autoload.php';

use Dotenv\Dotenv;

// Load .env from the root directory (sudoschool/)
$dotenv = Dotenv::createImmutable(dirname(__DIR__, 2));
$dotenv->load();

// Initialize the Facebook SDK
$fb = new \Facebook\Facebook([
  'app_id' => $_ENV['FB_APP_ID'],
  'app_secret' => $_ENV['FB_APP_SECRET'],
  'default_graph_version' => 'v17.0',
]);

$helper = $fb->getRedirectLoginHelper();
?>
