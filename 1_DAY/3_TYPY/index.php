<?php

$langs = ["JS", "PHP", "KOTLIN", "JAVA"];

function map_func($arg)
{
    return $arg . ' ' . 'jest super!' . PHP_EOL;
}

$mix = array_map('map_func', $langs);

var_dump($mix);

function higherOrderFunction($a, $b, $someFunction)
{
    return call_user_func($someFunction, $a, $b);
}

$result1 = higherOrderFunction(2, 20, function ($x, $y) {
    return $x * $y;
});

$result2 = higherOrderFunction(2, 20, function ($x, $y) {
    return $x / $y;
});

var_dump($result1, $result2);

class Person
{
    private $age;
    private $name;
    private $lastName;

    public function __construct($age, $name, $lastName)
    {
        $this->age = $age;
        $this->name = $name;
        $this->lastName = $lastName;
    }

    public function getAge()
    {
        return $this->age;
    }


    public function setAge($age): void
    {
        $this->age = $age;
    }

    public function getName()
    {
        return $this->name;
    }


    public function setName($name)
    {
        $this->name = $name;
    }


    public function getLastName()
    {
        return $this->lastName;
    }


    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

}

$me = new Person("Adam", "Małysz", 40);