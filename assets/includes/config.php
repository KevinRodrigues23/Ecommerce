<?php
$mysql = new mysqli('localhost','root','','cyberamerican');
$mysql->set_charset('utf8');


if ($mysql == TRUE){
    echo "conectado";
} else {
        echo "desconetado";
}

?>