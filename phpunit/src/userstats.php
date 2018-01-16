<?php
require __DIR__.'/datastore.php';

class UserStats {
    
    protected $datastore;

    public function __construct(Datastore $datastore){
        $this->datastore = $datastore; 
    }

    // Returns an array of users in the form:
    //   [
    //     ["id" => 123, "username" => "theusername", "age" => 23],
    //     ["id" => 124, "username" => "user2", "age" => 25],
    //     ...
    //   ]
    protected function getUsers(){
        return $this->datastore->getUsers();
    }

    public function averageAge(){
        $ages = array_map($this->getUsers(), function($user){
            return $user['age'];
        });
        return array_sum($ages) / count($ages);
    }

    public function numUsers(){
        return count($this->getUsers()); 
    }
}

