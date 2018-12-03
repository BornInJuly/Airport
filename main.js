$(document).ready(function(){

    $('button').mouseenter(function() {
        $(this).css('background','rgba(255,255,255,0.3)');
    });
    
    $('button').mouseleave(function() {
        $(this).css('background','transparent');
    });

    $('.departure').click(function() {
        document.location.href = "departure.php";
    });
    
    $('.arrival').click(function() {
        document.location.href = "arrival.php";
    });

    $('.delay').click(function() {
        document.location.href = "delay.php";
    });

    $('.tomain').click(function() {
        document.location.href = "index.php";
    });

    $('#searchform').submit(function() {
        var sdata = $('.searchtext').val();

        var data = {
            sdata: sdata,
        }

        data = JSON.stringify(data);
        console.log(data);
        
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'search.php', true);
        xhr.setRequestHeader('Content-type', 'application/json');
        xhr.send(data);

        xhr.onreadystatechange = function() {
            if (xhr.readyState != 4) {
                return;
            }
            
            var response = JSON.parse(xhr.responseText);
            console.log(response); 

            if (xhr.status == 200) {
                $('.receiver').animate(
                    { top:'70px',
                }
                ,1000);

                if (response == 'toarrival') {
                    
                    $('.receiver').html('<p>Рейс номер '+ sdata + ' найден среди рейсов прибытия! Вы перенаправляетесь на страницу. </p>');
                   
                    setTimeout(function() {
                        $('.receiver').animate({top:'-250px'},1000);
                    }, 3000);

                    setTimeout(function() {
                        document.location.href = "arrival.php";
                    }, 4000);
                   

                } else if (response == 'todeparture') {

                    $('.receiver').html('<p>Рейс номер '+ sdata + ' найден среди рейсов вылета! Вы перенаправляетесь на страницу. </p>');
                   
                    setTimeout(function() {
                        $('.receiver').animate({top:'-250px'},1000);
                    }, 3000);

                    setTimeout(function() {
                        document.location.href = "departure.php";
                    }, 4000);
                   

                } else if (response == 'todelay') {

                    $('.receiver').html('<p>Рейс номер '+ sdata + ' найден среди задержанных рейсов! Вы перенаправляетесь на страницу. </p>');
                   
                    setTimeout(function() {
                        $('.receiver').animate({top:'-250px'},1000);
                    }, 3000);

                    setTimeout(function() {
                        document.location.href = "delay.php";
                    }, 4000);
                   

                } else {

                    $('.receiver').html('<p>Рейс номер '+ sdata + ' не найден! Попробуйте изменить запрос. </p>');
                   
                    setTimeout(function() {
                        $('.receiver').animate({top:'-250px'},1000);
                    }, 3000);

                }
            }
        }

        return false;
    });

});