<?php

include '../model/Genre.php';
include '../repository/GenreRepository.php';

class GenreService
{
  public function showAllGenres()
  {
    $genres=new GenreRepository;
    $allGenres=$genres->getAllGenres();

    foreach($allGenres as $g)
    {
      echo $g->getId().'<br>';
      echo $g->getName().'<br>';
    }
  }
  public function genresAsOptions()
  {
    $genres=new GenreRepository;
    $allGenres=$genres->getAllGenres();
    
    foreach($allGenres as $g)
    {
      echo '<option value="'.$g->getId().'">'.$g->getName().'</option>';
    }
  }
}