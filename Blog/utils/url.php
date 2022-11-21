<?php

require_once "utils/fp.php";
require_once "constants/RequestMethod.php";

function get_path() {
    $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    return skip(1, explode('/', $path));
}

function redirect($path) {
    header("Location: $path");
}

function request_method() {
    return RequestMethod::from($_SERVER['REQUEST_METHOD']);
}
