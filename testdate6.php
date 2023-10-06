<?php
    $atual = New DateTime();
    $especifica = New DateTime('1990-01-22');
    $texto = New DateTime('+1 month');

    print_r($atual);
    print_r($especifica);
    print_r($texto);

?>