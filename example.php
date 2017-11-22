<?php

header('Content-type: text/plain');

include 'fCraftWrapper.php';
$api = new fCraftWrapper('KEY API/0'); //https://fcraft.pl/temat-wydawanie-kluczy-api-0-1476

$uuid = $api->get('player/{nick}', ['nick' => 'Libter'])->uuid; //OK
var_dump($api->get("easy/player/{uuid}/settings", ['uuid' => $uuid]));
print_r($api->post('resolver/nick', ['data' => 'Libter,Kruliczek'])); //OK
echo PHP_EOL;
print_r($api->get('player/{nick}', ['nick' => '/Libter/'])); //Invalid nick
print_r($api->get('404')); //Not Found
print_r($api->post('player/{nick}', ['nick' => 'Libter'])); //Method Not Allowed
