<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device=width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
          rel="stylesheet" 
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" 
          crossorigin="anonymous">
    <link rel="stylesheet"
          href="css/style.css" />
    
    <title>Форма регістрації</title>
</head>
<body>
    <div class="container mt-4">

        <?php if($_COOKIE["user"] == ""): ?>
        <div class="row">
            <div class="col">
                <h1>Форма регістрації</h1>
                <form action="validation-form/check.php" method="post">
                    <input type="text" class="form-control" 
                           name="login" 
                           id="login" 
                           placeholder="Логін"/> <br />
            
                    <input type="text" class="form-control" 
                           name="name" 
                           id="name" 
                           placeholder="Ім'я"/> <br /> 
            
                    <input type="password" class="form-control" 
                           name="pass" 
                           id="pass" 
                           placeholder="Пароль"/> <br />
            
                    <button class="btn btn-success"
                            type="submit">Зараєструватися</button>
                </form>
            </div>
            <div class="col">
                <h1>Форма авторизації</h1>
                <form action="validation-form/auth.php" method="post">
                    <input type="text" class="form-control" 
                           name="login" 
                           id="login" 
                           placeholder="Логін"/> <br />
            
                    <input type="password" class="form-control" 
                           name="pass" 
                           id="pass" 
                           placeholder="Пароль"/> <br />
            
                    <button class="btn btn-success"
                            type="submit">Авторизуватися</button>
                </form>
            </div>
        </div>
        
        <?php else: ?>
        <p>
            Привіт <?=$_COOKIE["user"]?>. 
            Щоб вийти, нажміть
            <a href="/exit.php"> тут</a>.
        </p>

        <?php endif;?>
    
    </div>

</body>
</html>