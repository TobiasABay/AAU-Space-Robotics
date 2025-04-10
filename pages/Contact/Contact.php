<?php
require_once __DIR__ . '/../../app/components/Layout/Layout.php';

function renderContactPage() {
    $content = '
    <div class="page-container">
        <div class="hero-section">
            <div class="hero-content">
                <h1 class="main-title">Contact Us</h1>
                <h2 class="subtitle">Get in touch with our team</h2>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="/pages/Contact/Contact.css">
    ';
    
    return renderLayout($content, 'AAU Space Robotics - Contact');
}
?> 