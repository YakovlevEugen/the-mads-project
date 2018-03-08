var $document = $(document),
    $window = $(window);

$(function(){
    'use strict';

    $('.js-openDialog').MyCMSDialog();
    $('.js-slider').slick();
    svg4everybody();
    atvImg();

    var $posterSlider = $('.js-posterSlider').slick({
        appendArrows: $('.poster-slider-arrows'),
        appendDots: $('.poster-slider-dots'),
        dots: true,
        infinite: true
    });

    var time = 4,
        $bar = $('.slider-progress__progress'),
        isPause,
        tick,
        percentTime;

    $('.poster-slider-layout').on({
        mouseenter: function() {
            isPause = true;
        },
        mouseleave: function() {
            isPause = false;
        }
    });

    function startProgressbar() {
        resetProgressbar();
        percentTime = 0;
        isPause = false;
        tick = setInterval(interval, 10);
    }

    function interval() {
        if(isPause === false) {
            percentTime += 1 / (time + 0.1);
            $bar.css('width', percentTime+"%");

            if(percentTime >= 100) {
                $posterSlider.slick('slickNext');
                startProgressbar();
            }
        }
    }

    function resetProgressbar() {
        $bar.css('width', 0+'%');
        clearTimeout(tick);
    }

    startProgressbar();

    $document.on('click', '.js-openDialogAjax', function(){
        var $this = $(this),
            title = $this.data('title'),
            cssClass = $this.data('cssclass'),
            hrefID = $this.attr('href').split('#'),
            url = '/templates/popup/' + hrefID[1] + '.tpl.php';

        $.ajax({
            url: url,
            success: function(data){
                MyCMSDialog.closeAll();
                MyCMSDialog.open({
                    'title': title,
                    'cssClass': cssClass,
                    'content': data,
                    'open': function(){
                    }
                });
            }
        });

        return false;
    });

    $document.on('click', '.js-closeDialog', function(){
        MyCMSDialog.closeAll();

        return false;
    });

    $document.lightGallery({
        selector: '.lightbox',
        thumbnail: false,
        download: false
    });

    $document.on('click','.js-goUp',function(){
        $('body,html').animate({
            scrollTop: 0
        }, 800);

        return false;
    });

});

$window.on('scroll', function(){
    scrollTgglClass($('.js-goUp'), 300, 'visible');
});

function scrollTgglClass(obj, space, className) {
    if($window.scrollTop() > space) {
        obj.addClass(className);
    } else {
        obj.removeClass(className);
    }
}