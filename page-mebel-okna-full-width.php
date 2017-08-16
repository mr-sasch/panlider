<?php
/*
 Template Name: Окна ПВХ - полная ширина
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
            <li class="breadcrumb-item active">Окна ПВХ - полная ширина</li>
        </ol>
    </div>
</div>
<!--/breadcrumbs-->

<!-- Окна ПВХ -->
<div class="mebel-okna mebel-korpus cs-max-width">

<!-- Title row -->
    <div class="review review__row">

<?php //Header страниц каталога
include"blocks/catalog-title-row/catalog-title-row.php";
?>
<script> //Задаем заголовок страницы
document.getElementById("page-title").innerHTML = "Окна ПВХ";
</script>

        <div class="okna-full__okna-furnitura">
            <div onclick="mejkomActive()" id="mejkomActive" class="cat-door-type cat-door-type__interior mod_margin-0-15 active">
                <img class="cat-door-type__img" src="<?php echo get_template_directory_uri(); ?>/images/meb-okna/meb-korp__top-row-okna.png" alt="">Окна ПВХ
            </div>
            <div onclick="furnitureActive()" id="furnitureActive" class="cat-door-type cat-door-type__furniture mod_margin-0-15">
                <img class="cat-door-type__img" src="<?php echo get_template_directory_uri(); ?>/images/meb-okna/meb-korp__top-row-furniture.png" alt="">Фурнитура
            </div>

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
        </div>
    </div>
<!--/ Title row -->
</div>
<!-- Top Slider -->
<div class="mebel-korpus__slider-cell okna-full__slider-cell">
    <div class="okna-full__slider">

        <div class="okna-full__slider-item">
            <div class="okna-full__slider-image">
                <div class="okna-full__slider-img okna-full__slider-img-block" style="background: center no-repeat url('<?php echo get_template_directory_uri(); ?>/images/meb-okna-full-width/okna-full-width-slider.png'); background-size: cover;"></div>
            </div>
            <div class="okna-full__slider-item-text">
                <div class="okna-full__slider-item-text-row1">Окна Rehau</div>
                <div class="okna-full__slider-item-text-row2">«Аллюр»</div>
                <div class="okna-full__slider-item-text-row3">
                    <span class="okna-full__price-text">Всего за</span> <span class="okna-full__price">256</span><span class="okna-full__price-zero">00</span> <span class="okna-full__price-unit">р.</span>
                </div>
                <div class="okna-full__slider-button" data-toggle="modal" data-target="#kupit" data-whatever="@mdo" data-toggle="modal" data-target="#obratny-zvonok" data-whatever="@mdo">
                    ОСТАВИТЬ ЗАЯВКУ
                </div>
            </div>
        </div>

        <div class="okna-full__slider-item">
            <div class="okna-full__slider-image">
                <div class="okna-full__slider-img okna-full__slider-img-block" style="background: center no-repeat url('<?php echo get_template_directory_uri(); ?>/images/meb-okna-full-width/okna-full-width-slider.png'); background-size: cover;"></div>
            </div>
            <div class="okna-full__slider-item-text">
                <div class="okna-full__slider-item-text-row1">Окна Rehau</div>
                <div class="okna-full__slider-item-text-row2">«Аллюр»</div>
                <div class="okna-full__slider-item-text-row3">
                    <span class="okna-full__price-text">Всего за</span> <span class="okna-full__price">256</span><span class="okna-full__price-zero">00</span> <span class="okna-full__price-unit">р.</span>
                </div>
                <div class="okna-full__slider-button" data-toggle="modal" data-target="#kupit" data-whatever="@mdo">
                    ОСТАВИТЬ ЗАЯВКУ
                </div>
            </div>
        </div>

    </div>
    <script>
        $(document).ready(function(){
            $('.okna-full__slider').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
                arrows: true
            });
        });
    </script>
</div>
<!--/ Top Slider -->

<!-- Пластиковые окна -->
<div class="cs-max-width mod_margin-auto">
    <div class="mebel-korpus__furniture-cell">
    <!-- Title and tabs -->
        <!-- Title -->
        <div class="mebel-korpus__furniture-top-row">
            <!-- Заголовок -->
            <div class="mebel-korpus__furniture-top-title">Пластиковые окна</div>
            <!--/ Заголовок -->
            <!--catalog block - main block-->
    <div class="cat-block-main__row plastic-windows__full-width">
        <div>
            <div class="cat-block-top__item-align">
                <div class="cat-block-top__item">
                    <div class="cat-block-top__item-align-center okna-full__item-width">
                        <a class="" href="#">
                            <div class="plastic-windows__gull-width-hover-eye-block">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/meb-okna-full-width/hover-eye.png" alt="" class="plastic-windows__gull-width-hover-eye">
                            </div>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/meb-okna-full-width/okna-full-width-item-1.png" alt="" class="cat-block-top__item-img">
                        </a>
                        <div class="cat-block-top__item-title">
                            ОКНА KBE
                        </div>
                        <div class="cat-block-top__item-manufacturer okna-full__item-price">
                            от <strong>5 130</strong> руб./м<span class="mod_square">2</span>
                        </div>
                        <div class="cat-block-top__item-buy" data-toggle="modal" data-target="#zakaz-zamera" data-whatever="@mdo">
                            ЗАКАЗАТЬ ЗАМЕР
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="cat-block-top__item-align">
                <div class="cat-block-top__item">
                    <div class="cat-block-top__item-align-center okna-full__item-width">
                        <a class="" href="#">
                            <div class="plastic-windows__gull-width-hover-eye-block">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/meb-okna-full-width/hover-eye.png" alt="" class="plastic-windows__gull-width-hover-eye">
                            </div>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/meb-okna-full-width/okna-full-width-item-2.png" alt="" class="cat-block-top__item-img">
                        </a>
                        <div class="cat-block-top__item-title">
                            ОКНА REHAU
                        </div>
                        <div class="cat-block-top__item-manufacturer okna-full__item-price">
                            от <strong>5 130</strong> руб./м<span class="mod_square">2</span>
                        </div>
                        <div class="cat-block-top__item-buy" data-toggle="modal" data-target="#zakaz-zamera" data-whatever="@mdo">
                            ЗАКАЗАТЬ ЗАМЕР
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="cat-block-top__item-align">
                <div class="cat-block-top__item">
                    <div class="cat-block-top__item-align-center okna-full__item-width">
                        <a class="" href="#">
                            <div class="plastic-windows__gull-width-hover-eye-block">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/meb-okna-full-width/hover-eye.png" alt="" class="plastic-windows__gull-width-hover-eye">
                            </div>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/meb-okna-full-width/okna-full-width-item-3.png" alt="" class="cat-block-top__item-img">
                        </a>
                        <div class="cat-block-top__item-title">
                            ОКНА EXPROF
                        </div>
                        <div class="cat-block-top__item-manufacturer okna-full__item-price">
                            от <strong>5 130</strong> руб./м<span class="mod_square">2</span>
                        </div>
                        <div class="cat-block-top__item-buy" data-toggle="modal" data-target="#zakaz-zamera" data-whatever="@mdo">
                            ЗАКАЗАТЬ ЗАМЕР
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="cat-block-top__item-align">
                <div class="cat-block-top__item">
                    <div class="cat-block-top__item-align-center okna-full__item-width">
                        <a class="" href="#">
                            <div class="plastic-windows__gull-width-hover-eye-block">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/meb-okna-full-width/hover-eye.png" alt="" class="plastic-windows__gull-width-hover-eye">
                            </div>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/meb-okna-full-width/okna-full-width-item-4.png" alt="" class="cat-block-top__item-img">
                        </a>
                        <div class="cat-block-top__item-title">
                            ОКНА DEXEN
                        </div>
                        <div class="cat-block-top__item-manufacturer okna-full__item-price">
                            от <strong>5 130</strong> руб./м<span class="mod_square">2</span>
                        </div>
                        <div class="cat-block-top__item-buy" data-toggle="modal" data-target="#zakaz-zamera" data-whatever="@mdo">
                            ЗАКАЗАТЬ ЗАМЕР
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="cat-block-top__item-align">
                <div class="cat-block-top__item">
                    <div class="cat-block-top__item-align-center okna-full__item-width">
                        <a class="" href="#">
                            <div class="plastic-windows__gull-width-hover-eye-block">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/meb-okna-full-width/hover-eye.png" alt="" class="plastic-windows__gull-width-hover-eye">
                            </div>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/meb-okna-full-width/okna-full-width-item-5.png" alt="" class="cat-block-top__item-img">
                        </a>
                        <div class="cat-block-top__item-title">
                            ОКНА WITAL
                        </div>
                        <div class="cat-block-top__item-manufacturer okna-full__item-price">
                            от <strong>5 130</strong> руб./м<span class="mod_square">2</span>
                        </div>
                        <div class="cat-block-top__item-buy" data-toggle="modal" data-target="#zakaz-zamera" data-whatever="@mdo">
                            ЗАКАЗАТЬ ЗАМЕР
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="cat-block-top__item-align">
                <div class="cat-block-top__item">
                    <div class="cat-block-top__item-align-center okna-full__item-width">
                        <a class="" href="#">
                            <div class="plastic-windows__gull-width-hover-eye-block">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/meb-okna-full-width/hover-eye.png" alt="" class="plastic-windows__gull-width-hover-eye">
                            </div>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/meb-okna-full-width/okna-full-width-item-6.png" alt="" class="cat-block-top__item-img">
                        </a>
                        <div class="cat-block-top__item-title">
                            НЕСТАНДАРТНЫЕ ФОМЫ ОКОН
                        </div>
                        <div class="cat-block-top__item-manufacturer okna-full__item-price">
                            от <strong>5 130</strong> руб./м<span class="mod_square">2</span>
                        </div>
                        <div class="cat-block-top__item-buy" data-toggle="modal" data-target="#zakaz-zamera" data-whatever="@mdo">
                            ЗАКАЗАТЬ ЗАМЕР
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="cat-block-top__item-align">
                <div class="cat-block-top__item">
                    <div class="cat-block-top__item-align-center okna-full__item-width">
                        <a class="" href="#">
                            <div class="plastic-windows__gull-width-hover-eye-block">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/meb-okna-full-width/hover-eye.png" alt="" class="plastic-windows__gull-width-hover-eye">
                            </div>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/meb-okna-full-width/okna-full-width-item-4.png" alt="" class="cat-block-top__item-img">
                        </a>
                        <div class="cat-block-top__item-title">
                            ТЕРМОПАКЕТЫ
                        </div>
                        <div class="cat-block-top__item-manufacturer okna-full__item-price">
                            от <strong>5 130</strong> руб./м<span class="mod_square">2</span>
                        </div>
                        <div class="cat-block-top__item-buy" data-toggle="modal" data-target="#zakaz-zamera" data-whatever="@mdo">
                            ЗАКАЗАТЬ ЗАМЕР
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="cat-block-top__item-align">
                <div class="cat-block-top__item">
                    <div class="cat-block-top__item-align-center okna-full__item-width">
                        <a class="" href="#">
                            <div class="plastic-windows__gull-width-hover-eye-block">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/meb-okna-full-width/hover-eye.png" alt="" class="plastic-windows__gull-width-hover-eye">
                            </div>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/meb-okna-full-width/okna-full-width-item-5.png" alt="" class="cat-block-top__item-img">
                        </a>
                        <div class="cat-block-top__item-title">
                            ЦВЕТНЫЕ ЛАМИНИРОВАННЫЕ ОКНА
                        </div>
                        <div class="cat-block-top__item-manufacturer okna-full__item-price">
                            от <strong>5 130</strong> руб./м<span class="mod_square">2</span>
                        </div>
                        <div class="cat-block-top__item-buy" data-toggle="modal" data-target="#zakaz-zamera" data-whatever="@mdo">
                            ЗАКАЗАТЬ ЗАМЕР
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="cat-block-top__item-align">
                <div class="cat-block-top__item">
                    <div class="cat-block-top__item-align-center okna-full__item-width">
                        <a class="" href="#">
                            <div class="plastic-windows__gull-width-hover-eye-block">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/meb-okna-full-width/hover-eye.png" alt="" class="plastic-windows__gull-width-hover-eye">
                            </div>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/meb-okna-full-width/okna-full-width-item-6.png" alt="" class="cat-block-top__item-img">
                        </a>
                        <div class="cat-block-top__item-title">
                            ЦВЕТНЫЕ ЛАМИНИРОВАННЫЕ ОКНА
                        </div>
                        <div class="cat-block-top__item-manufacturer okna-full__item-price">
                            от <strong>5 130</strong> руб./м<span class="mod_square">2</span>
                        </div>
                        <div class="cat-block-top__item-buy" data-toggle="modal" data-target="#zakaz-zamera" data-whatever="@mdo">
                            ЗАКАЗАТЬ ЗАМЕР
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- блоки для выравнивания элементов -->
        <div class="cat-block-top__item-align-help" style="width: 342px">
        </div>
        <div class="cat-block-top__item-align-help" style="width: 342px">
        </div>
    <!--/ блоки для выравнивания элементов -->
    </div>

    <!--/catalog block - main block-->
        </div>
        <!--/ Title -->
    </div>
<!--/ Title and tabs -->
</div>
    <!-- Initialize Lightbox-gallery -->
        <script>
            baguetteBox.run('.plastic-windows__full-width', {
                animation: 'fadeIn'
            });
        </script>
    <!-- / Initialize Lightbox-gallery -->
<!--/ Пластиковые окна -->

<!-- Почему вам стоит купить пластиковые окна именно у нас? -->
    <div class="mebel-korpus__why-us mebel-korpus cs-max-width">
    <!--/ Title -->
        <div class="mebel-korpus__why-us-title">
            Почему вам стоит купить пластиковые окна именно у нас?
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


<?php //Преимущества окон ПВХ
include"blocks/catalog-preimusch/catalog-preimusch.php";
?>


<div class="mebel-okna mebel-korpus cs-max-width">

<!-- Какие окна мы делаем. Фото готовых работ -->
    <div class="mebel-okna__cell mod_margin-bottom-35">
    <!-- Title and tabs -->
        <!-- Title -->
        <div class="mebel-korpus__furniture-top-row">
            <!-- Заголовок -->
            <div class="mebel-korpus__furniture-top-title">Какие окна мы делаем. Фото готовых работ.</div>
            <!--/ Заголовок -->
        </div>
        <!--/ Title -->
    </div>
</div>
        <!-- Content -->
<div class="baguetteBox-gallery__block okna-full__gallery__block">
    <a class="baguetteBox-gallery__item okna-full__gallery__item" href="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/1-1.jpg" data-caption="Image caption">
        <div class="baguetteBox-gallery__hover-bg"></div>
        <img class="baguetteBox-gallery__img" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo.png" alt="First image">
        <img class="baguetteBox-gallery__zoom" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo__zoom.png" alt="">
    </a>
    <a class="baguetteBox-gallery__item okna-full__gallery__item" href="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/1-2.jpg" data-caption="Image caption">
        <div class="baguetteBox-gallery__hover-bg"></div>
        <img class="baguetteBox-gallery__img" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo.png" alt="First image">
        <img class="baguetteBox-gallery__zoom" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo__zoom.png" alt="">
    </a>
    <a class="baguetteBox-gallery__item okna-full__gallery__item" href="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/1-3.jpg" data-caption="Image caption">
        <div class="baguetteBox-gallery__hover-bg"></div>
        <img class="baguetteBox-gallery__img" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo.png" alt="First image">
        <img class="baguetteBox-gallery__zoom" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo__zoom.png" alt="">
    </a>
    <a class="baguetteBox-gallery__item okna-full__gallery__item" href="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/1-4.jpg" data-caption="Image caption">
        <div class="baguetteBox-gallery__hover-bg"></div>
        <img class="baguetteBox-gallery__img" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo.png" alt="First image">
        <img class="baguetteBox-gallery__zoom" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo__zoom.png" alt="">
    </a>
    <a class="baguetteBox-gallery__item okna-full__gallery__item" href="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/1-5.jpg" data-caption="Image caption">
        <div class="baguetteBox-gallery__hover-bg"></div>
        <img class="baguetteBox-gallery__img" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo.png" alt="First image">
        <img class="baguetteBox-gallery__zoom" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo__zoom.png" alt="">
    </a>
    <a class="baguetteBox-gallery__item okna-full__gallery__item" href="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/1-6.jpg" data-caption="Image caption">
        <div class="baguetteBox-gallery__hover-bg"></div>
        <img class="baguetteBox-gallery__img" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo.png" alt="First image">
        <img class="baguetteBox-gallery__zoom" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo__zoom.png" alt="">
    </a>
    <a href="" class="addition-first baguetteBox-gallery__item-addition okna-full__gallery__item"></a>
    <a href="" class="baguetteBox-gallery__item-addition okna-full__gallery__item"></a>
    <a href="" class="baguetteBox-gallery__item-addition okna-full__gallery__item"></a>
<!-- Initialize Lightbox-gallery -->
    <script>
        baguetteBox.run('.baguetteBox-gallery__block', {
            animation: 'fadeIn'
        });
    </script>
<!-- / Initialize Lightbox-gallery -->
</div>

<div class="mebel-okna mebel-korpus cs-max-width">
    <div class="mebel-okna__cell mod_margin-top-10">
        <!-- View more photo - button -->
        <div id="baguetteBox-gallery__view-more">
            <div class="mod_block-underline">Еще фото</div>
        </div>
        <script>
          $('#baguetteBox-gallery__view-more').click(function(e){
            e.preventDefault();
            for (var i=7;i<=12;i++){
              $('.addition-first').before('<a class="baguetteBox-gallery__item okna-full__gallery__item" href="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/1-6.jpg" data-caption="Image caption"><div class="baguetteBox-gallery__item-title">Кухня 1</div><div class="baguetteBox-gallery__hover-bg"></div><img class="baguetteBox-gallery__img" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo.png" alt="First image"><img class="baguetteBox-gallery__zoom" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo__zoom.png" alt=""></a>');
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

<?php //Как мы работаем
include"blocks/catalog-kak-mi-rab/catalog-kak-mi-rab.php";
?>

</div>

<?php //Получите подробную информацию
include"blocks/catalog-get-more-info/catalog-get-more-info.php";
?>

<div class="mebel-okna mebel-korpus cs-max-width">

<!-- Гарантия -->
    <div class="mebel-korpus__warranty text-block">
        <div class="text-block__preview">
            <div class="text-block__title">
                Гарантия
            </div>
    <!--block preview-->
            <div class="text-block__text-body okna-pvh__text-body">
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

                                <div class="cat__read-more-text">Читать подробнее об окнах, профилях, фурнитуре, стекле</div>
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

<?php //Честные отзывы наших клиентов
include"blocks/catalog-otzivi/catalog-otzivi.php";
?>

<div class="mebel-okna mebel-korpus cs-max-width">

<?php //Смотрите видео о нас
include"blocks/catalog-video-about-us/catalog-video-about-us.php";
?>

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
