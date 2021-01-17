<?php

interface MovieInterface
{
  public function showAllMovies();
  public function showMoviesByLetter($letter);
  public function addNewMovie($title,$genreId,$releaseDate,$duration,$img);
  public function uploadPicture($title,$genreId,$releaseDate,$duration,$img);
  public function deleteMovie($id);
  public function deleteMovieImage($id);
}