
<?php
                                require_once 'db.php';

                                $query = "SELECT * FROM arrival WHERE status = 1";
                                $result = mysqli_query($link, $query);

                                $flights = [];

                                while ($flight = mysqli_fetch_assoc($result)) {
                                    $flights[] = $flight;
                                }
                            ?>
                            <div class="col-sm-12">
                                <table class="table tablestyle">
                                    <thead>
                                        <tr>
                                            <th>Номер рейса</th>
                                            <th>Пункт отправления</th>
                                            <th>Пункт прибытия</th>
                                            <th>Время отправления</th>
                                            <th>Время прибытия</th>
                                        </tr>
                                    </thead>';
                            <?php   
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
                                echo '</table>';
                            ?>
                            </div>