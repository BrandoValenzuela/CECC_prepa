<?php
class Conexion
{
    public static function obtenerConexion(){
        $pdo = new PDO('mysql:host=localhost;dbname=cecc_prepa;charset=utf8', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $pdo;
    }
}
?>