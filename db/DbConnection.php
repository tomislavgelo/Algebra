<?php
class DbConnection
{
  private static $connection=null;

  public static function getConnection()
  {
    if(self::$connection==null)
    {
      try
      {
        self::$connection = new PDO("mysql:host=localhost;dbname=kolekcija",'root','');
      }
        catch(PDOException $e)
      {
        die("Error while connecting to database!");
      }
    }
    return self::$connection;
  }
}