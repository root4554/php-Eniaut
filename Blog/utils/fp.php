<?php

function map($fn, $arr) {
    return array_map($fn, $arr);
}

function filter($fn, $arr) {
    return array_filter($arr, $fn);
}

function reduce($fn, $initial, $arr) {
    return array_reduce($arr, $fn, $initial);
}

function find($fn, $arr) {
    $result = filter($fn, $arr);
    return $result ? $result[0] : false;
}

function skip($x, $arr) {
    return array_slice($arr, $x);
}
