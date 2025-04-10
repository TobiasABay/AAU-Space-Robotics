<?php
function renderFooter() {
    return '
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h3>AAU Space Robotics</h3>
                <p>Engineers of the future</p>
                <div class="footer-social">
                    <a href="https://www.facebook.com/profile.php?id=100091889017917" target="_blank" class="footer-social-link">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.linkedin.com/company/aau-space-robotics/posts/?feedView=all" target="_blank" class="footer-social-link">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>

            <div class="footer-section">
                <h4>Contact Us</h4>
                <ul class="footer-contact">
                    <li>
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:aauspacerobotics@gmail.com">aauspacerobotics@gmail.com</a>
                    </li>
                    <li>
                        <i class="fas fa-map-marker-alt"></i>
                        Fredrik Bajers Vej 7, Aalborg Øst 9220
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo date("Y"); ?> AAU Space Robotics. All rights reserved.</p>
        </div>
    </footer>';
}
?> 