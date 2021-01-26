<?php
  require("variable.php");

  $id = $_GET['id'];
  

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <title><?=$works[$id]['title']; ?></title>
</head>

<body>
   <div class="container">
        <div class="row">
            <img src=<?=$works[$id]['img']; ?>>
        </div>
        <div class="row mt-4">
          <div class="col">
            <h1 class="title"><?=$works[$id]['title']; ?></h1>
          </div>
        </div>
        
       
        
        
        <div class="row">
          <div class="col">
            <b>Используемые технологии:</b>
            <span class="tag"><i class="fab fa-html5"></i> HTML</span>
            <span class="tag"><i class="fab fa-css3-alt"></i> CSS</span>
            <span class="tag">JS</span>
            <span class="tag"><i class="fab fa-vuejs"></i>Vue.js</span>
            <span class="tag">PHP</span>
          </div>
        </div>
        <div class="row mt-3 mb-3">
          <div class="col">
            <div class="progress">
              <div class="progress-bar pb1" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">HTML</div>
              <div class="progress-bar bg-success pb2" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">CSS</div>
              <div class="progress-bar bg-info  pb3" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">Vue.js</div>
              <div class="progress-bar bg-danger pb4" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">PHP</div>
            </div>
          </div>
        </div>
        <div class="row mt-2">
          <div class="col">
            <p>
              <?=$works[$id]['description']; ?>
            </p>
          </div>
        </div>
        <div class="row">
          
        <hr>
        <div class="row">
          <?php foreach ($works[$id]['work-img'] as $workImg): ?>
          <div class="col-lg-6 pr-lg-0">
            <?php $str = "\"background-image: url(" . $workImg . ")\"";?>
            <div style=<?=$str;?> class="project-image img1"></div>
          </div>
          <?php endforeach;?>
        </div>
</body>