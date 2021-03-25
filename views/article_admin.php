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
      <h1>Мой первый блог</h1>
      <div>
         <form method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
             <div class="form-item">
                 <label>
                     Название
                     <input type="text" value="<?=$article['title']?>" name="title"  autofocus required>
                 </label>
             </div>
             <div class="form-item">
                 <label>
                     Дата
                     <input type="date" value="<?=$article['date']?>" name="date"  required>
                 </label>
             </div>
             <div class="form-item">
                 <label>
                     Содержимое
                     <textarea  name="content" required> <?=$article['content']?></textarea>
                 </label>
             </div>
             <input type="submit" value="Сохранить">
         </form>
      </div>
      <footer>
          <p>
              Мой первый блог <br> Copyright &copy; 2020
          </p>
      </footer>
  </div>
</body>
</html>
