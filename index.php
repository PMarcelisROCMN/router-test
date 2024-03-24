<?php


require_once 'Router.php';

echo $_SERVER['REQUEST_URI'];

// regular switch case
// switch($_SERVER['REQUEST_URI']){
//     case '/':
//     case '/home':
//     case '':
//         require_once __DIR__ . '/views/home.php';
//         break;
//     case '/contact':
//         require_once __DIR__ . '/views/contact.php';
//         break;
//     case '/about':
//         require_once __DIR__ . '/views/about.php';
//         break;
//     default:
//         require_once __DIR__ . '/views/404.php';
//         break;
// }

// dynamic approach
switch($_SERVER['REQUEST_URI']){
    default:
        $fileName = __DIR__ . '/views' . $_SERVER['REQUEST_URI'] . '.php';
        if(file_exists($fileName)){
            require_once $fileName;
        } else {
            require_once __DIR__ . '/views/404.php';
        }
}