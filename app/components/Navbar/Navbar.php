<?php
function renderNavbar() {
    return '
    <nav class="navbar">
        <div class="nav-container">
            <div class="nav-brand">
                <img src="/assets/images/aau-logo.png" alt="AAU Space Robotics Logo" class="nav-logo-img">
            </div>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="/project" class="nav-link nav-button">Project</a>
                </li>
                <li class="nav-item">
                    <a href="/sponsors" class="nav-link nav-button">Sponsors</a>
                </li>
                <li class="nav-item">
                    <a href="/our-team" class="nav-link nav-button">Our Team</a>
                </li>
                <li class="nav-item">
                    <a href="/contact" class="nav-link nav-button">Contact</a>
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