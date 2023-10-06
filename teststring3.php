<?php
    $text = "Eu Amo A Igreja Una, Santa, Católica, e Apostólica";

    // $result = strstr($text, "Igreja", true);

    $result = strstr($text, "Igreja", false);

    echo $result;
?> 