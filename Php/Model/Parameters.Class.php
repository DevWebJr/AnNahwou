<?php
class Parameters
{
    private static $adresseRoot;
    private static $serverRoot;
    private static $host;
    private static $port;
    private static $dataBaseName;
    private static $login;
    private static $password;
    
    /* Getters & Setters */

    public static function getAdresseRoot()
    {
        return Parameters::$adresseRoot;
    }
    public static function getServerRoot()
    {
        return self::$serverRoot;
    }
    public static function getHost()
    {
        return self::$host;
    }
    public static function getPort()
    {
        return self::$port;
    }
    public static function getDataBaseName()
    {
        return self::$dataBaseName;
    }
    public static function getLogin()
    {
        return self::$login;
    }
    public static function getPassword()
    {
        return self::$password;
    }

    /* initialize */
    public static function initialize()
    { /* la fonction initialize créé le lien avec le fichier parameters.ini */
        if (file_exists("parameters.ini")) $file="parameters.ini"; else $file="../../parameters.ini";

        $fileAction = fopen($file, "r");

        while (!feof($fileAction))
        {
            $line = fgets($fileAction, 4096);
            if ($line)
            {
                $data = explode(":", $line);
                $parametersTab[] = substr($data[1], 0, strlen($data[1]) - 2);
            }
        }

        self::$serverRoot = $parametersTab[0];
        self::$adresseRoot = $parametersTab[1];
        self::$host = $parametersTab[2];
        self::$port = $parametersTab[3];
        self::$dataBaseName = $parametersTab[4];
        self::$login = $parametersTab[5];
        self::$password = $parametersTab[6];
    }

}