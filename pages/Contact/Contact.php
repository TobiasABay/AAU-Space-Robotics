<?php
require_once __DIR__ . '/../../app/components/Layout/Layout.php';
require_once __DIR__ . '/../../app/components/PageTitle/PageTitle.php';

function renderContactPage() {
    $content = '
    ' . renderPageTitle('Contact Us', 'Get in touch with our team') . '
    <div class="contact-content">
        <!-- Contact content here -->
    </div>
    <link rel="stylesheet" href="/app/components/PageTitle/PageTitle.css">
    <link rel="stylesheet" href="/pages/Contact/Contact.css">
    ';
    
    return renderLayout($content, 'AAU Space Robotics - Contact');
}
?> 