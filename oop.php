<?php
include_once './helper.php';


class Person
{
    public $name = 'Name';

    public function eat()
    {
        return 'I am eating.';
    }

}

$persone = new Person;

echo $persone->name;

echo $persone->eat();


