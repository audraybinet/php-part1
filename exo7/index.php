<?php
$page = 'Exercice 6';
$isOk = false;
$message = '';
include '../header.php';

if($isOk == false)
{
$message = 'c\'est pas bon !!!';
}
else
{
$message = 'c\'est ok !!';
}
?>
<p><?= $message ?></p>
<?php include '../footer.php'; ?>
