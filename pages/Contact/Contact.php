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

        <div class="contact-section">
            <div class="contact-container">
                <div class="contact-info">
                    <h2>Contact Information</h2>
                    <div class="info-item">
                        <i class="fas fa-envelope"></i>
                        <p>Email: contact@aauspacerobotics.com</p>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>Address: Aalborg University, Aalborg, Denmark</p>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-phone"></i>
                        <p>Phone: +45 XX XX XX XX</p>
                    </div>
                    <div class="social-links">
                        <h3>Follow Us</h3>
                        <div class="social-icons">
                            <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="/pages/Contact/Contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    ';
    
    return renderLayout($content, 'AAU Space Robotics - Contact');
}
?> 