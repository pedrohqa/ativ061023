<?php
    $atual = New DateTime();
    $especifica = New DateTime('1990-01-22');
    $texto = New DateTime('+1 month');

    echo $atual->format('d-m-Y H:i:s') . "<br>"; 
    echo $especifica->format('1990-01-22') . "<br>";
    echo $texto->format('d-m-Y H:i:s') . "<br>";

?>