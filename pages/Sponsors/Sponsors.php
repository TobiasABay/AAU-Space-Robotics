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

        <div class="sponsors-section">
            <div class="sponsor-tier">
                <h2 class="tier-title">Platinum Sponsors</h2>
                <div class="sponsor-grid platinum">
                    <div class="sponsor-item"></div>
                    <div class="sponsor-item"></div>
                    <div class="sponsor-item"></div>
                    <div class="sponsor-item"></div>
                </div>
            </div>

            <div class="sponsor-tier">
                <h2 class="tier-title">Gold Sponsors</h2>
                <div class="sponsor-grid gold">
                    <div class="sponsor-item"></div>
                    <div class="sponsor-item"></div>
                    <div class="sponsor-item"></div>
                    <div class="sponsor-item"></div>
                    <div class="sponsor-item"></div>
                    <div class="sponsor-item"></div>
                    <div class="sponsor-item"></div>
                    <div class="sponsor-item"></div>
                    <div class="sponsor-item"></div>
                    <div class="sponsor-item"></div>
                    <div class="sponsor-item"></div>
                    <div class="sponsor-item"></div>
                </div>
            </div>

            <div class="sponsor-tier">
                <h2 class="tier-title">Silver Sponsors</h2>
                <div class="sponsor-grid silver">
                    <div class="sponsor-item"></div>
                    <div class="sponsor-item"></div>
                    <div class="sponsor-item"></div>
                    <div class="sponsor-item"></div>
                    <div class="sponsor-item"></div>
                    <div class="sponsor-item"></div>
                    <div class="sponsor-item"></div>
                    <div class="sponsor-item"></div>
                    <div class="sponsor-item"></div>
                    <div class="sponsor-item"></div>
                    <div class="sponsor-item"></div>
                    <div class="sponsor-item"></div>
                </div>
            </div>

            <div class="sponsor-tier">
                <h2 class="tier-title">Bronze Sponsors</h2>
                <div class="sponsor-grid bronze">
                    <div class="sponsor-item"></div>
                    <div class="sponsor-item"></div>
                    <div class="sponsor-item"></div>
                    <div class="sponsor-item"></div>
                    <div class="sponsor-item"></div>
                    <div class="sponsor-item"></div>
                    <div class="sponsor-item"></div>
                    <div class="sponsor-item"></div>
                    <div class="sponsor-item"></div>
                    <div class="sponsor-item"></div>
                    <div class="sponsor-item"></div>
                    <div class="sponsor-item"></div>
                </div>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="/pages/Sponsors/Sponsors.css">
    ';
    
    return renderLayout($content, 'AAU Space Robotics - Sponsors');
}
?> 