<?php
require __DIR__.'/usermanager.php';

function checkLogin($username, $password){
    $um = new UserManager();

    $user = $um->getByUsername($username);

    if (!$user){
        return false;
    }

    return password_verify($password, $user->hash);
}
