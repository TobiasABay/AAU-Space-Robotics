<?php
require_once __DIR__ . '/../../app/components/Layout/Layout.php';

function renderTeamPage() {
    $content = '
    <div class="page-container">
        <div class="hero-section">
            <div class="hero-content">
                <h1 class="main-title">Our Team</h1>
                <h2 class="subtitle">Meet the minds behind AAU Space Robotics</h2>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="/pages/Team/Team.css">
    ';
    
    return renderLayout($content, 'AAU Space Robotics - Team');
}
?> 