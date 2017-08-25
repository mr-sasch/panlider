<?php
/*
 Template Name: Корпусная мебель
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
            <li class="breadcrumb-item active">Корпусная мебель</li>
        </ol>
    </div>
</div>
<!--/breadcrumbs-->

<div style="">

<!-- mebel korpus -->
<div class="mebel-korpus cs-max-width">

<!-- Title row -->
    <div class="review review__row">
        <?php //Header страниц каталога
            include"blocks/catalog-title-row/catalog-title-row.php";
        ?>
        <script> //Задаем заголовок страницы
            document.getElementById("page-title").innerHTML = "Корпусная мебель";
            document.getElementById("catalog-title-row__btn-title").innerHTML = "Заказать замер";
            document.getElementById("catalog-title-row__btn-img").setAttribute("src", "<?php echo get_template_directory_uri(); ?>/images/meb-korp/meb-korp-zakaz-zamer.png");
            document.getElementById("catalog-title-row").className = "review__container";
        </script>
    </div>
<!--/ Title row -->
</div>

    <?php //Слайдер
    include"blocks/catalog-top-slider/catalog-top-slider.php"
    ?>
    <script>
    document.getElementById("catalog-top-slider__text").innerHTML = '<span class="mebel-korpus__slider-item-text-1">Прихожие<br>со скидкой</span><span class="mebel-korpus__slider-item-text-2">15%</span><br><span class="mebel-korpus__slider-item-text-3">только в марте!</span>';

    var images_cont = document.getElementById("mebel-korpus__slider-cell");
    var images = images_cont.getElementsByClassName("mebel-korpus__slider-item-right");
    var counter;
    for (counter = 0; counter < images.length; counter++) {
        images[counter].style.backgroundImage = "url(<?php echo get_template_directory_uri(); ?>/images/meb-korp/meb-korp-slider-top.png)";
        images[counter].style.backgroundSize = "cover";
    }
    </script>

<div class="mebel-korpus cs-max-width">
<!-- Our Furniture -->
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
                        <a class="nav-link nav-link-with-img active" data-toggle="tab" href="#kitchen" role="tab">
                          <div class="nav-link__tab-img">
                            <svg viewBox="0 0 512 490.68"><path d="M320,277.34a10.66,10.66,0,0,0-10.67-10.66H266.66A10.65,10.65,0,0,0,256,277.34H234.66A10.65,10.65,0,0,0,224,266.68H181.33a10.66,10.66,0,0,0-10.67,10.66H0V490.68H512V277.34H320Zm-53.34,32a10.67,10.67,0,0,0,10.67-10.66H288a10.66,10.66,0,0,0,21.33,0H320V320H181.33V298.68H192a10.66,10.66,0,0,0,21.33,0H224a10.66,10.66,0,0,0,21.33,0H256A10.66,10.66,0,0,0,266.66,309.34ZM160,469.34H21.33V298.68H160Zm21.33,0v-128H320v128ZM490.66,298.68V469.34H341.33V298.68Z"/><path d="M362.66,0V192H512V0Zm128,170.67H384V21.34H490.66Z"/><path d="M149.33,0H0V192H149.33ZM128,170.67H21.33V21.34H128Z"/><path d="M298.66,352h-96a10.67,10.67,0,0,0,0,21.34h96a10.67,10.67,0,1,0,0-21.34Z"/><path d="M181.33,149.34H330.66a10.67,10.67,0,0,0,10.67-10.66V85.34a10.67,10.67,0,0,0-10.67-10.66H320V0H192V74.67H181.33a10.67,10.67,0,0,0-10.67,10.66v53.34A10.67,10.67,0,0,0,181.33,149.34Zm32-128h85.33V74.67H213.33ZM192,96H320v32H298.66a10.66,10.66,0,1,0-21.33,0H266.66a10.66,10.66,0,1,0-21.33,0H234.66a10.66,10.66,0,1,0-21.33,0H192Z"/><path d="M362.66,405.34a10.67,10.67,0,0,0,10.67-10.66V373.34a10.66,10.66,0,0,0-21.33,0v21.34A10.66,10.66,0,0,0,362.66,405.34Z"/><path d="M42.66,362.68A10.65,10.65,0,0,0,32,373.34v21.34a10.66,10.66,0,0,0,21.33,0V373.34A10.66,10.66,0,0,0,42.66,362.68Z"/><path d="M42.66,117.34a10.67,10.67,0,0,0,10.67-10.66V85.34a10.66,10.66,0,1,0-21.33,0v21.34A10.66,10.66,0,0,0,42.66,117.34Z"/><path d="M405.33,117.34A10.67,10.67,0,0,0,416,106.67V85.34a10.67,10.67,0,0,0-21.34,0v21.34A10.67,10.67,0,0,0,405.33,117.34Z"/><path d="M213.33,224a10.64,10.64,0,0,0,7.39-3h0c1.59-1.52,9.47-9.68,8.78-20.66-.28-4.59-2.2-11.24-9.78-16.91a5.53,5.53,0,0,1-1.27-1.22,9.39,9.39,0,0,1,2.36-4l-.09.09h0A10.66,10.66,0,1,0,205.94,163h0c-1.59,1.52-9.45,9.68-8.78,20.66.28,4.59,2.22,11.24,9.78,16.91a5.2,5.2,0,0,1,1.27,1.22,9.33,9.33,0,0,1-2.36,4l.09-.09h0A10.65,10.65,0,0,0,213.33,224Z"/><path d="M256,224a10.66,10.66,0,0,0,7.39-3h0c1.58-1.52,9.45-9.68,8.78-20.66-.28-4.59-2.22-11.24-9.78-16.91a5.2,5.2,0,0,1-1.27-1.22,9.39,9.39,0,0,1,2.36-4l-.09.09h0A10.66,10.66,0,1,0,248.61,163h0c-1.59,1.52-9.47,9.68-8.78,20.66.28,4.59,2.2,11.24,9.78,16.91a5.53,5.53,0,0,1,1.27,1.22,9.33,9.33,0,0,1-2.36,4l.09-.09h0A10.65,10.65,0,0,0,256,224Z"/><path d="M298.66,224a10.61,10.61,0,0,0,7.39-3h0c1.58-1.52,9.45-9.68,8.77-20.66-.28-4.59-2.2-11.24-9.78-16.91a5.53,5.53,0,0,1-1.27-1.22,9.39,9.39,0,0,1,2.36-4l-.08.09h0A10.66,10.66,0,1,0,291.28,163h0c-1.58,1.52-9.45,9.68-8.78,20.66.3,4.59,2.22,11.24,9.8,16.91a5.53,5.53,0,0,1,1.27,1.22,9.22,9.22,0,0,1-2.37,4l.09-.09h0A10.65,10.65,0,0,0,298.66,224Z"/></svg>
                          </div>
                          <div class="nav-link__title">
                            Кухни
                          </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-with-img" data-toggle="tab" href="#living-room" role="tab">
                          <div class="nav-link__tab-img">
                            <svg viewBox="0 0 370.4 306.4"><path d="M364.4,50.4a6,6,0,0,0,6-6V6a6,6,0,0,0-6-6H6A6,6,0,0,0,0,6V44.4a6,6,0,0,0,6,6h6.8V192H6a6,6,0,0,0-6,6V300.4a6,6,0,0,0,6,6H364.4a6,6,0,0,0,6-6V198a6,6,0,0,0-6-6h-6.8V50.4ZM12,12H358.4V38.4H12ZM50.4,192V178.4H320V192Zm237.2-51.2a6,6,0,0,0-6,6v19.6H268V146.8a6,6,0,0,0-12,0v19.6H242.4V146.8a6,6,0,0,0-12,0v19.6H216.8V146.8a6,6,0,0,0-12,0v19.6H191.2V146.8a6,6,0,0,0-12,0v19.6H165.6V146.8a6,6,0,1,0-12,0v19.6H140V146.8a6,6,0,0,0-12,0v19.6H114.4V146.8a6,6,0,0,0-12,0v19.6H88.8V146.8a6,6,0,0,0-12,0v19.6H50.4V127.2H320v39.2H293.6V146.8a6,6,0,0,0-6-6ZM320,115.2H293.6V95.6a6,6,0,0,0-12,0v19.6H268V95.6a6,6,0,0,0-12,0v19.6H242.4V95.6a6,6,0,0,0-12,0v19.6H216.8V95.6a6,6,0,1,0-12,0v19.6H191.2V95.6a6,6,0,1,0-12,0v19.6H165.6V95.6a6,6,0,0,0-12,0v19.6H140V95.6a6,6,0,1,0-12,0v19.6H114.4V95.6a6,6,0,0,0-12,0v19.6H88.8V95.6a6,6,0,0,0-12,0v19.6H50.4V76H320ZM320,64H50.4V50.4H320ZM24.8,50.4H38.4V192H24.8ZM230.4,229.6v64.8H140V229.6Zm102.4,0v64.8H242.4V229.6ZM128,294.4H37.6V229.6H128Zm230.4,0H344.8V223.6a6,6,0,0,0-6-6H31.6a6,6,0,0,0-6,6v70.8H12V204H358.4ZM345.6,192H332V50.4h13.6Zm0,0"/><path d="M178.8,248.8h12.8a6,6,0,0,0,0-12H178.8a6,6,0,0,0,0,12Zm0,0"/><path d="M76.4,248.8H89.2a6,6,0,1,0,0-12H76.4a6,6,0,0,0,0,12Zm0,0"/><path d="M281.2,248.8H294a6,6,0,0,0,0-12H281.2a6,6,0,0,0,0,12Zm0,0"/></svg>
                          </div>
                          <div class="nav-link__title">
                            Гостиные
                          </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-with-img" data-toggle="tab" href="#bedroom" role="tab">
                          <div class="nav-link__tab-img">
                            <svg viewBox="0 0 48 48"><path d="M16.8,33.6a.8.8,0,1,1-.8-.8.8.8,0,0,1,.8.8Zm0,0"/><path d="M21.6,33.6a.8.8,0,1,1-.8-.8.8.8,0,0,1,.8.8Zm0,0"/><path d="M26.4,33.6a.8.8,0,1,1-.8-.8.79.79,0,0,1,.8.8Zm0,0"/><path d="M31.2,33.6a.8.8,0,1,1-.8-.8.8.8,0,0,1,.8.8Zm0,0"/><path d="M36,33.6a.8.8,0,1,1-.8-.8.8.8,0,0,1,.8.8Zm0,0"/><path d="M48,30.4v-8H45.6v-.68a3.32,3.32,0,0,0-3.32-3.32H5.71A3.32,3.32,0,0,0,2.4,21.71v.68H0v8H2.4v4H1.6a.8.8,0,0,0,0,1.6H0V48H8.8V45.6H39.2V48H48V36H46.4a.8.8,0,0,0,0-1.6h-.8v-4ZM46.4,24v4.8H43.2V24ZM1.6,24H4.8v4.8H1.6ZM7.2,46.4H1.6V37.6H4.8v8H7.2ZM8.8,44H6.4V37.6H41.6V44Zm2.54-12.8a1.15,1.15,0,0,1,.2-1.38l3.2-3.15a1.22,1.22,0,0,1,1.71,0l3.2,3.15a1.15,1.15,0,0,1,.2,1.38Zm-.94,2.41a.8.8,0,0,0,1.6,0,.78.78,0,0,0-.32-.62,4,4,0,0,1,1.13-.18H35.2A4,4,0,0,1,39.12,36H38.4a.8.8,0,1,0-1.6,0H33.6A.8.8,0,0,0,32,36H28.8a.8.8,0,0,0-1.6,0H24a.8.8,0,0,0-1.6,0H19.2a.8.8,0,1,0-1.6,0H14.4a.8.8,0,1,0-1.6,0H9.6a.8.8,0,0,0-.49-.73,4,4,0,0,1,1.29-1.65Zm17.15-3.8,3.2-3.15a1.22,1.22,0,0,1,1.71,0l3.2,3.15a1.15,1.15,0,0,1,.2,1.38H27.34a1.15,1.15,0,0,1,.2-1.38ZM46.4,46.4H40.8v-.8h2.4v-8h3.2ZM44,34.4h-.8a.8.8,0,1,0,0,1.6H40.73a5.61,5.61,0,0,0-3.33-4.34,2.73,2.73,0,0,0-.63-3l-3.2-3.15a2.83,2.83,0,0,0-4,0l-3.19,3.15a2.73,2.73,0,0,0-.77,2.52H21.54a2.73,2.73,0,0,0-.77-2.52l-3.2-3.15a2.83,2.83,0,0,0-4,0l-3.19,3.15A2.73,2.73,0,0,0,10,32a5.61,5.61,0,0,0-2.69,4H4.8a.8.8,0,0,0,0-1.6H4v-4H6.4v-8H4v-.68A1.72,1.72,0,0,1,5.71,20H42.29A1.72,1.72,0,0,1,44,21.71v.68H41.6v8H44Zm0,0"/><path d="M38.4,3.2H9.6V13.6H38.4ZM36.8,12H11.2V4.8H36.8Zm0,0"/><path d="M41.6,0H6.4V16.8H41.6ZM40,15.2H8V1.6H40Zm0,0"/><path d="M14.4,10.4a.8.8,0,0,0,.57-.23L16.8,8.33l1.83,1.83a.8.8,0,0,0,1.13,0L21.6,8.33l1.83,1.83a.8.8,0,0,0,1.13,0L26.4,8.33l1.84,1.83a.8.8,0,0,0,1.13,0L31.2,8.33,33,10.16A.8.8,0,0,0,34.16,9l-2.4-2.4a.8.8,0,0,0-1.13,0L28.8,8.47,27,6.63a.8.8,0,0,0-1.13,0L24,8.47,22.16,6.63a.8.8,0,0,0-1.13,0L19.2,8.47,17.37,6.63a.8.8,0,0,0-1.13,0L13.84,9a.8.8,0,0,0,.56,1.36Zm0,0"/></svg>
                          </div>
                          <div class="nav-link__title">
                            Спальни
                          </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-with-img" data-toggle="tab" href="#beds" role="tab">
                          <div class="nav-link__tab-img">
                            <svg viewBox="0 0 48 37.6"><path d="M48,22.87a1.44,1.44,0,0,0,0-.18.94.94,0,0,0,0-.36L45.75,4.22l0-.12A5.12,5.12,0,0,0,40.89.32H7.11A5.11,5.11,0,0,0,2.28,4.1L0,22.32a.94.94,0,0,0,0,.36,1.44,1.44,0,0,0,0,.18v4.51a2.53,2.53,0,0,0,.7,1.75A2.53,2.53,0,0,0,0,30.87V33a2.54,2.54,0,0,0,1.6,2.36v2.59H8.8v-2.4H39.2v2.4h7.2V35.33A2.54,2.54,0,0,0,48,33V30.87a2.53,2.53,0,0,0-.7-1.75,2.53,2.53,0,0,0,.7-1.75ZM7.82,13.49,11.71,9.6A1.65,1.65,0,0,1,14,9.6l3.88,3.89a1.62,1.62,0,0,1,.23,2H7.6a1.63,1.63,0,0,1,.23-2ZM7.2,17.12H40.8a4,4,0,0,1,3.92,3.2H3.28a4,4,0,0,1,3.92-3.2Zm22.08-3.63L33.17,9.6a1.65,1.65,0,0,1,2.32,0l3.88,3.89a1.62,1.62,0,0,1,.23,2H29.05a1.63,1.63,0,0,1,.23-2ZM1.6,27.38V22.86a1.49,1.49,0,0,1,.12-.43l.06-.09a.79.79,0,0,1,.14-.18L2,22.09A.92.92,0,0,1,2.2,22a1,1,0,0,1,.34-.07H45.45a1,1,0,0,1,.34.07.91.91,0,0,1,.15.09.78.78,0,0,0-.34.64.8.8,0,0,0,.8.8v3.2a.8.8,0,0,0-.8.8.78.78,0,0,0,.34.64.9.9,0,0,1-.49.16H2.55a1,1,0,0,1-.95-.95ZM3.84,4.48A3.54,3.54,0,0,1,7.11,1.92H40.89a3.55,3.55,0,0,1,3.28,2.56l1.78,14.43a5.61,5.61,0,0,0-4.63-3.36,3.21,3.21,0,0,0-.81-3.19L36.62,8.47a3.25,3.25,0,0,0-4.59,0l-3.88,3.88a3.2,3.2,0,0,0-.82,3.16H19.87a3.21,3.21,0,0,0-.82-3.16L15.17,8.47a3.25,3.25,0,0,0-4.59,0L6.7,12.35a3.22,3.22,0,0,0-.77,3.32,5.61,5.61,0,0,0-3.86,3.23ZM7.2,36.32h-4v-.8h4Zm37.6,0h-4v-.8h4ZM46.4,33a1,1,0,0,1-.95.95H2.55A1,1,0,0,1,1.6,33V30.86a.94.94,0,0,1,.95-.94H45.46a.94.94,0,0,1,.94.95Zm0,0" transform="translate(0 -0.32)"/><path d="M6.4,25.12a.8.8,0,1,1-.8-.8.8.8,0,0,1,.8.8Zm0,0" transform="translate(0 -0.32)"/><path d="M4,22.72a.8.8,0,1,1-.8-.8.8.8,0,0,1,.8.8Zm0,0" transform="translate(0 -0.32)"/><path d="M8.8,22.72a.8.8,0,1,1-.8-.8.8.8,0,0,1,.8.8Zm0,0" transform="translate(0 -0.32)"/><path d="M4,27.52a.8.8,0,1,1-.8-.8.8.8,0,0,1,.8.8Zm0,0" transform="translate(0 -0.32)"/><path d="M8.8,27.52a.8.8,0,1,1-.8-.8.8.8,0,0,1,.8.8Zm0,0" transform="translate(0 -0.32)"/><path d="M11.2,25.12a.8.8,0,1,1-.8-.8.8.8,0,0,1,.8.8Zm0,0" transform="translate(0 -0.32)"/><path d="M16,25.12a.8.8,0,1,1-.8-.8.8.8,0,0,1,.8.8Zm0,0" transform="translate(0 -0.32)"/><path d="M13.6,22.72a.8.8,0,1,1-.8-.8.8.8,0,0,1,.8.8Zm0,0" transform="translate(0 -0.32)"/><path d="M18.4,22.72a.8.8,0,1,1-.8-.8.8.8,0,0,1,.8.8Zm0,0" transform="translate(0 -0.32)"/><path d="M13.6,27.52a.8.8,0,1,1-.8-.8.8.8,0,0,1,.8.8Zm0,0" transform="translate(0 -0.32)"/><path d="M18.4,27.52a.8.8,0,1,1-.8-.8.8.8,0,0,1,.8.8Zm0,0" transform="translate(0 -0.32)"/><path d="M20.8,25.12a.8.8,0,1,1-.8-.8.8.8,0,0,1,.8.8Zm0,0" transform="translate(0 -0.32)"/><path d="M25.6,25.12a.8.8,0,1,1-.8-.8.8.8,0,0,1,.8.8Zm0,0" transform="translate(0 -0.32)"/><path d="M23.2,22.72a.8.8,0,1,1-.8-.8.8.8,0,0,1,.8.8Zm0,0" transform="translate(0 -0.32)"/><path d="M28,22.72a.8.8,0,1,1-.8-.8.8.8,0,0,1,.8.8Zm0,0" transform="translate(0 -0.32)"/><path d="M23.2,27.52a.8.8,0,1,1-.8-.8.8.8,0,0,1,.8.8Zm0,0" transform="translate(0 -0.32)"/><path d="M28,27.52a.8.8,0,1,1-.8-.8.8.8,0,0,1,.8.8Zm0,0" transform="translate(0 -0.32)"/><path d="M30.4,25.12a.8.8,0,1,1-.8-.8.8.8,0,0,1,.8.8Zm0,0" transform="translate(0 -0.32)"/><path d="M35.2,25.12a.8.8,0,1,1-.8-.8.8.8,0,0,1,.8.8Zm0,0" transform="translate(0 -0.32)"/><path d="M32.8,22.72a.8.8,0,1,1-.8-.8.8.8,0,0,1,.8.8Zm0,0" transform="translate(0 -0.32)"/><path d="M37.6,22.72a.8.8,0,1,1-.8-.8.8.8,0,0,1,.8.8Zm0,0" transform="translate(0 -0.32)"/><path d="M32.8,27.52a.8.8,0,1,1-.8-.8.8.8,0,0,1,.8.8Zm0,0" transform="translate(0 -0.32)"/><path d="M37.6,27.52a.8.8,0,1,1-.8-.8.8.8,0,0,1,.8.8Zm0,0" transform="translate(0 -0.32)"/><path d="M40,25.12a.8.8,0,1,1-.8-.8.8.8,0,0,1,.8.8Zm0,0" transform="translate(0 -0.32)"/><path d="M44.8,25.12a.8.8,0,1,1-.8-.8.8.8,0,0,1,.8.8Zm0,0" transform="translate(0 -0.32)"/><path d="M42.4,22.72a.8.8,0,1,1-.8-.8.8.8,0,0,1,.8.8Zm0,0" transform="translate(0 -0.32)"/><path d="M42.4,27.52a.8.8,0,1,1-.8-.8.8.8,0,0,1,.8.8Zm0,0" transform="translate(0 -0.32)"/></svg>
                          </div>
                          <div class="nav-link__title">
                            Кровати
                          </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-with-img" data-toggle="tab" href="#playroom" role="tab">
                          <div class="nav-link__tab-img">
                            <svg viewBox="0 0 232.5 228.75"><path d="M225,221.25V0h-7.5V56.25h-4.44a11.09,11.09,0,0,0,.69-3.75A11.26,11.26,0,0,0,202.5,41.25H63.75A11.26,11.26,0,0,0,52.5,52.5a11.09,11.09,0,0,0,.69,3.75H48.05a11,11,0,0,0,.7-3.75A11.26,11.26,0,0,0,37.5,41.25H30a11.14,11.14,0,0,0-10.56,15H15V0H7.5V221.25H0v7.5H232.5v-7.5ZM63.75,48.75H202.5a3.75,3.75,0,0,1,0,7.5H63.75a3.75,3.75,0,0,1,0-7.5Zm90,22.5v-7.5H195v7.5ZM195,78.75v7.5H153.75v-7.5Zm0,105v7.5H153.75v-7.5ZM30,48.75h7.5a3.75,3.75,0,0,1,0,7.5H30a3.75,3.75,0,0,1,0-7.5Zm-15,15H146.25v7.5H15Zm112.5,97.5v-6.07l-2.86-1.43h21.61v7.5Zm18.75,7.5v7.5H127.5v-7.5ZM15,78.75H146.25v67.5h-22.5V132.39a19.88,19.88,0,0,0-19.89-19.89H97.52a15,15,0,1,0-15-15,15,15,0,0,0,15,15H91.14a19.88,19.88,0,0,0-19.89,19.89v13.86h-7.5A11.26,11.26,0,0,0,52.5,157.5a11.09,11.09,0,0,0,.69,3.75H48.05a11,11,0,0,0,.7-3.75A11.26,11.26,0,0,0,37.5,146.25H30a11.14,11.14,0,0,0-10.56,15H15Zm82.5,78.63-18.75,4.69v38.55a1.88,1.88,0,0,1-3.75,0V159.82l15-7.5V131.25H82.5v16.43l-3.75,1.88V132.39A12.39,12.39,0,0,1,91.13,120h12.73a12.38,12.38,0,0,1,12.38,12.39v17.17l-3.75-1.87V131.25H105v21.07l15,7.5v40.81a1.87,1.87,0,0,1-3.75,0V162.07Zm11.25,10.54v8.32H86.25v-8.32l11.25-2.81ZM90,97.5a7.5,7.5,0,1,1,7.5,7.5A7.51,7.51,0,0,1,90,97.5ZM30,168.75H67.5v7.5H15v-7.5ZM26.25,157.5A3.75,3.75,0,0,1,30,153.75h7.5a3.75,3.75,0,0,1,0,7.5H30a3.75,3.75,0,0,1-3.75-3.75Zm41.25-2.32v6.07H63.75a3.75,3.75,0,0,1,0-7.5h6.61Zm78.75,66.07H15v-37.5H67.5v16.88a9.37,9.37,0,0,0,18.75,0V183.75h22.5v16.88a9.38,9.38,0,0,0,18.75,0V183.75h18.75Zm7.5-22.5H195v7.5H153.75ZM195,221.25H153.75v-7.5H195Zm0-45H153.75v-7.5H195Zm0-15H153.75v-7.5H195Zm0-15H153.75v-7.5H195Zm0-15H153.75v-7.5H195Zm0-15H153.75v-7.5H195Zm0-15H153.75v-7.5H195Zm22.5,120h-15v-37.5h15Zm0-45h-15v-7.5h15Zm0-15h-15V78.75h15Zm0-90h-15v-7.5h15Zm0,0"/></svg>
                          </div>
                          <div class="nav-link__title">
                            Детские
                          </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-with-img" data-toggle="tab" href="#hall" role="tab">
                          <div class="nav-link__tab-img">
                            <svg viewBox="0 0 48 48"><path d="M45.6,36V2.4H24.8V44H45.6ZM26.4,4H44v6.4H26.4Zm0,8H44v6.4H26.4Zm0,8H44v6.4H26.4Zm0,8H44v6.4H26.4ZM44,42.4H26.4V36H44Zm0,0"/><path d="M36.8,22.4H33.6a.8.8,0,1,0,0,1.6h3.2a.8.8,0,1,0,0-1.6Zm0,0"/><path d="M36.8,14.4H33.6a.8.8,0,1,0,0,1.6h3.2a.8.8,0,1,0,0-1.6Zm0,0"/><path d="M36.8,6.4H33.6a.8.8,0,1,0,0,1.6h3.2a.8.8,0,0,0,0-1.6Zm0,0"/><path d="M36.8,30.4H33.6a.8.8,0,1,0,0,1.6h3.2a.8.8,0,0,0,0-1.6Zm0,0"/><path d="M33.6,40h3.2a.8.8,0,1,0,0-1.6H33.6a.8.8,0,1,0,0,1.6Zm0,0"/><path d="M0,0V48H4V46.4H44V48h4V0ZM46.4,46.4h-.8V44.8H2.4v1.6H1.6V1.6H46.4Zm0,0"/><path d="M24,2.4H2.4V44H24ZM22.4,15.2H16.8v-.8a.8.8,0,0,0-1.6,0v.8h-.8v-.8a.8.8,0,0,0-1.6,0v.8H12v-.8a.8.8,0,0,0-1.6,0v.8H9.6v-.8a.8.8,0,0,0-1.6,0v.8H4V12.8H22.4ZM4,16.8H8v1.6a.8.8,0,1,0,1.6,0V16.8h.8v1.6a.8.8,0,0,0,1.6,0V16.8h.8v1.6a.8.8,0,1,0,1.6,0V16.8h.8v1.6a.8.8,0,1,0,1.6,0V16.8h5.6V36H4ZM22.4,4v7.2H4V4ZM4,42.4V37.6H22.4v4.8Zm0,0"/></svg>
                          </div>
                          <div class="nav-link__title">
                            Прихожие
                          </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-with-img" data-toggle="tab" href="#Wardrobes" role="tab">
                          <div class="nav-link__tab-img">
                            <svg viewBox="0 0 46.4 48"><path d="M8.8,36.8A.8.8,0,0,0,8,36H7.2V32H9.6V24H3.2v8H5.6v4H4.8a.8.8,0,1,0,0,1.6H0v8.8H.8v.8a.8.8,0,1,0,1.6,0v-.8h8v.8a.8.8,0,1,0,1.6,0v-.8h.8V37.6H8a.8.8,0,0,0,.8-.8Zm-4-11.2H8v4.8H4.8Zm6.4,13.6v5.6H1.6V39.2Zm0,0"/><path d="M16,0V46.4h1.6v.8a.8.8,0,1,0,1.6,0v-.8H44v.8a.8.8,0,1,0,1.6,0v-.8h.8V0Zm8,16.33,1.27,1.27H22.73ZM17.6,12V10.4H35.2V12Zm19.2-1.6h8v7.2h-8ZM35.2,1.6V8.8H17.6V1.6Zm-8,43.2a1.6,1.6,0,0,1,0-3.2h3.2a.8.8,0,1,0,0-1.6H27.2A3.2,3.2,0,0,0,24,43.2a3.16,3.16,0,0,0,.44,1.6H17.6V13.6h5.6v1.26l-3,3a.81.81,0,0,0-.17.87.77.77,0,0,0,.43.43.75.75,0,0,0,.3.06h6.4a.75.75,0,0,0,.31-.06.77.77,0,0,0,.43-.43.81.81,0,0,0-.17-.87l-3-3V13.6H35.2V44.8ZM36.8,28h8v7.2h-8Zm8,16.8h-8v-8h8Zm0-18.4h-8V19.2h8Zm-8-17.6V1.6h8V8.8Zm0,0"/><path d="M30.4,37.6H24.8a.8.8,0,1,0,0,1.6h5.6a1.6,1.6,0,1,1,0,3.2H27.2a.8.8,0,0,0,0,1.6h3.2a3.2,3.2,0,1,0,0-6.4Zm0,0"/></svg>
                          </div>
                          <div class="nav-link__title">
                            Шкафы-купе
                          </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-with-img" data-toggle="tab" href="#office" role="tab">
                          <div class="nav-link__tab-img">
                            <svg viewBox="0 0 48 48"><path d="M47.2,20V12.8H40.8V20H35.37l-.23-1.6H39.2V0H8.8V18.4h3.95L12.5,20H0v8H.8V48h4V31.2A3.2,3.2,0,0,1,8,28h3.29l0,.22A3.2,3.2,0,0,0,14.4,32h7.2v2.4h1.6V36H21.6v1l-9.78,2.26-.06,0-.15.07a.71.71,0,0,0-.12.09l-.11.11-.09.12a.87.87,0,0,0-.05.14.68.68,0,0,0,0,.16.4.4,0,0,0,0,.07v.84a3.59,3.59,0,1,0,1.6.18v-.38l8.8-2v.26l-1.94,1.94H19.6a3.64,3.64,0,1,0,1.82.51L22.73,40h2.54l1.31,1.31a3.58,3.58,0,1,0,1.82-.51h-.06L26.4,38.87v-.26l8.8,2V41a3.61,3.61,0,1,0,1.6-.18V40a.4.4,0,0,0,0-.07.68.68,0,0,0,0-.16.83.83,0,0,0-.05-.14l-.09-.13-.1-.11-.12-.09-.15-.06-.06,0L26.4,37V36H24.8V34.4h1.6V32h7a3.2,3.2,0,0,0,3.15-3.75l0-.25H40a3.2,3.2,0,0,1,3.2,3.2V48h4V28H48V20ZM13.6,44.4a2,2,0,1,1-2-2,2,2,0,0,1,2,2Zm6,2a2,2,0,1,1,2-2,2,2,0,0,1-2,2Zm10.8-2a2,2,0,1,1-2-2,2,2,0,0,1,2,2Zm8,0a2,2,0,1,1-2-2,2,2,0,0,1,2,2ZM23.2,37.6h1.6v.8H23.2ZM44.8,14.4h.8V20h-.8Zm-2.4,0h.8V20h-.8Zm-4.8,2.4H34.89l-.35-2.4H37.6ZM10.4,1.6H37.6V12.8H34.3l-.79-5.39a3.17,3.17,0,0,0-.14-.49l-.05-.14a3.61,3.61,0,0,0-.16-.33l-.07-.13a3.9,3.9,0,0,0-.29-.4h0a3.25,3.25,0,0,0-.45-.42l-.17-.12a3,3,0,0,0-.37-.22l-.2-.09a3.05,3.05,0,0,0-.41-.14L31,4.87a3.12,3.12,0,0,0-.64-.07H17.56a3.43,3.43,0,0,0-.64.07l-.19.05a2.73,2.73,0,0,0-.41.14l-.21.1a3.07,3.07,0,0,0-.34.2l-.2.14a3.73,3.73,0,0,0-.33.31s-.08.07-.12.11a3.09,3.09,0,0,0-.31.44l0,.06a3,3,0,0,0-.19.41l0,.1a3.18,3.18,0,0,0-.14.51l-.82,5.36H10.4Zm0,12.8h3L13,16.8H10.4ZM8,26.4a4.81,4.81,0,0,0-4.8,4.8V46.4H2.4v-20H1.6V21.6H12.26l-.73,4.8Zm16.8,6.4H23.2V32h1.6ZM35,28.51a1.6,1.6,0,0,1-1.57,1.89h-19a1.59,1.59,0,0,1-1.23-.58,1.61,1.61,0,0,1-.34-1.34l.48-3.13L14.12,20l.24-1.6.77-5.08L16,7.71a1.4,1.4,0,0,1,.11-.36l0-.08a1.49,1.49,0,0,1,.2-.3l0,0a1.55,1.55,0,0,1,.21-.2l.09-.06.18-.11.1,0,.21-.07.09,0a1.71,1.71,0,0,1,.32,0H30.37a1.71,1.71,0,0,1,.32,0l.09,0,.21.07.09,0,.21.12.05,0a1.67,1.67,0,0,1,.24.23,1.64,1.64,0,0,1,.21.33v0a1.39,1.39,0,0,1,.12.35l.76,5.12.82,5.6.23,1.6,1.18,8ZM46.4,26.4h-.8v20h-.8V31.2A4.81,4.81,0,0,0,40,26.4H36.31l-.18-1.2-.53-3.6H46.4Zm0,0"/><path d="M9.6,23.2H4a.8.8,0,0,0,0,1.6H9.6a.8.8,0,0,0,0-1.6Zm0,0"/><path d="M44,23.2H38.4a.8.8,0,0,0,0,1.6H44a.8.8,0,0,0,0-1.6Zm0,0"/></svg>
                          </div>
                          <div class="nav-link__title">
                            Офис
                          </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-with-img" data-toggle="tab" href="#other" role="tab">
                          <div class="nav-link__tab-img">
                            <svg viewBox="0 0 409.6 409.6"><path d="M32.89,382.67h145a6,6,0,0,0,6-6v-145a6,6,0,0,0-6-6h-145a6,6,0,0,0-6,6v145a6,6,0,0,0,6,6Zm6-145H171.92V370.75H38.86Zm0,0"/><path d="M403.64,0H6A6,6,0,0,0,0,6V403.64a6,6,0,0,0,6,6H403.64a6,6,0,0,0,6-6V6a6,6,0,0,0-6-6ZM198.84,397.68H11.93V210.76H198.84Zm0-198.84H11.93V11.93H198.84ZM397.68,397.68H210.76V210.76H397.68Zm0-198.84H210.76V11.93H397.68Zm0,0"/><path d="M231.73,183.83h145a6,6,0,0,0,6-6v-145a6,6,0,0,0-6-6h-145a6,6,0,0,0-6,6v145a6,6,0,0,0,6,6Zm74.36-20.3,51.36-91.95,11.14,6.23-51.35,91.95Zm64.66,8.38H329.7L370.76,98.4ZM237.69,38.86H370.76v26.5l-12.7-7.09a6,6,0,0,0-8.11,2.3L292.77,162.92a6,6,0,0,0,2.3,8.11l1.56.88H237.69Zm0,0"/><path d="M32.89,183.83h145a6,6,0,0,0,6-6v-145a6,6,0,0,0-6-6h-145a6,6,0,0,0-6,6v145a6,6,0,0,0,6,6Zm43.89-11.92H59.6V84H76.78Zm29.11,0H88.71V109.09H105.9Zm24.69,0H117.82V66.59h12.77ZM38.86,38.86H171.92V171.91h-29.4V60.63a6,6,0,0,0-6-6h-24.7a6,6,0,0,0-6,6V97.16H88.71V78.06a6,6,0,0,0-6-6H53.63a6,6,0,0,0-6,6v93.85H38.86Zm0,0"/><path d="M231.73,382.67h145a6,6,0,0,0,6-6v-145a6,6,0,0,0-6-6h-145a6,6,0,0,0-6,6v145a6,6,0,0,0,6,6Zm71-82.32H292.15V277.88a6,6,0,1,0-11.92,0v22.46H269.62V262.06h33.13Zm0,70.4H269.62V312.27h33.13ZM237.69,237.69H370.76V370.75H314.67V256.1a6,6,0,0,0-6-6H263.66a6,6,0,0,0-6,6V370.75h-20Zm0,0"/><path d="M139.76,298.26a5.95,5.95,0,0,0-6,6,6.41,6.41,0,0,0,.11,1.16,6.18,6.18,0,0,0,.35,1.13,5.43,5.43,0,0,0,.55,1,6,6,0,0,0,9.17.9,4.85,4.85,0,0,0,.73-.9,5.78,5.78,0,0,0,.56-1,6.31,6.31,0,0,0,.34-1.12,5.78,5.78,0,0,0,.12-1.16,6,6,0,0,0-6-6Zm0,0"/></svg>
                          </div>
                          <div class="nav-link__title">
                            Разное
                          </div>
                        </a>
                    </li>
                </ul>
                <!--/ bootstrap tabs -->
            </div>
            <!--/ Табы -->
        </div>
        <!--/ Title -->
        <!-- Tabs -->
        <div class="baguetteBox-gallery mebel-korpus__furniture-tab-content tab-content">
            <div id="office" class="baguetteBox-gallery__block tab-pane">
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
                <a class="baguetteBox-gallery__item" href="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/1-7.jpg" data-caption="Image caption">
                    <div class="baguetteBox-gallery__item-title">Кухня 1</div>
                    <div class="baguetteBox-gallery__hover-bg"></div>
                    <img class="baguetteBox-gallery__img" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo.png" alt="First image">
                    <img class="baguetteBox-gallery__zoom" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo__zoom.png" alt="">
                </a>
                <a class="baguetteBox-gallery__item" href="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/1-8.jpg" data-caption="Image caption">
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
                <a href="" class="baguetteBox-gallery__item-addition"></a>
            <!-- Initialize Lightbox-gallery -->
                <script>
                    baguetteBox.run('.baguetteBox-gallery__block', {
                        animation: 'fadeIn'
                    });
                </script>
            <!-- / Initialize Lightbox-gallery -->
            </div>
            <div id="other" class="baguetteBox-gallery__block tab-pane">
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
                <a class="baguetteBox-gallery__item" href="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/1-7.jpg" data-caption="Image caption">
                    <div class="baguetteBox-gallery__item-title">Кухня 1</div>
                    <div class="baguetteBox-gallery__hover-bg"></div>
                    <img class="baguetteBox-gallery__img" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo.png" alt="First image">
                    <img class="baguetteBox-gallery__zoom" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo__zoom.png" alt="">
                </a>
                <a class="baguetteBox-gallery__item" href="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/1-8.jpg" data-caption="Image caption">
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
                <a href="" class="baguetteBox-gallery__item-addition"></a>
            <!-- Initialize Lightbox-gallery -->
                <script>
                    baguetteBox.run('.baguetteBox-gallery__block', {
                        animation: 'fadeIn'
                    });
                </script>
            <!-- / Initialize Lightbox-gallery -->
            </div>
            <div id="beds" class="baguetteBox-gallery__block tab-pane">
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
                <a class="baguetteBox-gallery__item" href="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/1-7.jpg" data-caption="Image caption">
                    <div class="baguetteBox-gallery__item-title">Кухня 1</div>
                    <div class="baguetteBox-gallery__hover-bg"></div>
                    <img class="baguetteBox-gallery__img" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo.png" alt="First image">
                    <img class="baguetteBox-gallery__zoom" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo__zoom.png" alt="">
                </a>
                <a class="baguetteBox-gallery__item" href="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/1-8.jpg" data-caption="Image caption">
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
                <a href="" class="baguetteBox-gallery__item-addition"></a>
            <!-- Initialize Lightbox-gallery -->
                <script>
                    baguetteBox.run('.baguetteBox-gallery__block', {
                        animation: 'fadeIn'
                    });
                </script>
            <!-- / Initialize Lightbox-gallery -->
            </div>
            <div id="living-room" class="baguetteBox-gallery__block tab-pane">
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
                <a class="baguetteBox-gallery__item" href="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/1-7.jpg" data-caption="Image caption">
                    <div class="baguetteBox-gallery__item-title">Кухня 1</div>
                    <div class="baguetteBox-gallery__hover-bg"></div>
                    <img class="baguetteBox-gallery__img" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo.png" alt="First image">
                    <img class="baguetteBox-gallery__zoom" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo__zoom.png" alt="">
                </a>
                <a class="baguetteBox-gallery__item" href="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/1-8.jpg" data-caption="Image caption">
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
                <a href="" class="baguetteBox-gallery__item-addition"></a>
            <!-- Initialize Lightbox-gallery -->
                <script>
                    baguetteBox.run('.baguetteBox-gallery__block', {
                        animation: 'fadeIn'
                    });
                </script>
            <!-- / Initialize Lightbox-gallery -->
            </div>
            <div id="playroom" class="baguetteBox-gallery__block tab-pane">
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
                <a class="baguetteBox-gallery__item" href="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/1-7.jpg" data-caption="Image caption">
                    <div class="baguetteBox-gallery__item-title">Кухня 1</div>
                    <div class="baguetteBox-gallery__hover-bg"></div>
                    <img class="baguetteBox-gallery__img" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo.png" alt="First image">
                    <img class="baguetteBox-gallery__zoom" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo__zoom.png" alt="">
                </a>
                <a class="baguetteBox-gallery__item" href="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/1-8.jpg" data-caption="Image caption">
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
                <a href="" class="baguetteBox-gallery__item-addition"></a>
            <!-- Initialize Lightbox-gallery -->
                <script>
                    baguetteBox.run('.baguetteBox-gallery__block', {
                        animation: 'fadeIn'
                    });
                </script>
            <!-- / Initialize Lightbox-gallery -->
            </div>
            <div id="Wardrobes" class="baguetteBox-gallery__block tab-pane">
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
                <a class="baguetteBox-gallery__item" href="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/1-7.jpg" data-caption="Image caption">
                    <div class="baguetteBox-gallery__item-title">Кухня 1</div>
                    <div class="baguetteBox-gallery__hover-bg"></div>
                    <img class="baguetteBox-gallery__img" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo.png" alt="First image">
                    <img class="baguetteBox-gallery__zoom" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo__zoom.png" alt="">
                </a>
                <a class="baguetteBox-gallery__item" href="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/1-8.jpg" data-caption="Image caption">
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
                <a href="" class="baguetteBox-gallery__item-addition"></a>
            <!-- Initialize Lightbox-gallery -->
                <script>
                    baguetteBox.run('.baguetteBox-gallery__block', {
                        animation: 'fadeIn'
                    });
                </script>
            <!-- / Initialize Lightbox-gallery -->
            </div>
            <div id="hall" class="baguetteBox-gallery__block tab-pane">
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
                <a class="baguetteBox-gallery__item" href="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/1-7.jpg" data-caption="Image caption">
                    <div class="baguetteBox-gallery__item-title">Кухня 1</div>
                    <div class="baguetteBox-gallery__hover-bg"></div>
                    <img class="baguetteBox-gallery__img" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo.png" alt="First image">
                    <img class="baguetteBox-gallery__zoom" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo__zoom.png" alt="">
                </a>
                <a class="baguetteBox-gallery__item" href="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/1-8.jpg" data-caption="Image caption">
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
                <a href="" class="baguetteBox-gallery__item-addition"></a>
            <!-- Initialize Lightbox-gallery -->
                <script>
                    baguetteBox.run('.baguetteBox-gallery__block', {
                        animation: 'fadeIn'
                    });
                </script>
            <!-- / Initialize Lightbox-gallery -->
            </div>
            <div id="bedroom" class="baguetteBox-gallery__block tab-pane">
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
                <a class="baguetteBox-gallery__item" href="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/1-7.jpg" data-caption="Image caption">
                    <div class="baguetteBox-gallery__item-title">Кухня 1</div>
                    <div class="baguetteBox-gallery__hover-bg"></div>
                    <img class="baguetteBox-gallery__img" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo.png" alt="First image">
                    <img class="baguetteBox-gallery__zoom" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo__zoom.png" alt="">
                </a>
                <a class="baguetteBox-gallery__item" href="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/1-8.jpg" data-caption="Image caption">
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
                <a href="" class="baguetteBox-gallery__item-addition"></a>
            <!-- Initialize Lightbox-gallery -->
                <script>
                    baguetteBox.run('.baguetteBox-gallery__block', {
                        animation: 'fadeIn'
                    });
                </script>
            <!-- / Initialize Lightbox-gallery -->
            </div>
            <div id="kitchen" class="baguetteBox-gallery__block tab-pane active">
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
                <a class="baguetteBox-gallery__item" href="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/1-7.jpg" data-caption="Image caption">
                    <div class="baguetteBox-gallery__item-title">Кухня 1</div>
                    <div class="baguetteBox-gallery__hover-bg"></div>
                    <img class="baguetteBox-gallery__img" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo.png" alt="First image">
                    <img class="baguetteBox-gallery__zoom" src="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/gallery-photo__zoom.png" alt="">
                </a>
                <a class="baguetteBox-gallery__item" href="<?php echo get_template_directory_uri(); ?>/images/gallery-photo/1-8.jpg" data-caption="Image caption">
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
                <div class="mod_block-underline">Смотреть еще фото</div>
            </div>
            <script>
              $('#baguetteBox-gallery__view-more').click(function(e){
                e.preventDefault();
                for (var i=10;i<=18;i++){
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
<!--/ Our Furniture -->

<!-- Why should you choose us -->
    <div class="mebel-korpus__why-us">
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
<!--/ Why should you choose us -->

</div>

<?php //Преимущества нашей корпусной мебели
include"blocks/catalog-preimusch/catalog-preimusch.php";
?>
<script>
    document.getElementById('preimusch__title').innerHTML = "Преимущества нашей корпусной мебели";
    document.getElementById('preimusch__title').style.textAlign = "center";
</script>

</div>

<div class="mebel-korpus cs-max-width">

<?php //Как мы работаем
include"blocks/catalog-kak-mi-rab/catalog-kak-mi-rab.php";
?>

</div>

<?php //Получите подробную информацию
include"blocks/catalog-get-more-info/catalog-get-more-info.php"
?>
<script>
document.getElementById("get-more-info-full").className = "";
document.getElementById("get-more-info").className = "mebel-korpus__more-info";
</script>

<div class="mebel-korpus cs-max-width">

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

<?php //Честные отзывы наших клиентов
include"blocks/catalog-otzivi/catalog-otzivi.php";
?>
<!-- <script> //задаем ширину и выравнивание блоку "Честные отзывы"
document.getElementById("chestnie-otzivi").className += " mod_margin-auto cs-max-width";
</script> -->

<div class="mebel-korpus cs-max-width">

<!-- Смотрите видео о нас -->

<?php //Смотрите видео о нас
include"blocks/catalog-video-about-us/catalog-video-about-us.php";
?>

</div>
<!--/ mebel korpus -->

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
