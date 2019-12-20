<?php
require(__DIR__.'/index.php');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?=$title?></title>
    <style type="text/css">.red {color: red;}</style>
</head>
<body>
<h1 <h1 <?= $red ? 'class="red"':""?>><?=$title?></h1>
<div>Авторов на портале <?=count($result3['author'])?></div>
<!-- Выведите все книги -->
<p><?php
    foreach ($result3['book'] as $book){
        echo sprintf("Книга %s, ее написал %s %s года рождения Email: %s ", $book['name'], $result3['author'][$book['author']]['FIO'], $result3['author'][$book['author']]['DateBirthday'], $book['author']); ?>
        <br>
    <?}?>
</p>

</body>
</html>
