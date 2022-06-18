<?php 
require 'app.php';
require 'config/database.php';
function incluirTemplate(string $nombre){
    include TEMPLATES_URL . "/${nombre}.php";
}
function ConectarDB(){

}
function debuguear($variable){
    
}