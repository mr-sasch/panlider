<?php
/*
 Template Name: Новости - Одиночная
*/
?>

<?php //get_header();
include 'header.php';
?>  

<!--breadcrumbs-->        
<div class="breadcrumb_bg container-fluid no-padding">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Главная</a></li>
            <li class="breadcrumb-item"><a href="#">Новости</a></li>
            <li class="breadcrumb-item active">Благотворительная помощь детскому саду в Гомеле</li>
        </ol>
    </div>
</div>
<!--/breadcrumbs-->  

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

<!--News block-->
<div class="single-news_cell cs-max-width">
<!--Back to all news-->        
    <a href="#" class="back-to-all-news-button">
        <i class="back-to-all-news-button-arrow-left fa fa-chevron-left" aria-hidden="true"></i>Назад к списку новостей
    </a>        
<!--/Back to all news-->
    <div class="single-news">
        <div class="single-news__title">
            Благотворительная помощь детскому саду в Гомеле
        </div>
        <div class="single-news__date">
            13 января 2017 — 12:39
        </div>
<!--Slider-->
        <div class="single-news__slider_container" id="slider1">
            <div class="single-news__slider">
                <div class="single-news__slider_just-image active">
                    <img class="single-news__slider_just-image-img" src="<?php echo get_template_directory_uri(); ?>/images/single_news/single-news__slider-image.png" alt="">
                </div>
        <!--Bootstrap Slider Module-->     
      
                <div id="single-news__top-slider" class="single-news__top-slider">
            <!-- Items -->
                    <div class="single-news__top-slider-item">
                        <img class="single-news__slider_just-image-img" src="<?php echo get_template_directory_uri(); ?>/images/single_news/single-news__slider-image.png" alt="">
                    </div>
                    <div class="single-news__top-slider-item">
                        <img class="single-news__slider_just-image-img" src="<?php echo get_template_directory_uri(); ?>/images/single_news/single-news__slider-image.png" alt="">
                    </div>
                    <div class="single-news__top-slider-item">
                        <img class="single-news__slider_just-image-img" src="<?php echo get_template_directory_uri(); ?>/images/single_news/single-news__slider-image.png" alt="">
                    </div>
                    <div class="single-news__top-slider-item">
                        <img class="single-news__slider_just-image-img" src="<?php echo get_template_directory_uri(); ?>/images/single_news/single-news__slider-image.png" alt="">
                    </div>
                    <div class="single-news__top-slider-item">
                        <img class="single-news__slider_just-image-img" src="<?php echo get_template_directory_uri(); ?>/images/single_news/single-news__slider-image.png" alt="">
                    </div>
            <!--/ Items -->
                </div>  
                        
<!--
                                          
                <div id="carouselExampleIndicators" class="carousel slide mod_z-9" data-ride="carousel">
                    <div class="single-news__slider-navigation">
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                        </ol>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="carousel-item__image d-block img-fluid" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/single_news/single-news__slider-image.png'); background-size: cover;"></div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-item__image d-block img-fluid"  style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/single_news/single-news__slider-image.png'); background-size: cover;"></div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-item__image d-block img-fluid" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/single_news/single-news__slider-image.png'); background-size: cover;"></div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-item__image d-block img-fluid" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/single_news/single-news__slider-image.png'); background-size: cover;"></div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-item__image d-block img-fluid" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/single_news/single-news__slider-image.png'); background-size: cover;"></div>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/single_news/single-news__slide-size.png" alt="" class="single-news__slide-size">
                    </div>
                </div>
        
-->
        <!--/Bootstrap Slider Module-->            
            </div>
        </div>
<!--/Slider-->
        <div class="single-news__content">
            <p>Поздравляем семейную пару из Лиды с победой в «Новогодней викторине», которая проводилась 27 декабря среди зрителей на телеканале «Лида ТВ»! Фирменный подарочный сертификат на изготовление и установку ПВХ-окон торжественно вручил представитель компании «Окнаград» в прямом эфире!</p>

            <p>Магазину требуются продавцы-консультанты с опытом работы со строительными материалами.</p>

            <strong>Обязанности:</strong>
            <ul>
                <li>Продажа керамической плитки и сопутствующих товаров </li>
                <li>Консультирование и обслуживание клиентов; </li>
                <li>Ведение внутренней отчетности. </li>
            </ul>

            <strong>Требования:</strong>
            <ul>
                <li>Возраст 22-35 лет‚ </li>
                <li>ПК - уверенный пользователь; </li>
                <li>Образование среднее специальное и выше; </li>
                <li>Гражданство РФ; </li>
                <li>Опыт работы в сфере продаж желателен; </li>
                <li>Высокий уровень личностной активности, </li>
                <li>Коммуникабельность, желание работать с людьми. </li>
                <li>Стрессоустойчивость. </li>
            </ul>

            <strong>Условия:</strong>
            <ul>
                <li>График работы 4/2 </li>
                <li>Заработная плата от 35 000 (оклад + хороший % от продаж) </li>
                <li>Соблюдение ТК РФ‚ отпуск, </li>
                <li>Дружный молодой коллектив; </li>
                <li>Обучение за счет компании. </li>
                <li>Расположение магазина: г. Москва, ул. Новогиреевская, 10к1 </li>
                <li>Метро: Шоссе Энтузиастов, Новогиреево или Перово </li>
            </ul>

            <p>Ждем резюме на почту: <a href="mailto:info@profspecplast.by">info@profspecplast.by</a></p>
        </div>
    </div>
</div>
<!--/News block-->

<!--bottom separator-->
<div class="bottom-separator"></div>
<!--/bottom separator-->
<!--Hidden menu-->
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
<!--/Hidden menu-->    
<?php //get_footer();
include 'footer.php';
?>
