<?php

$variable01 = true;

$variable02 = false;

$variable03 = 0;

$variable04 = 1;

$variable05 = 6;

$variable06 = '';

$variable07 = "3";

$variable08 = "true";

$variable09 = 'false';

$variable10 = null;

function tipoDato($variable10)
{
    if ( $variable10 == true )
    {
        echo 'el valor' . $variable10 . 'es verdadero.';
    }
    else
    {
        echo 'el valor' . $variable10 . 'es falso.';
    }
}

tipoDato($variable10);

?>
