<?php

/* Ce fichier permet la connexion avec la base de données */

class DataBaseConnection
{
    private static $database;

    public static function getDataBase()
    {
        return DataBaseConnection::$database;
    }

    public static function init()
    {
        try 
        {
            /* Connexion à MySQL */
            self::$database = new PDO('mysql:host='. Parameters::getHost() .';port=' . Parameters::getPort() . ';dataBaseName=' . Parameters::getDataBaseName() . ';charset=utf8', Parameters::getLogin(), Parameters::getPassword());
        } 
        catch (Exception $e) 
        {
            die('Erreur : ' . $e->getMessage());
        }

    }
}