<?php
require_once __DIR__ . '/../../app/components/Layout/Layout.php';
require_once __DIR__ . '/../../app/components/PageTitle/PageTitle.php';

function renderProjectPage() {
    $content = '
    ' . renderPageTitle('Our Projects', 'Innovative solutions for space exploration') . '
    <div class="project-content">
        <!-- Project content here -->
    </div>
    <link rel="stylesheet" href="/app/components/PageTitle/PageTitle.css">
    <link rel="stylesheet" href="/pages/Project/Project.css">
    ';
    
    return renderLayout($content, 'AAU Space Robotics - Projects');
}
?> 