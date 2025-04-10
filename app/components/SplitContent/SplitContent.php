<?php
function renderSplitContent($title, $text, $imagePath, $imagePosition = 'left') {
    $imageSection = '
        <div class="split-image">
            <img src="' . $imagePath . '" alt="' . $title . '" class="split-img">
        </div>';
    
    $contentSection = '
        <div class="split-text">
            <h2 class="split-title">' . $title . '</h2>
            <p class="split-description">' . $text . '</p>
        </div>';

    return '
    <div class="split-content ' . ($imagePosition === 'right' ? 'image-right' : 'image-left') . '">
        ' . ($imagePosition === 'right' ? $contentSection . $imageSection : $imageSection . $contentSection) . '
    </div>';
}
?> 