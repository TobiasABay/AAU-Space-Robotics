<?php
require_once __DIR__ . '/../../app/components/Layout/Layout.php';

function renderProjectPage() {
    $content = '
    <div class="page-container">
        <div class="hero-section">
            <div class="hero-content">
                <h1 class="main-title">G.O.R.M</h1>
                <h2 class="subtitle">Geological Observation Rover Mars</h2>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="/pages/Project/Project.css">
    ';
    
    return renderLayout($content, 'AAU Space Robotics - Projects');
}
?> 