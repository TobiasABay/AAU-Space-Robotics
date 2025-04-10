<?php
require_once __DIR__ . '/../Navbar/Navbar.php';

function renderLayout($content, $title = 'AAU Space Robotics') {
    return '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>' . $title . '</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link rel="stylesheet" href="/app/components/Navbar/Navbar.css">
        <link rel="stylesheet" href="/app/components/Layout/Layout.css">
    </head>
    <body>
        ' . renderNavbar() . '
        <main class="main-content">
            ' . $content . '
        </main>
    </body>
    </html>';
}
?> 