<?php
require_once __DIR__ . '/../../app/components/Layout/Layout.php';

function renderSponsorsPage() {
    $content = '
    <div class="page-container">
        <div class="hero-section">
            <div class="hero-content">
                <h1 class="main-title">Our Sponsors</h1>
                <h2 class="subtitle">Partners who make our mission possible</h2>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="/pages/Sponsors/Sponsors.css">
    ';
    
    return renderLayout($content, 'AAU Space Robotics - Sponsors');
}
?> 