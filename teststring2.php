<?php
    $text = "Eu Amo A Igreja Una, Santa, Católica, e Apostólica";

    $length = strpos($text, ", e Apostólica");

    $result = substr($text, 0 , $length);

    echo $result;
?> 