<?php

require_once "model/base/BaseModel.php";

class User extends BaseModel {

    private string $password;

    function __construct(
        private string $username, 
        string $password, 
        private string $email, 
        private string $first_name, 
        private string $last_name, 
        private Role $role
    ) {
        Parent::__construct();
        $this->password = $password;
    }

}
