<?php

interface ICollector{

    /*Recibe un arreglo para realizar el conteo
    o seleccionar las sugerencias de interpretación
    a partir del conteo por cada categoría*/
    function DAA($array = array());

    function DV($array = array());

    function SES($array = array());
}

?>