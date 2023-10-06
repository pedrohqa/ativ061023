<?php
findZero('01234');

function findZero($numberString) {
    if(strstr($numberString, '0', false)){
        echo "encontrado o zero";
    }else{
        echo "Não encontrado o zero";
    }
}
?>