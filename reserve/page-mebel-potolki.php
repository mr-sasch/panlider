<?php
/*
 Template Name: Натяжные потолки
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
            <li class="breadcrumb-item active">Натяжные потолки</li>
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

<!---------------------- НАТЯЖНЫЕ ПОТОЛКИ ---------------------->
<div class="mebel-potolki mebel-korpus cs-max-width">
   
<!-- Title row -->
    <div class="review review__row">
        <div class="review__container">
            <div class="review__title">
                Натяжные потолки
            </div>
            <div class="review__botton-block" data-toggle="modal" data-target="#review__botton" data-whatever="@mdo">
                <div class="mebel-korpus__buy-in">
                    <a href="#" class="mebel-korpus__buy-in-installments">Купить в рассрочку</a>
                    <a href="#" class="mebel-korpus__buy-in-installments-credit">Купить в кредит</a>
                </div>
                <div class="review__botton"><img src="<?php echo get_template_directory_uri(); ?>/images/meb-korp/meb-korp-zakaz-zamer.png" alt="">Заказать замер</div>
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
<!--/ Title row -->
    
<!-- Top Slider -->
    <div class="mebel-korpus__slider-cell">
      
        <div class="mebel-korpus__slider">
    <!-- Items -->
            <div class="mebel-korpus__slider-item">
                <div class="mebel-korpus__slider-item-left">
                    <div class="mebel-korpus__slider-item-text">
                        <span class="mebel-potolki__slider-item-text-1">Натяжные потолки<br>
                        матовые</span><br>
                        <span class="mebel-potolki__slider-item-text-2">Всего </span><span class="mebel-potolki__slider-item-text-3">25</span><span class="mebel-potolki__slider-item-text-4">00</span><span class="mebel-potolki__slider-item-text-5"> р./м</span><span class="mebel-potolki__slider-item-text-6">2</span>
                    </div>
                    <a href="#" class="mebel-korpus__slider-item-button">ОСТАВИТЬ ЗАЯВКУ</a>
                </div>
                <div class="mebel-korpus__slider-item-right" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/meb-potolki/meb-potolki-slider.png); background-size: cover;"></div>
            </div>
            <div class="mebel-korpus__slider-item">
                <div class="mebel-korpus__slider-item-left">
                    <div class="mebel-korpus__slider-item-text">
                        <span class="mebel-korpus__slider-item-text-1">Прихожие<br>
                        со скидкой</span><span class="mebel-korpus__slider-item-text-2">15%</span> <br>
                        <span class="mebel-korpus__slider-item-text-3">только в марте!</span>
                    </div>
                    <a href="#" class="mebel-korpus__slider-item-button">ОСТАВИТЬ ЗАЯВКУ</a>
                </div>
                <div class="mebel-korpus__slider-item-right" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/meb-korp/meb-korp-slider-top.png); background-size: cover;"></div>
            </div>
            <div class="mebel-korpus__slider-item">
                <div class="mebel-korpus__slider-item-left">
                    <div class="mebel-korpus__slider-item-text">
                        <span class="mebel-potolki__slider-item-text-1">Натяжные потолки<br>
                        матовые</span><br>
                        <span class="mebel-potolki__slider-item-text-2">Всего </span><span class="mebel-potolki__slider-item-text-3">25</span><span class="mebel-potolki__slider-item-text-4">00</span><span class="mebel-potolki__slider-item-text-5"> р./м</span><span class="mebel-potolki__slider-item-text-6">2</span>
                    </div>
                    <a href="#" class="mebel-korpus__slider-item-button">ОСТАВИТЬ ЗАЯВКУ</a>
                </div>
                <div class="mebel-korpus__slider-item-right" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/meb-potolki/meb-potolki-slider.png); background-size: cover;"></div>
            </div>
            <div class="mebel-korpus__slider-item">
                <div class="mebel-korpus__slider-item-left">
                    <div class="mebel-korpus__slider-item-text">
                        <span class="mebel-korpus__slider-item-text-1">Прихожие<br>
                        со скидкой</span><span class="mebel-korpus__slider-item-text-2">15%</span> <br>
                        <span class="mebel-korpus__slider-item-text-3">только в марте!</span>
                    </div>
                    <a href="#" class="mebel-korpus__slider-item-button">ОСТАВИТЬ ЗАЯВКУ</a>
                </div>
                <div class="mebel-korpus__slider-item-right" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/meb-korp/meb-korp-slider-top.png); background-size: cover;"></div>
            </div>
    <!--/ Items -->
        </div>
        
        
        
        
    </div>
<!--/ Top Slider -->
    
<!-- Готовые решения -->
    <div class="mebel-korpus__furniture-cell">
    <!-- Title and tabs -->
        <!-- Title -->
        <div class="mebel-korpus__furniture-top-row">
            <!-- Заголовок -->
            <div class="mebel-korpus__furniture-top-title">Готовые решения</div>
            <!--/ Заголовок -->
            <!-- Табы -->
            <div class="mebel-korpus__furniture-top-tabs">
                <!-- bootstrap tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#gostinaya" role="tab">Гостиная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#spalnya" role="tab">Спальня</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#detskaya" role="tab">Детская</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#kuhnya" role="tab">Кухня</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#koridor" role="tab">Коридор</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#vannaya" role="tab">Ванная</a>
                    </li>
                </ul>
                <!--/ bootstrap tabs -->
            </div>
            <!--/ Табы -->
        </div>
        <!--/ Title -->    
        <!-- Tabs -->
        <div class="mebel-potolki__resheniya tab-content">
            <div id="gostinaya" class="mebel-potolki__resheniya-tab tab-pane active"> 
                <div class="mebel-potolki__resheniya-tab-content">
                    <div class="mebel-potolki__resheniya-tab-left">
                        <div class="mebel-potolki__resheniya-tab-left-title">
                            Натяжной потолок в гостиную <br>18 м2
                        </div>
                        <div class="mebel-potolki__resheniya-tab-left-content">
                            Полотно, профиль, установка - 23,20 руб. <br>
                            Установка потолочного карниза - 20 руб. <br>
                            Декоративная вставка (плинтус), установка вставки - 35 руб.
                        </div>
                        <div class="mebel-potolki__resheniya-tab-left-sum">
                            <p>Общая стоимость:  343 руб.</p>
                            <p>Стоимость со скидкой: <span style='color: #ff0000; font-size: 30px; font-weight: 600;'>287</span> руб.</p>
                        </div>
                        <a href="#" class="mebel-potolki__resheniya-button">заказать такой же</a>
                    </div>
                    <div class="mebel-potolki__resheniya-tab-right">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/meb-potolki/mebel-potolki__resheniya-tab-right-img.png" alt="" class="mebel-potolki__resheniya-tab-right-img">
                    </div>  
                </div>
            </div> 
            <div id="spalnya" class="mebel-potolki__resheniya-tab tab-pane">
                <div class="mebel-potolki__resheniya-tab-content">
                    <div class="mebel-potolki__resheniya-tab-left">
                        <div class="mebel-potolki__resheniya-tab-left-title">
                            Натяжной потолок в гостиную <br>118 м2
                        </div>
                        <div class="mebel-potolki__resheniya-tab-left-content">
                            Полотно, профиль, установка - 213,20 руб. <br>
                            Установка потолочного карниза - 210 руб. <br>
                            Декоративная вставка (плинтус), установка вставки - 315 руб.
                        </div>
                        <div class="mebel-potolki__resheniya-tab-left-sum">
                            <p>Общая стоимость:  344 руб.</p>
                            <p>Стоимость со скидкой: <span style='color: #ff0000; font-size: 30px; font-weight: 600;'>284</span> руб.</p>
                        </div>
                        <a href="#" class="mebel-potolki__resheniya-button">заказать такой же</a>
                    </div>
                    <div class="mebel-potolki__resheniya-tab-right">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/meb-potolki/mebel-potolki__resheniya-tab-right-img.png" alt="" class="mebel-potolki__resheniya-tab-right-img">
                    </div> 
                </div>
            </div> 
            <div id="detskaya" class="mebel-potolki__resheniya-tab tab-pane">
                <div class="mebel-potolki__resheniya-tab-content">
                    <div class="mebel-potolki__resheniya-tab-left">
                        <div class="mebel-potolki__resheniya-tab-left-title">
                            Натяжной потолок в гостиную <br>12 м2
                        </div>
                        <div class="mebel-potolki__resheniya-tab-left-content">
                            Полотно, профиль, установка - 23,22 руб. <br>
                            Установка потолочного карниза - 22 руб. <br>
                            Декоративная вставка (плинтус), установка вставки - 32 руб.
                        </div>
                        <div class="mebel-potolki__resheniya-tab-left-sum">
                            <p>Общая стоимость:  342 руб.</p>
                            <p>Стоимость со скидкой: <span style='color: #ff0000; font-size: 30px; font-weight: 600;'>282</span> руб.</p>
                        </div>
                        <a href="#" class="mebel-potolki__resheniya-button">заказать такой же</a>
                    </div>
                    <div class="mebel-potolki__resheniya-tab-right">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/meb-potolki/mebel-potolki__resheniya-tab-right-img.png" alt="" class="mebel-potolki__resheniya-tab-right-img">
                    </div>  
                </div>
            </div> 
            <div id="kuhnya" class="mebel-potolki__resheniya-tab tab-pane">
                <div class="mebel-potolki__resheniya-tab-content">
                    <div class="mebel-potolki__resheniya-tab-left">
                        <div class="mebel-potolki__resheniya-tab-left-title">
                            Натяжной потолок в гостиную <br>13 м2
                        </div>
                        <div class="mebel-potolki__resheniya-tab-left-content">
                            Полотно, профиль, установка - 23,20 руб. <br>
                            Установка потолочного карниза - 23 руб. <br>
                            Декоративная вставка (плинтус), установка вставки - 33 руб.
                        </div>
                        <div class="mebel-potolki__resheniya-tab-left-sum">
                            <p>Общая стоимость:  343 руб.</p>
                            <p>Стоимость со скидкой: <span style='color: #ff0000; font-size: 30px; font-weight: 600;'>283</span> руб.</p>
                        </div>
                        <a href="#" class="mebel-potolki__resheniya-button">заказать такой же</a>
                    </div>
                    <div class="mebel-potolki__resheniya-tab-right">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/meb-potolki/mebel-potolki__resheniya-tab-right-img.png" alt="" class="mebel-potolki__resheniya-tab-right-img">
                    </div>  
                </div>
            </div> 
            <div id="koridor" class="mebel-potolki__resheniya-tab tab-pane">
                <div class="mebel-potolki__resheniya-tab-content">
                    <div class="mebel-potolki__resheniya-tab-left">
                        <div class="mebel-potolki__resheniya-tab-left-title">
                            Натяжной потолок в гостиную <br>48 м2
                        </div>
                        <div class="mebel-potolki__resheniya-tab-left-content">
                            Полотно, профиль, установка - 23,40 руб. <br>
                            Установка потолочного карниза - 40 руб. <br>
                            Декоративная вставка (плинтус), установка вставки - 45 руб.
                        </div>
                        <div class="mebel-potolki__resheniya-tab-left-sum">
                            <p>Общая стоимость:  343 руб.</p>
                            <p>Стоимость со скидкой: <span style='color: #ff0000; font-size: 30px; font-weight: 600;'>247</span> руб.</p>
                        </div>
                        <a href="#" class="mebel-potolki__resheniya-button">заказать такой же</a>
                    </div>
                    <div class="mebel-potolki__resheniya-tab-right">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/meb-potolki/mebel-potolki__resheniya-tab-right-img.png" alt="" class="mebel-potolki__resheniya-tab-right-img">
                    </div>  
                </div>
            </div> 
            <div id="vannaya" class="mebel-potolki__resheniya-tab tab-pane">
                <div class="mebel-potolki__resheniya-tab-content">
                    <div class="mebel-potolki__resheniya-tab-left">
                        <div class="mebel-potolki__resheniya-tab-left-title">
                            Натяжной потолок в гостиную <br>78 м2
                        </div>
                        <div class="mebel-potolki__resheniya-tab-left-content">
                            Полотно, профиль, установка - 23,70 руб. <br>
                            Установка потолочного карниза - 70 руб. <br>
                            Декоративная вставка (плинтус), установка вставки - 75 руб.
                        </div>
                        <div class="mebel-potolki__resheniya-tab-left-sum">
                            <p>Общая стоимость:  373 руб.</p>
                            <p>Стоимость со скидкой: <span style='color: #ff0000; font-size: 30px; font-weight: 600;'>277</span> руб.</p>
                        </div>
                        <a href="#" class="mebel-potolki__resheniya-button">заказать такой же</a>
                    </div>
                    <div class="mebel-potolki__resheniya-tab-right">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/meb-potolki/mebel-potolki__resheniya-tab-right-img.png" alt="" class="mebel-potolki__resheniya-tab-right-img">
                    </div>  
                </div>
            </div>          
        <!--/ Tabs -->    
    <!--/ Title and tabs --> 
        </div>
    </div>
<!--/ Готовые решения -->
   
<!-- Почему вас стоит заказать натяжные потолки именно у нас? -->
    <div class="mebel-korpus__why-us">
    <!--/ Title -->
        <div class="mebel-korpus__why-us-title">
            Почему вам стоит заказать натяжные потолки именно у нас?
        </div>
    <!-- Title -->    
    <!-- Items -->
        <div class="mebel-korpus__payment-item payment-item">
            <div class="payment-item__col-1">
                <img src="<?php echo get_template_directory_uri(); ?>/images/meb-potolki/mebel-potolki__why-graphic-tool.png" alt="" class="payment-item__bullet">
            </div>
            <div class="payment-item__col-2">
                <div class="payment-item__title">
                    Бесплатный дизайнер
                </div>
                <div class="payment-item__text">
                    <a href="#">Выезд дизайнера на дом</a> и создание дизайн-проекта - абсолютно бесплатно!
                </div>
            </div>
        </div>
        <div class="mebel-korpus__payment-item payment-item">
            <div class="payment-item__col-1">
                <img src="<?php echo get_template_directory_uri(); ?>/images/meb-potolki/mebel-potolki__why-truck.png" alt="" class="payment-item__bullet">
            </div>
            <div class="payment-item__col-2">
                <div class="payment-item__title">
                    Бесплатная доставка и монтаж
                </div>
                <div class="payment-item__text">
                    Мы осуществляем <a href="#">доставку и монтаж</a> наших потолков абсолютно бесплатно!
                </div>
            </div>
        </div>
        <div class="mebel-korpus__payment-item payment-item">
            <div class="payment-item__col-1">
                <img src="<?php echo get_template_directory_uri(); ?>/images/meb-potolki/mebel-potolki__why-quality.png" alt="" class="payment-item__bullet">
            </div>
            <div class="payment-item__col-2">
                <div class="payment-item__title">
                    100% гарантия качества
                </div>
                <div class="payment-item__text">
                    Мы работаем только с <a href="#">проверенными производителями</a> потолков. За качество отвечаем!
                </div>
            </div>
        </div>
        <div class="mebel-korpus__payment-item payment-item">
            <div class="payment-item__col-1">
                <img src="<?php echo get_template_directory_uri(); ?>/images/meb-potolki/mebel-potolki__why-improvement.png" alt="" class="payment-item__bullet">
            </div>
            <div class="payment-item__col-2">
                <div class="payment-item__title">
                    Быстрый и качественный монтаж
                </div>
                <div class="payment-item__text">
                    Среднее время <a href="#">монтажа</a> натяжного потолка в среднем 2-3 часа
                </div>
            </div>
        </div> 
        <div class="mebel-korpus__payment-item payment-item">
            <div class="payment-item__col-1">
                <img src="<?php echo get_template_directory_uri(); ?>/images/meb-potolki/mebel-potolki__why-pantone.png" alt="" class="payment-item__bullet">
            </div>
            <div class="payment-item__col-2">
                <div class="payment-item__title">
                    Широкий выбор
                </div>
                <div class="payment-item__text">
                    Широчайший выбор <a href="#">расцветок потолков</a>, <a href="#">материалов</a> и <a href="#">фурнитуры</a>.
                </div>
            </div>
        </div>
        <div class="mebel-korpus__payment-item payment-item">
            <div class="payment-item__col-1">
                <img src="<?php echo get_template_directory_uri(); ?>/images/meb-potolki/mebel-potolki__why-cup.png" alt="" class="payment-item__bullet">
            </div>
            <div class="payment-item__col-2">
                <div class="payment-item__title">
                    Опыт имеет значение
                </div>
                <div class="payment-item__text">
                    За более, чем 8 лет безукоризненной работы - более 1500 <a href="#">довольных клиентов</a>.
                </div>
            </div>
        </div>    
    <!--/ Items --> 
    </div>  
<!--/ Почему вас стоит заказать натяжные потолки именно у нас? -->
</div>

<!-- Преимущества наших натяжных потолков -->
    <div class="mebel-potolki mebel-korpus__preimusch white-block">       
    <!-- Title -->
        <div class="white-block__title">Преимущества наших натяжных потолков</div>
    <!--/ Title -->
    <!-- Items -->
        <div class="mebel-potolki__preimusch-item mebel-korpus__preimusch-item">
            <div class="mebel-korpus__preimusch-item-content">
                <div class="mebel-korpus__preimusch-item-label">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/meb-potolki/mebel-potolki__preimusch-pilesos.png" alt="" class="mebel-korpus__preimusch-item-img">
                </div>
                <div class="mebel-korpus__preimusch-item-info">
                    <div class="mebel-korpus__preimusch-item-title">
                        без грязи
                    </div>
                    <div class="mebel-korpus__preimusch-item-text">
                        При монтаже потолков практически нет грязи
                    </div>
                </div>
            </div>            
        </div>
        <div class="mebel-potolki__preimusch-item mebel-korpus__preimusch-item">
            <div class="mebel-korpus__preimusch-item-content">
                <div class="mebel-korpus__preimusch-item-label">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/meb-potolki/mebel-potolki__preimusch-dolgo.png" alt="" class="mebel-korpus__preimusch-item-img">
                </div>
                <div class="mebel-korpus__preimusch-item-info">
                    <div class="mebel-korpus__preimusch-item-title">
                        ДОЛГОВЕЧНОСТЬ
                    </div>
                    Натяжные потолки служат более 15 лет
                </div>
            </div>            
        </div>
        <div class="mebel-potolki__preimusch-item mebel-korpus__preimusch-item">
            <div class="mebel-korpus__preimusch-item-content">
                <div class="mebel-korpus__preimusch-item-label">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/meb-potolki/mebel-potolki__preimusch-ideal.png" alt="" class="mebel-korpus__preimusch-item-img">
                </div>
                <div class="mebel-korpus__preimusch-item-info">
                    <div class="mebel-korpus__preimusch-item-title">
                        ОНИ ИДЕАЛЬНЫ
                    </div>
                    Натяжные потолки имеют идеальные плоскость и цвет
                </div>
            </div>            
        </div>
        <div class="mebel-potolki__preimusch-item mebel-korpus__preimusch-item">
            <div class="mebel-korpus__preimusch-item-content">
                <div class="mebel-korpus__preimusch-item-label">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/meb-potolki/mebel-potolki__preimusch-svet.png" alt="" class="mebel-korpus__preimusch-item-img">
                </div>
                <div class="mebel-korpus__preimusch-item-info">
                    <div class="mebel-korpus__preimusch-item-title">
                        СВЕТОТЕХНИКА
                    </div>
                    Возможность применения встраиваемых светильников
                </div>
            </div>            
        </div>
        <div class="mebel-potolki__preimusch-item mebel-korpus__preimusch-item">
            <div class="mebel-korpus__preimusch-item-content">
                <div class="mebel-korpus__preimusch-item-label">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/meb-potolki/mebel-potolki__preimusch-head.png" alt="" class="mebel-korpus__preimusch-item-img">
                </div>
                <div class="mebel-korpus__preimusch-item-info">
                    <div class="mebel-korpus__preimusch-item-title">
                        без границ
                    </div>
                    Возможности дизайна натяжных потолков безграничны
                </div>
            </div>            
        </div>
        <div class="mebel-potolki__preimusch-item mebel-korpus__preimusch-item">
            <div class="mebel-korpus__preimusch-item-content">
                <div class="mebel-korpus__preimusch-item-label">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/meb-potolki/mebel-potolki__preimusch-no-borders.png" alt="" class="mebel-korpus__preimusch-item-img">
                </div>
                <div class="mebel-korpus__preimusch-item-info">
                    <div class="mebel-korpus__preimusch-item-title">
                        БЕЗ ТРЕЩИН
                    </div>
                    Нулевой риск появления трещин
                </div>
            </div>            
        </div>
        <div class="mebel-potolki__preimusch-item mebel-korpus__preimusch-item">
            <div class="mebel-korpus__preimusch-item-content">
                <div class="mebel-korpus__preimusch-item-label">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/meb-potolki/mebel-potolki__preimusch-safe.png" alt="" class="mebel-korpus__preimusch-item-img">
                </div>
                <div class="mebel-korpus__preimusch-item-info">
                    <div class="mebel-korpus__preimusch-item-title">
                        ЗАЩИТА ОТ ПРОТЕЧЕК
                    </div>
                    Вас больше не затопят!
                </div>
            </div>            
        </div>
        <div class="mebel-potolki__preimusch-item mebel-korpus__preimusch-item">
            <div class="mebel-korpus__preimusch-item-content">
                <div class="mebel-korpus__preimusch-item-label">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/meb-potolki/mebel-potolki__preimusch-hidden.png" alt="" class="mebel-korpus__preimusch-item-img">
                </div>
                <div class="mebel-korpus__preimusch-item-info">
                    <div class="mebel-korpus__preimusch-item-title">
                        ВСЕ СКРЫТО
                    </div>
                    Легкость скрытия проводов и других коммуникаций
                </div>
            </div>            
        </div>
    <!--/ Items -->    
    </div>
<!--/ Преимущества наших натяжных потолков -->

<div class="mebel-potolki mebel-korpus cs-max-width">

<!-- Какие потолки мы делаем -->
    <div class="mebel-korpus__furniture-cell">
    <!-- Title and tabs -->
        <!-- Title -->
        <div class="mebel-korpus__furniture-top-row">
            <!-- Заголовок -->
            <div class="mebel-korpus__furniture-top-title">Какие потолки мы делаем</div>
            <!--/ Заголовок -->
            <!-- Табы -->
            <div class="mebel-korpus__furniture-top-tabs">
                <!-- bootstrap tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#potolki__glyanec" role="tab">Глянцевые</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#potolki__mat" role="tab">Матовые</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#potolki__satin" role="tab">Сатин</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#potolki__fotopechat" role="tab">Фотопечать</a>
                    </li>
                </ul>
                <!--/ bootstrap tabs -->
            </div>
            <!--/ Табы -->
        </div>
        <!--/ Title -->    
        <!-- Tabs -->
        <div class="baguetteBox-gallery mebel-korpus__furniture-tab-content tab-content">
            <div id="potolki__glyanec" class="baguetteBox-gallery__block tab-pane active">
                <a class="baguetteBox-gallery__item" href="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/1-1.jpg" data-caption="Image caption">
                    <div class="baguetteBox-gallery__item-title">Кухня 1</div>
                    <div class="baguetteBox-gallery__hover-bg"></div>
                    <img class="baguetteBox-gallery__img" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo.png" alt="First image">
                    <img class="baguetteBox-gallery__zoom" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo__zoom.png" alt="">
                </a>
                <a class="baguetteBox-gallery__item" href="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/1-2.jpg" data-caption="Image caption">
                    <div class="baguetteBox-gallery__item-title">Кухня 1</div>
                    <div class="baguetteBox-gallery__hover-bg"></div>
                    <img class="baguetteBox-gallery__img" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo.png" alt="First image">
                    <img class="baguetteBox-gallery__zoom" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo__zoom.png" alt="">
                </a>
                <a class="baguetteBox-gallery__item" href="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/1-3.jpg" data-caption="Image caption">
                    <div class="baguetteBox-gallery__item-title">Кухня 1</div>
                    <div class="baguetteBox-gallery__hover-bg"></div>
                    <img class="baguetteBox-gallery__img" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo.png" alt="First image">
                    <img class="baguetteBox-gallery__zoom" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo__zoom.png" alt="">
                </a>
                <a class="baguetteBox-gallery__item" href="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/1-4.jpg" data-caption="Image caption">
                    <div class="baguetteBox-gallery__item-title">Кухня 1</div>
                    <div class="baguetteBox-gallery__hover-bg"></div>
                    <img class="baguetteBox-gallery__img" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo.png" alt="First image">
                    <img class="baguetteBox-gallery__zoom" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo__zoom.png" alt="">
                </a>
                <a class="baguetteBox-gallery__item" href="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/1-5.jpg" data-caption="Image caption">
                    <div class="baguetteBox-gallery__item-title">Кухня 1</div>
                    <div class="baguetteBox-gallery__hover-bg"></div>
                    <img class="baguetteBox-gallery__img" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo.png" alt="First image">
                    <img class="baguetteBox-gallery__zoom" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo__zoom.png" alt="">
                </a>
                <a class="baguetteBox-gallery__item" href="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/1-6.jpg" data-caption="Image caption">
                    <div class="baguetteBox-gallery__item-title">Кухня 1</div>
                    <div class="baguetteBox-gallery__hover-bg"></div>
                    <img class="baguetteBox-gallery__img" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo.png" alt="First image">
                    <img class="baguetteBox-gallery__zoom" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo__zoom.png" alt="">
                </a>
                <a href="" class="baguetteBox-gallery__item-addition"></a>
            <!-- Initialize Lightbox-gallery --> 
                <script>
                    baguetteBox.run('.baguetteBox-gallery__block', {
                        animation: 'fadeIn'
                    });
                </script>
            <!-- / Initialize Lightbox-gallery -->     
            </div>  
            <div id="potolki__mat" class="baguetteBox-gallery__block tab-pane">
                <a class="baguetteBox-gallery__item" href="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/1-1.jpg" data-caption="Image caption">
                    <div class="baguetteBox-gallery__item-title">Кухня 1</div>
                    <div class="baguetteBox-gallery__hover-bg"></div>
                    <img class="baguetteBox-gallery__img" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo.png" alt="First image">
                    <img class="baguetteBox-gallery__zoom" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo__zoom.png" alt="">
                </a>
                <a class="baguetteBox-gallery__item" href="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/1-2.jpg" data-caption="Image caption">
                    <div class="baguetteBox-gallery__item-title">Кухня 1</div>
                    <div class="baguetteBox-gallery__hover-bg"></div>
                    <img class="baguetteBox-gallery__img" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo.png" alt="First image">
                    <img class="baguetteBox-gallery__zoom" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo__zoom.png" alt="">
                </a>
                <a class="baguetteBox-gallery__item" href="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/1-3.jpg" data-caption="Image caption">
                    <div class="baguetteBox-gallery__item-title">Кухня 1</div>
                    <div class="baguetteBox-gallery__hover-bg"></div>
                    <img class="baguetteBox-gallery__img" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo.png" alt="First image">
                    <img class="baguetteBox-gallery__zoom" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo__zoom.png" alt="">
                </a>
                <a class="baguetteBox-gallery__item" href="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/1-4.jpg" data-caption="Image caption">
                    <div class="baguetteBox-gallery__item-title">Кухня 1</div>
                    <div class="baguetteBox-gallery__hover-bg"></div>
                    <img class="baguetteBox-gallery__img" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo.png" alt="First image">
                    <img class="baguetteBox-gallery__zoom" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo__zoom.png" alt="">
                </a>
                <a class="baguetteBox-gallery__item" href="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/1-5.jpg" data-caption="Image caption">
                    <div class="baguetteBox-gallery__item-title">Кухня 1</div>
                    <div class="baguetteBox-gallery__hover-bg"></div>
                    <img class="baguetteBox-gallery__img" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo.png" alt="First image">
                    <img class="baguetteBox-gallery__zoom" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo__zoom.png" alt="">
                </a>
                <a class="baguetteBox-gallery__item" href="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/1-6.jpg" data-caption="Image caption">
                    <div class="baguetteBox-gallery__item-title">Кухня 1</div>
                    <div class="baguetteBox-gallery__hover-bg"></div>
                    <img class="baguetteBox-gallery__img" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo.png" alt="First image">
                    <img class="baguetteBox-gallery__zoom" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo__zoom.png" alt="">
                </a>
                <a href="" class="baguetteBox-gallery__item-addition"></a>
            <!-- Initialize Lightbox-gallery --> 
                <script>
                    baguetteBox.run('.baguetteBox-gallery__block', {
                        animation: 'fadeIn'
                    });
                </script>
            <!-- / Initialize Lightbox-gallery -->     
            </div>  
            <div id="potolki__satin" class="baguetteBox-gallery__block tab-pane">
                <a class="baguetteBox-gallery__item" href="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/1-1.jpg" data-caption="Image caption">
                    <div class="baguetteBox-gallery__item-title">Кухня 1</div>
                    <div class="baguetteBox-gallery__hover-bg"></div>
                    <img class="baguetteBox-gallery__img" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo.png" alt="First image">
                    <img class="baguetteBox-gallery__zoom" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo__zoom.png" alt="">
                </a>
                <a class="baguetteBox-gallery__item" href="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/1-2.jpg" data-caption="Image caption">
                    <div class="baguetteBox-gallery__item-title">Кухня 1</div>
                    <div class="baguetteBox-gallery__hover-bg"></div>
                    <img class="baguetteBox-gallery__img" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo.png" alt="First image">
                    <img class="baguetteBox-gallery__zoom" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo__zoom.png" alt="">
                </a>
                <a class="baguetteBox-gallery__item" href="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/1-3.jpg" data-caption="Image caption">
                    <div class="baguetteBox-gallery__item-title">Кухня 1</div>
                    <div class="baguetteBox-gallery__hover-bg"></div>
                    <img class="baguetteBox-gallery__img" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo.png" alt="First image">
                    <img class="baguetteBox-gallery__zoom" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo__zoom.png" alt="">
                </a>
                <a class="baguetteBox-gallery__item" href="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/1-4.jpg" data-caption="Image caption">
                    <div class="baguetteBox-gallery__item-title">Кухня 1</div>
                    <div class="baguetteBox-gallery__hover-bg"></div>
                    <img class="baguetteBox-gallery__img" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo.png" alt="First image">
                    <img class="baguetteBox-gallery__zoom" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo__zoom.png" alt="">
                </a>
                <a class="baguetteBox-gallery__item" href="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/1-5.jpg" data-caption="Image caption">
                    <div class="baguetteBox-gallery__item-title">Кухня 1</div>
                    <div class="baguetteBox-gallery__hover-bg"></div>
                    <img class="baguetteBox-gallery__img" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo.png" alt="First image">
                    <img class="baguetteBox-gallery__zoom" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo__zoom.png" alt="">
                </a>
                <a class="baguetteBox-gallery__item" href="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/1-6.jpg" data-caption="Image caption">
                    <div class="baguetteBox-gallery__item-title">Кухня 1</div>
                    <div class="baguetteBox-gallery__hover-bg"></div>
                    <img class="baguetteBox-gallery__img" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo.png" alt="First image">
                    <img class="baguetteBox-gallery__zoom" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo__zoom.png" alt="">
                </a>
                <a href="" class="baguetteBox-gallery__item-addition"></a>
            <!-- Initialize Lightbox-gallery --> 
                <script>
                    baguetteBox.run('.baguetteBox-gallery__block', {
                        animation: 'fadeIn'
                    });
                </script>
            <!-- / Initialize Lightbox-gallery -->     
            </div>  
            <div id="potolki__fotopechat" class="baguetteBox-gallery__block tab-pane">
                <a class="baguetteBox-gallery__item" href="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/1-1.jpg" data-caption="Image caption">
                    <div class="baguetteBox-gallery__item-title">Кухня 1</div>
                    <div class="baguetteBox-gallery__hover-bg"></div>
                    <img class="baguetteBox-gallery__img" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo.png" alt="First image">
                    <img class="baguetteBox-gallery__zoom" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo__zoom.png" alt="">
                </a>
                <a class="baguetteBox-gallery__item" href="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/1-2.jpg" data-caption="Image caption">
                    <div class="baguetteBox-gallery__item-title">Кухня 1</div>
                    <div class="baguetteBox-gallery__hover-bg"></div>
                    <img class="baguetteBox-gallery__img" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo.png" alt="First image">
                    <img class="baguetteBox-gallery__zoom" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo__zoom.png" alt="">
                </a>
                <a class="baguetteBox-gallery__item" href="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/1-3.jpg" data-caption="Image caption">
                    <div class="baguetteBox-gallery__item-title">Кухня 1</div>
                    <div class="baguetteBox-gallery__hover-bg"></div>
                    <img class="baguetteBox-gallery__img" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo.png" alt="First image">
                    <img class="baguetteBox-gallery__zoom" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo__zoom.png" alt="">
                </a>
                <a class="baguetteBox-gallery__item" href="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/1-4.jpg" data-caption="Image caption">
                    <div class="baguetteBox-gallery__item-title">Кухня 1</div>
                    <div class="baguetteBox-gallery__hover-bg"></div>
                    <img class="baguetteBox-gallery__img" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo.png" alt="First image">
                    <img class="baguetteBox-gallery__zoom" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo__zoom.png" alt="">
                </a>
                <a class="baguetteBox-gallery__item" href="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/1-5.jpg" data-caption="Image caption">
                    <div class="baguetteBox-gallery__item-title">Кухня 1</div>
                    <div class="baguetteBox-gallery__hover-bg"></div>
                    <img class="baguetteBox-gallery__img" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo.png" alt="First image">
                    <img class="baguetteBox-gallery__zoom" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo__zoom.png" alt="">
                </a>
                <a class="baguetteBox-gallery__item" href="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/1-6.jpg" data-caption="Image caption">
                    <div class="baguetteBox-gallery__item-title">Кухня 1</div>
                    <div class="baguetteBox-gallery__hover-bg"></div>
                    <img class="baguetteBox-gallery__img" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo.png" alt="First image">
                    <img class="baguetteBox-gallery__zoom" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo__zoom.png" alt="">
                </a>
                <a href="" class="baguetteBox-gallery__item-addition"></a>
            <!-- Initialize Lightbox-gallery --> 
                <script>
                    baguetteBox.run('.baguetteBox-gallery__block', {
                        animation: 'fadeIn'
                    });
                </script>
            <!-- / Initialize Lightbox-gallery -->     
            </div>      
            <!-- View more photo - button -->            
            <div id="baguetteBox-gallery__view-more">
                <div class="mod_block-underline">Еще фото</div>
            </div>            
            <script>
              $('#baguetteBox-gallery__view-more').click(function(e){
                e.preventDefault();
                for (var i=7;i<=12;i++){
                  $('.baguetteBox-gallery__item-addition').before('<a class="baguetteBox-gallery__item" href="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/1-6.jpg" data-caption="Image caption"><div class="baguetteBox-gallery__item-title">Кухня 1</div><div class="baguetteBox-gallery__hover-bg"></div><img class="baguetteBox-gallery__img" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo.png" alt="First image"><img class="baguetteBox-gallery__zoom" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo__zoom.png" alt=""></a>');
                }
                baguetteBox.run('.baguetteBox-gallery__block', {
                    animation: 'fadeIn'
                });              
              });
            </script>
            <!-- / View more photo - button -->        
        </div>  
        <!--/ Tabs -->    
    <!--/ Title and tabs --> 
    </div>
<!--/ Какие потолки мы делаем -->

<!-- Как мы работаем -->
    <div class="mebel-korpus__process mebel-korpus__preimusch">       
    <!-- Title -->
        <div class="white-block__title">Как мы работаем</div>
    <!--/ Title -->
    <!-- Items -->
        <!-- #1 -->
        <div class="mebel-korpus__preimusch-item">
            <div id="mebel-korpus__process-item-1" class="mebel-korpus__preimusch-item-content">
                <img src="<?php echo get_template_directory_uri(); ?>/images/meb-korp/mebel-korpus__process-arrow-up.png" alt="" class="mebel-korpus__preimusch-item-arrow-top">
                <img src="<?php echo get_template_directory_uri(); ?>/images/meb-korp/mebel-korpus__process-arrow-down.png" alt="" class="mebel-korpus__preimusch-item-arrow-bottom">
                <div class="mebel-korpus__preimusch-item-label">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/meb-korp/mebel-korpus__process-1.png" alt="" class="mebel-korpus__preimusch-item-img">
                </div>
                <div class="mebel-korpus__preimusch-item-info">
                    <div class="mebel-korpus__preimusch-item-title">
                        звонок
                    </div>
                    <div class="mebel-korpus__preimusch-item-text">
                        Вы звоните, либо оставляете заявку в форме обратной связи на сайте
                    </div>
                </div>
            </div>            
        </div>
        <!-- #2 -->
        <div class="mebel-korpus__preimusch-item">
            <div id="mebel-korpus__process-item-2" class="mebel-korpus__preimusch-item-content">
                <img src="<?php echo get_template_directory_uri(); ?>/images/meb-korp/mebel-korpus__process-arrow-up.png" alt="" class="mebel-korpus__preimusch-item-arrow-top">
                <img src="<?php echo get_template_directory_uri(); ?>/images/meb-korp/mebel-korpus__process-arrow-down.png" alt="" class="mebel-korpus__preimusch-item-arrow-bottom">
                <div class="mebel-korpus__preimusch-item-label">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/meb-korp/mebel-korpus__process-2.png" alt="" class="mebel-korpus__preimusch-item-img">
                </div>
                <div class="mebel-korpus__preimusch-item-info">
                    <div class="mebel-korpus__preimusch-item-title">
                        замер
                    </div>
                    <div class="mebel-korpus__preimusch-item-text">
                        Выезжаем, делаем замер
                    </div>
                </div>
            </div>            
        </div>
        
        <!-- Long arrow -->
        <div class="mebel-korpus__process-long-arrow mebel-korpus__process-long-arrow-2-3">
            <img src="<?php echo get_template_directory_uri(); ?>/images/meb-korp/mebel-korpus__process-arrow-long-1.png" alt="" class="mebel-korpus__process-long-arrow-1">
            <img src="<?php echo get_template_directory_uri(); ?>/images/meb-korp/mebel-korpus__process-arrow-long-2.png" alt="" class="mebel-korpus__process-long-arrow-2">
            <img src="<?php echo get_template_directory_uri(); ?>/images/meb-korp/mebel-korpus__process-arrow-long-3.png" alt="" class="mebel-korpus__process-long-arrow-3">
        </div>
        <!--/ Long arrow -->
        
        <!-- #3 -->
        <div class="mebel-korpus__preimusch-item">
            <div id="mebel-korpus__process-item-3" class="mebel-korpus__preimusch-item-content">
                <img src="<?php echo get_template_directory_uri(); ?>/images/meb-korp/mebel-korpus__process-arrow-up.png" alt="" class="mebel-korpus__preimusch-item-arrow-top">
                <img src="<?php echo get_template_directory_uri(); ?>/images/meb-korp/mebel-korpus__process-arrow-down.png" alt="" class="mebel-korpus__preimusch-item-arrow-bottom">
                <div class="mebel-korpus__preimusch-item-label">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/meb-korp/mebel-korpus__process-3.png" alt="" class="mebel-korpus__preimusch-item-img">
                </div>
                <div class="mebel-korpus__preimusch-item-info">
                    <div class="mebel-korpus__preimusch-item-title">
                        документы
                    </div>
                    <div class="mebel-korpus__preimusch-item-text">
                        Заключаем Договор
                    </div>
                </div>
            </div>            
        </div>
        
        <!-- Long arrow -->
        <div class="mebel-korpus__process-long-arrow mebel-korpus__process-long-arrow-3-4">
            <img src="<?php echo get_template_directory_uri(); ?>/images/meb-korp/mebel-korpus__process-arrow-long-1.png" alt="" class="mebel-korpus__process-long-arrow-1">
            <img src="<?php echo get_template_directory_uri(); ?>/images/meb-korp/mebel-korpus__process-arrow-long-2.png" alt="" class="mebel-korpus__process-long-arrow-2">
            <img src="<?php echo get_template_directory_uri(); ?>/images/meb-korp/mebel-korpus__process-arrow-long-3.png" alt="" class="mebel-korpus__process-long-arrow-3">
        </div>
        <!--/ Long arrow -->
        
        <!-- #4 -->
        <div class="mebel-korpus__preimusch-item">
            <div id="mebel-korpus__process-item-4" class="mebel-korpus__preimusch-item-content">
                <img src="<?php echo get_template_directory_uri(); ?>/images/meb-korp/mebel-korpus__process-arrow-up.png" alt="" class="mebel-korpus__preimusch-item-arrow-top">
                <img src="<?php echo get_template_directory_uri(); ?>/images/meb-korp/mebel-korpus__process-arrow-down.png" alt="" class="mebel-korpus__preimusch-item-arrow-bottom">
                <div class="mebel-korpus__preimusch-item-label">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/meb-korp/mebel-korpus__process-4.png" alt="" class="mebel-korpus__preimusch-item-img">
                </div>
                <div class="mebel-korpus__preimusch-item-info">
                    <div class="mebel-korpus__preimusch-item-title">
                        производство
                    </div>
                    <div class="mebel-korpus__preimusch-item-text">
                        Производим ваши окна на основании замеров и утверденных профилей
                    </div>
                </div>
            </div>            
        </div>
        
        <!-- Long arrow -->
        <div class="mebel-korpus__process-long-arrow mebel-korpus__process-long-arrow-4-5">
            <img src="<?php echo get_template_directory_uri(); ?>/images/meb-korp/mebel-korpus__process-arrow-long-1.png" alt="" class="mebel-korpus__process-long-arrow-1">
            <img src="<?php echo get_template_directory_uri(); ?>/images/meb-korp/mebel-korpus__process-arrow-long-2.png" alt="" class="mebel-korpus__process-long-arrow-2">
            <img src="<?php echo get_template_directory_uri(); ?>/images/meb-korp/mebel-korpus__process-arrow-long-3.png" alt="" class="mebel-korpus__process-long-arrow-3">
        </div>
        <!--/ Long arrow -->
        
        <!-- #5 -->
        <div class="mebel-korpus__preimusch-item">
            <div id="mebel-korpus__process-item-5" class="mebel-korpus__preimusch-item-content">
                <img src="<?php echo get_template_directory_uri(); ?>/images/meb-korp/mebel-korpus__process-arrow-up.png" alt="" class="mebel-korpus__preimusch-item-arrow-top">
                <img src="<?php echo get_template_directory_uri(); ?>/images/meb-korp/mebel-korpus__process-arrow-down.png" alt="" class="mebel-korpus__preimusch-item-arrow-bottom">
                <div class="mebel-korpus__preimusch-item-label">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/meb-korp/mebel-korpus__process-5.png" alt="" class="mebel-korpus__preimusch-item-img">
                </div>
                <div class="mebel-korpus__preimusch-item-info">
                    <div class="mebel-korpus__preimusch-item-title">
                        установка
                    </div>
                    <div class="mebel-korpus__preimusch-item-text">
                        Доставляем, устанавливаем, пожимаем руки, дарим подарки
                    </div>
                </div>
            </div>            
        </div>
        <!-- #6 -->
        <div class="mebel-korpus__preimusch-item">
            <div id="mebel-korpus__process-item-6" class="mebel-korpus__preimusch-item-content">
                <img src="<?php echo get_template_directory_uri(); ?>/images/meb-korp/mebel-korpus__process-arrow-up.png" alt="" class="mebel-korpus__preimusch-item-arrow-top">
                <img src="<?php echo get_template_directory_uri(); ?>/images/meb-korp/mebel-korpus__process-arrow-down.png" alt="" class="mebel-korpus__preimusch-item-arrow-bottom">
                <div class="mebel-korpus__preimusch-item-label">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/meb-korp/mebel-korpus__process-6.png" alt="" class="mebel-korpus__preimusch-item-img">
                </div>
                <div class="mebel-korpus__preimusch-item-info">
                    <div class="mebel-korpus__preimusch-item-title">
                        обратная связь
                    </div>
                    <div class="mebel-korpus__preimusch-item-text">
                        Звоним и уточняем - довольны ли вы ли рультатом. <br>
+1 положительный отзыв в нашу копилку:)
                    </div>
                </div>
            </div>            
        </div>
    <!--/ Items -->    
    </div>
<!--/ Как мы работаем -->
</div>      
  
<!-- Получите подробную информацию -->    
    <div class="mebel-korpus__more-info">
        <div class="mebel-korpus__more-info-text">
            <div class="mebel-korpus__more-info-text-top">
                Получите подробную информацию
            </div>
            <div class="mebel-korpus__more-info-text-bottom">
                Оставьте ваш номер телефона и мы перезвоним вам в ближайшее время
            </div>
        </div>
        <!--<div class="mebel-korpus__more-info-input"></div>-->
        <input class="mebel-korpus__more-info-input" type="tel" placeholder="+375 (___) ___ - __ - __" name="" id="">
<!--
        <div class="mebel-korpus__more-info-button">
            <input class="mebel-korpus__more-info-button-text" type="submit" value="ЗАКАЗАТЬ ЗВОНОК">
            <div class="mebel-korpus__more-info-button-text">ЗАКАЗАТЬ ЗВОНОК</div>
        </div>
-->        
        <input class="mebel-korpus__more-info-button" type="submit" value="ЗАКАЗАТЬ ЗВОНОК">        
    </div>
<!--/ Получите подробную информацию -->
    
<div class="mebel-potolki mebel-korpus cs-max-width">

<!-- Потолки в интерьере -->
    <div class="mebel-potolki__interior mebel-korpus__furniture-cell">
    <!-- Title and tabs -->
        <!-- Title -->
        <div class="mebel-korpus__furniture-top-row">
            <!-- Заголовок -->
            <div class="mebel-korpus__furniture-top-title">Потолки в интерьере</div>
            <!--/ Заголовок -->
            <!-- Табы -->
            <div class="mebel-korpus__furniture-top-tabs">
                <!-- bootstrap tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#interior__glyanec" role="tab">Глянцевые</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#interior__mat" role="tab">Матовые</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#interior__satin" role="tab">Сатиновые</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#interior__fotoprint" role="tab">Фотопечать</a>
                    </li>
                </ul>
                <!--/ bootstrap tabs -->
            </div>
            <!--/ Табы -->
        </div>
        <!--/ Title -->    
        <!-- Tabs -->
        <div class="mebel-potolki__resheniya tab-content">
            <div id="interior__glyanec" class="mebel-potolki__resheniya-tab tab-pane active"> 
                <div class="mebel-potolki__resheniya-tab-content">                   
                   
                    <div class="mebel-potolki__resheniya-tab-left">
                        <div class="mebel-potolki__resheniya-tab-left-title">
                            Выберите цвет<br>
                            Глянцевого потолка
                        </div>
                        <div class="mebel-potolki__resheniya-tab-left-content back-toggles">                           
                            <ul>
                                <li><a class="mebel-potolki__resheniya-tab-left-content-color active" href="" style="background-color:#f59777;"></a></li>
                                <li><a class="mebel-potolki__resheniya-tab-left-content-color" href="" style="background-color:#fff796;"></a></li>
                                <li><a class="mebel-potolki__resheniya-tab-left-content-color" href="" style="background-color:#88c795;"></a></li>
                                <li><a class="mebel-potolki__resheniya-tab-left-content-color" href="" style="background-color:#7dcef3;"></a></li>
                                <li><a class="mebel-potolki__resheniya-tab-left-content-color" href="" style="background-color:#9080bb;"></a></li>
                                <li><a class="mebel-potolki__resheniya-tab-left-content-color" href="" style="background-color:#f4989f;"></a></li>
                                <li><a class="mebel-potolki__resheniya-tab-left-content-color" href="" style="background-color:#f0623f;"></a></li>
                                <li><a class="mebel-potolki__resheniya-tab-left-content-color" href="" style="background-color:#7bbf63;"></a></li>
                                <li><a class="mebel-potolki__resheniya-tab-left-content-color" href="" style="background-color:#1bac65;"></a></li>
                                <li><a class="mebel-potolki__resheniya-tab-left-content-color" href="" style="background-color:#5069b1;"></a></li>
                                <li><a class="mebel-potolki__resheniya-tab-left-content-color" href="" style="background-color:#ebebeb;"></a></li>
                                <li><a class="mebel-potolki__resheniya-tab-left-content-color" href="" style="background-color:#ffffff; border: 1px solid #b7b7b7;"></a></li>
                                <li><a class="mebel-potolki__resheniya-tab-left-content-color" href="" style="background-color:#88539f;"></a></li>
                                <li><a class="mebel-potolki__resheniya-tab-left-content-color" href="" style="background-color:#ea0015;"></a></li>
                                <li><a class="mebel-potolki__resheniya-tab-left-content-color" href="" style="background-color:#fff000;"></a></li>
                                <li><a class="mebel-potolki__resheniya-tab-left-content-color" href="" style="background-color:#009342;"></a></li>
                                <li><a class="mebel-potolki__resheniya-tab-left-content-color" href="" style="background-color:#e80080;"></a></li>
                                <li><a class="mebel-potolki__resheniya-tab-left-content-color" href="" style="background-color:#000000;"></a></li>
                                <li><a class="mebel-potolki__resheniya-tab-left-content-color" href="" style="background-color:#a83f00;"></a></li>
                                <li><a class="mebel-potolki__resheniya-tab-left-content-color" href="" style="background-color:#a2917c;"></a></li>
                                <li><a class="mebel-potolki__resheniya-tab-left-content-color" href="" style="background-color:#57463b;"></a></li>
                                <li><a class="mebel-potolki__resheniya-tab-left-content-color" href="" style="background-color:#000045;"></a></li>
                                <li><a class="mebel-potolki__resheniya-tab-left-content-color" href="" style="background-color:#790020;"></a></li>
                                <li><a class="mebel-potolki__resheniya-tab-left-content-color" href="" style="background-color:#464646;"></a></li>
                                <li><a class="mebel-potolki__resheniya-tab-left-content-color" href="" style="background-image:url('http://www.zastavki.com/pictures/originals/2013/Photoshop_Image_of_the_horse_053857_.jpg');"></a></li>
                                <li><a class="mebel-potolki__resheniya-tab-left-content-color" href="" style="background-image:url('https://hsto.org/getpro/habr/post_images/e4b/067/b17/e4b067b17a3e414083f7420351db272b.jpg');"></a></li>
                                
                            </ul>
                        </div>
                        <a href="#" class="mebel-potolki__resheniya-button">заказать замер</a>
                    </div>
                    
                    <div class="mebel-potolki__resheniya-tab-right image-box">
                        <div class="bg"></div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/meb-potolki/mebel-potolki__interior-img-shadow.png" alt="image">
                    </div>
                    
                </div>
            </div> 
            <div id="interior__mat" class="mebel-potolki__resheniya-tab tab-pane">
                <div class="mebel-potolki__resheniya-tab-content">
                    <div class="mebel-potolki__resheniya-tab-left">
                        <div class="mebel-potolki__resheniya-tab-left-title">
                            Натяжной потолок в гостиную <br>118 м2
                        </div>
                        <div class="mebel-potolki__resheniya-tab-left-content">
                            Полотно, профиль, установка - 213,20 руб. <br>
                            Установка потолочного карниза - 210 руб. <br>
                            Декоративная вставка (плинтус), установка вставки - 315 руб.
                        </div>
                        <div class="mebel-potolki__resheniya-tab-left-sum">
                            <p>Общая стоимость:  344 руб.</p>
                            <p>Стоимость со скидкой: <span style='color: #ff0000; font-size: 30px; font-weight: 600;'>284</span> руб.</p>
                        </div>
                        <a href="#" class="mebel-potolki__resheniya-button">заказать такой же</a>
                    </div>
                    <div class="mebel-potolki__resheniya-tab-right">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/meb-potolki/mebel-potolki__resheniya-tab-right-img.png" alt="" class="mebel-potolki__resheniya-tab-right-img">
                    </div> 
                </div>
            </div> 
            <div id="interior__satin" class="mebel-potolki__resheniya-tab tab-pane">
                <div class="mebel-potolki__resheniya-tab-content">
                    <div class="mebel-potolki__resheniya-tab-left">
                        <div class="mebel-potolki__resheniya-tab-left-title">
                            Натяжной потолок в гостиную <br>12 м2
                        </div>
                        <div class="mebel-potolki__resheniya-tab-left-content">
                            Полотно, профиль, установка - 23,22 руб. <br>
                            Установка потолочного карниза - 22 руб. <br>
                            Декоративная вставка (плинтус), установка вставки - 32 руб.
                        </div>
                        <div class="mebel-potolki__resheniya-tab-left-sum">
                            <p>Общая стоимость:  342 руб.</p>
                            <p>Стоимость со скидкой: <span style='color: #ff0000; font-size: 30px; font-weight: 600;'>282</span> руб.</p>
                        </div>
                        <a href="#" class="mebel-potolki__resheniya-button">заказать такой же</a>
                    </div>
                    <div class="mebel-potolki__resheniya-tab-right">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/meb-potolki/mebel-potolki__resheniya-tab-right-img.png" alt="" class="mebel-potolki__resheniya-tab-right-img">
                    </div>  
                </div>
            </div> 
            <div id="interior__fotoprint" class="mebel-potolki__resheniya-tab tab-pane">
                <div class="mebel-potolki__resheniya-tab-content">
                    <div class="mebel-potolki__resheniya-tab-left">
                        <div class="mebel-potolki__resheniya-tab-left-title">
                            Натяжной потолок в гостиную <br>13 м2
                        </div>
                        <div class="mebel-potolki__resheniya-tab-left-content">
                            Полотно, профиль, установка - 23,20 руб. <br>
                            Установка потолочного карниза - 23 руб. <br>
                            Декоративная вставка (плинтус), установка вставки - 33 руб.
                        </div>
                        <div class="mebel-potolki__resheniya-tab-left-sum">
                            <p>Общая стоимость:  343 руб.</p>
                            <p>Стоимость со скидкой: <span style='color: #ff0000; font-size: 30px; font-weight: 600;'>283</span> руб.</p>
                        </div>
                        <a href="#" class="mebel-potolki__resheniya-button">заказать такой же</a>
                    </div>
                    <div class="mebel-potolki__resheniya-tab-right">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/meb-potolki/mebel-potolki__resheniya-tab-right-img.png" alt="" class="mebel-potolki__resheniya-tab-right-img">
                    </div>  
                </div>
            </div>                      
        <!--/ Tabs -->    
    <!--/ Title and tabs --> 
        </div>
    </div>
<!--/ Потолки в интерьере -->
    
<!-- Что влияет на стоимость натяжного потолка? -->        
    <div class="mebel-korpus__warranty text-block">
        <div class="text-block__preview">
            <div class="text-block__title">
                Что влияет на стоимость натяжного потолка?
            </div>
    <!--block preview-->        
            <div class="text-block__text-body">
<p><strong>Материал изготовления.</strong> <br>
В каталоге представлены матовые, глянцевые, сатиновые и тканевые модели. Цены натяжных потолков в Минске разнятся в зависимости от особенностей материала: самые дорогие варианты — тканевые, глянец и сатин стоят дешевле. А тем, кто хочет сэкономить, понравятся матовые разновидности.</p>

<p><strong>Количество углов в помещении. </strong><br>
Чем их больше, тем более сложную конструкцию нужно изготовить. Специалисты «Гармонии уюта» создадут все необходимое для вашего объекта, в полном соответствии с его спецификой. <br>
Размер комнаты. Просторные залы требуют большего количества материала, что влияет на цену покупки натяжных потолков. <br>
Наличие дополнительных элементов, вроде труб и карнизов. Если их много и они расположены внутри помещения, понадобятся дополнительные погонные метры материала.</p>

<p><strong>Количество люстр и других светильников, которые планируется разместить в комнате.</strong><br>
Современные потолки совместимы с любыми светильниками, однако в некоторых случаях для их установки нужно использовать материал с определенными характеристиками.</p>

<p><strong>Дополнительное оформление поверхности.</strong> <br>
На потолок можно нанести фотопечать практически любой сложности — от простых одно- и двухцветных абстрактных изображений до сложных картин.</p>
            </div>
    <!--/block preview-->
        </div>       
    </div>    
<!--/ Что влияет на стоимость натяжного потолка? -->

</div>

<!-- Честные отзывы наших клиентов -->
    <div class="mebel-korpus__chestn-otzivi white-block">
        <div class="white-block__title">Честные отзывы наших клиентов</div>        
    </div>
<!--/ Честные отзывы наших клиентов -->
   
<div class="mebel-potolki mebel-korpus cs-max-width">
   
<!-- Смотрите видео о нас -->   
<div class="mebel-korpus__video mebel-korpus__furniture-cell">
    <!-- Title and tabs -->
        <!-- Title -->
        <div class="mebel-korpus__furniture-top-row">
            <!-- Заголовок -->
            <div class="mebel-korpus__furniture-top-title">Какую мебель мы делаем</div>
            <!--/ Заголовок -->
        </div>
        <!--/ Title -->    
        <!-- Video items -->
        <div id="lightgallery--outer" class="videogallery">
            <div id="lightgallery" class="mod_two-column-grid-fb mod_margin-auto">
                <div class="mebel-korpus__video-container">
                    <a class="mod_two-column-grid-fb__cell video--box" href="https://www.youtube.com/watch?v=wVca31MjzYc" id="">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/gallery-video/gallery-video__item.png" alt="" class="lightgallery__thumb">
                        <div class="videogallery__item-bg"></div>
                        <img class="videogallery__item-play-botton" src="<?php echo get_template_directory_uri(); ?>/images/gallery-video/gallery-video__play-button.png" alt="">
                    </a>
                    <div class="mebel-korpus__video-about">
                        <div class="mebel-korpus__video-about-title">
                            Как правильно монтировать окна
                        </div>
                        <div class="mebel-korpus__video-about-text">
                            Видео о монтаже и не только
                        </div>
                    </div>
                </div>
                <div class="mebel-korpus__video-container">
                    <a class="mod_two-column-grid-fb__cell video--box" href="https://www.youtube.com/watch?v=WYkVtf54fK4" id="">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/gallery-video/gallery-video__item.png" alt="" class="lightgallery__thumb">
                        <div class="videogallery__item-bg"></div>
                        <img class="videogallery__item-play-botton" src="<?php echo get_template_directory_uri(); ?>/images/gallery-video/gallery-video__play-button.png" alt="">
                    </a>
                    <div class="mebel-korpus__video-about">
                        <div class="mebel-korpus__video-about-title">
                            Как правильно монтировать окна с профилем Rehau
                        </div>
                        <div class="mebel-korpus__video-about-text">
                            Видео о монтаже и не только
                        </div>
                    </div>
                </div>
                <div class="mebel-korpus__video-container">
                    <a class="mod_two-column-grid-fb__cell video--box" href="https://www.youtube.com/watch?v=XgrEYC_5Y58" id="">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/gallery-video/gallery-video__item.png" alt="" class="lightgallery__thumb">
                        <div class="videogallery__item-bg"></div>
                        <img class="videogallery__item-play-botton" src="<?php echo get_template_directory_uri(); ?>/images/gallery-video/gallery-video__play-button.png" alt="">
                    </a>
                    <div class="mebel-korpus__video-about">
                        <div class="mebel-korpus__video-about-title">
                            Как правильно монтировать окна
                        </div>
                        <div class="mebel-korpus__video-about-text">
                            Видео о монтаже и не только
                        </div>
                    </div>
                </div>                
            </div>
        </div>
        <!--/ Video items -->  
    <!--/ Title and tabs --> 
    </div>
<!--/ Смотрите видео о нас -->
    
</div>   
<!----------------------/ НАТЯЖНЫЕ ПОТОЛКИ ---------------------->

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
