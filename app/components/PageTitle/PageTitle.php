<?php
function renderPageTitle($title, $subtitle = '') {
    return '
    <div class="page-title-wrapper">
        <div class="page-title-content">
            <h1 class="page-title">' . $title . '</h1>
            ' . ($subtitle ? '<p class="page-subtitle">' . $subtitle . '</p>' : '') . '
        </div>
    </div>';
}
?> 