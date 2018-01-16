<?php

class MockDb {
    public $fixture = [];
    public function prepare() {
        $r = new MockDbResult();
        $r->fixture = $this->fixture;
        return $r;
    }
}

class MockDbResult {
    public $fixture = [];
    public function execute() {}
    public function fetch() {
        return $this->fixture;
    }
}
