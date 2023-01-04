<?php

/*
Este código es un programa en PHP que se utiliza para determinar si un par de zapatos está lo suficientemente seco para poder 
usarlo.

La función isZapatoSeco recibe un parámetro $porcentajeSeco, que representa el porcentaje de sequedad del zapato. Dentro de 
la función, se utiliza un ciclo while para verificar si el porcentaje es menor que 100 o mayor que 100. Si se cumple alguna 
de estas condiciones, se imprime un mensaje pidiendo que se actualice el porcentaje de sequedad y se vuelve a pedir al usuario
 que ingrese el porcentaje.

La función getPorcentajeCorrecto se utiliza para asegurar que el porcentaje ingresado por el usuario esté entre 0 y 100. Si 
el porcentaje es menor que 0 o mayor que 100, se pide al usuario que ingrese un nuevo valor.

Finalmente, se llama a la función isZapatoSeco pasándole como parámetro el porcentaje correcto obtenido con la función 
getPorcentajeCorrecto. El resultado de la función se asigna a la variable $mensaje, y luego se imprime en pantalla.
*/


// Esta función verifica si el zapato está lo suficientemente seco para usarlo
function isZapatoSeco ($porcentajeSeco){
    // Mientras el porcentaje sea menor que 100 o mayor que 100
    while ($porcentajeSeco < 100 or $porcentajeSeco > 100){
        // Imprime mensaje pidiendo actualizar el porcentaje de sequedad
        echo "\nToca dejarlos más tiempo.\n\n";
        $zapato = (int) readline ("Por favor actualice el porcentaje en el que los zapatos están secos (0-100): ");
        // Se asegura que el porcentaje esté entre 0 y 100
        $porcentajeSeco = getPorcentajeCorrecto($zapato);
    }
    // Si el porcentaje es 100, se retorna un mensaje indicando que se pueden usar los zapatos
    return "Por fin, ya puede entrar los zapatos\n";
}

// Esta función asegura que el porcentaje ingresado esté entre 0 y 100
function getPorcentajeCorrecto ($porcentaje){
    // Mientras el porcentaje sea menor que 0 o mayor que 100
    while ($porcentaje < 0 or $porcentaje > 100){
        // Pide al usuario que ingrese un nuevo porcentaje
        $porcentaje = (int) readline ("Error! El porcentaje debe estar entre (0-100) de sequedad: ");
        
    }
    // Se retorna el porcentaje
    return $porcentaje;
}

//Titulo inicial
echo "\nPrograma para saber si los zapatos están secos.\n\n";

//Primer mensaje de solicitud para saber el estado de sequedad de los zapatos
$zapato = (int) readline ("Escriba el porcentaje en el que los zapatos están secos (0-100): ");

// Se segura que el porcentaje esté entre 0 y 100
$porcentajeCorrecto = getPorcentajeCorrecto($zapato);

// Se verifica si el zapato está lo suficientemente seco para usarlo
$mensaje = isZapatoSeco($porcentajeCorrecto);

// Imprimir resultado de la funcion que pide saber si el zapato está seco
echo $mensaje;
