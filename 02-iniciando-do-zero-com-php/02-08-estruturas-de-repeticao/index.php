<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.08 - Estruturas de repetição");

/*
 * [ while ] https://php.net/manual/pt_BR/control-structures.while.php
 * [ do while ] https://php.net/manual/pt_BR/control-structures.do.while.php
 */
fullStackPHPClassSession("while, do while", __LINE__);

$looping = 1;
$while = [];

while($looping <= 10){
    $while[] = $looping;
    $looping++;
}
var_dump($while);

// ---------------------------------------------
echo "<br>";
echo "<br>";


$looping = 5;
$while = [];

do{
    $while[] = $looping;
    $looping--;

}while ($looping >= 1);
var_dump($while);

/*
 * [ for ] https://php.net/manual/pt_BR/control-structures.for.php
 */
fullStackPHPClassSession("for", __LINE__);
// execução de forma rápida incrementando uma variável

for($i = 1; $i <= 10; $i++){
    echo "<p>{$i}</p>";
}


/**
 * [ break ] https://php.net/manual/pt_BR/control-structures.break.php
 * [ continue ] https://php.net/manual/pt_BR/control-structures.continue.php
 */
fullStackPHPClassSession("break, continue", __LINE__);

for($c = 1; $c <= 10; $c++){
    if ($c % 2 == 1){
        continue;
    }

    if ($c > 7){
        break;
    }

    echo "<p>pulou + 2 :: {$c}</p>";
}

/**
 * [ foreach ] https://php.net/manual/pt_BR/control-structures.foreach.php
 */
fullStackPHPClassSession("foreach", __LINE__);
// usado para ler arrays

$array = [];

for($ar = 0; $ar <= 10; $ar++){
    $array[] = $ar;
}

var_dump($array);

echo "<br>";
echo "<br>";

foreach($array as $item){
    var_dump($item);
}

echo "<br>";
echo "<br>";

foreach($array as $key => $value){
    var_dump("{$key} = {$value}");
}