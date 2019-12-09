<?php
$page = 'Exercice 1';
$age = 37;
$message = '';
include '../header.php';

if($age >18)
{
  $message = 'Vous êtes majeur';
}
else
{
  $message = 'Vous êtes mineur';
}
?>
<p><?= $message ?></p>
<?php include '../footer.php'; ?>
