<?php
/**
*Devuelve la suma de dos números
*
* @author Laura Sánchez Ayllón
* @param int num1 y num2
* @return int resultado
* @access public
* @internal documentación interna para desarrolladores
* @version 1.0.0
*/

function sumar($num1, $num2){
$resultado = $num1 + $num2;
return $resultado;
}

$resultado_suma = sumar(20, 7);
echo $resultado_suma;


/**
* Función que aumenta de uno en uno cada vez que se ejecuta
*
* @author Laura Sánchez Ayllón
* @access public
* @internal documentación interna para desarrolladores
* @version 1.0.0
*/

function aumentarNumero(){
static $numero;
$numero++;
echo $numero . '<br/>';
}

aumentarNumero();
aumentarNumero();

//Añadimos un comentario para modificar el archivo
?>

