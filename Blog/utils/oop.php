<?php

function assertPropExists($obj, $prop) {
    if (!property_exists($obj, $prop)) {
        $class_name = get_class($obj);
        throw new Exception("`$class_name` does not have a property named `$prop`");
    }
}

trait Getters {

    public function __get($prop) {
        assertPropExists($this, $prop);
        return $this->$prop;
    }

}

trait Setters {

    public function __set($prop, $value) {
        assertPropExists($this, $prop);
        $this->$prop = $value;
    }

}
