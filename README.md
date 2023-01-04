# secar_zapatos

Este código es un programa en PHP que se utiliza para determinar si un par de zapatos está lo suficientemente seco para poder usarlo.

La función isZapatoSeco recibe un parámetro $porcentajeSeco, que representa el porcentaje de sequedad del zapato. Dentro de la función, se utiliza un ciclo while para verificar si el porcentaje es menor que 100 o mayor que 100. Si se cumple alguna de estas condiciones, se imprime un mensaje pidiendo que se actualice el porcentaje de sequedad y se vuelve a pedir al usuario que ingrese el porcentaje.

La función getPorcentajeCorrecto se utiliza para asegurar que el porcentaje ingresado por el usuario esté entre 0 y 100. Si el porcentaje es menor que 0 o mayor que 100, se pide al usuario que ingrese un nuevo valor.

Finalmente, se llama a la función isZapatoSeco pasándole como parámetro el porcentaje correcto obtenido con la función getPorcentajeCorrecto. El resultado de la función se asigna a la variable $mensaje, y luego se imprime en pantalla.
