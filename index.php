<?php

$position = strpos('toto[at]gmail.com', '@');

if ($position === false)
    $msg = "Pas d'arobase";
else
    $msg = "Arobase";

echo $msg;
