<?php
    // SteemTroll
    // Don't try to control or the troll will con you...
    error_reporting(E_ALL);

    $url = (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on')) ? 'https://' : 'http://';
    $url .= $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);

    define('BASE_PATH',realpath('.')); // For use in PHP if needed
    define('BASE_URL', $url); // For use in client output (css and js includes for example).

    // echo BASE_URL;
    // echo BASE_PATH;
    require_once(BASE_PATH.'/config/config.php');
    $page->renderPage();