<?php
$ROOT=dirname(dirname(__FILE__)).'/';
include $ROOT.'inc/header.php';
include $ROOT.'service/MovieService.php';
?>
<body>
  <div>
    <?php
    if($_GET!=null)
    {  
      $letter= $_GET['letter'];
      $movies=new MovieService;
      $check=new MovieRepository;
      if($check->getMoviesByLetter($letter)!=null)
      {
        $movies->showMoviesByLetter($letter);
      }
      else
      {
        echo 'U našoj bazi nema filma koji počinje na to slovo!';
      }
    }
    else
    {
      $movies=new MovieService;
      $movies->showAllMovies(); 
    }
    ?>
  </div>
</body>
<?php
include $ROOT.'inc/footer.php';
?>