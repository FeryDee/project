<?php

class Database{
    private static $host="localhost";
    private static $port="3307";
    private static $dbname="hms_new";
    private static $username="root";
    private static $password="";
    private static $cont="";

    public static function connect()
    {
        if(null==self::$cont)
        {
            try {
                self::$cont=new PDO("mysql:host=".self::$host.";port=".self::$port.";dbname=".self::$dbname,self::$username,self::$password,);
            } catch (PDOException $e) {
                //throw $th;
                echo $e->getMessage();
            }

        }
        return self::$cont;
    }

    public static function disconnect()
    {
        self::$cont=null;
    }
}

?>