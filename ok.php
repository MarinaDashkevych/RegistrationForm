<?php

if ($_POST['userAge'] > 18) {
    echo "<br>";
    echo "<br>";
} else {
    echo "<h3>Для принятия  участия в мероприятии, вам должно быть 18</h3>";
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <h5>Вы успешно прошли регистрацию и добавлены в список <?= $_POST['userRole'] ?></h5>

    <table class="table">
        <thead>
        <tr>
            <th scope="row">#</th>
            <th>Имя
            </td>
            <th>Возраст
            </td>
            <th>Должность
            </td>
            <th>Коментарий
            </td>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($_POST as $key => $value): ?>
            <tr>
                <th scope="row">#</th>
                <td><?= $_POST['userName'] ?></td>
                <td><?= $_POST['userAge'] ?></td>
                <td><?= $_POST['userRole'] ?></td>
                <td><?= $_POST['text'] ?></td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
    <div>
        <a class="btn btn-primary" href="hello.php" role="button">Назад</a>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
</body>
</html>
