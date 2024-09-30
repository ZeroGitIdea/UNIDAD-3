<?php
/*Carga en variables mes y año e indica el número de días del mes. Utiliza la
estructura de control switch*/
    /*Cargar mes y año en variables*/ 
    $mes = 2;
    $año = 2024;

    /* Inicializamos la variable para los días*/
    $dias = 0;

    /*Switch para calcular el número de días según el mes*/ 
    switch ($mes) {
        case 1:  /*Enero*/ 
        case 3:  /*Marzo*/
        case 5:  /*Mayo*/
        case 7:  /*Julio*/
        case 8:  /*Agosto*/
        case 10: /*Octubre*/
        case 12: /*Diciembre*/
            $dias = 31;
            break;

        case 4:  /*Abril*/
        case 6:  /*Junio*/
        case 9:  /*Septiembre*/
        case 11: /*Noviembre*/
            $dias = 30;
            break;

        case 2:  /*Febrero*/
            /*Verificamos si el año es bisiesto*/
            if (($año % 4 == 0 && $año % 100 != 0) || ($año % 400 == 0)) {
                $dias = 29;  /*bisiesto*/
            } else {
                $dias = 28;  /*no bisiesto*/
            }
            break;

        default:
            echo "Mes no válido.";  
    }

    /*Mostrar resultado*/
    echo "El mes $mes del año $año tiene $dias días.";
?>