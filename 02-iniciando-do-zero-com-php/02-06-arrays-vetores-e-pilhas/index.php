<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.06 - Arrays, vetores e pilhas");

/**
 * [ arrays ] https://php.net/manual/pt_BR/language.types.array.php
 */
fullStackPHPClassSession("index array", __LINE__);

$arrA = array (1,2,3);
$arrA = [0,1,2,3]; //declarando array sem a palavra "array" / array sempre começa contando do zero

var_dump($arrA);

$arrayIndex = [
    "Brian",
    "Angus",
    "Malcolm"
];

echo "<br>";
echo "<br>";

// como inserir novos dados dentro do array 
$arrayIndex[] = "Cliff";
$arrayIndex[] = "Phil";

var_dump($arrayIndex);

/**
 * [ associative array ] "key" => "value"
 */
fullStackPHPClassSession("associative array", __LINE__);

$arrayAssoc = [
    "vocal" => "Brian",
    "solo_guitar" => "Angus",
    "base_guitar" => "Malcolm",
    "bass_guitar" => "Cliff"
];

$arrayAssoc["drums"] = "Phil";
$arrayAssoc["rock_band"] = "AC/DC";

var_dump($arrayAssoc);


/**
 * [ multidimensional array ] "key" => ["key" => "value"]
 */
fullStackPHPClassSession("multidimensional array", __LINE__); //um array dentro de outro array

$brian = ["Brian", "Mic"];
$angus = ["name" => "Angus", "instrument" => "Guitar"];

$instruments = [
    $brian,
    $angus
];

var_dump($instruments);
echo "<br>";
echo "<br>";
var_dump([
    "brian" => $brian,
    "angus" => $angus
]);


/**
 * [ array access ] foreach(array as item) || foreach(array as key => value)
 */
fullStackPHPClassSession("array access", __LINE__);

$acdc = [
    "vocal" => "Brian",
    "solo_guitar" => "Angus",
    "base_guitar" => "Malcolm",
    "bass_guitar" => "Cliff",
    "drums" => "Phil"
];

$sky = [
    "motor" => "RB26",
    "tracao" => "AWD",
    "cambio" => "6 marchas",
    "cor" => "bayside blue",
    "fabricante" => "nissan"
];
echo "<br>";
echo "o {$sky["fabricante"]} skyline tem um motor {$sky["motor"]}";
echo "<br>";

$aleatorio = [
    "acdc" => $acdc,
    "skyline" => $sky
];

echo "<br>";
var_dump($aleatorio);

//acessando array multidimencional associativo 
echo "<br>";
echo "<p>{$aleatorio['skyline']['fabricante']}</p>";


//usando foreach para "ler" um array
foreach ($acdc as $item) {
    echo "<p>{$item}</p>";
}

foreach ($sky as $itens_carro => $value) {
    echo "<p>{$value} is a(n) {$itens_carro} of the car</p>";
}