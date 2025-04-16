<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.09 - Closures e generators");

/*
 * [ closures ] https://php.net/manual/pt_BR/functions.anonymous.php
 */
fullStackPHPClassSession("closures", __LINE__);

$myAge = function($year){
    $age = date("Y") - $year;
    return "<p>você tem {$age} anos!</p>";
};

echo $myAge(2001);
// --------------------------------------------------
$priceBrl = function($price){
    return number_format($price, 2, ",", ".");
};

echo "<P> O projeto custa {$priceBrl(3600)}. Vamos fechar?</P>";

// --------------------------------------------------
$mycart = [];
$mycart["totalPrice"] = 0;
$cardAdd = function($item, $qtd, $price) use (&$mycart){
    $mycart[$item] = $qtd * $price;
    $mycart["totalPrice"] += $mycart[$item];
};

$cardAdd("html5", 1 , 497);
$cardAdd("jquery", 2 , 497);
$cardAdd("css", 5 , 339);

var_dump($mycart, $cardAdd);


/*
 * [ generators ] https://php.net/manual/pt_BR/language.generators.overview.php
 */
fullStackPHPClassSession("generators", __LINE__);
// generator ajuda a ler dados de banco de dados muito grandes sem utilizar memoria do servidor/pc, utilizando apenas processamento


// como não fazer
$iterator = 1000000;
//uma function sempre fica em um arquivo separado! está aqui apenas para exemplo!
// function showDates($days){
//     $saveDate  = [];
//     for ($day = 1; $day < $days; $day++){
//         $saveDate[] = date("d/m/y", strtotime("+{$day}days"));
//     };

//     return $saveDate;
// };

// echo "<div dtyle='text-align:center'>";
//     foreach(showDates($iterator) as $date){
//         echo "<small class = 'tag'> {$date}</small>". PHP_EOL; //php_eol é uma tag de pular linha do proprio php
//     };
// echo "<div>";

// ---------------------------------------------------------------------------------
// modo certo de fazer
function generatorDate($days){
    for ($day = 1; $day < $days; $day++){
        yield date("d/m/y", strtotime("+{$day}days"));  //yield apenas retorna em tela os dados sem alocar a memória
    };
};

echo "<div dtyle='text-align:center'>";
    foreach(generatorDate($iterator) as $date){
        echo "<small class = 'tag'> {$date}</small>". PHP_EOL; //php_eol é uma tag de pular linha do proprio php
    };
echo "<div>";