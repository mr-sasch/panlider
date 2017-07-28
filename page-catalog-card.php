<?php
/*
 Template Name: Двери - карточка товара
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

<!--Card block-->
<div class="doors-card cs-max-width">

<!--Back to catalog-->        
    <a href="#" class="back-to-all-news-button">
        <i class="back-to-all-news-button-arrow-left fa fa-chevron-left" aria-hidden="true"></i>Назад к выбору дверей
    </a>        
<!--/Back to catalog-->

    <div class="doors-card_bg-white">
        <div style="/*display: none;*/" class="doors-card__main">

        <!-- slick carousel -->
            <div class="doors-card__main-images">
                
                <div class="doors-card__slick-slider">
                    <div class="slider-for">
                        <a class="doors-card__item" href="<?php echo get_template_directory_uri(); ?>/images/catalog-card/catalog-card-door-big.png">
                            <img class="slider-for-img" src="<?php echo get_template_directory_uri(); ?>/images/catalog-card/catalog-card-door-big.png" alt="">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/catalog-card/catalog-card-zoom.png" alt="" class="doors-card__zoom-img">
                        </a>
                        <a class="doors-card__item" href="<?php echo get_template_directory_uri(); ?>/images/catalog-card/catalog-card-door-big-1.png">
                            <img class="slider-for-img" src="<?php echo get_template_directory_uri(); ?>/images/catalog-card/catalog-card-door-big-1.png" alt="">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/catalog-card/catalog-card-zoom.png" alt="" class="doors-card__zoom-img">
                        </a>
                        <a class="doors-card__item" href="<?php echo get_template_directory_uri(); ?>/images/catalog-card/catalog-card-door-big-2.png">
                            <img class="slider-for-img" src="<?php echo get_template_directory_uri(); ?>/images/catalog-card/catalog-card-door-big-2.png" alt="">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/catalog-card/catalog-card-zoom.png" alt="" class="doors-card__zoom-img">
                        </a>
                        <a class="doors-card__item" href="<?php echo get_template_directory_uri(); ?>/images/catalog-card/catalog-card-door-big-3.png">
                            <img class="slider-for-img" src="<?php echo get_template_directory_uri(); ?>/images/catalog-card/catalog-card-door-big-3.png" alt="">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/catalog-card/catalog-card-zoom.png" alt="" class="doors-card__zoom-img">
                        </a>
                    </div>  
                <!--Initialize Lightbox-->
                    <script>
                        baguetteBox.run('.slider-for', {
                            animation: 'fadeIn'
                        });
                    </script>
                <!--/Initialize Lightbox-->
                    <div class="slider-nav">
                        <div><img class="slider-nav-img" src="<?php echo get_template_directory_uri(); ?>/images/catalog-card/catalog-card-door-big.png" alt=""></div>
                        <div><img class="slider-nav-img" src="<?php echo get_template_directory_uri(); ?>/images/catalog-card/catalog-card-door-big-1.png" alt=""></div>
                        <div><img class="slider-nav-img" src="<?php echo get_template_directory_uri(); ?>/images/catalog-card/catalog-card-door-big-2.png" alt=""></div>
                        <div><img class="slider-nav-img" src="<?php echo get_template_directory_uri(); ?>/images/catalog-card/catalog-card-door-big-3.png" alt=""></div>
                    </div>   
                </div>
                
               
                
                
                
            </div>
        <!-- /slick carousel -->

        <!-- main description -->
            <div class="doors-card__main-description">

                <div class="doors-card__main-description-top">

                    <div class="doors-card__main-description-top-title">
                        <div class="doors-card__main-description-top-title-door">
                            Дверь межкомнатная    
                        </div>
                        <div class="doors-card__main-description-top-title-door-type">
                            Берлин 01 ДО, дуб дымчатый
                        </div>                    
                    </div>

                    <img src="<?php echo get_template_directory_uri(); ?>/images/catalog-card/catalog-card-discount.png" alt="" class="doors-card__main-description-top-discount">

                </div>
                <!-- table -->
                <div class="doors-card__main-description-content">
                    <div class="doors-card__main-description-table">

                        <div class="doors-card__main-description-table-row">
                            <div class="doors-card__main-description-table-cell-1">
                                Бренд:
                            </div>
                            <div class="doors-card__main-description-table-cell-2">
                                Eldorf
                            </div>
                        </div>
                        <div class="doors-card__main-description-table-row">
                            <div class="doors-card__main-description-table-cell-1">
                                Покрытие:
                            </div>
                            <div class="doors-card__main-description-table-cell-2">
                                высокотехнологичное декоративное 3D-покрытие
                            </div>
                        </div>
                        <div class="doors-card__main-description-table-row">
                            <div class="doors-card__main-description-table-cell-1">
                                Конструкция полотна:
                            </div>
                            <div class="doors-card__main-description-table-cell-2">
                                царговая (сборно-разборная): МДФ + Массив хвойных пород
                            </div>
                        </div>
                        <div class="doors-card__main-description-table-row">
                            <div class="doors-card__main-description-table-cell-1">
                                Цвет:
                            </div>
                            <div class="doors-card__main-description-table-cell-2">
                                дуб дымчатый
                            </div>
                        </div>
                        <div class="doors-card__main-description-table-row">
                            <div class="doors-card__main-description-table-cell-1">
                                Тип двери:
                            </div>
                            <div class="doors-card__main-description-table-cell-2">
                                остекленная
                            </div>
                        </div>
                        <div class="doors-card__main-description-table-row">
                            <div class="doors-card__main-description-table-cell-1">
                                Размеры:
                            </div>
                            <div class="doors-card__main-description-table-cell-2">
                                600x2000х35 <br>
                                700х2000х35 <br>
                                800х2000х35 <br>
                                900х2000х35
                            </div>
                        </div>

                        <div class="doors-card__main-description-table-row doors-card__main-description-buy">
                            <div class="doors-card__main-description-table-cell-1 mod_border-top-none">
                                <div class="cat-big-block__button" data-toggle="modal" data-target="#kupit">КУПИТЬ</div>
                            </div>                        
                            <div class="doors-card__main-description-table-cell-2 mod_border-top-none">                           
                                <div class="doors-card__buy-button">
                                    <div class="doors-card__imgs">
                                        <div class="doors-card__tooltip doors-card__tooltip-percent">Низкие проценты</div>
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/catalog-card/catalog-card-label-percentage.png" alt="" class="doors-card__img-hover">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/catalog-card/catalog-card-label-percentage.png" alt="" class="doors-card__img">
                                    </div>                                     
                                </div>
                                <div class="doors-card__buy-button">
                                    <div class="doors-card__imgs">
                                        <div class="doors-card__tooltip doors-card__tooltip-get-money">Рассрочка</div>
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/catalog-card/catalog-card-label-get-money.png" alt="" class="doors-card__img-hover">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/catalog-card/catalog-card-label-get-money-blue.png" alt="" class="doors-card__img">
                                    </div>             
                                </div>
                                <div class="doors-card__buy-button mod-bg-blue">
                                    <div class="doors-card__imgs">
                                        <div class="doors-card__tooltip doors-card__tooltip-cash-machine">Выпишем чек</div>
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/catalog-card/catalog-card-label-cash-machine-white.png" alt="" class="doors-card__img-hover">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/catalog-card/catalog-card-label-cash-machine.png" alt="" class="doors-card__img">
                                    </div>             
                                </div>
                                <div class="doors-card__buy-button mod-bg-blue">
                                    <div class="doors-card__imgs">
                                        <div class="doors-card__tooltip doors-card__tooltip-shield">Безопасная сделка</div>
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/catalog-card/catalog-card-label-shield-white.png" alt="" class="doors-card__img-hover">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/catalog-card/catalog-card-label-shield.png" alt="" class="doors-card__img">
                                    </div>             
                                </div>
                                <div class="doors-card__buy-button mod-bg-blue">
                                    <div class="doors-card__imgs">
                                        <div class="doors-card__tooltip doors-card__tooltip-cart">Как сделать заказ</div>
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/catalog-card/catalog-card-label-cart.png" alt="" class="doors-card__img-hover">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/catalog-card/catalog-card-label-cart-blue.png" alt="" class="doors-card__img">
                                    </div>             
                                </div>
                                <div class="doors-card__buy-button mod-bg-blue">
                                    <div class="doors-card__imgs">
                                        <div class="doors-card__tooltip doors-card__tooltip-truck">Доставка</div>
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/catalog-card/catalog-card-label-truck-white.png" alt="" class="doors-card__img-hover">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/catalog-card/catalog-card-label-truck.png" alt="" class="doors-card__img">
                                    </div>             
                                </div>
                            </div>
                        </div>
                        <div class="doors-card__main-description-table-row doors-card__main-description-print">
                            <div class="doors-card__print doors-card__main-description-table-cell-1 mod_border-top-none">
                                <a href="#"><i class="fa fa-print" aria-hidden="true"></i>Распечатать</a>
                            </div>
                            <div class="doors-card__share doors-card__main-description-table-cell-2 mod_border-top-none" data-tshare-btn="fb" data-tshare-group="" data-url="http://psp-wp.nolimit.by/двери-карточка-товара/" data-title="Оконные системы KBE" data-desc="Оконные системы KBE защищают ваш дом от холода и шума" data-img="http://psp-wp.nolimit.by/wp-content/themes/psp/images/meb-okna-full-width/okna-full-width-item-1.png">
                                Поделиться
                                <a data-tshare-btn="fb" onclick="tShare.click(this);"><i class="fa fa-facebook"></i></a>
                                <a data-tshare-btn="tw" onclick="tShare.click(this);"><i class="fa fa-twitter"></i></a>
                                <a data-tshare-btn="gp" onclick="tShare.click(this);"><i class="fa fa-google-plus"></i></a>
                                <a data-tshare-btn="pin" onclick="tShare.click(this);"><i class="fa fa-pinterest"></i></a>
                                <a data-tshare-btn="od" onclick="tShare.click(this);"><i class="fa fa-odnoklassniki"></i></a>
                                <a data-tshare-btn="od" onclick="tShare.click(this);"><i class="fa fa-instagram"></i></a>
                            </div>
                            <script>
                                var tShare = {
                                    url:null,title:null,desc:null,img:null,
                                    win:null,lastSoc:null,
                                    click:function(_this) {
                                        var $this = $(_this);
                                        var type = _this.dataset.tshareBtn;
                                        var parent = $this.parents('[data-tShare-group]');
                                        var data = parent[0].dataset;
                                        tShare.share(type,data);
                                        //window.goal('tShare_click');
                                    },
                                    open:function(link){
                                        var c=500,d=500,e=screen.width/2-c/2,f=screen.height/2-d/1.5;
                                        tShare.win = window.open(link,"tShare","toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,copyhistory=no,width="+c+", height="+d+", top="+f+", left="+e);
                                        tShare.check();
                                    },
                                    check:function(){
                                        if( !tShare.win.closed ) {timer = setTimeout(function() { tShare.check(); }, 500);} else {
                                            if( tShare.closed ) tShare.closed();
                                        }
                                    },
                                    share:function(type,data){
                                        tShare.url = data.url;
                                        tShare.title = data.title;
                                        tShare.desc = data.desc;
                                        tShare.img = data.img;
                                        var links = {
                                            vk:"http://vk.com/share.php?url="+encodeURIComponent(tShare.url)+"&title="+tShare.title+"&description="+tShare.desc+"&image="+tShare.img+"&noparse=true",
                                            fb:"https://www.facebook.com/sharer.php?u="+encodeURIComponent(tShare.url),
                                            gp:"https://plus.google.com/share?url="+encodeURIComponent(tShare.url),
                                            pin:"https://www.pinterest.com/pin/create/button/?url="+encodeURIComponent(tShare.url)+"&media="+tShare.img+"&description="+tShare.desc,
                                            od:"https://www.odnoklassniki.ru/dk?st.cmd=addShare&st._surl="+encodeURIComponent(tShare.url)+"&title="+tShare.title,
                                            tw:"https://twitter.com/share?url="+encodeURIComponent(tShare.url)+"&text="+tShare.title,
                                        };
                                        if( link = links[type] ) {
                                            tShare.lastSoc = type;
                                            console.log(encodeURIComponent(tShare.url));
                                            tShare.open(link);
                                        }
                                    }
                                }
                            </script>
                        </div>
                    </div>
                </div>
                <!--/ table -->
            </div>
        <!-- /main description -->    
        </div>

        <!--separator-->
        <div class="doors-card__separator"></div>
        <!--/separator-->

        <!--doors description-->   
        <div class="doors-card__description">
            <div class="doors-card__description-item">
                <div class="doors-card__description-item-icon">            
                </div>           
                <div class="doors-card__description-item-text-block">
                    <div class="doors-card__description-item-title doors-card__description-main-title">
                        Описание
                    </div>
                    <div class="doors-card__description-item-text">

                    </div>
                </div>
            </div>
            <div class="doors-card__description-item">
                <div class="doors-card__description-item-icon">
                    <img src="" alt="" class="doors-card__description-item-icon-img">
                </div>           
                <div class="doors-card__description-item-text-block">
                    <div class="doors-card__description-item-title doors-card__description-series-title">
                        СЕРИЯ межкомнатных дверей Portas (Портас)
                    </div>
                    <div class="doors-card__description-item-text">
                        Межкомнатные двери Портас - доступный вариант по цене из экошпона.
                    </div>
                </div>
            </div>
            <div class="doors-card__description-item">
                <div class="doors-card__description-item-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/catalog-card/catalog-card-description-star.png" alt="" class="doors-card__description-item-icon-img">
                </div>           
                <div class="doors-card__description-item-text-block">
                    <div class="doors-card__description-item-title">
                        Преимущественные характеристики
                    </div>
                    <div class="doors-card__description-item-text">
                        Царговая система сборки высокого качества (детали подлежат замене при необходимости).<br> 
                        Для покрытия используется немецкая плёнка ПВХ: износостойкая, хорошо защищает полотно от влаги.
                    </div>
                </div>
            </div>
            <div class="doors-card__description-item">
                <div class="doors-card__description-item-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/catalog-card/catalog-card-description-door.png" alt="" class="doors-card__description-item-icon-img">
                </div>           
                <div class="doors-card__description-item-text-block">
                    <div class="doors-card__description-item-title">
                        Остекленные и декорированные модели
                    </div>
                    <div class="doors-card__description-item-text">
                        Серия дверей Portas представлена полотнами с разным видом вставок стекла. Для остекления дверей используется Мателюкс, на котором не остаются отпечатки пальцев.
                    </div>
                </div>
            </div>
            <div class="doors-card__description-item">
                <div class="doors-card__description-item-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/catalog-card/catalog-card-description-exclamation.png" alt="" class="doors-card__description-item-icon-img">
                </div>           
                <div class="doors-card__description-item-text-block">
                    <div class="doors-card__description-item-title">
                        Обращаем внимание!
                    </div>
                    <div class="doors-card__description-item-text">
                        <strong>Комплектация:</strong> <br>
        - коробка квадратная с уплотнителем 32х74х2070 мм + LVL-брус <br>
        - наличник прямой телескопический 10х70х2150 мм
                    </div>
                </div>
            </div>
            <div class="doors-card__description-item">
                <div class="doors-card__description-item-icon">            
                </div>           
                <div class="doors-card__description-item-text-block">
                    <div class="doors-card__description-item-title">
                        Дополнительный погонаж:
                    </div>
                    <div class="doors-card__description-item-text">
                        - добор 100 телескопический 10х100х2070 мм <br>
        - добор 150 телескопический 10х150х2070 мм <br>
        - притворная планка 10х30х2070 мм <br>
                    </div>
                </div>
            </div>
            <div class="doors-card__description-item">
                <div class="doors-card__description-item-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/catalog-card/catalog-card-description-recommendations.png" alt="" class="doors-card__description-item-icon-img">
                </div>           
                <div class="doors-card__description-item-text-block">
                    <div class="doors-card__description-item-title">
                        Рекомендации
                    </div>
                    <div class="doors-card__description-item-text">
                        Двери Портас впишутся в интерьер современной квартиры, необходимо только выбрать подходящий цвет и модель.
                    </div>
                </div>
            </div>
            <div class="doors-card__description-item">
                <div class="doors-card__description-item-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/catalog-card/catalog-card-description-carpet.png" alt="" class="doors-card__description-item-icon-img">
                </div>           
                <div class="doors-card__description-item-text-block">
                    <div class="doors-card__description-item-title">
                        Описание покрытия
                    </div>
                    <div class="doors-card__description-item-text">
                        Немецкая плёнка Экошпон на основе ПВХ+лак.
                    </div>
                </div>
            </div>
            <div class="doors-card__description-item">
                <div class="doors-card__description-item-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/catalog-card/catalog-card-description-palette.png" alt="" class="doors-card__description-item-icon-img">
                </div>           
                <div class="doors-card__description-item-text-block">
                    <div class="doors-card__description-item-title">
                        Цветовая палитра серии
                    </div>
                    <div class="doors-card__description-item-text">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/catalog-card/catalog-card-pallette-dub.png" alt="" class="doors-card__description-item-text-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/catalog-card/catalog-card-pallette-listv.png" alt="" class="doors-card__description-item-text-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/catalog-card/catalog-card-pallette-oreh-karamel.png" alt="" class="doors-card__description-item-text-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/catalog-card/catalog-card-pallette-oreh-karamel.png" alt="" class="doors-card__description-item-text-img">
                    </div>
                </div>
            </div>
        </div>
        <!--/doors description-->
    </div>
    
</div>
       
    <!-- Similar doors -->
<div class="doors-card__similar-doors">
    <div class="doors-card__similar-doors-title cs-max-width">
        Похожие двери
    </div>

    <div class="doors-card__similar-doors-carousel">  
        <div class="owl-carousel owl-theme">

            <div class="owl-item">
                <div class="cat-block-top__item-align">
                    <div class="cat-block-top__item">
                        <div class="cat-block-top__item-align-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/catalog/cat-block-top__item-img.png" alt="" class="cat-block-top__item-img">
                            <div class="cat-block-top__item-title">
                                S29 Лиственница крем
                            </div>
                            <div class="cat-block-top__item-manufacturer">
                                Portas
                            </div>
                            <a class="cat-block-top__item-buy-a" href="<?php echo get_template_directory_uri(); ?>/двери-карточка-товара/">
                                <div class="cat-block-top__item-buy">
                                    купить
                                </div>                                
                            </a>
                        </div>    
                    </div>               
                </div>
            </div>
            <div class="owl-item">
                <div class="cat-block-top__item-align">
                    <div class="cat-block-top__item">
                        <div class="cat-block-top__item-align-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/catalog/cat-block-top__item-img.png" alt="" class="cat-block-top__item-img">
                            <div class="cat-block-top__item-title">
                                S29 Лиственница крем
                            </div>
                            <div class="cat-block-top__item-manufacturer">
                                Portas
                            </div>
                            <a class="cat-block-top__item-buy-a" href="<?php echo get_template_directory_uri(); ?>/двери-карточка-товара/">
                                <div class="cat-block-top__item-buy">
                                    купить
                                </div>                                
                            </a>
                        </div>    
                    </div>               
                </div>
            </div>
            <div class="owl-item">
                <div class="cat-block-top__item-align">
                    <div class="cat-block-top__item">
                        <div class="cat-block-top__item-align-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/catalog/cat-block-top__item-img.png" alt="" class="cat-block-top__item-img">
                            <div class="cat-block-top__item-title">
                                S29 Лиственница крем
                            </div>
                            <div class="cat-block-top__item-manufacturer">
                                Portas
                            </div>
                            <a class="cat-block-top__item-buy-a" href="<?php echo get_template_directory_uri(); ?>/двери-карточка-товара/">
                                <div class="cat-block-top__item-buy">
                                    купить
                                </div>                                
                            </a>
                        </div>    
                    </div>               
                </div>
            </div>
            <div class="owl-item">
                <div class="cat-block-top__item-align">
                    <div class="cat-block-top__item">
                        <div class="cat-block-top__item-align-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/catalog/cat-block-top__item-img.png" alt="" class="cat-block-top__item-img">
                            <div class="cat-block-top__item-title">
                                S29 Лиственница крем
                            </div>
                            <div class="cat-block-top__item-manufacturer">
                                Portas
                            </div>
                            <a class="cat-block-top__item-buy-a" href="<?php echo get_template_directory_uri(); ?>/двери-карточка-товара/">
                                <div class="cat-block-top__item-buy">
                                    купить
                                </div>                                
                            </a>
                        </div>    
                    </div>               
                </div>
            </div>
            <div class="owl-item">
                <div class="cat-block-top__item-align">
                    <div class="cat-block-top__item">
                        <div class="cat-block-top__item-align-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/catalog/cat-block-top__item-img.png" alt="" class="cat-block-top__item-img">
                            <div class="cat-block-top__item-title">
                                S29 Лиственница крем
                            </div>
                            <div class="cat-block-top__item-manufacturer">
                                Portas
                            </div>
                            <a class="cat-block-top__item-buy-a" href="<?php echo get_template_directory_uri(); ?>/двери-карточка-товара/">
                                <div class="cat-block-top__item-buy">
                                    купить
                                </div>                                
                            </a>
                        </div>    
                    </div>               
                </div>
            </div>
            <div class="owl-item">
                <div class="cat-block-top__item-align">
                    <div class="cat-block-top__item">
                        <div class="cat-block-top__item-align-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/catalog/cat-block-top__item-img.png" alt="" class="cat-block-top__item-img">
                            <div class="cat-block-top__item-title">
                                S29 Лиственница крем
                            </div>
                            <div class="cat-block-top__item-manufacturer">
                                Portas
                            </div>
                            <a class="cat-block-top__item-buy-a" href="<?php echo get_template_directory_uri(); ?>/двери-карточка-товара/">
                                <div class="cat-block-top__item-buy">
                                    купить
                                </div>                                
                            </a>
                        </div>    
                    </div>               
                </div>
            </div>
            <div class="owl-item">
                <div class="cat-block-top__item-align">
                    <div class="cat-block-top__item">
                        <div class="cat-block-top__item-align-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/catalog/cat-block-top__item-img.png" alt="" class="cat-block-top__item-img">
                            <div class="cat-block-top__item-title">
                                S29 Лиственница крем
                            </div>
                            <div class="cat-block-top__item-manufacturer">
                                Portas
                            </div>
                            <a class="cat-block-top__item-buy-a" href="<?php echo get_template_directory_uri(); ?>/двери-карточка-товара/">
                                <div class="cat-block-top__item-buy">
                                    купить
                                </div>                                
                            </a>
                        </div>    
                    </div>               
                </div>
            </div>
            <div class="owl-item">
                <div class="cat-block-top__item-align">
                    <div class="cat-block-top__item">
                        <div class="cat-block-top__item-align-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/catalog/cat-block-top__item-img.png" alt="" class="cat-block-top__item-img">
                            <div class="cat-block-top__item-title">
                                S29 Лиственница крем
                            </div>
                            <div class="cat-block-top__item-manufacturer">
                                Portas
                            </div>
                            <a class="cat-block-top__item-buy-a" href="<?php echo get_template_directory_uri(); ?>/двери-карточка-товара/">
                                <div class="cat-block-top__item-buy">
                                    купить
                                </div>                                
                            </a>
                        </div>    
                    </div>               
                </div>
            </div>
            <div class="owl-item">
                <div class="cat-block-top__item-align">
                    <div class="cat-block-top__item">
                        <div class="cat-block-top__item-align-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/catalog/cat-block-top__item-img.png" alt="" class="cat-block-top__item-img">
                            <div class="cat-block-top__item-title">
                                S29 Лиственница крем
                            </div>
                            <div class="cat-block-top__item-manufacturer">
                                Portas
                            </div>
                            <a class="cat-block-top__item-buy-a" href="<?php echo get_template_directory_uri(); ?>/двери-карточка-товара/">
                                <div class="cat-block-top__item-buy">
                                    купить
                                </div>                                
                            </a>
                        </div>    
                    </div>               
                </div>
            </div>
            <div class="owl-item">
                <div class="cat-block-top__item-align">
                    <div class="cat-block-top__item">
                        <div class="cat-block-top__item-align-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/catalog/cat-block-top__item-img.png" alt="" class="cat-block-top__item-img">
                            <div class="cat-block-top__item-title">
                                S29 Лиственница крем
                            </div>
                            <div class="cat-block-top__item-manufacturer">
                                Portas
                            </div>
                            <a class="cat-block-top__item-buy-a" href="<?php echo get_template_directory_uri(); ?>/двери-карточка-товара/">
                                <div class="cat-block-top__item-buy">
                                    купить
                                </div>                                
                            </a>
                        </div>    
                    </div>               
                </div>
            </div>
            <div class="owl-item">
                <div class="cat-block-top__item-align">
                    <div class="cat-block-top__item">
                        <div class="cat-block-top__item-align-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/catalog/cat-block-top__item-img.png" alt="" class="cat-block-top__item-img">
                            <div class="cat-block-top__item-title">
                                S29 Лиственница крем
                            </div>
                            <div class="cat-block-top__item-manufacturer">
                                Portas
                            </div>
                            <a class="cat-block-top__item-buy-a" href="<?php echo get_template_directory_uri(); ?>/двери-карточка-товара/">
                                <div class="cat-block-top__item-buy">
                                    купить
                                </div>                                
                            </a>
                        </div>    
                    </div>               
                </div>
            </div>

        </div>








    </div>
</div>
    <!--/ Similar doors -->
    

<!--/Card block-->



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
