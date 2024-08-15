<?php

require_once('animal.php');

class Ape extends Animal {

    public $legs = 2;

    public function __construct($name) {
        $this->name = $name;
    }

    public function yell() {
        return "Auooo";
    }

}