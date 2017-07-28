<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Профспецпласт</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"> 
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/font-awesome-4.7.0/css/font-awesome.min.css">  
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">        
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-catalog.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-reviews.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-about-company.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-news.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-news-single.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-not-found.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-vacancies.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-gallery-photo.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-gallery-video.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-search.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-payment.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-catalog-card.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-mebel-korpus.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-mebel-potolki.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-mebel-okna.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-dveri-pvh.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-dveri-pvh-nestandart.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-catalog-dveri-standart.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-mebel-okna-full-width.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-site-map.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/responsive.css">  
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/baguetteBox-photoGallery/baguetteBox.css">
    
<!-- owl carousel -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/owl-carousel/owl.theme.default.css">
<!--/ owl carousel -->
   
<!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<!--/ jquery -->
    
<!-- photo gallery -->
    <script src="<?php echo get_template_directory_uri(); ?>/baguetteBox-photoGallery/baguetteBox.js"></script>
<!--/ photo gallery -->
   
<!--slick slider-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.css">
<!--/slick slider-->
    
<!-- Preloader - ВРЕМЕННО ОТКЛЮЧЕН -->    
<!--
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-preloader.css">
    <div class="loader-page">
        <div class="loader-container">
            <div class="loader">Loading...</div>
        </div>
    </div>
-->
<!--/ Preloader -->
    
    <?php wp_head(); ?>    
</head>

<body> 
            
    <header>
<!--header-->
    <!--header-top-->
        <div class="row_header-top">
            <div class="container_header-top cs-max-width">
            <!-- LEFT -->
                <ul class="header-top-menu header-top-menu_margin mobile-hide">
                    <a href="/новости/"><li class="header-top-menu__item active">Новости</li></a>
                    <a href="/404-2/"><li class="header-top-menu__item">Услуги</li></a>
                    <a href="/404-2/"><li class="header-top-menu__item">Уцененные товары</li></a>
                <!--Заказать замер - Bootstrap-->
                    <li class="header-top-menu__item" data-toggle="modal" data-target="#zakaz-zamera" data-whatever="@mdo">Заказать замер</li>
                <!--/Заказать замер - Bootstrap-->                    
                </ul>
            <!--/ LEFT -->
                
            <!-- CENTER -->
                <div class="header-top-menu__clients-enter mobile-hide" data-toggle="modal" data-target="#vhod-dlya-klientov" data-whatever="@mdo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/header-top-menu__clients-enter.png" alt="" class="header-top-menu__img">
                    <div class="header-top-menu__text">Вход<br>для клиентов</div>
                </div>            
            <!--/ CENTER -->
                
            <!-- RIGHT -->
                <div class="container_header-top-right">
                    <div class="header-top-menu__work-time mobile-hide">
                        <div class="header-top-menu__schedule">09:00 - 20:00</div>
                        <div class="header-top-menu__day-blocks">
                            <div class="header-top-menu__day-block"></div>
                            <div class="header-top-menu__day-block"></div>
                            <div class="header-top-menu__day-block"></div>
                            <div class="header-top-menu__day-block"></div>
                            <div class="header-top-menu__day-block"></div>
                            <div class="header-top-menu__day-block header-top-menu__day-block_holidays"></div>
                            <div class="header-top-menu__day-block header-top-menu__day-block_holidays"></div>
                        </div>
                    </div>

                <!-- Выпадающие телефоны -->
                    <div class="header-top-menu-phones">
                        <input type="checkbox" name="header-top-menu-phones__phone-top" id="header-top-menu-phones__phone-top">
                        <label for="header-top-menu-phones__phone-top" class="header-top-menu-phones__phone-top">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/header-top-menu__phones.png" alt="" class="header-top-menu-phones__handset">
                            <div class="header-top-menu-phones__phone-number">
                                <div class="header-top-menu-phones__code">+375(29)</div>
                                <div class="header-top-menu-phones__numder">757-9-707</div>
                                <div class="header-top-menu-phones__underline"></div>
                            </div>
                        </label>       

                        <div class="header-top-menu-phones__all-phones">
                            <div class="header-top-menu-phones__all-phones-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/header-top-menu__phones.png" alt="" class="header-top-menu-phones__handset">
                                <div class="header-top-menu-phones__phone-number">
                                    <div class="header-top-menu-phones__code">+375(29)</div>
                                    <div class="header-top-menu-phones__numder">757-9-707</div>
                                    <div class="header-top-menu-phones__underline"></div>
                                </div>
                            </div>
                            <div class="header-top-menu-phones__all-phones-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/header-top-menu__phones.png" alt="" class="header-top-menu-phones__handset">
                                <div class="header-top-menu-phones__phone-number">
                                    <div class="header-top-menu-phones__code">+375(29)</div>
                                    <div class="header-top-menu-phones__numder">757-9-707</div>
                                    <div class="header-top-menu-phones__underline"></div>
                                </div>
                            </div>
                            <div class="header-top-menu-phones__all-phones-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/header-top-menu__phones.png" alt="" class="header-top-menu-phones__handset">
                                <div class="header-top-menu-phones__phone-number">
                                    <div class="header-top-menu-phones__code">+375(29)</div>
                                    <div class="header-top-menu-phones__numder">757-9-707</div>
                                    <div class="header-top-menu-phones__underline"></div>
                                </div>
                            </div>
                            <div class="header-top-menu-phones__all-phones-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/header-top-menu__phones.png" alt="" class="header-top-menu-phones__handset">
                                <div class="header-top-menu-phones__phone-number">
                                    <div class="header-top-menu-phones__code">+375(29)</div>
                                    <div class="header-top-menu-phones__numder">757-9-707</div>
                                    <div class="header-top-menu-phones__underline"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!--/ Выпадающие телефоны -->
                    
                <!--Заказ обратного звонка - Bootstrap-->
                    <div class="call-back call-back_margin-left" data-toggle="modal" data-target="#obratny-zvonok" data-whatever="@mdo">
                        ОБРАТНЫЙ ЗВОНОК
                    </div>
                <!--/Заказ обратного звонка - Bootstrap-->  

                </div>
            <!--/ RIGHT -->            
            </div>
            
        <!-- Поделиться --> 
            <div class="header-top-menu__share mobile-hide">
                <input type="checkbox" id="header-top-menu__share" name="header-top-menu__share" style="display: none;">
            <!-- Кнопка -->
                <label for="header-top-menu__share" class="header-top-menu__share-button">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/header-top-menu__share.png" alt="" class="header-top-menu__share-img">
                </label>
            <!--/ Кнопка -->
            <!-- Блок соц.сетей -->
                <div class="header-top-menu__share-block">
                    <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    <a href="https://ru.pinterest.com/" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                    <a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                    <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>                
                </div>            
            <!--/ Блок соц.сетей -->
            </div>
        <!--/ Поделиться -->
          
        </div> 
    <!--/header-top-->
        
        <div class="row_header-bottom">
            <div class="container_header-bottom cs-max-width">
        <!--header-bottom-->
            <!--logo-->
                <a href="/" class="header-bottom-menu__logo-a">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/header-bottom-menu__logo.png" alt="" class="header-bottom-menu__logo">
                </a>    
            <!--/logo-->
            
            <!-- mobile menu - Button -->
                <input type="checkbox" name="mobile-menu" id="mobile-menu_stroke-cross">
                <div class="mobile-menu mobile-menu_positioning">
                    <label class="mobile-menu__strokes" for="mobile-menu_stroke-cross">
                        <div class="mobile-menu__stroke mobile-menu__stroke-cross1"></div>
                        <div class="mobile-menu__stroke mobile-menu__stroke-cross2"></div>
                        <div class="mobile-menu__stroke mobile-menu__stroke-cross3"></div>
                    </label>
                </div>
            <!--/ mobile menu - Button -->
             
            <!-- MOBILE MENU -->
                <div class="mobile-menu__menu">
                    <!--Компания-->
                    <input type="checkbox" name="mobile-sub-menu" id="mobile-sub-menu__kompania">
                    <label class="mobile-menu__item" for="mobile-sub-menu__kompania">
                        КОМПАНИЯ<i class="fa fa-chevron-right mobile-menu__chevron mobile-menu__chevron-kompania" aria-hidden="true"></i>
                    </label>
                    <div class="mobile-menu__item-sub-menu mobile-sub-menu__kompania-sub-menu">
                        <div class="mobile-menu__item-sub-menu-item">
                            <a href="http://psp-wp.nolimit.by/%D0%BE-%D0%BA%D0%BE%D0%BC%D0%BF%D0%B0%D0%BD%D0%B8%D0%B8/" class="mobile-menu__item-a">
                                О компании
                            </a>
                        </div>
                        <div class="mobile-menu__item-sub-menu-item">
                            <a href="http://psp-wp.nolimit.by/404-2/" class="mobile-menu__item-a">
                                Сотрудники
                            </a>
                        </div>
                        <div class="mobile-menu__item-sub-menu-item">
                            <a href="http://psp-wp.nolimit.by/%D0%B2%D0%B8%D0%B4%D0%B5%D0%BE%D0%B3%D0%B0%D0%BB%D0%B5%D1%80%D0%B5%D1%8F/" class="mobile-menu__item-a">
                                Видео
                            </a>
                        </div>
                        <div class="mobile-menu__item-sub-menu-item">
                            <a href="http://psp-wp.nolimit.by/%D1%84%D0%BE%D1%82%D0%BE%D0%B3%D0%B0%D0%BB%D0%B5%D1%80%D0%B5%D1%8F/" class="mobile-menu__item-a">
                                Фотогалерея
                            </a>
                        </div>
                        <div class="mobile-menu__item-sub-menu-item">
                            <a href="http://psp-wp.nolimit.by/%D0%BE%D1%82%D0%B7%D1%8B%D0%B2%D1%8B/" class="mobile-menu__item-a">
                                Отзывы
                            </a>
                        </div>
                        <div class="mobile-menu__item-sub-menu-item">
                            <a href="http://psp-wp.nolimit.by/%D0%BD%D0%BE%D0%B2%D0%BE%D1%81%D1%82%D0%B8/" class="mobile-menu__item-a">
                                Новости
                            </a>
                        </div>
                        <div class="mobile-menu__item-sub-menu-item">
                            <a href="http://psp-wp.nolimit.by/%D0%B2%D0%B0%D0%BA%D0%B0%D0%BD%D1%81%D0%B8%D0%B8/" class="mobile-menu__item-a">
                                Вакансии
                            </a>
                        </div>
                    </div>
                    <!--/Компания-->
                   
                    <!--Окна ПВХ-->
                    <input type="checkbox" name="mobile-sub-menu" id="mobile-sub-menu__okna">
                    <label class="mobile-menu__item" for="mobile-sub-menu__okna">
                        ОКНА ПВХ<i class="fa fa-chevron-right mobile-menu__chevron mobile-menu__chevron-okna" aria-hidden="true"></i>
                    </label>
                    <div class="mobile-menu__item-sub-menu mobile-sub-menu__okna-sub-menu">
                        <div class="mobile-menu__item-sub-menu-item">
                            <a href="http://psp-wp.nolimit.by/%D0%BE%D0%BA%D0%BD%D0%B0-%D0%BF%D0%B2%D1%85/%D0%BE%D0%BA%D0%BD%D0%B0-%D0%BF%D0%B2%D1%85-%D0%BF%D0%BE%D0%BB%D0%BD%D0%B0%D1%8F-%D1%88%D0%B8%D1%80%D0%B8%D0%BD%D0%B0/" class="mobile-menu__item-a">
                                Окна ПВХ (полная ширина)
                            </a>
                        </div>
                    </div>
                    <!--/Окна ПВХ-->
                    
                    <!--Двери-->              
                    <input type="checkbox" name="mobile-sub-menu" id="mobile-sub-menu__dveri">
                    <label class="mobile-menu__item" for="mobile-sub-menu__dveri">
                        ДВЕРИ<i class="fa fa-chevron-right mobile-menu__chevron mobile-menu__chevron-dveri" aria-hidden="true"></i>
                    </label>
                    <div class="mobile-menu__item-sub-menu mobile-sub-menu__dveri-sub-menu">
                        <div class="mobile-menu__item-sub-menu-item">
                            <a href="http://psp-wp.nolimit.by/%D0%BA%D0%B0%D1%82%D0%B0%D0%BB%D0%BE%D0%B3-%D0%B1%D0%B5%D0%B7-%D0%B0%D0%BA%D1%86%D0%B8%D0%B9/" class="mobile-menu__item-a">
                                Двери
                            </a>
                        </div>
                        <div class="mobile-menu__item-sub-menu-item">
                            <a href="http://psp-wp.nolimit.by/%D0%BA%D0%B0%D1%82%D0%B0%D0%BB%D0%BE%D0%B3/" class="mobile-menu__item-a">
                                Двери с акционными товарами
                            </a>
                        </div>
                        <div class="mobile-menu__item-sub-menu-item">
                            <a href="http://psp-wp.nolimit.by/%D0%BA%D0%B0%D1%82%D0%B0%D0%BB%D0%BE%D0%B3/%D0%B4%D0%B2%D0%B5%D1%80%D0%B8-%D0%BF%D0%B2%D1%85/" class="mobile-menu__item-a">
                                Двери ПВХ - Входные
                            </a>
                        </div>
                        <div class="mobile-menu__item-sub-menu-item">
                            <a href="http://psp-wp.nolimit.by/%D0%BA%D0%B0%D1%82%D0%B0%D0%BB%D0%BE%D0%B3/%D0%B4%D0%B2%D0%B5%D1%80%D0%B8-%D0%BF%D0%B2%D1%85-%D0%BD%D0%B5%D1%81%D1%82%D0%B0%D0%BD%D0%B4%D0%B0%D1%80%D1%82%D0%BD%D1%8B%D0%B5/" class="mobile-menu__item-a">
                                Двери ПВХ - нестандартные
                            </a>
                        </div>
                        <div class="mobile-menu__item-sub-menu-item">
                            <a href="http://psp-wp.nolimit.by/%D0%BA%D0%B0%D1%82%D0%B0%D0%BB%D0%BE%D0%B3/dveri-standart/" class="mobile-menu__item-a">
                                Двери ПВХ - стандартные
                            </a>
                        </div>
                    </div>
                    <!--/Двери-->
                    
                    <!--Потолки-->
                    <div class="mobile-menu__item">
                        <a href="http://psp-wp.nolimit.by/%D0%BD%D0%B0%D1%82%D1%8F%D0%B6%D0%BD%D1%8B%D0%B5-%D0%BF%D0%BE%D1%82%D0%BE%D0%BB%D0%BA%D0%B8/" class="mobile-menu__item-a">
                            ПОТОЛКИ
                        </a>
                    </div>
                    <!--/Потолки-->
                    
                    <!--Корпусная мебель-->
                    <div class="mobile-menu__item">
                        <a href="http://psp-wp.nolimit.by/%D0%BA%D0%BE%D1%80%D0%BF%D1%83%D1%81%D0%BD%D0%B0%D1%8F-%D0%BC%D0%B5%D0%B1%D0%B5%D0%BB%D1%8C/" class="mobile-menu__item-a">
                            КОРПУСНАЯ МЕБЕЛЬ
                        </a>
                    </div>
                    <!--/Корпусная мебель-->
                    
                    <!--Контакты-->
                    <div class="mobile-menu__item">
                        <a href="http://psp-wp.nolimit.by/404-2/" class="mobile-menu__item-a">
                            КОНТАКТЫ
                        </a>
                    </div>
                    <!--/Контакты-->                    
                </div>
            <!--/ MOBILE MENU --> 
              
                <!-- Нижнее меню в Хэдере -->               
                <ul class="header-bottom-menu">
                    <li class="header-bottom-menu__item header-bottom-menu__item-company active">
                        <div class="header-bottom-menu__item-title">КОМПАНИЯ                        
                            <div id="header-bottom-menu__item-arrow"></div>
                        </div>
                        <div class="header-hover-menu__container">
                            <ul class="header-hover-menu">
                                <a href="/о-компании/"><li class="header-hover-menu-item active">О компании</li></a>
                                <a href="/404-2/"><li class="header-hover-menu-item">Сотрудники</li></a>
                                <a href="/видеогалерея/"><li class="header-hover-menu-item">Видео</li></a>
                                <a href="/фотогалерея/"><li class="header-hover-menu-item">Фотогалерея</li></a>
                                <a href="/отзывы/"><li class="header-hover-menu-item">Отзывы</li></a>
                                <a href="/новости/"><li class="header-hover-menu-item">Новости</li></a>
                                <a href="/вакансии/"><li class="header-hover-menu-item">Вакансии</li></a>
                            </ul>
                        </div>
                    </li>
                    <li class="header-bottom-menu__item">
                        <div class="header-bottom-menu__item-title">ОКНА ПВХ                       
                            <div id="header-bottom-menu__item-arrow"></div>
                        </div>
                        <div class="header-hover-menu__container">
                            <ul class="header-hover-menu">
                                <a href="/окна-пвх/окна-пвх-полная-ширина/"><li class="header-hover-menu-item">Окна ПВХ (полная ширина)</li></a>
                            </ul>
                        </div>
                    </li>
                    <li class="header-bottom-menu__item">
                        <div class="header-bottom-menu__item-title">ДВЕРИ                        
                            <div id="header-bottom-menu__item-arrow"></div>
                        </div>
                        <div class="header-hover-menu__container">
                            <ul class="header-hover-menu">
                                <a href="/каталог-без-акций/"><li class="header-hover-menu-item">Двери</li></a>
                                <a href="/каталог/"><li class="header-hover-menu-item">Двери с акционными товарами</li></a>
                                <a href="/каталог/двери-пвх/"><li class="header-hover-menu-item">Двери ПВХ - Входные</li></a>
                                <a href="/каталог/двери-пвх-нестандартные/"><li class="header-hover-menu-item">Двери ПВХ - нестандартные</li></a>
                                <a href="/каталог/dveri-standart/"><li class="header-hover-menu-item">Двери ПВХ - стандартные</li></a>
                            </ul>
                        </div>
                    </li>
                    <li class="header-bottom-menu__item">
                        <a href="/натяжные-потолки/">
                            <div class="header-bottom-menu__item-title">ПОТОЛКИ</div>
                        </a>
                    </li>
                    <li class="header-bottom-menu__item">
                        <a href="/корпусная-мебель/">
                            <div class="header-bottom-menu__item-title">КОРПУСНАЯ МЕБЕЛЬ</div>
                        </a>
                    </li>
                    <li class="header-bottom-menu__item">
                        <a href="/404-2/">
                            <div class="header-bottom-menu__item-title">КОНТАКТЫ</div>
                        </a>
                    </li>                    
                </ul>                
                <!--/ Нижнее меню в Хэдере -->
                
                <!-- Выпадающие телефоны -->
                
                <div class="header-top-menu-phones header-top-menu-phones__hide-show mobile-hide_early">
                    <input type="checkbox" name="header-top-menu-phones__phone-top" id="header-top-menu-phones__phone-top-II">
                        <label for="header-top-menu-phones__phone-top-II" class="header-top-menu-phones__phone-top">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/call-blue.png" alt="" class="header-top-menu-phones__handset">
                            <div class="header-top-menu-phones__phone-number">
                                <div class="header-top-menu-phones__code">+375(29)</div>
                                <div class="header-top-menu-phones__numder">757-9-707</div>
                                <div class="header-top-menu-phones__underline"></div>
                            </div>
                        </label>       

                        <div class="header-top-menu-phones__all-phones header-top-menu-phones__all-phones-II">
                            <div class="header-top-menu-phones__all-phones-item header-top-menu-phones__all-phones-item-sub">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/header-top-menu__phones.png" alt="" class="header-top-menu-phones__handset">
                                <div class="header-top-menu-phones__phone-number">
                                    <div class="header-top-menu-phones__code">+375(29)</div>
                                    <div class="header-top-menu-phones__numder">757-9-707</div>
                                    <div class="header-top-menu-phones__underline"></div>
                                </div>
                            </div>
                            <div class="header-top-menu-phones__all-phones-item header-top-menu-phones__all-phones-item-sub">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/header-top-menu__phones.png" alt="" class="header-top-menu-phones__handset">
                                <div class="header-top-menu-phones__phone-number">
                                    <div class="header-top-menu-phones__code">+375(29)</div>
                                    <div class="header-top-menu-phones__numder">757-9-707</div>
                                    <div class="header-top-menu-phones__underline"></div>
                                </div>
                            </div>
                            <div class="header-top-menu-phones__all-phones-item header-top-menu-phones__all-phones-item-sub">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/header-top-menu__phones.png" alt="" class="header-top-menu-phones__handset">
                                <div class="header-top-menu-phones__phone-number">
                                    <div class="header-top-menu-phones__code">+375(29)</div>
                                    <div class="header-top-menu-phones__numder">757-9-707</div>
                                    <div class="header-top-menu-phones__underline"></div>
                                </div>
                            </div>
                            <div class="header-top-menu-phones__all-phones-item header-top-menu-phones__all-phones-item-sub">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/header-top-menu__phones.png" alt="" class="header-top-menu-phones__handset">
                                <div class="header-top-menu-phones__phone-number">
                                    <div class="header-top-menu-phones__code">+375(29)</div>
                                    <div class="header-top-menu-phones__numder">757-9-707</div>
                                    <div class="header-top-menu-phones__underline"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                <!--/ Выпадающие телефоны -->
                
            <!--header-bottom__search-->
                <form class="header-bottom-menu-search">
                    <input type="text" name="search">
                </form>
            <!--/header-bottom__search-->
        <!--header-bottom-->
            </div>   
            
        <!-- fix row_header-top -->
            <script>
            $(document).ready(function () {
              $(window).scroll(function() {
               var top = $(document).scrollTop();
               if (top <= $('.row_header-top').innerHeight()) $('.row_header-bottom').removeClass('row_header-bottom_fixed');
                    else {
                        $('.row_header-bottom').addClass('row_header-bottom_fixed');
                    }
                });
            });

            $(document).ready(function () {
              $(window).scroll(function() {
               var top = $(document).scrollTop();
               if (top <= $('.row_header-top').innerHeight()) $('.slider-bootstrap').removeClass('carousel_margin-top');
                    else {
                        $('.slider-bootstrap').addClass('carousel_margin-top');
                    }
                });
            });
            </script>
        <!-- /fix row_header-top -->
            
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
            <div class="slider-side-block mobile-hide">
            <!--calculator-->
                <div class="slider-side-block__calc" data-toggle="modal" data-target="#zakaz-zamera" data-whatever="@mdo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/slider-side-block__calc.png">
                </div>
            <!--/calculator-->

            <!--metering-->
                <div class="slider-side-block__metering" data-toggle="modal" data-target="#zakaz-zamera" data-whatever="@mdo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/slider-side-block__metering.png">
                </div>
            <!--/metering-->
            </div>
<!--/calculator and metering-->                  
        </div>  
        
<!-- Модальные окна -->
    <!-- Заказать замер - Bootstrap -->

        <div class="simple-modal modal fade" id="zakaz-zamera" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Заказать замер</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-description">
                        Оставьте Ваши контактные данные<br>
                        наш специалист сам перезвонит Вам
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" id="recipient-name" placeholder="Артем">
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" id="recipient-tel" placeholder="Номер телефона">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="footer-forms__button">ЗАКАЗАТЬ ЗАМЕР</button>
                    </div>
                </div>
            </div>
        </div>

    <!--/ Заказать замер - Bootstrap -->
    
    <!-- Получить консультацию - Bootstrap -->

        <div class="simple-modal modal fade" id="poluchit-consult" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Получить консультацию</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-description">
                        Оставьте Ваши контактные данные<br>
                        наш специалист сам перезвонит Вам
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" id="recipient-name" placeholder="Артем">
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" id="recipient-tel" placeholder="Номер телефона">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="footer-forms__button">ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ</button>
                    </div>
                </div>
            </div>
        </div>

    <!--/ Получить консультацию - Bootstrap -->
    
    <!-- Заказ обратного звонка - Bootstrap -->
        <div class="simple-modal modal fade" id="obratny-zvonok" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Заказ обратного звонка</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-description">
                        Оставьте Ваши контактные данные<br>
                        наш специалист сам перезвонит Вам
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" id="recipient-name" placeholder="Артем">
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" id="recipient-tel" placeholder="Номер телефона">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="footer-forms__button">ЗАКАЗАТЬ ЗВОНОК</button>
                    </div>
                </div>
            </div>
        </div>
    <!-- /Заказ обратного звонка - Bootstrap -->
    
    <!-- Вход  для клиентов - Bootstrap -->
        <div class="simple-modal simple-modal__vhod-dlya-klientov modal fade" id="vhod-dlya-klientov" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Вход для клентов</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-description">
                        Введите данные, выданные вам при регистрации
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" id="recipient-name" placeholder="001258">
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" id="enter-pass" placeholder="Введите пароль">
                            </div>
                        </form>
                    </div>
                    <div class="modal-body-2">
                        <div class="rememeber-me">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input">
                                    Запомнить меня
                                </label>
                            </div>
                        </div>
                        <div class="forget-pass">
                            <a class="forget-pass__a" href="#">Забыли пароль?</a>
                        </div>                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="footer-forms__button">ВОЙТИ НА САЙТ</button>
                    </div>
                    <div class="modal-footer-2">
                        <div class="modal-footer-2__content">
                            <div class="modal-footer-2__text">Не являетесь нашим клиентом?</div>
                            <div class="modal-footer-2__register">
                                <a href="#" class="modal-footer-2__register-a">Регистрация</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- /Вход  для клиентов - Bootstrap -->
    
    <!-- Kupit` -->
        <div class="simple-modal simple-modal__kupit modal fade" id="kupit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-content__left">
                        <img class="modal-content-left__img" src="<?php echo get_template_directory_uri(); ?>/images/modals-kupit-img.png" alt="">
                    </div>
                    <div class="modal-content__right">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Купить дверь межкомнатную 
    Eldorf</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="recipient-name" placeholder="Ваше имя">
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" id="recipient-tel" placeholder="Номер телефона">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="recipient-mail" placeholder="Email">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="footer-forms__button">ОСТАВИТЬ ЗАЯВКУ</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    <!--/ Kupit` -->
    
<!--/ Модальные окна -->
  
<!--/header-->
    </header>