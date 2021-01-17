<?php

class Movie
{
  public $id;
  public $title;
  public $id_genre;
  public $year;
  public $duration;
  public $img;

  public function __construct($id,$title, $id_genre, $year, $duration, $img)
  {
    $this->id = $id;
    $this->title = $title;
    $this->id_genre = $id_genre;
    $this->year = $year;
    $this->duration = $duration;
    $this->img = $img;
  }
  public function getId()
  {
      return $this->id;
  }
  public function getTitle()
  {
      return $this->title;
  }
  public function getIdGenre()
  {
      return $this->id_genre;
  }
  public function getYear()
  {
      return $this->year;
  }
  public function getDuration()
  {
      return $this->duration;
  }
  public function getImg()
  {
      return $this->img;
  }
}