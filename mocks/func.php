<?php
require __DIR__.'/usermanager.php';

function checkLogin(UserManager $um, $username, $password){

    $user = $um->getByUsername($username);

    if (!$user){
        return false;
    }

    return password_verify($password, $user->hash);
}
