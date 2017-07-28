<?php
/*
 Template Name: Способы оплаты
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
            <li class="breadcrumb-item active">Способы оплаты</li>
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

<!--Review / Give feedback-->
<div class="review review__row">
    <div class="review__container cs-max-width">
        <div class="review__title">
            Способы оплаты
        </div>                                                   
    </div>
</div>
<!--/Review / Give feedback-->

<!--Search text-->
<div id="payment-page" class="about-company-text cs-max-width">
   
<!--Payment - CASH-->   
    <div class="payment-item">
        <div class="payment-item__col-1">
            <img src="<?php echo get_template_directory_uri(); ?>/images/payment/payment-cash.png" alt="" class="payment-item__bullet">
        </div>
        <div class="payment-item__col-2">
            <div class="payment-item__title">
                Наличный расчет
            </div>
            <div class="payment-item__text">
                Это говорит о высочайшем качестве нашей продукции и услуг
                Вы платите не за красивые слова а за результат который вам понравился от которого вы в восторге и с радостью оплачиваете его. Наши конкуренты либо не доверяют вам(вашей платежеспособности,), либо не доверяют себе (свойму качеству, завышенным ценам) поэтому берут предоплату, посадив вас в подводную лодку.
            </div>
        </div>
    </div>
   
<!--Payment - Credit Card--> 
    <div class="payment-item">
        <div class="payment-item__col-1">
            <img src="<?php echo get_template_directory_uri(); ?>/images/payment/payment-credit-card.png" alt="" class="payment-item__bullet">
        </div>
        <div class="payment-item__col-2">
            <div class="payment-item__title">
                Безналичный расчет
            </div>
            <div class="payment-item__text">
                В процессе производства задействован квалифицированный, опытный персонал с большим стажем работы, контроль за качеством осуществляется на каждом участке производства, что обеспечивает выпуск качественной продукции. Материалы и комплектующие от ведущих европейских производителей, используемые при изготовлении изделий, позволяют выпускать изделие с большим запасом прочности и долговечности.
            </div>
        </div>
    </div>
   
<!--Payment - Installment--> 
    <div class="payment-item">
        <div class="payment-item__col-1">
            <img src="<?php echo get_template_directory_uri(); ?>/images/payment/payment-stopwatch.png" alt="" class="payment-item__bullet">
        </div>
        <div class="payment-item__col-2">
            <div class="payment-item__title">
                Рассрочка платежа от 6 до 10 месяцев
            </div>
            <div class="payment-item__text">
                Постоянный мониторинг спроса и цен что позволяет нам формировать предложение на востребованную продукцию.
            </div>
        </div>
    </div>
   
<!--Payment - Our Cards--> 
    <div class="payment-item">
        <div class="payment-item__col-1">
            <img src="<?php echo get_template_directory_uri(); ?>/images/payment/payment-our-cards.png" alt="" class="payment-item__bullet">
        </div>
        <div class="payment-item__col-2">
            <div class="payment-item__title">
                Принимаем к оплате карты рассрочек:
            </div>
            <div class="payment-item__text">
               
                <div class="payment-item__our-cards">
                    <div class="payment-item__card">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/payment/payment-karta-pokupok.png" alt="" class="payment-item__card-img">
                        <div class="payment-item__card-text">6 месяцев</div>
                    </div>
                </div>
                <div class="payment-item__our-cards">
                    <div class="payment-item__card">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/payment/payment-karta-smart.png" alt="" class="payment-item__card-img">
                        <div class="payment-item__card-text">6 месяцев</div>
                    </div>
                </div>
                <div class="payment-item__our-cards">
                    <div class="payment-item__card">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/payment/payment-karta-halva.png" alt="" class="payment-item__card-img">
                        <div class="payment-item__card-text">6 месяцев</div>
                    </div>
                </div>
                <div class="payment-item__our-cards">
                    <div class="payment-item__card">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/payment/payment-karta-vtb.png" alt="" class="payment-item__card-img">
                        <div class="payment-item__card-text">6 месяцев</div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
  
  
  
  
  
  
</div> 
<!--/Search text-->

<!--bottom separator-->
<div class="bottom-separator"></div>
<!--/bottom separator-->

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
