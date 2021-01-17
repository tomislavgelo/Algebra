<?php

require_once '../db/DbConnection.php';

class MovieRepository
{
  private static $connection;
  private $supportedFormats=array('image/png','image/jpeg','image/jpg','image/gif'); 
  
  public function getAllMovies()
  {
    self::$connection=DbConnection::getConnection();
    $query='SELECT * FROM filmovi ORDER BY naslov ASC';
    $stmt=self::$connection->query($query);
    $result=$stmt->fetchAll();

    $movies=[];

    foreach($result as $row)
    {
      $m=new Movie(
        $row['id'],
        $row['naslov'],
        $row['id_zanr'],
        $row['godina'],
        $row['trajanje'],
        $row['slika']
      );
      array_push($movies,$m);
    }
    return $movies;
  }
  public function getMoviesByLetter($letter)
  {
    self::$connection=DbConnection::getConnection();
    $query="SELECT * FROM filmovi WHERE naslov LIKE '{$letter}%'";
    $stmt=self::$connection->query($query);
    $result=$stmt->fetchAll();

    $movies = [];
     
    foreach ($result as $row)
    {
      $m=new Movie(
        $row['id'],
        $row['naslov'],
        $row['id_zanr'],
        $row['godina'],
        $row['trajanje'],
        $row['slika']
      );
      array_push($movies,$m);
    }
    return $movies;
  }
  public function insertNewMovie($title,$genreId,$releaseDate,$duration,$img)
  {
    self::$connection=DbConnection::getConnection();
    $query="INSERT INTO filmovi (naslov, id_zanr, godina, trajanje, slika) VALUES ('{$title}','{$genreId}','{$releaseDate}','{$duration}','{$img}')";
    $stmt=self::$connection->query($query);
  }
  public function removeMovie($id)
  {
    self::$connection=DbConnection::getConnection();
    $query="DELETE FROM filmovi WHERE id = '{$id}'";
    $stmt=self::$connection->query($query);
  }
  public function removeMovieImage($id)
  {
    self::$connection=DbConnection::getConnection();
    $query="SELECT * FROM filmovi WHERE id = '{$id}'";
    $stmt=self::$connection->query($query);
    $result=$stmt->fetchAll();

    return $result;
  }
}