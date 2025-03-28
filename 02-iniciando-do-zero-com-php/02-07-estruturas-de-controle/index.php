<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.07 - Estruturas de controle");

/*
 * [ if ] https://php.net/manual/pt_BR/control-structures.if.php
 * [ elseif ] https://php.net/manual/pt_BR/control-structures.elseif.php
 * [ else ] https://php.net/manual/pt_BR/control-structures.else.php
 */
fullStackPHPClassSession("if, elseif, else", __LINE__);


/*
 * [ isset ] https://php.net/manual/pt_BR/function.isset.php
 * [ empty] https://php.net/manual/pt_BR/function.empty.php
 */
fullStackPHPClassSession("isset, empty, !", __LINE__);

$rock = "";
if(isset($rock)){ //isset siginifica "se exiteste a variável", mesmo que vazia, é válido, e entra no if
    var_dump("JDM");
    echo "<br>";
};


if(!isset($rock)){ //isset com ! siginifica "se NÃO exiteste a variável"
    var_dump("JDM");
    echo "<br>";
}
else{
    var_dump("die");
    echo "<br>";
};

$jdm = "toyota"; //empty = vazio, !empty = não vazio
if (!empty($jdm)){
    var_dump( "os melhores carros são os da {$jdm}");
}
else{
    var_dump("O melhores são da nissan");
};
/*
 * [ switch ] https://secure.php.net/manual/pt_BR/control-structures.switch.php
 */
fullStackPHPClassSession("switch", __LINE__); //opção mais simples ao IF/ELSE

$payment = "approved";

switch ($payment){
    case 'billet_printed':
        var_dump("Boleto Impresso!");
        break;
    
    case 'canceled':
        var_dump("Pagamento Cancelado!");
        break;
    case 'past_due':
    case 'pending':
        var_dump("Aguardando Pagamento!");
        break;
    case 'approved':
    case 'completed':
        var_dump("Pagamento Aprovado!");
        break;
    default:
    var_dump("erro ao processar pagamento!");
    break;
}