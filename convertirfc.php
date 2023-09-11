<?php
    $f_c=$_POST["F_C"];
    
    $webservice="https://apps.learnwebservices.com/services/tempconverter?wsdl";

    $parametros=array();
    $parametros['TemperatureInFahrenheit']=$f_c;

    $SW=new SoapClient($webservice,$parametros);

    $fc=$SW->FahrenheitToCelsius($parametros);
    $resultadofc=$fc->TemperatureInCelsius;
    echo $resultadofc;
?>