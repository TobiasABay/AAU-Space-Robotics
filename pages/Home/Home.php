<?php
require_once __DIR__ . '/../../app/components/Layout/Layout.php';
require_once __DIR__ . '/../../app/components/SplitContent/SplitContent.php';

function renderHomePage() {
    $content = '
    <div class="home-container">
        <div class="hero-section">
            <div class="hero-content">
                <h1 class="main-title">AAU Space Robotics</h1>
                <h2 class="subtitle">Engineers of the future</h2>
            </div>
        </div>

        ' . renderSplitContent(
            'Our Mission',
            'At AAU Space Robotics, we are dedicated to pushing the boundaries of space exploration through innovative robotics solutions. Our team of passionate engineers and researchers works tirelessly to develop cutting-edge technologies that will shape the future of space missions.',
            '/assets/images/mission.jpg',
            'left'
        ) . '

        ' . renderSplitContent(
            'Latest Project',
            'Discover our groundbreaking work on autonomous navigation systems for planetary rovers. Using advanced AI and machine learning algorithms, we\'re developing robots that can independently explore and map unknown terrains on other planets.',
            '/assets/images/project.jpg',
            'right'
        ) . '
        ' . renderSplitContent(
            'Our Mission',
            'At AAU Space Robotics, we are dedicated to pushing the boundaries of space exploration through innovative robotics solutions. Our team of passionate engineers and researchers works tirelessly to develop cutting-edge technologies that will shape the future of space missions.',
            '/assets/images/mission.jpg',
            'left'
        ) . '

        ' . renderSplitContent(
            'Latest Project',
            'Discover our groundbreaking work on autonomous navigation systems for planetary rovers. Using advanced AI and machine learning algorithms, we\'re developing robots that can independently explore and map unknown terrains on other planets.',
            '/assets/images/project.jpg',
            'right'
        ) . '
        ' . renderSplitContent(
            'Our Mission',
            'At AAU Space Robotics, we are dedicated to pushing the boundaries of space exploration through innovative robotics solutions. Our team of passionate engineers and researchers works tirelessly to develop cutting-edge technologies that will shape the future of space missions.',
            '/assets/images/mission.jpg',
            'left'
        ) . '

        ' . renderSplitContent(
            'Latest Project',
            'Discover our groundbreaking work on autonomous navigation systems for planetary rovers. Using advanced AI and machine learning algorithms, we\'re developing robots that can independently explore and map unknown terrains on other planets.',
            '/assets/images/project.jpg',
            'right'
        ) . '

    </div>
    <link rel="stylesheet" href="/pages/Home/Home.css">
    <link rel="stylesheet" href="/app/components/SplitContent/SplitContent.css">
    ';
    
    return renderLayout($content, 'AAU Space Robotics - Home');
}
?> 