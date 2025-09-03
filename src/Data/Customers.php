<?php 
    namespace Programmers\Data;
    class Customers{
        public string $name;

        public function __construct(string $name){
            $this->name = $name;
        }

        public function sayHai(string $name){
            echo "hallo $name , nama saya $this->name".PHP_EOL;
        }
    }