<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="libs/bootstrap.min.css"> -->
    <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="wrapper_0_main">
        <div class="black">
            <div class="central-part">
                <main>
                    <div class="onslide">
                        <form id="searchform" method="POST" action="search.php">
                            <input class="searchtext" type="text" placeholder="Введите номер рейса">
                            <button id="searchbutton" type="submit">Найти</button>
                        </form>
                        <div class="receiver"></div>
                        <div class="onslide-text">
                            <h1 class="hello_main">ДОБРО ПОЖАЛОВАТЬ В АЭРОПОРТ!</h1>
                        </div>
                        <div class="buttons">
                            <button class="buttons-item departure">Вылет</button>
                            <button class="buttons-item arrival">Посадка</button>
                            <button class="buttons-item delay">Задержка</button>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
    
    <!-- <script src="libs/popper.min.js"></script>
    <script src="libs/bootstrap.min.js"></script> -->
    <script src="libs/jquery-3.3.1.min.js"></script>
    <script src="main.js"></script>

</body>
</html>