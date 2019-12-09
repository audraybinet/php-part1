<?php
  $page = 'Exercice 2';
  $isEasy = true;
  include '../header.php';
  $message = 'pas facile';
  if($isEasy)
  {
    $message = 'facile';
  }
?>
<p><?= $message ?></p>
<?php include '../footer.php'; ?>
