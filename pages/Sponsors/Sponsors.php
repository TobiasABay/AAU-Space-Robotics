<?php
require_once __DIR__ . '/../../app/components/Layout/Layout.php';
require_once __DIR__ . '/../../app/components/PageTitle/PageTitle.php';

function renderSponsorsPage() {
    $content = '
    ' . renderPageTitle('Our Sponsors', 'Partners who make our mission possible') . '
    <div class="sponsors-content">
        <!-- Sponsors content here -->
    </div>
    <link rel="stylesheet" href="/app/components/PageTitle/PageTitle.css">
    <link rel="stylesheet" href="/pages/Sponsors/Sponsors.css">
    ';
    
    return renderLayout($content, 'AAU Space Robotics - Sponsors');
}
?> 