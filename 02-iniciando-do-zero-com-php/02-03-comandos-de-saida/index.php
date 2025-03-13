<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.03 - Comandos de saída");

/**
 * [ echo ] https://php.net/manual/pt_BR/function.echo.php
 */
fullStackPHPClassSession("echo", __LINE__);

echo "<h3> Olá mundo <h3>", " ", "<span class='tag'> #BoraProgramar!</span>";

$hello = "Olá Mundo!";
$code = "<span class='tag'> #BoraProgramar!</span>";

echo "<P>$hello</p>";

$day = "dia";

echo "<p>Falta 1 $day para o evento</p>";
// entre chaves {}, a variável fica protegida e não gera erros
echo "<p>Faltam 2 {$day}s para o evento</p>";
// ou concatenar
echo "<p>Faltam 2 $day" . "s para o evento</p>";

/**
 * [ print ] https://php.net/manual/pt_BR/function.print.php
 */
fullStackPHPClassSession("print", __LINE__);

print $hello;
print $code;

// print não usa vírgula
print "<h3> {$hello} {$code} </h3>";

/**
 * [ print_r ] https://php.net/manual/pt_BR/function.print-r.php
 */
fullStackPHPClassSession("print_r", __LINE__);
// só consegue exibir vetores

$array = [
    "company" => "UpInside",
    "course" => "FSPHP",
    "class" => "Comandos de Saída"
];

print_r($array);
echo "<pre>", print_r($array, return:true), "</pre>";


/**
 * [ printf ] https://php.net/manual/pt_BR/function.printf.php
 */
fullStackPHPClassSession("printf", __LINE__);

$article = "<article><h1>%s</h1><p>%s</p></article>";
$title = "{$hello} {$code}";
$subtitle = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sed nulla pretium, porttitor purus et, facilisis nunc. 
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus placerat justo a lacinia efficitur. Cras tincidunt consectetur ex vel
tincidunt. Fusce tincidunt felis in justo fringilla tincidunt. Mauris dapibus lacinia risus eu fermentum. Integer dignissim ultricies
tristique. Proin dignissim velit nec imperdiet pharetra. Vivamus eget dolor dapibus est faucibus porta. Nulla hendrerit, purus in 
aliquet efficitur, erat lorem fermentum dui, eget sagittis ante tortor id lectus.";

printf($article, $title, $subtitle);
echo sprintf($article, $title, $subtitle);


/**
 * [ vprintf ] https://php.net/manual/pt_BR/function.vprintf.php
 */
fullStackPHPClassSession("vprintf", __LINE__);

$company = "<article>
                <h1>
                    Escola %s
                </h1>
                <p>
                    Curso <b>%s</b>
                </p>
                <p>
                    Aula <b>%s</b>
                </p>
            </article>";

vprintf($company, $array);
echo vsprintf($company, $array);

/**
 * [ var_dump ] https://php.net/manual/pt_BR/function.var-dump.php
 */
fullStackPHPClassSession("var_dump", __LINE__);

var_dump($array);