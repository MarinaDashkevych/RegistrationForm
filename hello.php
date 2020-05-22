<?php

$name = htmlspecialchars($_GET['userName']);
$age = htmlspecialchars($_GET['userAge']);
$role = htmlspecialchars($_GET['userRole']);
$text = $_POST['text'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <p><h5>Pегистрация на мероприятие</h5></p>

    <form action="ok.php" method="POST" class="form">
        <label for="">Имя</label>
        <div class="form-group">
            <input name="userName" type="text" class="form-control">
        </div>


    <form action="ok.php" method="POST" class="form">
        <label for="">Возраст</label>
        <div class="form-group">
            <input name="userAge" type="text" class="form-control">
        </div>

    <form action="ok.php" method="POST" class="form">
        <label for="ok.php">Должность</label>
        <select name="userRole" id="" class="form-control">
            <option value="student">Студент</option>
            <option value="worker">Работник</option>
        </select>


    <form action="ok.php" method="POST" class="form">
        <label for="ok.php">Коментарий</label>
        <div class="form-group">
            <textarea class="form-control" id="text_comment"></textarea>
        </div>


    <div>
        <button class="btn btn-primary">Отправить</button>
    </div>

</div>

</body>
</html>