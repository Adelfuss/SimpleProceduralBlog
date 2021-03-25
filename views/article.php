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
     <div class="article">
         <h3><?=$article['title']?></h3>
         <em>Опубликовано : <?=$article['date']?> </em>
         <p><?=$article['content']?></p>
     </div>
     <footer>
         <p>
             Мой первый блог <br> Copyright &copy; 2020
         </p>
     </footer>
 </div>
</body>
</html>
