<?php
    require_once __DIR__ .'/vendor/autoload.php';

    use Programmers\Data\Customers;

    $customers = new Customers("budi");
    $customers->sayHai("adi");
