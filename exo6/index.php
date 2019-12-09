<?php
$page = 'Exercice 6';
$age = 18;
$message = '';
include '../header.php';

if($age >= 18)
{
$message = 'Tu es majeur';
}
else
{
$message = 'Tu n\'es pas majeur';
}
?>
<p><?= $message ?></p>
<?php include '../footer.php'; ?>
