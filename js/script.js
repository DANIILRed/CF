
$(function () {
    let header = $("#header");
    let intro = $("#intro");
// Создание классов
    let introH;
    let scrollPos = $(window).scrollTop();

// Функция следования меню за страницей
    $(window).on("scroll load resize", function () {
        introH = intro.innerHeight();
        scrollPos = $(this).scrollTop();


        if (scrollPos > introH) {
            header.addClass("fixed");
        } else {
            header.removeClass("fixed");

        }

    });



    /* Reviews https://kenwheeler.github.io/slick/*/
    let slider = $("#reviewsSlider");

    slider.slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: false,
        arrows: true
    });


    /* Sale https://kenwheeler.github.io/slick/*/
    let slidere = $("#SalesSlider");

    slidere.slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        arrows: false
    });


    /* Product */
    var MainImg = document.getElementById("MainImg");
    var smallimg = document.getElementsByClassName("small-img");

    smallimg[0].onclick = function () {
        MainImg.src = smallimg[0].src;
    }
    smallimg[1].onclick = function () {
        MainImg.src = smallimg[1].src;
    }
    smallimg[2].onclick = function () {
        MainImg.src = smallimg[2].src;
    }
    smallimg[3].onclick = function () {
        MainImg.src = smallimg[3].src;
    }
    
    /* Related */
    let sliderg = $("#RelatedSlider");

    sliderg.slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: false,
        arrows: true
    });

    

   

});











