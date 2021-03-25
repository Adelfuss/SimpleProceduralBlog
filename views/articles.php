<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="views/style.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1> Мой первый блог</h1>
    <a href = "admin" >Панель Админа</a>
    <div>
        <?php foreach ($articles as $a) : ?>
        <div class="article">
            <h3> <a href="article.php?id = <?=$a['id']?>"> <?=$a['title']?> </a></h3>
        <em>Опубликовано : <?=$a['date']?> </em>
        <p><?=article_intro($a['content'])?></p>
        </div>
        <?php endforeach; ?>
    </div>
    <footer>
        <p>
            Мой первый блог <br> Copyright &copy; 2020
        </p>
    </footer>
</div>
</body>
</html>
