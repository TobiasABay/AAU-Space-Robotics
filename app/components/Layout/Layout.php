<?php
require_once __DIR__ . '/../Navbar/Navbar.php';
require_once __DIR__ . '/../Footer/Footer.php';

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
        <link rel="stylesheet" href="/app/components/Footer/Footer.css">
        <link rel="stylesheet" href="/app/styles/pages.css">
        <style>
            html, body {
                margin: 0;
                padding: 0;
                width: 100%;
                min-height: 100vh;
                background-color: #d9d9d9;
            }
            body {
                display: flex;
                flex-direction: column;
            }
            .main-content {
                flex: 1;
            }
        </style>
    </head>
    <body>
        ' . renderNavbar() . '
        <main class="main-content">
            ' . $content . '
        </main>
        ' . renderFooter() . '
    </body>
    </html>';
}
?>