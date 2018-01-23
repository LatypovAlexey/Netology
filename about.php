<?php
$UserName = 'Алексей';
$Age = '29';
$Mail = 'alexey.weda@gmail.com';
$City = 'Екатеринбург';
$AboutMe = 'Очень хочу овладеть мастерством программирования';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
    <caption>Страница пользователя Алексей</caption>
    <tr><td>Имя</td><td><?=$UserName; ?></td></tr>
    <tr><td>Возраст</td><td><?=$Age; ?></td></tr>
    <tr><td>Адрес эл.почты</td><td><a href="#"> <?=$Mail; ?></a></td></tr>
    <tr><td>Город</td><td><?=$City; ?></td></tr>
    <tr><td>Комментарии</td><td><?=$AboutMe;?></td></tr>
</table>

</body>
</html>