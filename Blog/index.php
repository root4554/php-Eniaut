<?php

require_once "constants/Path.php";
require_once "constants/Role.php";
require_once "controller/PostsController.php";
require_once "controller/NotFoundController.php";
require_once "inc/bootstrap.php";
require_once "model/User.php";
require_once "utils/url.php";

$path = Path::tryFrom(get_path()[0]);

$controller = match ($path) {

    Path::POSTS => new PostsController(),
    Path::NOT_FOUND => new NotFoundController(),
    default => redirect('404')
    
};

$controller->run();