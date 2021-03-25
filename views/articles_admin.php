<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../views/style.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1> Мой первый блог</h1>
    <a href = "index.php?action=add" >Добавить Статью</a>
    <div>
        <table>
            <tr>
                <th>Дата</th>
                <th>Заголовок</th>
                <th></th>
                <th></th>
            </tr>
        <?php foreach ($articles as $a) : ?>
              <tr>
                  <td><?=$a['date'] ?></td>
                  <td><?=$a['title'] ?></td>
                  <td><a href="index.php?action=edit&id=<?=$a['id']?>">Редактировать</a></td>
                  <td><a href="index.php?action=delete&id=<?=$a['id']?>">Удалить</a></td>
              </tr>
        <?php endforeach; ?>
        </table>
    </div>
    <footer>
        <p>
            Мой первый блог <br> Copyright &copy; 2020
        </p>
    </footer>
</div>
</body>
</html>

