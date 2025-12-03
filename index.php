<?php

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

$allPages = ['home', 'about', 'services', 'contact'];

if (in_array($page, $allPages)) {

    include 'templates/header.php';
    include 'views/' . $page . '.php';
    include 'templates/footer.php';

} else {
    include 'templates/header.php';
    include 'views/404.php';
    include 'templates/footer.php';
}
