<?php
$page = 'Exercice 5';
$gender = 'homme';
$message = '';
include '../header.php';
if($gender)
{
  $message = 'C\'est un développeur !!!';
}
else
{
  $message = 'C\'est une développeuse !!!';
}
?>
<p><?= $message ?></p>
<?php include '../footer.php'; ?>
