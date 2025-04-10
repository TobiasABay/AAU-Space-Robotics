<?php
$request = $_SERVER['REQUEST_URI'];
$basePath = '/';  // Adjust this if your site is in a subdirectory

// Clean the request URI
$request = str_replace($basePath, '', $request);
$request = strtok($request, '?');  // Remove query strings

// Route the request
switch ($request) {
    case '':
    case '/':
        require __DIR__ . '/pages/Home/Home.php';
        echo renderHomePage();
        break;
        
    case 'project':
    case '/project':
        require __DIR__ . '/pages/Project/Project.php';
        echo renderProjectPage();
        break;
        
    case 'sponsors':
    case '/sponsors':
        require __DIR__ . '/pages/Sponsors/Sponsors.php';
        echo renderSponsorsPage();
        break;
        
    case 'our-team':
    case '/our-team':
        require __DIR__ . '/pages/Team/Team.php';
        echo renderTeamPage();
        break;
        
    case 'contact':
    case '/contact':
        require __DIR__ . '/pages/Contact/Contact.php';
        echo renderContactPage();
        break;
        
    default:
        http_response_code(404);
        require __DIR__ . '/pages/404/404.php';
        echo render404Page();
        break;
}
?> 