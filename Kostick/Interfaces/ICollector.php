<?php

interface ICollector{

    /*Recibe un arreglo para realizar el conteo
    o seleccionar las sujerencias de interpretación
    a partir del conteo por cada categoría*/
    function DAA($array);

    function DV($array);

    function SES($array);
}

?>