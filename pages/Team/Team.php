<?php
require_once __DIR__ . '/../../app/components/Layout/Layout.php';
require_once __DIR__ . '/../../app/components/PageTitle/PageTitle.php';

function renderTeamPage() {
    $content = '
    ' . renderPageTitle('Our Team', 'Meet the minds behind AAU Space Robotics') . '
    <div class="team-content">
        <!-- Team content here -->
    </div>
    <link rel="stylesheet" href="/app/components/PageTitle/PageTitle.css">
    <link rel="stylesheet" href="/pages/Team/Team.css">
    ';
    
    return renderLayout($content, 'AAU Space Robotics - Our Team');
}
?> 