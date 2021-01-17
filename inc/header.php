<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="/new/SEMINAR6/css/style.css">
</head>
<body>
<header>
<?php
$TEST='/algebra/SEMINAR6/'.PHP_EOL;
$meni=range("A","Z");
foreach($meni as $letter){
  echo "|"."<a href='".$TEST."view/base.php?letter=".$letter."'>"." ".$letter." "."</a>";//napisana je apsolutna putanja tako da href radi bilo gdje u aplikaciji
}
echo "|".'<br/>';
?> 
</header>