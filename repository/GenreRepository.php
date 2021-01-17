<?php

require_once '../db/DbConnection.php';

class GenreRepository
{
  private static $connection;

  public function getAllGenres()
  {
    self::$connection=DbConnection::getConnection();
    $query='SELECT * FROM zanr';
    $stmt=self::$connection->query($query);
    $result=$stmt->fetchAll();
    
    $genres=[];

    foreach($result as $row)
    {
      $g=new Genre(
        $row['id'],
        $row['naziv']
      );
      array_push($genres,$g);
    }
    return $genres;
  }
}