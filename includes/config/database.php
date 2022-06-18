<?php
function conectar(){
    $db = mysqli_connect('localhost', 'root', 'root','bakery_db');

    if($db){
        echo "se conecto";
    }else{
        echo "no se conecto";
    }

}
