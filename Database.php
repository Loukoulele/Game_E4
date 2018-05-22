<?php

//$db = new PDO('mysql:host=localhost;dbname=gamee4', 'root', '');
//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

class Database
{
  private static $dbHost = "localhost";
  private static $dbName = "gamee4";
  private static $dbUser = "root";
  private static $dbUserPassword = "root";

  private static $connection = null;

  public static function connect()
  {
    try
    {
      self::$connection = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName,self::$dbUser,self::$dbUserPassword);
    }
    catch(PDOException $e)
    {
      die($e->getMessage());
    }
    return self::$connection;
  }

  public static function disconnect()
  {
    self::$connection = null;
  }
}
#Test
 ?>
