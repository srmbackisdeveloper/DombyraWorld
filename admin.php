<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
 <meta name="viewport" content="initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible", content="ie=edge">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Admin</title>
</head>
<body>
    <header>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">

    <a class="p-2 text-dark" href="index.php"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-music-note-list" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M12 13c0 1.105-1.12 2-2.5 2S7 14.105 7 13s1.12-2 2.5-2 2.5.895 2.5 2z"/>
  <path fill-rule="evenodd" d="M12 3v10h-1V3h1z"/>
  <path d="M11 2.82a1 1 0 0 1 .804-.98l3-.6A1 1 0 0 1 16 2.22V4l-5 1V2.82z"/>
  <path fill-rule="evenodd" d="M0 11.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 7H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 3H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z"/>
</svg></a>

  <a class="p-2 text-dark" href="index.php"><h5 class="my-0 mr-md-auto font-weight-normal" href="index.php">Домбыра World</h5></a>
    <h5 class="my-0 mr-md-auto font-weight-normal" href="index.php"></h5>

  <nav class="my-2 my-md-0 mr-md-3">

<a class="p-2 text-dark">Админ-панель</a>

  </nav>

</div>
</header>

<!-- form that adds the data into the database -->
                         <!-- executing the php  -->
<form class="container" action="admin_insert.php" method="POST">
    <!-- heading  -->
    <h1 class=" container  mb-3 font-weight-normal">Заполнение</h1>

    <h3> Название статьи:</h3>
    <!-- the box for filling  -->
    <input type="text" name="article_title" class="container form-control" placeholder="Название"> <br>

    <h3> Содержание статьи:</h3>
    <input type="text" name="article_text" class="container form-control" placeholder="Содержание"> <br><br>
    <!-- button  -->
    <input type="submit" class="container mt-2 btn btn-lg btn-secondary btn-block">
</form>


<hr>



<form class="container" action="admin_delete.php" method="POST">
    <h1 class=" container  mb-3 font-weight-normal">Удаление</h1>

    <h3> Название статьи:</h3>
    <input type="text" name="article_title" class="container form-control" placeholder="Название"> <br>

    <input type="submit" class="container mt-2 btn btn-lg btn-secondary btn-block">
</form>


<hr>



<form class="container" action="admin_update.php" method="POST">
    <h1 class=" container  mb-3 font-weight-normal">Обновление</h1>

    <h3> Название статьи:</h3>
    <input type="text" name="article_title" class="container form-control" placeholder="Название"> <br>

    <h3> Новый текст статьи:</h3>
    <input type="text" name="article_new_text" class="container form-control" placeholder="Название"> <br>

    <input type="submit" class="container mt-2 btn btn-lg btn-secondary btn-block">
</form>

<br>


</body>
</html>