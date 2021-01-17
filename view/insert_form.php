<?php
include '../service/GenreService.php';
include '../service/MovieService.php';
$ROOT=dirname(dirname(__FILE__)).'/';
include $ROOT.'inc/header.php';
$test=new GenreService;
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <div>
    <form action="../controller/MovieController.php" method="POST" enctype="multipart/form-data">
      <table>
        <tr>
          <td>
            <label>Naslov:</label>
          </td>  
          <td>
            <input type="text" name="name">
          </td>
        </tr>
        <tr>
          <td>
            <label>Žanr:</label>
          </td>  
          <td>
            <select name="genre">
              <?php
              $test->genresAsOptions();
              ?>
            </select>
          </td> 
        </tr>  
        <tr>
          <td>
            <label>Godina:</label>
          </td>
          <td>
            <select name="year">
              <?php 
              $i = 1900;
              while($i<=date("Y"))
              {
                echo "<option>$i</option>";
                $i++;
              }
              ?>
            </select>
          </td>
        </tr> 
        <tr>
          <td>
            <label>Trajanje:</label>
          </td>
          <td>
            <input type="number" name="duration">
          </td>
        </tr>
        <tr>
          <td>
            <label>Slika:</label>
          </td>
          <td>
            <input type="file" name="img"/>
          </td>
        </tr>
        <tr>
          <td>
            <input type="submit" value="Gumb">
          </td>
        </tr>
        <tr>
          <td>
            <a href="../index.php">Povratak</a>
          </td>
        </tr>
      </table>
    </form>
  </div>
  <div>
    <table>
      <thead>
        <td>Slika</td>
        <td>Naslov filma</td>
        <td>Godina</td>
        <td>Trajanje</td>
        <td>Akcija</td>
      </thead>
      <tbody>
        <?php $movies=new MovieService;
        $movies->showAllMovies();?>
      </tbody>
    </table>
  </div>
</body>
</html>