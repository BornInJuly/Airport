<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="libs/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
    <title>Departure</title>
</head>
<body>
    <div class="wrapper_0_dep" id="main">
        <div class="black_notmain">
            <div class="central-part">
                <main>
                    <div class="onslide">
                        <div class="onslide-text">
                            <h1 class="hello_notmain">СПИСОК ВЫЛЕТАЮЩИХ РЕЙСОВ:</h1>
                        </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-sm-12" style="overflow-x:auto; margin-right:15px;">
                                <table class="table tablestyle">
                                    <thead>
                                        <tr>
                                            <th scope="col">Номер рейса</th>
                                            <th scope="col">Пункт отправления</th>
                                            <th scope="col">Пункт прибытия</th>
                                            <th scope="col">Время отправления</th>
                                            <th scope="col">Время прибытия</th>
                                        </tr>
                                    </thead>
                                        <?php
                                        require_once 'db.php';

                                        $query = "SELECT * FROM departure WHERE dstatus = 1";
                                        $result = mysqli_query($link, $query);
        
                                        $flights = [];
        
                                        while ($flight = mysqli_fetch_assoc($result)) {
                                            $flights[] = $flight;
                                        }
                                        foreach ($flights as $flight) {
                                            echo'<tbody>
                                                    <tr>
                                                        <th scope="row">'.$flight['flight_name'].'</th>
                                                        <td>'.$flight['dep_point'].'</td>
                                                        <td>'.$flight['arr_point'].'</td>
                                                        <td>'.$flight['dep_time'].'</td>
                                                        <td>'.$flight['arr_time'].'</td>
                                                    </tr>
                                                </tbody>';
                                        }
                                        ?>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="buttons">
                        <button class="buttons-item departure">Вылет</button>
                        <button class="buttons-item arrival">Посадка</button>
                        <button class="buttons-item delay">Задержка</button>
                        <button class="buttons-item tomain">На главную</button>
                    </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
    
    <script src="libs/popper.min.js"></script>
    <script src="libs/bootstrap.min.js"></script>
    <script src="libs/jquery-3.3.1.min.js"></script>
    <script src="main.js"></script>

</body>
</html>