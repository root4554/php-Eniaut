<?php

require_once "utils/date.php";
require_once "utils/hash.php";
require_once "utils/oop.php";

abstract class BaseModel {

    use Getters, Setters;

    protected $hash;
    protected $created;
    protected $updated;

    function __construct() {
        $this->hash = random_hash();
        $this->created = date_now();
        $this->updated = date_now();
    }

}

