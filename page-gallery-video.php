<?php
/*
 Template Name: Видеогалерея
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
            <li class="breadcrumb-item active">Видеогалерея</li>
        </ol>
    </div>
</div>
<!--/breadcrumbs-->  

<!-- Gallery - photo -->
<div class="vacancies gallery-photo">
    <div class="review review__row">
        <div class="review__container cs-max-width">
            <div class="review__title">
                Видеогалерея
            </div>           
        </div>
    </div>
    
    <!-------------------- Gallery block -------------------->        
        
    <div id="lightgallery--outer" class="videogallery">
        <div id="lightgallery" class="mod_two-column-grid-fb cs-max-width mod_margin-auto">
            <a class="mod_two-column-grid-fb__cell video--box" href="https://www.youtube.com/watch?v=wVca31MjzYc" id="">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gallery-video/gallery-video__item.png" alt="" class="lightgallery__thumb">
                <div class="videogallery__item-bg"></div>
                <img class="videogallery__item-play-botton" src="<?php echo get_template_directory_uri(); ?>/images/gallery-video/gallery-video__play-button.png" alt="">
            </a>
            <a class="mod_two-column-grid-fb__cell video--box" href="https://www.youtube.com/watch?v=WYkVtf54fK4" id="">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gallery-video/gallery-video__item.png" alt="" class="lightgallery__thumb">
                <div class="videogallery__item-bg"></div>
                <img class="videogallery__item-play-botton" src="<?php echo get_template_directory_uri(); ?>/images/gallery-video/gallery-video__play-button.png" alt="">
            </a>
            <a class="mod_two-column-grid-fb__cell video--box" href="https://www.youtube.com/watch?v=XgrEYC_5Y58" id="">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gallery-video/gallery-video__item.png" alt="" class="lightgallery__thumb">
                <div class="videogallery__item-bg"></div>
                <img class="videogallery__item-play-botton" src="<?php echo get_template_directory_uri(); ?>/images/gallery-video/gallery-video__play-button.png" alt="">
            </a>
            <a class="mod_two-column-grid-fb__cell video--box" href="https://www.youtube.com/watch?v=BosqXBZcPog" id="">
                <img src="<?php echo get_template_directory_uri(); ?>/images/gallery-video/gallery-video__item.png" alt="" class="lightgallery__thumb">
                <div class="videogallery__item-bg"></div>
                <img class="videogallery__item-play-botton" src="<?php echo get_template_directory_uri(); ?>/images/gallery-video/gallery-video__play-button.png" alt="">
            </a>
        </div>
    </div> 

    <!-- View more video - button -->            
    <div id="baguetteBox-gallery-video__view-more">
        <div class="mod_block-underline">Смотреть еще видео</div>
    </div>    
        
    <!-- / View more photo - button -->  
    
    <!-------------------- /Gallery block -------------------->
</div>   
<!--/ Gallery - photo -->

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
