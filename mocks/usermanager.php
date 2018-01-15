<?php
require __DIR__.'/user.php';

class UserManager {
    protected $db;

    function __construct($db){
        $this->db = $db;
    }

    function getByUsername($username){
        $s = $this->db->prepare("
            select
                id, username, password
            from users
            where username = :username
        "); 
        $s->execute(['username' => $username]);

        $row = $s->fetch();
        if (!$row){
            return null;
        }

        $user = new User();
        $user->fromArray($row);

        return $user; 
    }
}
