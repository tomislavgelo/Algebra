<?php
include '../service/MovieService.php';

if($_GET != null)
{
  $get=$_GET['id'];
  $deleteMovie=new MovieService;
  $deleteMovie->deleteMovieImage($get);
  $deleteMovie->deleteMovie($get);
  header("Location: ../view/insert_form.php");
}

if($_POST != null)
{
  $post=$_POST;
  $newMovie=new MovieService;
  $newMovie->uploadPicture($_POST['name'],$_POST['genre'],$_POST['year'],$_POST['duration'],$_FILES['img']);
  header("Location: ../view/insert_form.php");
}