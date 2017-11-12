<?php

header('Content-type: text/plain');

include 'fCraftWrapper.php';
$api = new fCraftWrapper('KEY API/0'); //https://fcraft.pl/temat-wydawanie-kluczy-api-0-1476

print_r($api->get('player/Libter')); //OK
print_r($api->post('resolver/nick', ['data' => 'Libter,Kruliczek'])); //OK
echo PHP_EOL;
print_r($api->get('player/Lib-ter')); //Invalid nick
print_r($api->get('404')); //Not Found
print_r($api->post('player/Libter')); //Method Not Allowed
