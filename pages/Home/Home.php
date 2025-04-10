<?php
require_once __DIR__ . '/../../app/components/Navbar/Navbar.php';

function renderHomePage() {
    return '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AAU Space Robotics</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link rel="stylesheet" href="/app/components/Navbar/Navbar.css">
        <link rel="stylesheet" href="/pages/Home/Home.css">
    </head>
    <body>
        ' . renderNavbar() . '
    </body>
    </html>';
}
?> 