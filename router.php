<?php
// Router for PHP built-in dev server — mimics .htaccess rewrite rules
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// If /page.php requested, redirect to /page (301)
if (preg_match('/\.php$/', $uri) && $uri !== '/router.php') {
    $clean = preg_replace('/\.php$/', '', $uri);
    header("Location: $clean", true, 301);
    exit;
}

// Serve static files directly (css, js, images, etc.)
if ($uri !== '/' && file_exists(__DIR__ . $uri) && !is_dir(__DIR__ . $uri)) {
    return false;
}

// If /page matches /page.php, serve it
if ($uri !== '' && file_exists(__DIR__ . $uri . '.php')) {
    require __DIR__ . $uri . '.php';
    return;
}

// Root
if ($uri === '' || $uri === '/') {
    require __DIR__ . '/index.php';
    return;
}

// 404
http_response_code(404);
if (file_exists(__DIR__ . '/404.php')) {
    require __DIR__ . '/404.php';
} else {
    echo '404 Not Found';
}
