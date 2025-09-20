<?
$name = 'Крапчин Александр Геннадьевич';
$age = 19;
?>
<title><?= $name?></title>
<?for ($age; $age > 0; $age-- ):?>
    <p> <?= $age?> Статичный текст </p>
<?endfor;?>