<?php
/*
 Template Name: Вакансии
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
            <li class="breadcrumb-item active">Вакансии</li>
        </ol>
    </div>
</div>
<!--/breadcrumbs-->

<!-- Vacancies -->
<div class="vacancies">
    <div class="review review__row">
        <div class="review__container cs-max-width">
            <div class="review__title">
                Вакансии
            </div>
            <div class="review__botton-block" data-toggle="modal" data-target="#obratny-zvonok" data-whatever="@mdo">
                <div class="review__botton">Отправить резюме</div>
            </div>
            <div class="modal fade" id="review__botton" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        </div>
    </div>

<!-- Intro text -->
    <div class="review-item review-item__row">
        <div class="review-item__container cs-max-width">
            <div class="review-item-block">        
                <p><strong>ЧПУП «Профспецпласт»</strong> является надежным и заботливым работодателем, предоставляющим большие возможности для профессионального и личностного развития, перспективы карьерного роста, конкурентную заработную плату и социальный пакет.</p>

                <p>Мы - команда профессионалов, добивающаяся высоких результатов. <strong>Стань и ты частью нашей команды!</strong>
                Конфиденциальность информации, содержащейся в анкете, гарантируется.</p>

                <p class="vacancies__tel">Телефон для справок: <strong>+375(29) 757-9-707</strong></p>
            </div>
        </div>
    </div>
<!-- /Intro text -->

<!-- Vacancy Item -->
    <div class="vacancy-item cs-max-width">
        <div class="vacancy-item__title">
            ПРОДАВЕЦ-КОНСУЛЬТАНТ
        </div>
        <div class="vacancy-item__intro-text">
            Магазину требуются продавцы-консультанты с опытом работы со строительными материалами. 
        </div>
        
        <p>
            <a class="vacancy-item__more-info collapsed" data-toggle="collapse" href="#collapseExample0" aria-expanded="false" aria-controls="collapseExample">
                <span class="mod_border-bottom-dotted">Подробно о вакансии</span>
            </a>
        </p>
        <div class="collapse" id="collapseExample0">
            <div class="">
                <p><strong>Обязанности:</strong></p>

                <div class="vacancy__description">                    
                    Продажа керамической плитки и сопутствующих товаров <br>
                    Консультирование и обслуживание клиентов; <br>
                    Ведение внутренней отчетности.<br>
                </div> 

                <p><strong>Требования:</strong></p>

                <div class="vacancy__description">   
                    Возраст 22-35 лет‚ <br>
                    ПК - уверенный пользователь; <br>
                    Образование среднее специальное и выше; <br>
                    Гражданство РФ; <br>
                    Опыт работы в сфере продаж желателен; <br>
                    Высокий уровень личностной активности, <br>
                    Коммуникабельность, желание работать с людьми. <br>
                    Стрессоустойчивость. <br>
                </div>

                <p><strong>Условия:</strong></p>

                <div class="vacancy__description">   
                    График работы 4/2 <br>
                    Заработная плата от 35 000 (оклад + хороший % от продаж) <br>
                    Соблюдение ТК РФ‚ отпуск, <br>
                    Дружный молодой коллектив; <br>
                    Обучение за счет компании. <br>
                    Расположение магазина: г. Москва, ул. Новогиреевская, 10к1 <br>
                    Метро: Шоссе Энтузиастов, Новогиреево или Перово <br>
                </div>

                Ждем резюме на почту: <a href="mailto:info@profspecplast.by">info@profspecplast.by</a>
            </div>
        </div>
    </div>
<!-- /Vacancy Item -->
    <div class="vacancy-item cs-max-width">
        <div class="vacancy-item__title">
            УСТАНОВЩИК ОКОН И ДВЕРЕЙ
        </div>
        <div class="vacancy-item__intro-text">
            Магазину требуются продавцы-консультанты с опытом работы со строительными материалами. 
        </div>
        
        <p>
            <a class="vacancy-item__more-info collapsed" data-toggle="collapse" href="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
                <span class="mod_border-bottom-dotted">Подробно о вакансии</span>
            </a>
        </p>
        <div class="collapse" id="collapseExample1">
            <div class="">
                <p><strong>Обязанности:</strong></p>

                <div class="vacancy__description">                    
                    Продажа керамической плитки и сопутствующих товаров <br>
                    Консультирование и обслуживание клиентов; <br>
                    Ведение внутренней отчетности.<br>
                </div> 

                <p><strong>Требования:</strong></p>

                <div class="vacancy__description">   
                    Возраст 22-35 лет‚ <br>
                    ПК - уверенный пользователь; <br>
                    Образование среднее специальное и выше; <br>
                    Гражданство РФ; <br>
                    Опыт работы в сфере продаж желателен; <br>
                    Высокий уровень личностной активности, <br>
                    Коммуникабельность, желание работать с людьми. <br>
                    Стрессоустойчивость. <br>
                </div>

                <p><strong>Условия:</strong></p>

                <div class="vacancy__description">   
                    График работы 4/2 <br>
                    Заработная плата от 35 000 (оклад + хороший % от продаж) <br>
                    Соблюдение ТК РФ‚ отпуск, <br>
                    Дружный молодой коллектив; <br>
                    Обучение за счет компании. <br>
                    Расположение магазина: г. Москва, ул. Новогиреевская, 10к1 <br>
                    Метро: Шоссе Энтузиастов, Новогиреево или Перово <br>
                </div>

                Ждем резюме на почту: <a href="mailto:info@profspecplast.by">info@profspecplast.by</a>
            </div>
        </div>
    </div>
    
    <div class="vacancy-item cs-max-width">
        <div class="vacancy-item__title">
            ОТДЕЛОЧНИК
        </div>
        <div class="vacancy-item__intro-text">
            Магазину требуются продавцы-консультанты с опытом работы со строительными материалами. 
        </div>
        
        <p>
            <a class="vacancy-item__more-info collapsed" data-toggle="collapse" href="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
                <span class="mod_border-bottom-dotted">Подробно о вакансии</span>
            </a>
        </p>
        <div class="collapse" id="collapseExample2">
            <div class="">
                <p><strong>Обязанности:</strong></p>

                <div class="vacancy__description">                    
                    Продажа керамической плитки и сопутствующих товаров <br>
                    Консультирование и обслуживание клиентов; <br>
                    Ведение внутренней отчетности.<br>
                </div> 

                <p><strong>Требования:</strong></p>

                <div class="vacancy__description">   
                    Возраст 22-35 лет‚ <br>
                    ПК - уверенный пользователь; <br>
                    Образование среднее специальное и выше; <br>
                    Гражданство РФ; <br>
                    Опыт работы в сфере продаж желателен; <br>
                    Высокий уровень личностной активности, <br>
                    Коммуникабельность, желание работать с людьми. <br>
                    Стрессоустойчивость. <br>
                </div>

                <p><strong>Условия:</strong></p>

                <div class="vacancy__description">   
                    График работы 4/2 <br>
                    Заработная плата от 35 000 (оклад + хороший % от продаж) <br>
                    Соблюдение ТК РФ‚ отпуск, <br>
                    Дружный молодой коллектив; <br>
                    Обучение за счет компании. <br>
                    Расположение магазина: г. Москва, ул. Новогиреевская, 10к1 <br>
                    Метро: Шоссе Энтузиастов, Новогиреево или Перово <br>
                </div>

                Ждем резюме на почту: <a href="mailto:info@profspecplast.by">info@profspecplast.by</a>
            </div>
        </div>
    </div>
</div>   
<!--/ Vacancies -->

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
