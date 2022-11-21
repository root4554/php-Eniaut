<?php

require_once "repository/base/Database.php";

class UserRepository extends Database {

    function save(User $user) {
        $result = $this->execute(
            "INSERT INTO editor (username, password, email, name, surname, role) VALUES (?, ?, ?, ?, ?, ?), "ssssss", [$user->getUsername(), $user->getPassword(), $user->getEmail(), $user->getName(), $user->getSurname(), $user->getRole()]" ;
        );
    }

}