<?php
class MockUserManager extends UserManager {
    public $users = [];

    public function __construct(){}

    public function getByUsername($username){
        if (isset($this->users[$username])){
            return $this->users[$username];
        }
        return null;
    }

    public function addUser($username, $password){
        $user = new User();
        $user->fromArray([
            'id' => 1,
            'username' => $username,
            'hash' => password_hash($password, PASSWORD_DEFAULT)
        ]);
        $this->users[$username] = $user;
    }
}
