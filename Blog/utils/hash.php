<?php

function random_hash() {
    $len = 32;
    return substr(md5(openssl_random_pseudo_bytes(20)), -$len);
}
