<?php
  $page = 'Exercice 3';
  $gender = 'femme';
  $age = 32;
  include '../header.php';

  if($gender == 'femme' || $age > 18)
  {?>
    <p>vous etes une <?=$gender ?> et vous êtes majeur</p>
    <?php
  }
  else
  {?>
    <p>vous etes une <?=$gender ?> et vous êtes mineur</p>
    <?php
  }

include '../footer.php'; ?>
