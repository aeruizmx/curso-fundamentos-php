<?php

//Asignacion
$num = 9;
$lang = [
    'es' => 'español',
    'en' => 'english'
];
//Aritmetica
echo "Suma 2 + 2 " . ((int) 2 + (int)2);
echo "Resta 2 + 2 " . ((int) 2 - (int)2);
echo ",ultiplica 2 * 2 " . 2 * 2;
echo "Divide 2 / 2 " . 2 / 2;
echo "Modulo 2 % 2 " . 2 % 2;
echo "Exponencial 2 ** 2 " . 2 ** 2;

//Comparacion
// Igual ==, valor = '9' == 9
// Igual ===, valor - tipo '9' === 9
//Diferencias !=, valor
//Diferencias !==, valor  tipo
//<, >, <=, >=

//Variables variables
$app = 'name';
$name = 'platzi';
echo $app; //imprime 'name'
echo $$app; // imprime 'platzi'

//Bloques de código
if(condition) {
    #code
} elseif(condition) {
    #code
} else {
    #code
}

switch ($login) {
    case true:
        # code...
        break;
    case false:
        #code
        break;
    default:
        # code...
        break;
}

//consulta usuarios
foreach ($datos as $row) {
    # code...
}

$a = 1;
while ($a <= 10) {
    # code...
    $a++;
}

do {
    # code...
} while ($a <= 10);

for ($i = 0; $i < 10; $i++) { 
    # code...
}