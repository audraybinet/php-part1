<?php
$page = 'Exercice 6';
$isOk = true;
$message = '';
include '../header.php';

if($isOk)
{
$message = 'c\'est ok !!';
}
else
{
$message = 'c\'est pas bon !!!';
}
?>
<p><?= $message ?></p>
<?php include '../footer.php'; ?>
