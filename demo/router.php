<?php

// dd($_SERVER);

$uri = parse_url($_SERVER["REQUEST_URI"])["path"];

// dd(parse_url($uri));

// if ($uri === "/") {
//     require "controllers/index.php";
// }
// else if ($uri === "/about") {
//     require "controllers/about.php";
// }
// else if ($uri === "/contact") {
//     require "controllers/contact.php";
// }
// else {
//     echo "Error 404: The requested page can't be found in this server<br>";
// }

$routes = [
    "/" => "controllers/index.php",
    "/about" => "controllers/about.php",
    "/contact" => "controllers/contact.php"
];

function abort($code = 404) {
    http_response_code($code);
    require "views/{$code}.php";
    die();
}

function routeToController($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    }
    else {
        abort();
    }
}

routeToController($uri, $routes);

?>
