<?php

    include 'db.php';

    $postData = file_get_contents('php://input');
    $data = json_decode($postData, true);

    $sdata = $data['sdata'];
    
    $query = "SELECT flight_id FROM arrival WHERE flight_name = '$sdata' AND astatus = 1";
    $result = mysqli_query($link,$query);
    mysqli_num_rows($result);

        if (mysqli_num_rows($result) != 0) {

            echo json_encode('toarrival');

        } else {
            $query = "SELECT flight_id FROM departure WHERE flight_name = '$sdata' AND dstatus = 1";
            $result = mysqli_query($link,$query);
            mysqli_num_rows($result);

            if (mysqli_num_rows($result) != 0) {

                echo json_encode('todeparture');

            } else {
                $query = "SELECT flight_id FROM arrival WHERE flight_name = '$sdata' AND astatus = 2";
                $result = mysqli_query($link,$query);
                mysqli_num_rows($result);
    
                if (mysqli_num_rows($result) != 0) {
    
                    echo json_encode('todelay');
    
                } else {
                    $query = "SELECT flight_id FROM departure WHERE flight_name = '$sdata' AND dstatus = 2";
                    $result = mysqli_query($link,$query);
                    mysqli_num_rows($result);
        
                    if (mysqli_num_rows($result) != 0) {
        
                        echo json_encode('todelay');
        
                    }  else {
                        
                        echo json_encode('notfound');

                    }

            }
            }
        } 
        
    ?>