<?php
//ej 1
function saludo(){
    echo "Hola, mi nombre es: Carlos";
}


saludo();
$saludo=saludo();

echo $saludo;

//ej 2
function saludo(){
    return "Hola, mi nombre es: Carlos";
}

echo saludo();

//ej 3
function saludo($nombre){
    return "Hola, mi nombre es: $nombre";
}

echo saludo("Nicole");

$usuario="Ashley";
echo saludo($usuario);

echo saludo($nombre="Carlos");

//ej 4

function promedio_alumno($nota_1,$nota_2,$nota_3){
    $promedio=($nota_1+$nota_2+$nota_3)/3;
    return $promedio

}

$promedio= promedio_alumno(7,9,6);
echo "el promedio es: ". $promedio;

echo "el promedio es: ". promedio_alumno(7,9,6);
echo "<br>" ;
echo "el promedio es: ". promedio_alumno(4,8,9);
echo "<br>" ;
echo "el promedio es: ". promedio_alumno(7,9,7);
echo "<br>" ;
echo "el promedio es: ". promedio_alumno(6,9,8);

