<?php 

class User {
    public $id;
    public $username;
    public $hash;

    public function fromArray($a){
        $this->id = $a['id'];
        $this->username = $a['username'];
        $this->hash = $a['hash'];
    }
}

