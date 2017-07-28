<?php
/*
 Template Name: Окна ПВХ
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
            <li class="breadcrumb-item active">Окна ПВХ</li>
        </ol>
    </div>
</div>
<!--/breadcrumbs-->  

<!-- Окна ПВХ -->
<div class="mebel-okna mebel-korpus cs-max-width">
   
<!-- Title row -->
    <div class="review review__row">
        <div class="review__container">
            <div class="review__title">
                Окна ПВХ
            </div>
            
            
            <div class="cat-header__types mod_border-box">
                <!--active class in doors-->
                <script>
                    function mejkomActive() {
                        document.getElementById("mejkomActive").classList.toggle("active");
                    }
                    function vhodActive() {
                        document.getElementById("vhodActive").classList.toggle("active");
                    }
                    function furnitureActive() {
                        document.getElementById("furnitureActive").classList.toggle("active");
                    }
                </script>
                <!--/active class in doors-->
                <div onclick="mejkomActive()" id="mejkomActive" class="cat-door-type cat-door-type__interior active">
                    <img class="cat-door-type__img" src="<?php echo get_template_directory_uri(); ?>/images/meb-okna/meb-korp__top-row-okna.png" alt="">Окна ПВХ
                </div>
                <div onclick="furnitureActive()" id="furnitureActive" class="cat-door-type cat-door-type__furniture">
                    <img class="cat-door-type__img" src="<?php echo get_template_directory_uri(); ?>/images/meb-okna/meb-korp__top-row-furniture.png" alt="">Фурнитура
                </div>
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
                        <span class="mebel-potolki__slider-item-text-1">Окна Rehau<br>
                        "Аллюр"</span><br>
                        <span class="mebel-potolki__slider-item-text-2">Всего </span><span class="mebel-potolki__slider-item-text-3">256</span><span class="mebel-potolki__slider-item-text-4">00</span><span class="mebel-potolki__slider-item-text-5"> р.</span>
                    </div>
                    <a href="#" class="mebel-korpus__slider-item-button">ОСТАВИТЬ ЗАЯВКУ</a>
                </div>
                <div class="mebel-korpus__slider-item-right" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/meb-okna/meb-korp__top-slider.png); background-size: cover;"></div>
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
    
<!-- Пластиковые окна -->
    <div class="mebel-korpus__furniture-cell">
    <!-- Title and tabs -->
        <!-- Title -->
        <div class="mebel-korpus__furniture-top-row">
            <!-- Заголовок -->
            <div class="mebel-korpus__furniture-top-title">Какую мебель мы делаем</div>
            <!--/ Заголовок -->
            <!-- Табы -->
            <div class="mebel-korpus__furniture-top-tabs">
                <!-- bootstrap tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#kbe" role="tab">KBE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#rehau" role="tab">Rehau</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#salamander" role="tab">Salamander</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#wital" role="tab">Wital</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#exprof" role="tab">Exprof</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#brusbox" role="tab">Brusbox</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#dexen" role="tab">Dexen</a>
                    </li>
                </ul>
                <!--/ bootstrap tabs -->
            </div>
            <!--/ Табы -->
        </div>
        <!--/ Title -->    
        <!-- Tabs -->
        <div class="baguetteBox-gallery mebel-korpus__furniture-tab-content tab-content">

                <div id="kbe" class="baguetteBox-gallery__block tab-pane active">

                    <div class="">           
                        <div class="cat-block-top__item-align">
                            <div class="cat-block-top__item">
                                <div class="cat-block-top__item-align-center">
                                    <div class="cat-block-top__label cat-block-top__label_new">Новинка</div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/meb-okna/meb-korp__plast-okna.png" alt="" class="cat-block-top__item-img">
                                    <div class="cat-block-top__item-title">
                                        REHAU БЛИЦ
                                    </div>
                                    <div class="cat-block-top__item-manufacturer">
                                        от <span class="mod_strong-700-18">5 130</span> руб./м<span class="mod_square">2</span>
                                    </div>
                                    <div class="cat-block-top__item-buy">
                                        ЗАКАЗАТЬ ЗАМЕР
                                    </div>
                                </div>    
                            </div>               
                        </div>
                    </div>
                    <div class="">           
                        <div class="cat-block-top__item-align">
                            <div class="cat-block-top__item">
                                <div class="cat-block-top__item-align-center">
                                    <div class="cat-block-top__label cat-block-top__label_action">Акция</div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/meb-okna/meb-korp__plast-okna.png" alt="" class="cat-block-top__item-img">
                                    <div class="cat-block-top__item-title">
                                        REHAU БЛИЦ
                                    </div>
                                    <div class="cat-block-top__item-manufacturer">
                                        от <span class="mod_strong-700-18">5 130</span> руб./м<span class="mod_square">2</span>
                                    </div>
                                    <div class="cat-block-top__item-buy">
                                        ЗАКАЗАТЬ ЗАМЕР
                                    </div>
                                </div>    
                            </div>               
                        </div>
                    </div>             
                    <div class="">           
                        <div class="cat-block-top__item-align">
                            <div class="cat-block-top__item">
                                <div class="cat-block-top__item-align-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/meb-okna/meb-korp__plast-okna.png" alt="" class="cat-block-top__item-img">
                                    <div class="cat-block-top__item-title">
                                        REHAU БЛИЦ
                                    </div>
                                    <div class="cat-block-top__item-manufacturer">
                                        от <span class="mod_strong-700-18">5 130</span> руб./м<span class="mod_square">2</span>
                                    </div>
                                    <div class="cat-block-top__item-buy">
                                        ЗАКАЗАТЬ ЗАМЕР
                                    </div>
                                </div>    
                            </div>               
                        </div>
                    </div>             
                    <div class="">           
                        <div class="cat-block-top__item-align">
                            <div class="cat-block-top__item">
                                <div class="cat-block-top__item-align-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/meb-okna/meb-korp__plast-okna.png" alt="" class="cat-block-top__item-img">
                                    <div class="cat-block-top__item-title">
                                        REHAU БЛИЦ
                                    </div>
                                    <div class="cat-block-top__item-manufacturer">
                                        от <span class="mod_strong-700-18">5 130</span> руб./м<span class="mod_square">2</span>
                                    </div>
                                    <div class="cat-block-top__item-buy">
                                        ЗАКАЗАТЬ ЗАМЕР
                                    </div>
                                </div>    
                            </div>               
                        </div>
                    </div>    
                <!-- Три элемента для выравнивания блоков неполной строки -->  
                    <div class="cat-block-top__item-align-correct-1 mod_w-247-h-1">           
                        <div class="cat-block-top__item-align">
                            <div class="cat-block-top__item">   
                            </div>               
                        </div>
                    </div>   
                    <div class="mod_w-247-h-1">           
                        <div class="cat-block-top__item-align">
                            <div class="cat-block-top__item">   
                            </div>               
                        </div>
                    </div>   
                    <div class="mod_w-247-h-1">           
                        <div class="cat-block-top__item-align">
                            <div class="cat-block-top__item">   
                            </div>               
                        </div>
                    </div>
                <!--/ Три элемента для выравнивания блоков неполной строки -->
                <!-- Initialize Lightbox-gallery --> 
                    <script>
                        baguetteBox.run('.baguetteBox-gallery__block', {
                            animation: 'fadeIn'
                        });
                    </script>
                <!-- / Initialize Lightbox-gallery -->     
                    <!-- View more photo - button -->            
                    <div id="baguetteBox-gallery__view-more-1" class="baguetteBox-gallery__view-more">
                        <div class="baguetteBox-gallery__view-more-button mod_block-underline">Смотреть еще предложения</div>
                    </div>            
                    <script>
                      $('#baguetteBox-gallery__view-more-1').click(function(e){
                        e.preventDefault();
                        for (var i=5;i<=9;i++){
                          $('.cat-block-top__item-align-correct-1').before('<div class=""><div class="cat-block-top__item-align"><div class="cat-block-top__item"><div class="cat-block-top__item-align-center"><img src="<?php echo get_template_directory_uri(); ?>/images/meb-okna/meb-korp__plast-okna.png" alt="" class="cat-block-top__item-img"><div class="cat-block-top__item-title">REHAU БЛИЦ</div><div class="cat-block-top__item-manufacturer">от <span class="mod_strong-700-18">5 130</span> руб./м<span class="mod_square">2</span></div><div class="cat-block-top__item-buy">ЗАКАЗАТЬ ЗАМЕР</div></div></div></div></div>');
                        }
                        baguetteBox.run('.baguetteBox-gallery__block', {
                            animation: 'fadeIn'
                        });              
                      });
                    </script>
                    <!-- / View more photo - button -->        
                </div>
                <div id="rehau" class="baguetteBox-gallery__block tab-pane">

                    <div class="">           
                        <div class="cat-block-top__item-align">
                            <div class="cat-block-top__item">
                                <div class="cat-block-top__item-align-center">
                                    <div class="cat-block-top__label cat-block-top__label_new">Новинка</div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/meb-okna/meb-korp__plast-okna.png" alt="" class="cat-block-top__item-img">
                                    <div class="cat-block-top__item-title">
                                        REHAU БЛИЦ
                                    </div>
                                    <div class="cat-block-top__item-manufacturer">
                                        от <span class="mod_strong-700-18">5 130</span> руб./м<span class="mod_square">2</span>
                                    </div>
                                    <div class="cat-block-top__item-buy">
                                        ЗАКАЗАТЬ ЗАМЕР
                                    </div>
                                </div>    
                            </div>               
                        </div>
                    </div>
                    <div class="">           
                        <div class="cat-block-top__item-align">
                            <div class="cat-block-top__item">
                                <div class="cat-block-top__item-align-center">
                                    <div class="cat-block-top__label cat-block-top__label_action">Акция</div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/meb-okna/meb-korp__plast-okna.png" alt="" class="cat-block-top__item-img">
                                    <div class="cat-block-top__item-title">
                                        REHAU БЛИЦ
                                    </div>
                                    <div class="cat-block-top__item-manufacturer">
                                        от <span class="mod_strong-700-18">5 130</span> руб./м<span class="mod_square">2</span>
                                    </div>
                                    <div class="cat-block-top__item-buy">
                                        ЗАКАЗАТЬ ЗАМЕР
                                    </div>
                                </div>    
                            </div>               
                        </div>
                    </div>             
                    <div class="">           
                        <div class="cat-block-top__item-align">
                            <div class="cat-block-top__item">
                                <div class="cat-block-top__item-align-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/meb-okna/meb-korp__plast-okna.png" alt="" class="cat-block-top__item-img">
                                    <div class="cat-block-top__item-title">
                                        REHAU БЛИЦ
                                    </div>
                                    <div class="cat-block-top__item-manufacturer">
                                        от <span class="mod_strong-700-18">5 130</span> руб./м<span class="mod_square">2</span>
                                    </div>
                                    <div class="cat-block-top__item-buy">
                                        ЗАКАЗАТЬ ЗАМЕР
                                    </div>
                                </div>    
                            </div>               
                        </div>
                    </div>             
                    <div class="">           
                        <div class="cat-block-top__item-align">
                            <div class="cat-block-top__item">
                                <div class="cat-block-top__item-align-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/meb-okna/meb-korp__plast-okna.png" alt="" class="cat-block-top__item-img">
                                    <div class="cat-block-top__item-title">
                                        REHAU БЛИЦ
                                    </div>
                                    <div class="cat-block-top__item-manufacturer">
                                        от <span class="mod_strong-700-18">5 130</span> руб./м<span class="mod_square">2</span>
                                    </div>
                                    <div class="cat-block-top__item-buy">
                                        ЗАКАЗАТЬ ЗАМЕР
                                    </div>
                                </div>    
                            </div>               
                        </div>
                    </div>    
                <!-- Три элемента для выравнивания блоков неполной строки -->  
                    <div class="cat-block-top__item-align-correct-2 mod_w-247-h-1">           
                        <div class="cat-block-top__item-align">
                            <div class="cat-block-top__item">   
                            </div>               
                        </div>
                    </div>   
                    <div class="mod_w-247-h-1">           
                        <div class="cat-block-top__item-align">
                            <div class="cat-block-top__item">   
                            </div>               
                        </div>
                    </div>   
                    <div class="mod_w-247-h-1">           
                        <div class="cat-block-top__item-align">
                            <div class="cat-block-top__item">   
                            </div>               
                        </div>
                    </div>
                <!--/ Три элемента для выравнивания блоков неполной строки -->
                <!-- Initialize Lightbox-gallery --> 
                    <script>
                        baguetteBox.run('.baguetteBox-gallery__block', {
                            animation: 'fadeIn'
                        });
                    </script>
                <!-- / Initialize Lightbox-gallery -->     
                    <!-- View more photo - button -->            
                    <div id="baguetteBox-gallery__view-more-2" class="baguetteBox-gallery__view-more">
                        <div class="baguetteBox-gallery__view-more-button mod_block-underline">Смотреть еще предложения</div>
                    </div>            
                    <script>
                      $('#baguetteBox-gallery__view-more-2').click(function(e){
                        e.preventDefault();
                        for (var i=5;i<=9;i++){
                          $('.cat-block-top__item-align-correct-2').before('<div class=""><div class="cat-block-top__item-align"><div class="cat-block-top__item"><div class="cat-block-top__item-align-center"><img src="<?php echo get_template_directory_uri(); ?>/images/meb-okna/meb-korp__plast-okna.png" alt="" class="cat-block-top__item-img"><div class="cat-block-top__item-title">REHAU БЛИЦ</div><div class="cat-block-top__item-manufacturer">от <span class="mod_strong-700-18">5 130</span> руб./м<span class="mod_square">2</span></div><div class="cat-block-top__item-buy">ЗАКАЗАТЬ ЗАМЕР</div></div></div></div></div>');
                        }
                        baguetteBox.run('.baguetteBox-gallery__block', {
                            animation: 'fadeIn'
                        });              
                      });
                    </script>
                    <!-- / View more photo - button -->        
                </div>
                <div id="salamander" class="baguetteBox-gallery__block tab-pane">

                    <div class="">           
                        <div class="cat-block-top__item-align">
                            <div class="cat-block-top__item">
                                <div class="cat-block-top__item-align-center">
                                    <div class="cat-block-top__label cat-block-top__label_new">Новинка</div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/meb-okna/meb-korp__plast-okna.png" alt="" class="cat-block-top__item-img">
                                    <div class="cat-block-top__item-title">
                                        REHAU БЛИЦ
                                    </div>
                                    <div class="cat-block-top__item-manufacturer">
                                        от <span class="mod_strong-700-18">5 130</span> руб./м<span class="mod_square">2</span>
                                    </div>
                                    <div class="cat-block-top__item-buy">
                                        ЗАКАЗАТЬ ЗАМЕР
                                    </div>
                                </div>    
                            </div>               
                        </div>
                    </div>
                    <div class="">           
                        <div class="cat-block-top__item-align">
                            <div class="cat-block-top__item">
                                <div class="cat-block-top__item-align-center">
                                    <div class="cat-block-top__label cat-block-top__label_action">Акция</div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/meb-okna/meb-korp__plast-okna.png" alt="" class="cat-block-top__item-img">
                                    <div class="cat-block-top__item-title">
                                        REHAU БЛИЦ
                                    </div>
                                    <div class="cat-block-top__item-manufacturer">
                                        от <span class="mod_strong-700-18">5 130</span> руб./м<span class="mod_square">2</span>
                                    </div>
                                    <div class="cat-block-top__item-buy">
                                        ЗАКАЗАТЬ ЗАМЕР
                                    </div>
                                </div>    
                            </div>               
                        </div>
                    </div>             
                    <div class="">           
                        <div class="cat-block-top__item-align">
                            <div class="cat-block-top__item">
                                <div class="cat-block-top__item-align-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/meb-okna/meb-korp__plast-okna.png" alt="" class="cat-block-top__item-img">
                                    <div class="cat-block-top__item-title">
                                        REHAU БЛИЦ
                                    </div>
                                    <div class="cat-block-top__item-manufacturer">
                                        от <span class="mod_strong-700-18">5 130</span> руб./м<span class="mod_square">2</span>
                                    </div>
                                    <div class="cat-block-top__item-buy">
                                        ЗАКАЗАТЬ ЗАМЕР
                                    </div>
                                </div>    
                            </div>               
                        </div>
                    </div>             
                    <div class="">           
                        <div class="cat-block-top__item-align">
                            <div class="cat-block-top__item">
                                <div class="cat-block-top__item-align-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/meb-okna/meb-korp__plast-okna.png" alt="" class="cat-block-top__item-img">
                                    <div class="cat-block-top__item-title">
                                        REHAU БЛИЦ
                                    </div>
                                    <div class="cat-block-top__item-manufacturer">
                                        от <span class="mod_strong-700-18">5 130</span> руб./м<span class="mod_square">2</span>
                                    </div>
                                    <div class="cat-block-top__item-buy">
                                        ЗАКАЗАТЬ ЗАМЕР
                                    </div>
                                </div>    
                            </div>               
                        </div>
                    </div>    
                <!-- Три элемента для выравнивания блоков неполной строки -->  
                    <div class="cat-block-top__item-align-correct-3 mod_w-247-h-1">           
                        <div class="cat-block-top__item-align">
                            <div class="cat-block-top__item">   
                            </div>               
                        </div>
                    </div>   
                    <div class="mod_w-247-h-1">           
                        <div class="cat-block-top__item-align">
                            <div class="cat-block-top__item">   
                            </div>               
                        </div>
                    </div>   
                    <div class="mod_w-247-h-1">           
                        <div class="cat-block-top__item-align">
                            <div class="cat-block-top__item">   
                            </div>               
                        </div>
                    </div>
                <!--/ Три элемента для выравнивания блоков неполной строки -->
                <!-- Initialize Lightbox-gallery --> 
                    <script>
                        baguetteBox.run('.baguetteBox-gallery__block', {
                            animation: 'fadeIn'
                        });
                    </script>
                <!-- / Initialize Lightbox-gallery -->     
                    <!-- View more photo - button -->            
                    <div id="baguetteBox-gallery__view-more-3" class="baguetteBox-gallery__view-more">
                        <div class="baguetteBox-gallery__view-more-button mod_block-underline">Смотреть еще предложения</div>
                    </div>            
                    <script>
                      $('#baguetteBox-gallery__view-more-3').click(function(e){
                        e.preventDefault();
                        for (var i=5;i<=9;i++){
                          $('.cat-block-top__item-align-correct-3').before('<div class=""><div class="cat-block-top__item-align"><div class="cat-block-top__item"><div class="cat-block-top__item-align-center"><img src="<?php echo get_template_directory_uri(); ?>/images/meb-okna/meb-korp__plast-okna.png" alt="" class="cat-block-top__item-img"><div class="cat-block-top__item-title">REHAU БЛИЦ</div><div class="cat-block-top__item-manufacturer">от <span class="mod_strong-700-18">5 130</span> руб./м<span class="mod_square">2</span></div><div class="cat-block-top__item-buy">ЗАКАЗАТЬ ЗАМЕР</div></div></div></div></div>');
                        }
                        baguetteBox.run('.baguetteBox-gallery__block', {
                            animation: 'fadeIn'
                        });              
                      });
                    </script>
                    <!-- / View more photo - button -->        
                </div>
                <div id="wital" class="baguetteBox-gallery__block tab-pane">

                    <div class="">           
                        <div class="cat-block-top__item-align">
                            <div class="cat-block-top__item">
                                <div class="cat-block-top__item-align-center">
                                    <div class="cat-block-top__label cat-block-top__label_new">Новинка</div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/meb-okna/meb-korp__plast-okna.png" alt="" class="cat-block-top__item-img">
                                    <div class="cat-block-top__item-title">
                                        REHAU БЛИЦ
                                    </div>
                                    <div class="cat-block-top__item-manufacturer">
                                        от <span class="mod_strong-700-18">5 130</span> руб./м<span class="mod_square">2</span>
                                    </div>
                                    <div class="cat-block-top__item-buy">
                                        ЗАКАЗАТЬ ЗАМЕР
                                    </div>
                                </div>    
                            </div>               
                        </div>
                    </div>
                    <div class="">           
                        <div class="cat-block-top__item-align">
                            <div class="cat-block-top__item">
                                <div class="cat-block-top__item-align-center">
                                    <div class="cat-block-top__label cat-block-top__label_action">Акция</div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/meb-okna/meb-korp__plast-okna.png" alt="" class="cat-block-top__item-img">
                                    <div class="cat-block-top__item-title">
                                        REHAU БЛИЦ
                                    </div>
                                    <div class="cat-block-top__item-manufacturer">
                                        от <span class="mod_strong-700-18">5 130</span> руб./м<span class="mod_square">2</span>
                                    </div>
                                    <div class="cat-block-top__item-buy">
                                        ЗАКАЗАТЬ ЗАМЕР
                                    </div>
                                </div>    
                            </div>               
                        </div>
                    </div>             
                    <div class="">           
                        <div class="cat-block-top__item-align">
                            <div class="cat-block-top__item">
                                <div class="cat-block-top__item-align-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/meb-okna/meb-korp__plast-okna.png" alt="" class="cat-block-top__item-img">
                                    <div class="cat-block-top__item-title">
                                        REHAU БЛИЦ
                                    </div>
                                    <div class="cat-block-top__item-manufacturer">
                                        от <span class="mod_strong-700-18">5 130</span> руб./м<span class="mod_square">2</span>
                                    </div>
                                    <div class="cat-block-top__item-buy">
                                        ЗАКАЗАТЬ ЗАМЕР
                                    </div>
                                </div>    
                            </div>               
                        </div>
                    </div>             
                    <div class="">           
                        <div class="cat-block-top__item-align">
                            <div class="cat-block-top__item">
                                <div class="cat-block-top__item-align-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/meb-okna/meb-korp__plast-okna.png" alt="" class="cat-block-top__item-img">
                                    <div class="cat-block-top__item-title">
                                        REHAU БЛИЦ
                                    </div>
                                    <div class="cat-block-top__item-manufacturer">
                                        от <span class="mod_strong-700-18">5 130</span> руб./м<span class="mod_square">2</span>
                                    </div>
                                    <div class="cat-block-top__item-buy">
                                        ЗАКАЗАТЬ ЗАМЕР
                                    </div>
                                </div>    
                            </div>               
                        </div>
                    </div>    
                <!-- Три элемента для выравнивания блоков неполной строки -->  
                    <div class="cat-block-top__item-align-correct-4 mod_w-247-h-1">           
                        <div class="cat-block-top__item-align">
                            <div class="cat-block-top__item">   
                            </div>               
                        </div>
                    </div>   
                    <div class="mod_w-247-h-1">           
                        <div class="cat-block-top__item-align">
                            <div class="cat-block-top__item">   
                            </div>               
                        </div>
                    </div>   
                    <div class="mod_w-247-h-1">           
                        <div class="cat-block-top__item-align">
                            <div class="cat-block-top__item">   
                            </div>               
                        </div>
                    </div>
                <!--/ Три элемента для выравнивания блоков неполной строки -->
                <!-- Initialize Lightbox-gallery --> 
                    <script>
                        baguetteBox.run('.baguetteBox-gallery__block', {
                            animation: 'fadeIn'
                        });
                    </script>
                <!-- / Initialize Lightbox-gallery -->     
                    <!-- View more photo - button -->            
                    <div id="baguetteBox-gallery__view-more-4" class="baguetteBox-gallery__view-more">
                        <div class="baguetteBox-gallery__view-more-button mod_block-underline">Смотреть еще предложения</div>
                    </div>            
                    <script>
                      $('#baguetteBox-gallery__view-more-4').click(function(e){
                        e.preventDefault();
                        for (var i=5;i<=9;i++){
                          $('.cat-block-top__item-align-correct-4').before('<div class=""><div class="cat-block-top__item-align"><div class="cat-block-top__item"><div class="cat-block-top__item-align-center"><img src="<?php echo get_template_directory_uri(); ?>/images/meb-okna/meb-korp__plast-okna.png" alt="" class="cat-block-top__item-img"><div class="cat-block-top__item-title">REHAU БЛИЦ</div><div class="cat-block-top__item-manufacturer">от <span class="mod_strong-700-18">5 130</span> руб./м<span class="mod_square">2</span></div><div class="cat-block-top__item-buy">ЗАКАЗАТЬ ЗАМЕР</div></div></div></div></div>');
                        }
                        baguetteBox.run('.baguetteBox-gallery__block', {
                            animation: 'fadeIn'
                        });              
                      });
                    </script>
                    <!-- / View more photo - button -->        
                </div>
                <div id="exprof" class="baguetteBox-gallery__block tab-pane">

                    <div class="">           
                        <div class="cat-block-top__item-align">
                            <div class="cat-block-top__item">
                                <div class="cat-block-top__item-align-center">
                                    <div class="cat-block-top__label cat-block-top__label_new">Новинка</div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/meb-okna/meb-korp__plast-okna.png" alt="" class="cat-block-top__item-img">
                                    <div class="cat-block-top__item-title">
                                        REHAU БЛИЦ
                                    </div>
                                    <div class="cat-block-top__item-manufacturer">
                                        от <span class="mod_strong-700-18">5 130</span> руб./м<span class="mod_square">2</span>
                                    </div>
                                    <div class="cat-block-top__item-buy">
                                        ЗАКАЗАТЬ ЗАМЕР
                                    </div>
                                </div>    
                            </div>               
                        </div>
                    </div>
                    <div class="">           
                        <div class="cat-block-top__item-align">
                            <div class="cat-block-top__item">
                                <div class="cat-block-top__item-align-center">
                                    <div class="cat-block-top__label cat-block-top__label_action">Акция</div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/meb-okna/meb-korp__plast-okna.png" alt="" class="cat-block-top__item-img">
                                    <div class="cat-block-top__item-title">
                                        REHAU БЛИЦ
                                    </div>
                                    <div class="cat-block-top__item-manufacturer">
                                        от <span class="mod_strong-700-18">5 130</span> руб./м<span class="mod_square">2</span>
                                    </div>
                                    <div class="cat-block-top__item-buy">
                                        ЗАКАЗАТЬ ЗАМЕР
                                    </div>
                                </div>    
                            </div>               
                        </div>
                    </div>             
                    <div class="">           
                        <div class="cat-block-top__item-align">
                            <div class="cat-block-top__item">
                                <div class="cat-block-top__item-align-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/meb-okna/meb-korp__plast-okna.png" alt="" class="cat-block-top__item-img">
                                    <div class="cat-block-top__item-title">
                                        REHAU БЛИЦ
                                    </div>
                                    <div class="cat-block-top__item-manufacturer">
                                        от <span class="mod_strong-700-18">5 130</span> руб./м<span class="mod_square">2</span>
                                    </div>
                                    <div class="cat-block-top__item-buy">
                                        ЗАКАЗАТЬ ЗАМЕР
                                    </div>
                                </div>    
                            </div>               
                        </div>
                    </div>             
                    <div class="">           
                        <div class="cat-block-top__item-align">
                            <div class="cat-block-top__item">
                                <div class="cat-block-top__item-align-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/meb-okna/meb-korp__plast-okna.png" alt="" class="cat-block-top__item-img">
                                    <div class="cat-block-top__item-title">
                                        REHAU БЛИЦ
                                    </div>
                                    <div class="cat-block-top__item-manufacturer">
                                        от <span class="mod_strong-700-18">5 130</span> руб./м<span class="mod_square">2</span>
                                    </div>
                                    <div class="cat-block-top__item-buy">
                                        ЗАКАЗАТЬ ЗАМЕР
                                    </div>
                                </div>    
                            </div>               
                        </div>
                    </div>    
                <!-- Три элемента для выравнивания блоков неполной строки -->  
                    <div class="cat-block-top__item-align-correct-5 mod_w-247-h-1">           
                        <div class="cat-block-top__item-align">
                            <div class="cat-block-top__item">   
                            </div>               
                        </div>
                    </div>   
                    <div class="mod_w-247-h-1">           
                        <div class="cat-block-top__item-align">
                            <div class="cat-block-top__item">   
                            </div>               
                        </div>
                    </div>   
                    <div class="mod_w-247-h-1">           
                        <div class="cat-block-top__item-align">
                            <div class="cat-block-top__item">   
                            </div>               
                        </div>
                    </div>
                <!--/ Три элемента для выравнивания блоков неполной строки -->
                <!-- Initialize Lightbox-gallery --> 
                    <script>
                        baguetteBox.run('.baguetteBox-gallery__block', {
                            animation: 'fadeIn'
                        });
                    </script>
                <!-- / Initialize Lightbox-gallery -->     
                    <!-- View more photo - button -->            
                    <div id="baguetteBox-gallery__view-more-5" class="baguetteBox-gallery__view-more">
                        <div class="baguetteBox-gallery__view-more-button mod_block-underline">Смотреть еще предложения</div>
                    </div>            
                    <script>
                      $('#baguetteBox-gallery__view-more-5').click(function(e){
                        e.preventDefault();
                        for (var i=5;i<=9;i++){
                          $('.cat-block-top__item-align-correct-5').before('<div class=""><div class="cat-block-top__item-align"><div class="cat-block-top__item"><div class="cat-block-top__item-align-center"><img src="<?php echo get_template_directory_uri(); ?>/images/meb-okna/meb-korp__plast-okna.png" alt="" class="cat-block-top__item-img"><div class="cat-block-top__item-title">REHAU БЛИЦ</div><div class="cat-block-top__item-manufacturer">от <span class="mod_strong-700-18">5 130</span> руб./м<span class="mod_square">2</span></div><div class="cat-block-top__item-buy">ЗАКАЗАТЬ ЗАМЕР</div></div></div></div></div>');
                        }
                        baguetteBox.run('.baguetteBox-gallery__block', {
                            animation: 'fadeIn'
                        });              
                      });
                    </script>
                    <!-- / View more photo - button -->        
                </div>
                <div id="brusbox" class="baguetteBox-gallery__block tab-pane">

                    <div class="">           
                        <div class="cat-block-top__item-align">
                            <div class="cat-block-top__item">
                                <div class="cat-block-top__item-align-center">
                                    <div class="cat-block-top__label cat-block-top__label_new">Новинка</div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/meb-okna/meb-korp__plast-okna.png" alt="" class="cat-block-top__item-img">
                                    <div class="cat-block-top__item-title">
                                        REHAU БЛИЦ
                                    </div>
                                    <div class="cat-block-top__item-manufacturer">
                                        от <span class="mod_strong-700-18">5 130</span> руб./м<span class="mod_square">2</span>
                                    </div>
                                    <div class="cat-block-top__item-buy">
                                        ЗАКАЗАТЬ ЗАМЕР
                                    </div>
                                </div>    
                            </div>               
                        </div>
                    </div>
                    <div class="">           
                        <div class="cat-block-top__item-align">
                            <div class="cat-block-top__item">
                                <div class="cat-block-top__item-align-center">
                                    <div class="cat-block-top__label cat-block-top__label_action">Акция</div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/meb-okna/meb-korp__plast-okna.png" alt="" class="cat-block-top__item-img">
                                    <div class="cat-block-top__item-title">
                                        REHAU БЛИЦ
                                    </div>
                                    <div class="cat-block-top__item-manufacturer">
                                        от <span class="mod_strong-700-18">5 130</span> руб./м<span class="mod_square">2</span>
                                    </div>
                                    <div class="cat-block-top__item-buy">
                                        ЗАКАЗАТЬ ЗАМЕР
                                    </div>
                                </div>    
                            </div>               
                        </div>
                    </div>             
                    <div class="">           
                        <div class="cat-block-top__item-align">
                            <div class="cat-block-top__item">
                                <div class="cat-block-top__item-align-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/meb-okna/meb-korp__plast-okna.png" alt="" class="cat-block-top__item-img">
                                    <div class="cat-block-top__item-title">
                                        REHAU БЛИЦ
                                    </div>
                                    <div class="cat-block-top__item-manufacturer">
                                        от <span class="mod_strong-700-18">5 130</span> руб./м<span class="mod_square">2</span>
                                    </div>
                                    <div class="cat-block-top__item-buy">
                                        ЗАКАЗАТЬ ЗАМЕР
                                    </div>
                                </div>    
                            </div>               
                        </div>
                    </div>             
                    <div class="">           
                        <div class="cat-block-top__item-align">
                            <div class="cat-block-top__item">
                                <div class="cat-block-top__item-align-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/meb-okna/meb-korp__plast-okna.png" alt="" class="cat-block-top__item-img">
                                    <div class="cat-block-top__item-title">
                                        REHAU БЛИЦ
                                    </div>
                                    <div class="cat-block-top__item-manufacturer">
                                        от <span class="mod_strong-700-18">5 130</span> руб./м<span class="mod_square">2</span>
                                    </div>
                                    <div class="cat-block-top__item-buy">
                                        ЗАКАЗАТЬ ЗАМЕР
                                    </div>
                                </div>    
                            </div>               
                        </div>
                    </div>    
                <!-- Три элемента для выравнивания блоков неполной строки -->  
                    <div class="cat-block-top__item-align-correct-6 mod_w-247-h-1">           
                        <div class="cat-block-top__item-align">
                            <div class="cat-block-top__item">   
                            </div>               
                        </div>
                    </div>   
                    <div class="mod_w-247-h-1">           
                        <div class="cat-block-top__item-align">
                            <div class="cat-block-top__item">   
                            </div>               
                        </div>
                    </div>   
                    <div class="mod_w-247-h-1">           
                        <div class="cat-block-top__item-align">
                            <div class="cat-block-top__item">   
                            </div>               
                        </div>
                    </div>
                <!--/ Три элемента для выравнивания блоков неполной строки -->
                <!-- Initialize Lightbox-gallery --> 
                    <script>
                        baguetteBox.run('.baguetteBox-gallery__block', {
                            animation: 'fadeIn'
                        });
                    </script>
                <!-- / Initialize Lightbox-gallery -->     
                    <!-- View more photo - button -->            
                    <div id="baguetteBox-gallery__view-more-6" class="baguetteBox-gallery__view-more">
                        <div class="baguetteBox-gallery__view-more-button mod_block-underline">Смотреть еще предложения</div>
                    </div>            
                    <script>
                      $('#baguetteBox-gallery__view-more-6').click(function(e){
                        e.preventDefault();
                        for (var i=5;i<=9;i++){
                          $('.cat-block-top__item-align-correct-6').before('<div class=""><div class="cat-block-top__item-align"><div class="cat-block-top__item"><div class="cat-block-top__item-align-center"><img src="<?php echo get_template_directory_uri(); ?>/images/meb-okna/meb-korp__plast-okna.png" alt="" class="cat-block-top__item-img"><div class="cat-block-top__item-title">REHAU БЛИЦ</div><div class="cat-block-top__item-manufacturer">от <span class="mod_strong-700-18">5 130</span> руб./м<span class="mod_square">2</span></div><div class="cat-block-top__item-buy">ЗАКАЗАТЬ ЗАМЕР</div></div></div></div></div>');
                        }
                        baguetteBox.run('.baguetteBox-gallery__block', {
                            animation: 'fadeIn'
                        });              
                      });
                    </script>
                    <!-- / View more photo - button -->        
                </div>
                <div id="dexen" class="baguetteBox-gallery__block tab-pane">

                    <div class="">           
                        <div class="cat-block-top__item-align">
                            <div class="cat-block-top__item">
                                <div class="cat-block-top__item-align-center">
                                    <div class="cat-block-top__label cat-block-top__label_new">Новинка</div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/meb-okna/meb-korp__plast-okna.png" alt="" class="cat-block-top__item-img">
                                    <div class="cat-block-top__item-title">
                                        REHAU БЛИЦ
                                    </div>
                                    <div class="cat-block-top__item-manufacturer">
                                        от <span class="mod_strong-700-18">5 130</span> руб./м<span class="mod_square">2</span>
                                    </div>
                                    <div class="cat-block-top__item-buy">
                                        ЗАКАЗАТЬ ЗАМЕР
                                    </div>
                                </div>    
                            </div>               
                        </div>
                    </div>
                    <div class="">           
                        <div class="cat-block-top__item-align">
                            <div class="cat-block-top__item">
                                <div class="cat-block-top__item-align-center">
                                    <div class="cat-block-top__label cat-block-top__label_action">Акция</div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/meb-okna/meb-korp__plast-okna.png" alt="" class="cat-block-top__item-img">
                                    <div class="cat-block-top__item-title">
                                        REHAU БЛИЦ
                                    </div>
                                    <div class="cat-block-top__item-manufacturer">
                                        от <span class="mod_strong-700-18">5 130</span> руб./м<span class="mod_square">2</span>
                                    </div>
                                    <div class="cat-block-top__item-buy">
                                        ЗАКАЗАТЬ ЗАМЕР
                                    </div>
                                </div>    
                            </div>               
                        </div>
                    </div>             
                    <div class="">           
                        <div class="cat-block-top__item-align">
                            <div class="cat-block-top__item">
                                <div class="cat-block-top__item-align-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/meb-okna/meb-korp__plast-okna.png" alt="" class="cat-block-top__item-img">
                                    <div class="cat-block-top__item-title">
                                        REHAU БЛИЦ
                                    </div>
                                    <div class="cat-block-top__item-manufacturer">
                                        от <span class="mod_strong-700-18">5 130</span> руб./м<span class="mod_square">2</span>
                                    </div>
                                    <div class="cat-block-top__item-buy">
                                        ЗАКАЗАТЬ ЗАМЕР
                                    </div>
                                </div>    
                            </div>               
                        </div>
                    </div>             
                    <div class="">           
                        <div class="cat-block-top__item-align">
                            <div class="cat-block-top__item">
                                <div class="cat-block-top__item-align-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/meb-okna/meb-korp__plast-okna.png" alt="" class="cat-block-top__item-img">
                                    <div class="cat-block-top__item-title">
                                        REHAU БЛИЦ
                                    </div>
                                    <div class="cat-block-top__item-manufacturer">
                                        от <span class="mod_strong-700-18">5 130</span> руб./м<span class="mod_square">2</span>
                                    </div>
                                    <div class="cat-block-top__item-buy">
                                        ЗАКАЗАТЬ ЗАМЕР
                                    </div>
                                </div>    
                            </div>               
                        </div>
                    </div>    
                <!-- Три элемента для выравнивания блоков неполной строки -->  
                    <div class="cat-block-top__item-align-correct-7 mod_w-247-h-1">           
                        <div class="cat-block-top__item-align">
                            <div class="cat-block-top__item">   
                            </div>               
                        </div>
                    </div>   
                    <div class="mod_w-247-h-1">           
                        <div class="cat-block-top__item-align">
                            <div class="cat-block-top__item">   
                            </div>               
                        </div>
                    </div>   
                    <div class="mod_w-247-h-1">           
                        <div class="cat-block-top__item-align">
                            <div class="cat-block-top__item">   
                            </div>               
                        </div>
                    </div>
                <!--/ Три элемента для выравнивания блоков неполной строки -->
                <!-- Initialize Lightbox-gallery --> 
                    <script>
                        baguetteBox.run('.baguetteBox-gallery__block', {
                            animation: 'fadeIn'
                        });
                    </script>
                <!-- / Initialize Lightbox-gallery -->     
                    <!-- View more photo - button -->            
                    <div id="baguetteBox-gallery__view-more-7" class="baguetteBox-gallery__view-more">
                        <div class="baguetteBox-gallery__view-more-button mod_block-underline">Смотреть еще предложения</div>
                    </div>            
                    <script>
                      $('#baguetteBox-gallery__view-more-7').click(function(e){
                        e.preventDefault();
                        for (var i=5;i<=9;i++){
                          $('.cat-block-top__item-align-correct-7').before('<div class=""><div class="cat-block-top__item-align"><div class="cat-block-top__item"><div class="cat-block-top__item-align-center"><img src="<?php echo get_template_directory_uri(); ?>/images/meb-okna/meb-korp__plast-okna.png" alt="" class="cat-block-top__item-img"><div class="cat-block-top__item-title">REHAU БЛИЦ</div><div class="cat-block-top__item-manufacturer">от <span class="mod_strong-700-18">5 130</span> руб./м<span class="mod_square">2</span></div><div class="cat-block-top__item-buy">ЗАКАЗАТЬ ЗАМЕР</div></div></div></div></div>');
                        }
                        baguetteBox.run('.baguetteBox-gallery__block', {
                            animation: 'fadeIn'
                        });              
                      });
                    </script>
                    <!-- / View more photo - button -->        
                </div>
            </div>         
    </div>  
    <!--/ Tabs -->    
<!--/ Title and tabs --> 
</div>
<!--/ Пластиковые окна -->
   
<!-- Почему вам стоит купить пластиковые окна именно у нас? -->
    <div class="mebel-korpus__why-us mebel-korpus cs-max-width">
    <!--/ Title -->
        <div class="mebel-korpus__why-us-title">
            Почему вам стоит заказать корпусную мебель именно у нас?
        </div>
    <!-- Title -->    
    <!-- Items -->
        <div class="mebel-korpus__payment-item payment-item">
            <div class="payment-item__col-1">
                <img src="<?php echo get_template_directory_uri(); ?>/images/meb-korp/meb-korp-cash.png" alt="" class="payment-item__bullet">
            </div>
            <div class="payment-item__col-2">
                <div class="payment-item__title">
                    Работаем без предоплат
                </div>
                <div class="payment-item__text">
                    Это говорит о высочайшем качестве нашей продукции и услуг
                    Вы платите не за красивые слова а за результат который вам понравился от которого вы в восторге и с радостью оплачиваете его. Наши конкуренты либо не доверяют вам(вашей платежеспособности,), либо не доверяют себе (свойму качеству, завышенным ценам) поэтому берут предоплату, посадив вас в подводную лодку.
                </div>
            </div>
        </div>
        <div class="mebel-korpus__payment-item payment-item">
            <div class="payment-item__col-1">
                <img src="<?php echo get_template_directory_uri(); ?>/images/meb-korp/meb-korp-robot.png" alt="" class="payment-item__bullet">
            </div>
            <div class="payment-item__col-2">
                <div class="payment-item__title">
                    Собственное производство
                </div>
                <div class="payment-item__text">
                    В процессе производства задействован квалифицированный, опытный персонал с большим стажем работы, контроль за качеством осуществляется на каждом участке производства, что обеспечивает выпуск качественной продукции. Материалы и комплектующие от ведущих европейских производителей, используемые при изготовлении изделий, позволяют выпускать изделие с большим запасом прочности и долговечности.
                </div>
            </div>
        </div>
        <div class="mebel-korpus__payment-item payment-item">
            <div class="payment-item__col-1">
                <img src="<?php echo get_template_directory_uri(); ?>/images/meb-korp/meb-korp-star.png" alt="" class="payment-item__bullet">
            </div>
            <div class="payment-item__col-2">
                <div class="payment-item__title">
                    Высокий профессионализм
                </div>
                <div class="payment-item__text">
                    Постоянный мониторинг спроса и цен что позволяет нам формировать предложение на востребованную продукцию.
                </div>
            </div>
        </div>
        <div class="mebel-korpus__payment-item payment-item">
            <div class="payment-item__col-1">
                <img src="<?php echo get_template_directory_uri(); ?>/images/meb-korp/meb-korp-promotions.png" alt="" class="payment-item__bullet">
            </div>
            <div class="payment-item__col-2">
                <div class="payment-item__title">
                    Программа лояльности
                </div>
                <div class="payment-item__text">
                    Мы дорожим каждым нашим клиентом! Поэтому постоянно даем скономить на покупке окон ПВХ. Проводим постоянны акции, делаем скидки на ряд позиций нашей продукции.
                </div>
            </div>
        </div>    
    <!--/ Items --> 
    </div>  
<!--/ Почему вам стоит купить пластиковые окна именно у нас? -->

<!-- Преимущества окон ПВХ -->
    <div class="mebel-okna mebel-korpus__preimusch white-block">       
    <!-- Title -->
        <div class="white-block__title">Преимущества нашей корпусной мебели</div>
    <!--/ Title -->
    <!-- Items -->
        <div class="mebel-korpus__preimusch-item">
            <div class="mebel-korpus__preimusch-item-content">
                <div class="mebel-korpus__preimusch-item-label">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/meb-korp/mebel-korpus__preimusch-high-noise.png" alt="" class="mebel-korpus__preimusch-item-img">
                </div>
                <div class="mebel-korpus__preimusch-item-info">
                    <div class="mebel-korpus__preimusch-item-title">
                        шумоизоляция
                    </div>
                    <div class="mebel-korpus__preimusch-item-text">
                        Мы рекомендуем Вам поставить окно из профильной системы Veka Softline и стеклопакетом
                    </div>
                </div>
            </div>            
        </div>
        <div class="mebel-korpus__preimusch-item">
            <div class="mebel-korpus__preimusch-item-content">
                <div class="mebel-korpus__preimusch-item-label">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/meb-korp/mebel-korpus__preimusch-shield.png" alt="" class="mebel-korpus__preimusch-item-img">
                </div>
                <div class="mebel-korpus__preimusch-item-info">
                    <div class="mebel-korpus__preimusch-item-title">
                        безопасность
                    </div>
                    <ul class="mebel-korpus__preimusch-item-list">
                        <li>Триплекс</li>
                        <li>Антивандальное стекло</li>
                        <li>Противовзломная фурнитура</li>
                    </ul>
                </div>
            </div>            
        </div>
        <div class="mebel-korpus__preimusch-item">
            <div class="mebel-korpus__preimusch-item-content">
                <div class="mebel-korpus__preimusch-item-label">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/meb-korp/mebel-korpus__preimusch-rocking-horse.png" alt="" class="mebel-korpus__preimusch-item-img">
                </div>
                <div class="mebel-korpus__preimusch-item-info">
                    <div class="mebel-korpus__preimusch-item-title">
                        защита от детей
                    </div>
                    <ul class="mebel-korpus__preimusch-item-list">
                        <li>Ручки с ключом</li>
                        <li>Оконные замки</li>
                        <li>Защитные пленки</li>
                    </ul>
                </div>
            </div>            
        </div>
        <div class="mebel-korpus__preimusch-item">
            <div class="mebel-korpus__preimusch-item-content">
                <div class="mebel-korpus__preimusch-item-label">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/meb-korp/mebel-korpus__preimusch-settings.png" alt="" class="mebel-korpus__preimusch-item-img">
                </div>
                <div class="mebel-korpus__preimusch-item-info">
                    <div class="mebel-korpus__preimusch-item-title">
                        функциональность
                    </div>
                    <ul class="mebel-korpus__preimusch-item-list">
                        <li>Дышашие окна</li>
                        <li>Стекло, отражающее большую часть световых лучей</li>
                    </ul>
                </div>
            </div>            
        </div>
        <div class="mebel-korpus__preimusch-item">
            <div class="mebel-korpus__preimusch-item-content">
                <div class="mebel-korpus__preimusch-item-label">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/meb-korp/mebel-korpus__preimusch-favorites.png" alt="" class="mebel-korpus__preimusch-item-img">
                </div>
                <div class="mebel-korpus__preimusch-item-info">
                    <div class="mebel-korpus__preimusch-item-title">
                        индивидуальность
                    </div>
                    <ul class="mebel-korpus__preimusch-item-list">
                        <li>Цветовые решения</li>
                        <li>Декоративная фурнитура</li>
                        <li>Раскладки</li>
                        <li>Необычные формы окон</li>
                    </ul>
                </div>
            </div>            
        </div>
        <div class="mebel-korpus__preimusch-item">
            <div class="mebel-korpus__preimusch-item-content">
                <div class="mebel-korpus__preimusch-item-label">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/meb-korp/mebel-korpus__preimusch-ecology.png" alt="" class="mebel-korpus__preimusch-item-img">
                </div>
                <div class="mebel-korpus__preimusch-item-info">
                    <div class="mebel-korpus__preimusch-item-title">
                        экологичность
                    </div>
                    <ul class="mebel-korpus__preimusch-item-list">
                        <li>Идеальная герметичность</li>
                        <li>Отличная теплоизоляция</li>
                        <li>Энергосберегающее стекло</li>
                    </ul>
                </div>
            </div>            
        </div>
    <!--/ Items -->    
    </div>
<!--/ Преимущества окон ПВХ -->

    <?php //Преимущества окон ПВХ
        include"blocks/catalog-preimusch/catalog-preimusch.php";
    ?>  

<div class="mebel-okna mebel-korpus cs-max-width">

<!-- Какие окна мы делаем. Фото готовых работ -->
    <div class="mebel-okna__cell">
    <!-- Title and tabs -->
        <!-- Title -->
        <div class="mebel-korpus__furniture-top-row">
            <!-- Заголовок -->
            <div class="mebel-korpus__furniture-top-title">Какие окна мы делаем. Фото готовых работ.</div>
            <!--/ Заголовок -->
        </div>
        <!--/ Title -->    
        <!-- Content -->
        <div class="baguetteBox-gallery__block">
            <a class="baguetteBox-gallery__item" href="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/1-1.jpg" data-caption="Image caption">
                <div class="baguetteBox-gallery__hover-bg"></div>
                <img class="baguetteBox-gallery__img" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo.png" alt="First image">
                <img class="baguetteBox-gallery__zoom" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo__zoom.png" alt="">
            </a>
            <a class="baguetteBox-gallery__item" href="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/1-2.jpg" data-caption="Image caption">
                <div class="baguetteBox-gallery__hover-bg"></div>
                <img class="baguetteBox-gallery__img" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo.png" alt="First image">
                <img class="baguetteBox-gallery__zoom" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo__zoom.png" alt="">
            </a>
            <a class="baguetteBox-gallery__item" href="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/1-3.jpg" data-caption="Image caption">
                <div class="baguetteBox-gallery__hover-bg"></div>
                <img class="baguetteBox-gallery__img" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo.png" alt="First image">
                <img class="baguetteBox-gallery__zoom" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo__zoom.png" alt="">
            </a>
            <a class="baguetteBox-gallery__item" href="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/1-4.jpg" data-caption="Image caption">
                <div class="baguetteBox-gallery__hover-bg"></div>
                <img class="baguetteBox-gallery__img" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo.png" alt="First image">
                <img class="baguetteBox-gallery__zoom" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo__zoom.png" alt="">
            </a>
            <a class="baguetteBox-gallery__item" href="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/1-5.jpg" data-caption="Image caption">
                <div class="baguetteBox-gallery__hover-bg"></div>
                <img class="baguetteBox-gallery__img" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo.png" alt="First image">
                <img class="baguetteBox-gallery__zoom" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo__zoom.png" alt="">
            </a>
            <a class="baguetteBox-gallery__item" href="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/1-6.jpg" data-caption="Image caption">
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

        <!--/ Content -->    
    <!--/ Title and tabs --> 
    </div>
<!--/ Какие окна мы делаем. Фото готовых работ -->

<!-- Как мы работаем -->
    <div class="mebel-okna mebel-korpus__process mebel-korpus__preimusch">       
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
    <div class="mebel-okna mebel-korpus__more-info">
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
    
<div class="mebel-okna mebel-korpus cs-max-width">    
    
<!-- Гарантия -->        
    <div class="mebel-korpus__warranty text-block">
        <div class="text-block__preview">
            <div class="text-block__title">
                Гарантия
            </div>
    <!--block preview-->        
            <div class="text-block__text-body">
<p>Одним из главных показателей качества предоставляемых работ по установке окон ПВХ является гарантийный срок, обеспечиваемый компанией-производителем. Стоит обращать особое внимание как на краткосрочную гарантию на 1-2 года, так и на долговременную, например, на 40 лет. Традиционно гарантийный срок на пластиковые окна устанавливается от 5 лет в зависимости от выбранного профиля.</p>

<p>Стоит отметить, что срок гарантийных обязательств на дополнительную фурнитуру отличается от сроков гарантий на окна.</p>

<p><strong>Компани Профспецпласт готова обеспечить следующие сроки гарантийных обязательств:</strong><br>
Блоки ПВХ из профильной системы Veka серий Euroline, Proline, Softline - 5 лет * </p>

<p>Навесная фурнитура **; дверные замки; оконные и дверные ручки, дверные офисные ручки; подоконники, отливы, пластиковые панели для откосов, антимоскитные сетки – 2 года </p>

<p>* Данная гарантия распространяется на профиль, базовую фурнитуру, стеклопакет и монтажные работы. <br>
** Дополнительные элементы фурнитуры, приобретаемые по желанию заказчика в рамках договора-заказа на изделия </p>

<p><strong>Каждое изделие от Компании Профспецпласт сопровождается «Паспортом качества».</strong></p>
            </div>
    <!--/block preview-->
        </div>
    <!--read more-->    
        <div class="text-block__read-more">
        <!--read more - bootstrap part-->
            <div id="accordion" role="tablist" aria-multiselectable="true">
                <div class="card">
                <!--read more text-->   
                    <div id="collapseOne" class="hide collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false">
                        <div class="card-block">
<p>Постоянный мониторинг спроса и цен что позволяет нам формировать предложение на востребованную продукцию.</p>

<p><strong>Программа лояльности</strong></p>
<p>Мы дорожим каждым нашим клиентом! Поэтому постоянно даем скономить на покупке окон ПВХ. Проводим постоянны акции, делаем скидки на ряд позиций нашей продукции.</p>

<p><strong>Рекомендации</strong></p>
<p>Двери Портас впишутся в интерьер современной квартиры, необходимо только выбрать подходящий цвет и модель.</p>

<p><strong>Описание покрытия</strong></p>
<p>Немецкая плёнка Экошпон на основе ПВХ+лак.</p>
                        </div>
                    </div>
                <!--/read more text-->    
                <!--read more button-->   
                    <div class="card-header" role="tab" id="headingOne">
                        <h5 class="mb-0">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed">

                                <div class="cat__read-more-text">Читать подробнее</div>      
                                <div class="cat__read-more-text-hide">Свернуть</div>                          

                            </a>
                        </h5>
                    </div>
                <!--/read more button-->
                </div>  
            </div>
        <!--/read more - bootstrap part-->
        </div>
    <!--/read more-->        
    </div>    
<!--/ Гарантия -->

</div>

<!-- Честные отзывы наших клиентов -->
    <div class="mebel-okna mebel-korpus__chestn-otzivi white-block">
        <div class="white-block__title">Честные отзывы наших клиентов</div>
        
    </div>
<!--/ Честные отзывы наших клиентов -->
   
<div class="mebel-okna mebel-korpus cs-max-width">
   
<!-- Смотрите видео о нас -->   
    <div class="mebel-okna mebel-korpus__video mebel-korpus__furniture-cell">
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
<!--/ Окна ПВХ -->

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
