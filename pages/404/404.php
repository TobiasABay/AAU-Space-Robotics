<?php
require_once __DIR__ . '/../../app/components/Layout/Layout.php';
require_once __DIR__ . '/../../app/components/PageTitle/PageTitle.php';

function render404Page() {
    $content = '
    ' . renderPageTitle('Page Not Found', 'The page you are looking for does not exist') . '
    <div class="error-content">
        <!-- 404 content here -->
    </div>
    <link rel="stylesheet" href="/app/components/PageTitle/PageTitle.css">
    <link rel="stylesheet" href="/pages/404/404.css">
    ';
    
    return renderLayout($content, 'AAU Space Robotics - 404 Not Found');
}
?> 