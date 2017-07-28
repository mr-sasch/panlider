<?php
/*
 Template Name: Главная
*/
?>

<?php //get_header();
include 'header.php';
?>  
       
       
<!--slider bootstrap-->
    <div id="carouselExampleControls" class="slider-bootstrap carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
    <!--one slide-->
            <div class="carousel-item carousel-item_bg active">
                <div class="container">
                    <img class="d-block img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/slider-thin.png" alt="First slide">
        <!--text block-->        
                    <div class="slider-text-block">
                        <div class="slider-text-block__title">
                            СКИДКА <span class="slider-text-block_twenty">20%</span><br>НА МОНТАЖ ОКОН
                        </div>
                        <div class="slider-text-block__text">
                            Акция действует при заказе до 22.08.2017.
                        </div>
                        <div class="call-back call-back_padding-slider">
                            ВСЕ АКЦИИ
                        </div>
                    </div>
        <!--/text block-->
                </div>
            </div>
    <!--/one slide-->
    
    <!--one slide-->
            <div class="carousel-item carousel-item_bg">
                <div class="container">
                    <img class="d-block img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/slider-thin.png" alt="First slide">
        <!--text block-->        
                    <div class="slider-text-block">
                        <div class="slider-text-block__title">
                            СКИДКА <span class="slider-text-block_twenty">20%</span><br>НА МОНТАЖ ОКОН
                        </div>
                        <div class="slider-text-block__text">
                            Акция действует при заказе до 22.08.2017.
                        </div>
                        <div class="call-back call-back_padding-slider">
                            ВСЕ АКЦИИ
                        </div>
                    </div>
        <!--/text block-->
                </div>
            </div>
    <!--/one slide-->
        </div>
        <a href="#carouselExampleControls" role="button" data-slide="prev">
            <div class="slider__arrow slider__arrow_left">
                <svg width="50px" height="150px" id="slider__arrow" viewBox="0 0 59.53 84.19">
                    <defs>
                        <rect id="SVGID_1_" y="0" width="49.9" height="93.8"/>
                    </defs>
                    <path clip-path="url(#SVGID_2_)" d="M5.6,91.9c-0.6,0.6-1.4,1-2.3,1c-0.9,0-1.7-0.3-2.3-1c-1.3-1.3-1.3-3.4,0-4.6l40.8-40.8L1,5.7
                        C-0.3,4.4-0.3,2.3,1,1c1.3-1.3,3.4-1.3,4.6,0l43.1,43.1c1.3,1.3,1.3,3.4,0,4.6L5.6,91.9z M5.6,91.9"/>
                </svg>      
            </div>
            <span class="sr-only">Previous</span>
        </a>
        <a href="#carouselExampleControls" role="button" data-slide="next">
            <div class="slider__arrow slider__arrow_right">
                <svg width="50px" height="150px" id="slider__arrow" viewBox="0 0 59.53 84.19">
                    <defs>
                        <rect id="SVGID_1_" y="0" width="49.9" height="93.8"/>
                    </defs>
                    <path clip-path="url(#SVGID_2_)" d="M5.6,91.9c-0.6,0.6-1.4,1-2.3,1c-0.9,0-1.7-0.3-2.3-1c-1.3-1.3-1.3-3.4,0-4.6l40.8-40.8L1,5.7
                        C-0.3,4.4-0.3,2.3,1,1c1.3-1.3,3.4-1.3,4.6,0l43.1,43.1c1.3,1.3,1.3,3.4,0,4.6L5.6,91.9z M5.6,91.9"/>
                </svg>                    
            </div>
            <span class="sr-only">Next</span>
        </a>
        
    <!--calculator and metering-->             
        <script>
        /*show and hide metering*/
            $(document).scroll(function () {
                var y = $(this).scrollTop();
                if (y > 100) {
                    $('.slider-side-block').fadeIn();
                } else {
                    $('.slider-side-block').fadeOut();
                }
            });
        /*/show and hide metering*/        
        </script>             
               
        <div class="slider-side-block">
        <!--calculator-->
            <div class="slider-side-block__calc" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
                <img src="<?php echo get_template_directory_uri(); ?>/images/slider-side-block__calc.png">
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="recipient-name" class="form-control-label">Recipient:</label>
                                    <input type="text" class="form-control" id="recipient-name">
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="form-control-label">Message:</label>
                                    <textarea class="form-control" id="message-text"></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Send message</button>
                        </div>
                    </div>
                </div>
            </div>
        <!--/calculator-->
            
        <!--metering-->
            <div class="slider-side-block__metering" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
                <img src="<?php echo get_template_directory_uri(); ?>/images/slider-side-block__metering.png">
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="recipient-name" class="form-control-label">Recipient:</label>
                                    <input type="text" class="form-control" id="recipient-name">
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="form-control-label">Message:</label>
                                    <textarea class="form-control" id="message-text"></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Send message</button>
                        </div>
                    </div>
                </div>
            </div>
        <!--/metering-->
        </div>
    <!--/calculator and metering-->   
    </div> 
<!--/slider bootstrap-->
      
       
        
           
        
    
    <div class="row no-gutters">
<!--main-section item-->       
        <div class="main-section col-12 col-sm-6 col-lg-3">
    <!--background-->
            <div class="main-section__bg-block">
                <div class="main-section__bg"></div>
                <div class="main-section__bg-img main-section__bg-img_okna"></div>
            </div>
    <!--/background-->            
    <!--text block-->
            <div class="main-section__cont-inner">
                <div class="main-section__cont-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/main-section-item__img-okna.png" alt="" class="main-section__img">
                </div>
                <div class="main-section__cont-text">
                    <div class="main-section__text">
                        <p>ОКНА ПВХ</p>
                        <p>БАЛКОННЫЕ РАМЫ</p>
                    </div>
                </div>
            </div>
    <!--/text block-->
        </div>
<!--/main-section item-->
        
<!--main-section item-->   
        <div class="main-section col-12 col-sm-6 col-lg-3">
    <!--background-->
            <div class="main-section__bg-block">
                <div class="main-section__bg"></div>
                <div class="main-section__bg-img main-section__bg-img_dveri"></div>
            </div>
    <!--/background-->           
    <!--text block-->
            <div class="main-section__cont-inner">
                <div class="main-section__cont-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/main-section-item__img-dveri.png" alt="" class="main-section__img">
                </div>
                <div class="main-section__cont-text">
                    <div class="main-section__text">
                        <p>ДВЕРИ ВХОДНЫЕ</p>
                        <p>ДВЕРИ МЕЖКОМНАТНЫЕ</p>
                    </div>
                </div>
            </div>
    <!--/text block-->
        </div>
<!--/main-section item-->

<!--main-section item-->   
        <div class="main-section col-12 col-sm-6 col-lg-3">
    <!--background-->
            <div class="main-section__bg-block">
                <div class="main-section__bg"></div>
                <div class="main-section__bg-img main-section__bg-img_potolki"></div>
            </div>
    <!--/background-->           
    <!--text block-->
            <div class="main-section__cont-inner">
                <div class="main-section__cont-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/main-section-item__img-potolki.png" alt="" class="main-section__img">
                </div>
                <div class="main-section__cont-text">
                    <div class="main-section__text">
                        <p>НАТЯЖНЫЕ ПОТОЛКИ</p>
                    </div>
                </div>
            </div>
    <!--/text block-->
        </div>
<!--/main-section item-->
        
<!--main-section item-->   
        <div class="main-section col-12 col-sm-6 col-lg-3">
    <!--background-->
            <div class="main-section__bg-block">
                <div class="main-section__bg"></div>
                <div class="main-section__bg-img main-section__bg-img_mebel"></div>
            </div>
    <!--/background-->           
    <!--text block-->
            <div class="main-section__cont-inner">
                <div class="main-section__cont-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/main-section-item__img-mebel.png" alt="" class="main-section__img">
                </div>
                <div class="main-section__cont-text">
                    <div class="main-section__text">
                        <p>КОРПУСНАЯ МЕБЕЛЬ</p>
                    </div>
                </div>
            </div>
    <!--/text block-->
        </div>
<!--/main-section item-->
    </div>

    <div class="container">
<!--our advantages-->
        <div class="advantages__title">
            Почему Вам стоит выбрать именно нас?
        </div>
        <div class="row no-gutters">
<!--advantages blocks-->  
            <div class="advantages-block col-xs-12 col-sm-6 col-lg-3">
                <div class="advantages-block__max-width-center">
                    <div class="advantages-block__block-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/advantages-block__img-10-years.png" alt="" class="advantages-block__img">
                    </div>
                    <div class="advantages-block__title">
                        10 ЛЕТ НА РЫНКЕ
                    </div>
                    <div class="advantages-block__separator">
                        <div class="advantages-block__line"></div>
                    </div>
                    <div class="advantages-block__description">
                        <div class="advantages-block__description-hide">
                            Наша компания успешно работает на рынке более 10 лет. Много отзывов и все положительные.
                        </div>
                        <ul class="advantages-block__description-show">
                            <li class="advantages-block__description-show-item">
                                Точное соблюдение сроков
                            </li>
                            <li class="advantages-block__description-show-item">
                                Нет посредников в обслуживании
                            </li>
                            <li class="advantages-block__description-show-item">
                                Собственный транспорт
                            </li>
                            <li class="advantages-block__description-show-item">
                                Точный расчет стоимости
                            </li>
                        </ul>
                    </div>
                </div>    
            </div>
            <div class="advantages-block col-xs-12 col-sm-6 col-lg-3">
                <div class="advantages-block__max-width-center">   
                    <div class="advantages-block__block-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/advantages-block__img-deadlines.png" alt="" class="advantages-block__img">
                    </div>
                    <div class="advantages-block__title">
                        НЕ НАРУШАЕМ СРОКИ
                    </div>
                    <div class="advantages-block__separator">
                        <div class="advantages-block__line"></div>
                    </div>
                    <div class="advantages-block__description">
                        <div class="advantages-block__description-hide">
                            Наша компания успешно работает на рынке более 10 лет. Много отзывов и все положительные.
                        </div>
                        <ul class="advantages-block__description-show">
                            <li class="advantages-block__description-show-item">
                                Точное соблюдение сроков
                            </li>
                            <li class="advantages-block__description-show-item">
                                Нет посредников в обслуживании
                            </li>
                            <li class="advantages-block__description-show-item">
                                Собственный транспорт
                            </li>
                            <li class="advantages-block__description-show-item">
                                Точный расчет стоимости
                            </li>
                        </ul>
                    </div>
                </div>    
            </div>
            <div class="advantages-block advantages-block_top-correction col-xs-12 col-sm-6 col-lg-3">
                <div class="advantages-block__max-width-center">
                    <div class="advantages-block__block-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/advantages-block__img-garbage.png" alt="" class="advantages-block__img">
                    </div>
                    <div class="advantages-block__title">
                        НЕ ОСТАВЛЯЕМ МУСОР
                    </div>
                    <div class="advantages-block__separator">
                        <div class="advantages-block__line"></div>
                    </div>
                    <div class="advantages-block__description">
                        <div class="advantages-block__description-hide">
                            Наша компания успешно работает на рынке более 10 лет. Много отзывов и все положительные.
                        </div>
                        <ul class="advantages-block__description-show">
                            <li class="advantages-block__description-show-item">
                                Точное соблюдение сроков
                            </li>
                            <li class="advantages-block__description-show-item">
                                Нет посредников в обслуживании
                            </li>
                            <li class="advantages-block__description-show-item">
                                Собственный транспорт
                            </li>
                            <li class="advantages-block__description-show-item">
                                Точный расчет стоимости
                            </li>
                        </ul>
                    </div>
                </div>    
            </div>
            <div class="advantages-block col-xs-12 col-sm-6 col-lg-3">
                <div class="advantages-block__max-width-center">
                    <div class="advantages-block__block-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/advantages-block__img-good-work.png" alt="" class="advantages-block__img">
                    </div>
                    <div class="advantages-block__title">
                        К НАМ ВОЗВРАЩАЮТСЯ
                    </div>
                    <div class="advantages-block__separator">
                        <div class="advantages-block__line"></div>
                    </div>
                    <div class="advantages-block__description">
                        <div class="advantages-block__description-hide">
                            80% клиентов возвращаются к нам за новыми услугами и товарами
                        </div>
                        <ul class="advantages-block__description-show">
                            <li class="advantages-block__description-show-item">
                                Точное соблюдение сроков
                            </li>
                            <li class="advantages-block__description-show-item">
                                Нет посредников в обслуживании
                            </li>
                            <li class="advantages-block__description-show-item">
                                Собственный транспорт
                            </li>
                            <li class="advantages-block__description-show-item">
                                Точный расчет стоимости
                            </li>
                        </ul>
                    </div>
                </div>    
            </div>
<!--/advantages blocks-->            
        </div>   
<!--/our advantages-->
    </div>   
      
     
    
    <div class="team">
        <div class="team__bg"></div>
        <div class="team__container container">
<!--our team-->
            <div class="team__title">
                Наша дружная команда
            </div>
            <div class="row no-gutters">
                <div class="team-item team-item_margin col-12 col-md-6 col-lg-4">
                    <div class="team-item__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/team-item__img-img2bw.png" alt="" class="team-item__img-img-bw">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/team-item__img-img2colored.png" alt="" class="team-item__img-img2colored">
                    </div>
                    <div class="team-item__text-block">
                        <div class="team-item__name">александр александров</div>
                        <div class="team-item__position">директор</div>
                        <div class="team-item__overview">
                            Работает в компании с 2010 г.
                            Большой опыт в установке потолков, 
                            дверерей и прочего.
                        </div>
                    </div>
                </div>

                <div class="team-item team-item_margin col-12 col-md-6 col-lg-4">
                    <div class="team-item__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/team-item__img-img2bw.png" alt="" class="team-item__img-img-bw">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/team-item__img-img2colored.png" alt="" class="team-item__img-img2colored">
                    </div>
                    <div class="team-item__text-block">
                        <div class="team-item__name">матвей матвеев</div>
                        <div class="team-item__position">сборшик</div>
                        <div class="team-item__overview">
                            Работает в компании с 2010 г.
                            Большой опыт в установке потолков, 
                            дверерей и прочего.
                        </div>
                    </div>
                </div>
                <div class="team-item team-item_margin col-12 col-md-6 col-lg-4">
                    <div class="team-item__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/team-item__img-img2bw.png" alt="" class="team-item__img-img-bw">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/team-item__img-img2colored.png" alt="" class="team-item__img-img2colored">
                    </div>
                    <div class="team-item__text-block">
                        <div class="team-item__name">матвей матвеев</div>
                        <div class="team-item__position">установщик</div>
                        <div class="team-item__overview">
                            Работает в компании с 2010 г.
                            Большой опыт в установке потолков, 
                            дверерей и прочего.
                        </div>
                    </div>
                </div>
                <div class="team-item team-item_margin col-12 col-md-6 col-lg-4">
                    <div class="team-item__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/team-item__img-img2bw.png" alt="" class="team-item__img-img-bw">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/team-item__img-img2colored.png" alt="" class="team-item__img-img2colored">
                    </div>
                    <div class="team-item__text-block">
                        <div class="team-item__name">матвей матвеев</div>
                        <div class="team-item__position">столяр</div>
                        <div class="team-item__overview">
                            Работает в компании с 2010 г.
                            Большой опыт в установке потолков, 
                            дверерей и прочего.
                        </div>
                    </div>
                </div>
                <div class="team-item team-item_margin col-12 col-md-6 col-lg-4">
                    <div class="team-item__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/team-item__img-img2bw.png" alt="" class="team-item__img-img-bw">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/team-item__img-img2colored.png" alt="" class="team-item__img-img2colored">
                    </div>
                    <div class="team-item__text-block">
                        <div class="team-item__name">матвей матвеев</div>
                        <div class="team-item__position">установщик</div>
                        <div class="team-item__overview">
                            Работает в компании с 2010 г.
                            Большой опыт в установке потолков, 
                            дверерей и прочего.
                        </div>
                    </div>
                </div>
                <div class="team-item team-item_margin col-12 col-md-6 col-lg-4">
                    <div class="team-item__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/team-item__img-img2bw.png" alt="" class="team-item__img-img-bw">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/team-item__img-img2colored.png" alt="" class="team-item__img-img2colored">
                    </div>
                    <div class="team-item__text-block">
                        <div class="team-item__name">матвей матвеев</div>
                        <div class="team-item__position">мастер по потолкам</div>
                        <div class="team-item__overview">
                            Работает в компании с 2010 г.
                            Большой опыт в установке потолков, 
                            дверерей и прочего.
                        </div>
                    </div>
                </div>
            </div>
<!--/our team-->
        </div> 
    </div>
   
    <div class="about-us container">
<!--about us-->
        <div class="about-us__title">
            О компании «Профспецпласт»
        </div>
        <div class="row no-gutters">
    <!--/left block-->
            <div class="about-us-left col-12 col-lg-6">
                <div class="about-us-left__title">
                    10 лет на рынке
                </div>
                <div class="about-us-left__content">
                    Идейные соображения высшего порядка, а также рамки и место обучения кадров влечет за собой процесс внедрения и модернизации существенных финансовых и административных условий. Не следует, однако забывать, что реализация намеченных плановых заданий требуют определения и уточнения системы обучения кадров, соответствует насущным потребностям. Товарищи! рамки и место обучения кадров позволяет выполнять важные задания по разработке соответствующий условий активизации. Значимость этих проблем настолько очевидна, что реализация намеченных плановых заданий представляет собой интересный эксперимент проверки дальнейших направлений развития. Не следует, однако забывать, что новая модель организационной деятельности требуют определения и уточнения соответствующий условий активизации.
                </div>
                <div class="about-us-left__button">
                    узнать больше
                </div>
            </div>    
    <!--left block-->   
       
    <!-- Что говорят о нас клиенты -->
            <div id="slider__what-people-say" class="about-us-right col-12 col-lg-6">
                <div class="slider__what-people-say">
                    <div class="carousel-caption d-md-block about-us-right__item-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/about-us-right__quote.png" alt="" class="about-us-right__quote">
                        <div class="about-us-left__title about-us-left__title_margin-right">
                            Что говорят о нас клиенты
                        </div>
                        <div class="about-us-right__person">
                            <div class="about-us-right__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/team-item__img-img2colored.png" alt="" class="about-us-right__image">
                            </div>
                            <div class="about-us-right__person-about">
                                <div class="about-us-right__name">
                                    Сергей Сергеев
                                </div>
                                <div class="about-us-right__position">
                                    директор ОАО «Спецтехнологии»
                                </div>
                            </div>
                        </div>
                        <div class="about-us-left__content">
                            Финансовых и административных условий. Не следует, однако забывать, что реализация намеченных плановых заданий требуют определения и уточнения системы обучения кадров, соответствует насущным потребностям. Товарищи! рамки и место обучения кадров позволяет выполнять важные задания по разработке соответствующий условий активизации. Значимость этих проблем настолько очевидна, что реализация намеченных плановых заданий представляет собой интересный эксперимент 
                        </div>
                    </div>
                    <div class="carousel-caption d-md-block about-us-right__item-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/about-us-right__quote.png" alt="" class="about-us-right__quote">
                        <div class="about-us-left__title about-us-left__title_margin-right">
                            Что говорят о нас клиенты
                        </div>
                        <div class="about-us-right__person">
                            <div class="about-us-right__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/team-item__img-img2colored.png" alt="" class="about-us-right__image">
                            </div>
                            <div class="about-us-right__person-about">
                                <div class="about-us-right__name">
                                    Сергей Сергеев
                                </div>
                                <div class="about-us-right__position">
                                    директор ОАО «Спецтехнологии»
                                </div>
                            </div>
                        </div>
                        <div class="about-us-left__content">
                            Финансовых и административных условий. Не следует, однако забывать, что реализация намеченных плановых заданий требуют определения и уточнения системы обучения кадров, соответствует насущным потребностям.
                        </div>
                    </div>
                    <div class="carousel-caption d-md-block about-us-right__item-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/about-us-right__quote.png" alt="" class="about-us-right__quote">
                    <div class="about-us-left__title about-us-left__title_margin-right">
                        Что говорят о нас клиенты
                    </div>
                    <div class="about-us-right__person">
                        <div class="about-us-right__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/team-item__img-img2colored.png" alt="" class="about-us-right__image">
                        </div>
                        <div class="about-us-right__person-about">
                            <div class="about-us-right__name">
                                Сергей Сергеев
                            </div>
                            <div class="about-us-right__position">
                                директор ОАО «Спецтехнологии»
                            </div>
                        </div>
                    </div>
                    <div class="about-us-left__content">
                        Финансовых и административных условий. Не следует, однако забывать, что реализация намеченных плановых заданий требуют определения и уточнения системы обучения кадров, соответствует насущным потребностям. Товарищи! рамки и место обучения кадров позволяет выполнять важные задания по разработке соответствующий условий активизации. Значимость этих проблем настолько очевидна
                    </div>
                </div>               
                </div>  
            <a href="#" class="about-us-right__all">Все отзывы</a>  
            </div>    
    <!--/ Что говорят о нас клиенты -->
       
        </div>     
<!--/about us-->
    </div>  
   
    <div class="questions questions_margin">
        <div class="container">
<!--any questions-->
        <div class="questions__text">
            <p class="questions__row-1" style="font-size: 48px;">Остались вопросы по нашей работе?</p>
            <p class="questions__row-2" style="font-size: 48px;"><strong>Звоните прямо сейчас!</strong> +375(29) <strong>555-55-55</strong></p>
            <p class="questions__row-3" style="font-size: 24px;">Или оставьте Ваши контакты для получения профессиональной консультации</p>
        </div>
        
        <div class="questions__button" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
            получить консультацию
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="recipient-name" class="form-control-label">Recipient:</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="form-control-label">Message:</label>
                                <textarea class="form-control" id="message-text"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Send message</button>
                    </div>
                </div>
            </div>
        </div>
        
<!--/any questions-->
        </div>
    </div> 
       
    <div class="hidden-menu hidden-menu_padding">
        <div class="container">
<!--hidden menu-->
    <!--switcher show/hide-->  
            <div data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" class="collapsed">
                <div class="hidden-menu-switcher-block">      
                    
        <!--show menu-->
                        <div class="hidden-menu-switcher hidden-menu-switcher_down">
                            <div class="hidden-menu-switcher__arrow">
                                <div class="hidden-menu-switcher__arrow-down"></div>
                            </div>
                            <div class="hidden-menu-switcher__text hidden-menu-switcher__text_show">ПОКАЗАТЬ МЕНЮ</div>
                        </div>
        <!--/show menu-->
        <!--hide menu-->
                        <div class="hidden-menu-switcher hidden-menu-switcher_up">
                            <div class="hidden-menu-switcher__arrow">
                                <div class="hidden-menu-switcher__arrow-up"></div>
                            </div>
                            <div class="hidden-menu-switcher__text">СКРЫТЬ МЕНЮ</div>
                        </div>
        <!--/hide menu-->
                    
                </div> 
            </div>
    <!--/switcher show/hide-->
            <div class="collapse" id="collapseExample">    
        <!--menu columns-->
            <!--menu items-->   
                <div class="hidden-menu-submenu row no-gutters">
                    <div class="hidden-menu-submenu-column col-sm-6 col-md-3 col-lg-2">
                        <div class="hidden-menu-submenu-column__title">компания</div>
                        <ul class="hidden-menu-submenu-column__items">
                            <li class="hidden-menu-submenu-column__item"><a href="#">О компании</a></li>
                            <li class="hidden-menu-submenu-column__item"><a href="#">Сотрудники</a></li>
                            <li class="hidden-menu-submenu-column__item"><a href="#">Видео</a></li>
                            <li class="hidden-menu-submenu-column__item"><a href="#">Фотогалерея</a></li>
                            <li class="hidden-menu-submenu-column__item"><a href="#">Отзывы</a></li>
                            <li class="hidden-menu-submenu-column__item"><a href="#">Новости</a></li>
                            <li class="hidden-menu-submenu-column__item"><a href="#">Вакансии</a></li>
                        </ul>
                    </div>
                    <div class="hidden-menu-submenu-column col-sm-6 col-md-3 col-lg-2">
                        <div class="hidden-menu-submenu-column__title">покупателям</div>
                        <ul class="hidden-menu-submenu-column__items">
                            <li class="hidden-menu-submenu-column__item"><a href="#">Акции</a></li>
                            <li class="hidden-menu-submenu-column__item"><a href="#">Кредит и рассрочка</a></li>
                            <li class="hidden-menu-submenu-column__item"><a href="#">Как купить</a></li>
                            <li class="hidden-menu-submenu-column__item"><a href="#">Где купить</a></li>
                            <li class="hidden-menu-submenu-column__item"><a href="#">Вопрос-ответ</a></li>
                            <li class="hidden-menu-submenu-column__item"><a href="#">Статьи</a></li>
                            <li class="hidden-menu-submenu-column__item"><a href="#">Оставить заявку</a></li>
                        </ul>
                    </div>
                    <div class="hidden-menu-submenu-column col-sm-6 col-md-3 col-lg-2">
                        <div class="hidden-menu-submenu-column__title">продукция</div>
                        <ul class="hidden-menu-submenu-column__items">
                            <li class="hidden-menu-submenu-column__item"><a href="#">Окна ПВХ</a></li>
                            <li class="hidden-menu-submenu-column__item"><a href="#">Двери ПВХ</a></li>
                            <li class="hidden-menu-submenu-column__item"><a href="#">Потолки</a></li>
                            <li class="hidden-menu-submenu-column__item"><a href="#">Корпусная мебель</a></li>
                            <li class="hidden-menu-submenu-column__item"><a href="#">Распродажа</a></li>
                        </ul>
                    </div>
                    <div class="hidden-menu-submenu-column col-sm-6 col-md-3 col-lg-2">
                        <div class="hidden-menu-submenu-column__title">Услуги</div>
                        <ul class="hidden-menu-submenu-column__items">
                            <li class="hidden-menu-submenu-column__item"><a href="#">Бесплатный замер</a></li>
                            <li class="hidden-menu-submenu-column__item"><a href="#">Монтаж</a></li>
                            <li class="hidden-menu-submenu-column__item"><a href="#">Услуга 3</a></li>
                            <li class="hidden-menu-submenu-column__item"><a href="#">Услуга 4</a></li>
                            <li class="hidden-menu-submenu-column__item"><a href="#">Услуга 5</a></li>
                        </ul>
                    </div>
            <!--/menu items-->
            <!--form-->        
                    <div class="hidden-menu-submenu-column hidden-menu-submenu-column_center col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-4 offset-lg-0">
                        <div class="hidden-menu-submenu-column__title hidden-menu-submenu-column__title_after-align">оставайтесь с нами</div>
                        <div class="hidden-menu-submenu-column__form">
                            <div class="hidden-menu-submenu-column__form-title">
                                Подпишитесь на наши новости, чтобы первыми узнавать о скидках и акциях нашей компании
                            </div>
                            <input type="text" class="hidden-menu-submenu-column__form-name" placeholder="Имя">
                            <input type="text" class="hidden-menu-submenu-column__form-email" placeholder="Email">
                            <input type="submit" class="hidden-menu-submenu-column__form-btn" value="подписаться">
                        </div>
                    </div>                
            <!--/form-->        
                </div>            
        <!--/menu columns--> 
            </div>
<!--/hidden menu-->
        </div>
    </div>  


<?php //get_footer();
include 'footer.php';
?>
