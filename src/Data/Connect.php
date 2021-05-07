<?php

class Connect {
    public $instance;

    public function getInstance() {
        if (!isset($this->instance)) {
           $this->instance = new PDO(
              'mysql:host=localhost; 
              dbname=anhembi_pokemon',
              'root',
              '',
              array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
            );
           $this->instance->setAttribute(PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION);
           $this->instance->setAttribute(PDO::ATTR_ORACLE_NULLS,
            PDO::NULL_EMPTY_STRING);
        }

        return $this->instance;
    }
}

?>