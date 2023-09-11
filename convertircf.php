<?php
    $c_f=$_POST["C_F"];
    
    $webservice="https://apps.learnwebservices.com/services/tempconverter?wsdl";

    $parametros=array();
    $parametros['TemperatureInCelsius']=$c_f;

    $SW=new SoapClient($webservice,$parametros);

    $cf=$SW->CelsiusToFahrenheit($parametros);
    $resultadocf=$cf->TemperatureInFahrenheit;
    echo $resultadocf;
?>