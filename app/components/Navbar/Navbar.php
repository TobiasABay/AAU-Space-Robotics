<?php
function renderNavbar() {
    return '
    <nav class="navbar">
        <div class="nav-container">
            <div class="nav-brand">
                <img src="/assets/images/aau-logo.png" alt="AAU Space Robotics Logo" class="nav-logo-img">
                <a href="/" class="nav-logo-text">AAU Space Robotics</a>
            </div>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="/" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="/project" class="nav-link">Project</a>
                </li>
                <li class="nav-item">
                    <a href="/sponsors" class="nav-link">Sponsors</a>
                </li>
                <li class="nav-item">
                    <a href="/our-team" class="nav-link">Our Team</a>
                </li>
                <li class="nav-item">
                    <a href="/contact" class="nav-link">Contact</a>
                </li>
                <li class="nav-item social-links">
                    <a href="https://www.facebook.com/profile.php?id=100091889017917" target="_blank" class="social-link">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.linkedin.com/company/aau-space-robotics/posts/?feedView=all" target="_blank" class="social-link">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>';
}
?> 