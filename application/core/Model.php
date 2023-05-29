<?php

namespace application\core;

use application\lib\Db;

abstract class Model {

    public $db;

    public function __construct() {
        $this->db = new Db;   
    }
    public function setDB() {
        $this->db = new Db(0);   
    }

}