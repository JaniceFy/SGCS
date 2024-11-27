<?php

function conectar() {
    $host = 'localhost';
    $usuario = 'root';
    $contraseña = '';
    $nombre_bd = 'tics';
    

    $conn = new mysqli($host, $usuario, $contraseña, $nombre_bd);


    if ($conn->connect_error) {
        return null;
    }
    
    return $conn;
}
