/* Слайдер с вертикальной прокруткой на странице "Двери - Карточка товара" */
$(document).ready(function(){
     $('.slider-for').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: '.slider-nav',
      verticalSwiping: true
    });
    $('.slider-nav').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: false,
        arrows: true,
        centerMode: true,
        focusOnSelect: true,      
        verticalSwiping: true,
        vertical: true
    });
});
/*/ Слайдер с вертикальной прокруткой на странице "Двери - Карточка товара" */

/* Top Slider для Корпусной мебели */
$(document).ready(function(){
    $('.mebel-korpus__slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: true
    });
});
/*/ Top Slider для Корпусной мебели */

/* Top Slider для Окон ПВХ на всю ширину */
/*$(document).ready(function(){
    $('.okna-full__top-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: true,
        arrows: true
    });
});*/
/*/ Top Slider для Окон ПВХ на всю ширину */

/* Что говорят о нас клиенты */
$(document).ready(function(){
    $('.slider__what-people-say').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: false
    });
});
/*/ Что говорят о нас клиенты */

/* Слайдер для страницы новости */
$(document).ready(function(){
    $('.single-news__top-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: false
    });
});
/*/ Слайдер для страницы новости */