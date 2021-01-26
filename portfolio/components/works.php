<?php
  require("variable.php");
?>

<hr>

<h4>Мои работы <i class="fas fa-briefcase"></i>:</h4>

<div class="row">
  <?php foreach ($works as $key => $work): ?>
  <?php $link = "\"project.php?id=" . $key . "\"";?>
  <div class="col-lg-6 works-element">
    <a href=<?= $link;?> target="_blank">
      <div class="img__wrapper">
        <div class="works-element__image" style="background-image: url"(<?=$work['image']; ?>)"></div>
      </div>
    </a>

    <p class="works-element__header">
      <?=$work['title']; ?>
    </p>

    <p class="works-element__desc"> 
      <?=$work['description']; ?>
    </p>

    <a class="works-element__link" href="work.html" target="_blank">Подробнее</a>
  </div>
  <?php endforeach; ?>
  
</div>