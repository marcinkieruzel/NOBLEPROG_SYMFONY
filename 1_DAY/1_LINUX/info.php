<?php

$questions = [
    "Jak masz na imię? ",
    "Jak masz na nazwisko? ",
    "Ile masz lat? "
];

$info = [];

//get 3 commands from user
for ($i=0; $i < count($questions); $i++) {
    $line = readline($questions[$i]);
    $info[] = $line;
}

echo "Moje dane: $info[0] $info[1], lat $info[2]" . PHP_EOL;
