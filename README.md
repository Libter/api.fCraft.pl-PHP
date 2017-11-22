# api.fCraft.pl-PHP
Prosty i skuteczny wrapper dla API serwera fCraft.pl
> Wszystko powinno być tak proste, jak to tylko możliwe, ale nie prostsze.
## Funkcjonalności
- Prostota - tylko dwie metody get oraz post umożliwiają wykonanie [dowolnego zapytania API](https://fcraft.pl/dzia%C5%82-dokumentacja-53) w jednej linijce.
- Pełna obsługa błędów - zarówno [zwracanych przez API](https://fcraft.pl/temat-kody-b%C5%82%C4%99d%C3%B3w-api-1492) jak i niespodziewanych.
- Rzadkie aktualizacje - nowe funkcjonalności API nie wymagają aktualizacji wrappera.
## Instalacja
- Skopiuj plik https://github.com/Libter/api.fCraft.pl-PHP/blob/master/fCraftWrapper.php na swój serwer `WWW`.
## Przykład
Kod: https://github.com/Libter/api.fCraft.pl-PHP/blob/master/example.php

Wynik: 
```
object(stdClass)#2 (3) {
  ["pvp"]=>
  bool(false)
  ["sex"]=>
  string(4) "male"
  ["sharing"]=>
  object(stdClass)#4 (2) {
    ["statistics"]=>
    bool(false)
    ["topbalances"]=>
    bool(false)
  }
}
stdClass Object
(
    [Libter] => 640a8815-bd49-4705-9a9c-061a387092ac
    [Kruliczek] => 9ea3f192-1f1a-4b3d-9845-ca229d0b9e0a
)

stdClass Object
(
    [error] => UNKNOWN
    [code] => 404
)
stdClass Object
(
    [error] => UNKNOWN
    [code] => 404
)
stdClass Object
(
    [error] => UNKNOWN
    [code] => 405
)
```
