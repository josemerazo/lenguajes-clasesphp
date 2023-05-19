<?php
include_once('class/persona.php');
/*
$arreglo1 = [0, 1, 2, 3, 4, 5, 6];
for ($i = 0; $i < count($arreglo1); $i++)
    echo $arreglo1[$i] . "<br/>";


$arreglo2 = [
    "nombre" => "Mario Enrique",
    "apellido" => "Burgos Calle"
];
$arreglo2["anio"] = 2002;
echo "<h2>Recorrido con foreach</h2>";

array_push($arreglo2, 45);
foreach ($arreglo2 as $item) {
    echo $item . "<br/>";
}
*/
$persona1 = new Persona("jose","miguel","1990");
$persona1->setNombre("Jose");
$persona1->setApellido("Erazo");
$persona1->agregar_lugar("Guayaquil");
$persona1->agregar_lugar("Bogotá");
$persona1->agregar_lugar("Asunción");
$persona1->agregar_lugar("Lima");
$persona1->agregar_lugar("La Paz");
echo $persona1->imprimir();



?>
<html>

<head>
    <title>Practica 2</title>
</head>

<body>
    <h1>Condicionales</h1>
    <h1>Calculadora</h1>
</body>

</html>