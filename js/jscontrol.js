$(document).ready(function(){
    $('.next').on('click',function(){
        var currentImg = $('.activep');
        var nextImg = currentImg.next();

        if (nextImg.length){
            currentImg.removeClass('activep').css('z-index', -10);
            nextImg.addClass('activep').css('z-index', 10);
        }
    });

    $('.prev').on('click',function(){
        var currentImg = $('.activep');
        var prevImg = currentImg.prev();

        if (prevImg.length){
            currentImg.removeClass('activep').css('z-index', -10);
            prevImg.addClass('activep').css('z-index', 10);
        }
    });
});