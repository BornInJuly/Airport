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
});