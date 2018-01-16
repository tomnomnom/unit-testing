<?php
require __DIR__.'/func.php';
require __DIR__.'/mock.php';
require __DIR__.'/mockdb.php';

// Write a test for the checkLogin function :) 

$db = new MockDb();
$db->fixture = [
    'id' => 123,
    'username' => 'theuser',
    'hash' => password_hash("thepassword", PASSWORD_DEFAULT)
];
$um = new UserManager($db);
//$um->addUser("theuser", "thepassword");
//$um->addUser("user2", "Super secret password");

assert(checkLogin($um, "theuser", "thepassword") == true);
assert(checkLogin($um, "theuser", "thewrongpassword") == false);
//assert(checkLogin($um, "user2", "Super secret password") == true);


