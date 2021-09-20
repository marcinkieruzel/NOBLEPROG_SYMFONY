<?php

function silnia($n)
{
    if ($n === 0) $result = 1; else $result = silnia($n - 1) * $n;
    return $result;
}

silnia(6);

class Lang {
    private $name;

    /**
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }
}

$js = new Lang("JavaScript");
var_dump(["dsds", "sdsds"]);