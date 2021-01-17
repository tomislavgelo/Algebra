<?php

include '../model/Movie.php';
require '../repository/MovieRepository.php';
include '../interface/MovieInterface.php';

class MovieService implements MovieInterface
{
  public function showAllMovies()
  {
    $movies=new MovieRepository;
    $allMovies=$movies->getAllMovies();

    foreach($allMovies as $m)
    {
      echo "<tr>";
      $m->getId();
      echo "<td>"."<img src=../img/".$m->getImg()." height='200' width='120'>".'</td>';
      echo "<td>".$m->getTitle().'</td>';
      echo "<td>".$m->getYear().'</td>';
      echo "<td>".$m->getDuration().'</td>';
      echo "<td>"."<a href='../controller/MovieController.php?id=".$m->getId()."'>"."[obriši]"."</a>"."</td>";
      echo "</tr>";
    }
  }
  public function showMoviesByLetter($letter)
  {
    $movies=new MovieRepository;
    $allMovies=$movies->getMoviesByLetter($letter);

    foreach($allMovies as $m)
    {
      $m->getId();
      echo "<img src=../img/".$m->getImg()." height='200' width='120'>".'</br>';
      echo $m->getTitle().' ('.$m->getYear().')'.'<br>';
      echo 'Trajanje: '.$m->getDuration().' min'.'<br>';
    }
  }
  public function addNewMovie($title,$genreId,$releaseDate,$duration,$img)
  {
    $movie=new MovieRepository;
    $movie->insertNewMovie($title,$genreId,$releaseDate,$duration,$img);
  }

  private $supportedFormats=array('image/png','image/jpeg','image/jpg','image/gif');

  public function uploadPicture($title,$genreId,$releaseDate,$duration,$img)
  {
    if(is_array($img))
    {
      if(in_array($img['type'], $this->supportedFormats))
      {
        move_uploaded_file($img['tmp_name'], '../img/'.$img['name']);
        $movieImage=new MovieRepository;
        $movieImage->insertNewMovie($title,$genreId,$releaseDate,$duration,$img['name']);
      }
      else
      {
        header("Refresh: 4, url=../view/insert_form.php");
        die('Ne podržani format!');
      }
    }
    else
    {
      header("Refresh: 4, url=../view/insert_form.php");
      die('Slika nije prebačena!');
    }
  }
  public function deleteMovie($id)
  {
    $deleteMovie=new MovieRepository;
    $deleteMovie->removeMovie($id);
  }
  public function deleteMovieImage($id)
  {
    $deleteMovieImage=new MovieRepository;
    $delete=$deleteMovieImage->removeMovieImage($id);

    unlink("../img/".$delete[0]['slika']);
  }
}