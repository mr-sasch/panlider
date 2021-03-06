<?php
/*
 Template Name: Отзывы
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
            <li class="breadcrumb-item"><a href="#">Компания</a></li>
            <li class="breadcrumb-item active">Отзывы</li>
        </ol>
    </div>
</div>
<!--/breadcrumbs-->

<!--Review / Give feedback-->
<div class="review review__row">
    <div class="review__container cs-max-width">
        <div class="review__title">
            Отзывы
        </div>
        <div class="review__botton-block" data-toggle="modal" data-target="#ostavit-otziv" data-whatever="@mdo">
            <div class="review__botton">Оставить отзыв</div>
        </div>
    </div>
</div>
<!--/Review / Give feedback-->

<!--Review items-->
    <!--Review single item-->
<div class="review-item review-item__row">
    <div class="review-item__container cs-max-width">
        <div class="review-item-block">
            <div class="review-item-block__top-row">
            <!--Graduation data-->
                <div class="review-item-block__top-row-left">
                    <div class="review-item-block__graduation-data">
                        <div class="review-item-block__graduation-data-author">
                            Ирина Ивановна
                        </div>
                        <div class="review-item-block__graduation-data-contract">
                             Договор № 444-0952Н/БГ/ББ/141116
                        </div>
                        <div class="review-item-block__graduation-data-date">
                            13 января 2017 — 12:39
                        </div>
                    </div>
                </div>
            <!--/Graduation data-->
            <!--Vote stars-->
                <div class="review-item-block__top-row-right">

                    <div class="vote-stars vote-stars2">
                        <a id="starr1" class="star2" href="#star"><i class="vote-stars__star fa fa-star" aria-hidden="true"></i></a>
                        <a id="starr2" class="star2" href="#star"><i class="vote-stars__star fa fa-star" aria-hidden="true"></i></a>
                        <a id="starr3" class="star2" href="#star"><i class="vote-stars__star fa fa-star" aria-hidden="true"></i></a>
                        <a id="starr4" class="star2" href="#star"><i class="vote-stars__star fa fa-star" aria-hidden="true"></i></a>
                        <a id="starr5" class="star2 active" href="#star"><i class="vote-stars__star fa fa-star" aria-hidden="true"></i></a>
                    </div>

                    <style>
                        .vote-stars2 {
                            direction: rtl;
                        }
                        .star2 {
                            color: #bdbdbd;
                        }
                        .star2:hover,
                        .star2:hover ~ a {
                            color: #ffbe00;
                        }

                        .active,
                        .star2.active ~ a {
                            color: #ffbe00;
                        }
                    </style>

                    <script>
                        document.getElementById("starr1").onclick = active1;
                        function active1() {
                            var removeActive = document.getElementsByClassName("star2 active")[0];
                            removeActive.className = "star2";
                            var addActive = document.getElementById("starr1");
                            addActive.className += " active";
                        }
                        document.getElementById("starr2").onclick = active2;
                        function active2() {
                            var removeActive = document.getElementsByClassName("star2 active")[0];
                            removeActive.className = "star2";
                            var addActive = document.getElementById("starr2");
                            addActive.className += " active";
                        }
                        document.getElementById("starr3").onclick = active3;
                        function active3() {
                            var removeActive = document.getElementsByClassName("star2 active")[0];
                            removeActive.className = "star2";
                            var addActive = document.getElementById("starr3");
                            addActive.className += " active";
                        }
                        document.getElementById("starr4").onclick = active4;
                        function active4() {
                            var removeActive = document.getElementsByClassName("star2 active")[0];
                            removeActive.className = "star2";
                            var addActive = document.getElementById("starr4");
                            addActive.className += " active";
                        }
                        document.getElementById("starr5").onclick = active5;
                        function active5() {
                            var removeActive = document.getElementsByClassName("star2 active")[0];
                            removeActive.className = "star2";
                            var addActive = document.getElementById("starr5");
                            addActive.className += " active";
                        }
                    </script>
                </div>
            <!--/Vote stars-->
            </div>
        <!--Content-->
            <div class="review-item-block__title">
                Мастера своего дела!
            </div>
        <!--/Content-->
            <div class="review-item-block__content">
Очень хорошие ребята! Добросовестно относятся к своей работе, старательные, профессионалы, мастера своего дела! Молодцы! Благодарим, Ирена Ивановна, за высокую оценку компании «Окнаград», в частности, профессиональных качеств наших сотрудников! Было приятно выполнить заказ для Вас. Спасибо за доверие и выбор компании «Окнаград»!<br>
Магазину требуются продавцы-консультанты с опытом работы со строительными материалами.
            </div>
        </div>

    </div>
</div>
    <!--/Review single item-->

<div class="review-item review-item__row">
    <div class="review-item__container cs-max-width">
        <div class="review-item-block">
            <div class="review-item-block__top-row">
            <!--Graduation data-->
                <div class="review-item-block__top-row-left">
                    <div class="review-item-block__graduation-data">
                        <div class="review-item-block__graduation-data-author">
                            Ирина Ивановна
                        </div>
                        <div class="review-item-block__graduation-data-contract">
                             Договор № 444-0952Н/БГ/ББ/141116
                        </div>
                        <div class="review-item-block__graduation-data-date">
                            13 января 2017 — 12:39
                        </div>
                    </div>
                </div>
            <!--/Graduation data-->
            <!--Vote stars-->
                <div class="review-item-block__top-row-right">
                    <div class="vote-stars">
                        <i class="vote-stars__star fa fa-star" aria-hidden="true"></i>
                        <i class="vote-stars__star fa fa-star" aria-hidden="true"></i>
                        <i class="vote-stars__star fa fa-star" aria-hidden="true"></i>
                        <i class="vote-stars__star fa fa-star" aria-hidden="true"></i>
                        <i class="vote-stars__star fa fa-star" aria-hidden="true"></i>
                    </div>
                </div>
            <!--/Vote stars-->
            </div>
        <!--Content-->
            <div class="review-item-block__title">
                Мастера своего дела!
            </div>
        <!--/Content-->
            <div class="review-item-block__content">
Очень хорошие ребята! Добросовестно относятся к своей работе, старательные, профессионалы, мастера своего дела! Молодцы! Благодарим, Ирена Ивановна, за высокую оценку компании «Окнаград», в частности, профессиональных качеств наших сотрудников! Было приятно выполнить заказ для Вас. Спасибо за доверие и выбор компании «Окнаград»!<br>
Магазину требуются продавцы-консультанты с опытом работы со строительными материалами.
            </div>
        </div>

    </div>
</div>

<div class="review-item review-item__row">
    <div class="review-item__container cs-max-width">
        <div class="review-item-block">
            <div class="review-item-block__top-row">
            <!--Graduation data-->
                <div class="review-item-block__top-row-left">
                    <div class="review-item-block__graduation-data">
                        <div class="review-item-block__graduation-data-author">
                            Ирина Ивановна
                        </div>
                        <div class="review-item-block__graduation-data-contract">
                             Договор № 444-0952Н/БГ/ББ/141116
                        </div>
                        <div class="review-item-block__graduation-data-date">
                            13 января 2017 — 12:39
                        </div>
                    </div>
                </div>
            <!--/Graduation data-->
            <!--Vote stars-->
                <div class="review-item-block__top-row-right">
                    <div class="vote-stars">
                        <i class="vote-stars__star fa fa-star" aria-hidden="true"></i>
                        <i class="vote-stars__star fa fa-star" aria-hidden="true"></i>
                        <i class="vote-stars__star fa fa-star" aria-hidden="true"></i>
                        <i class="vote-stars__star fa fa-star" aria-hidden="true"></i>
                        <i class="vote-stars__star fa fa-star" aria-hidden="true"></i>
                    </div>
                </div>
            <!--/Vote stars-->
            </div>
        <!--Content-->
            <div class="review-item-block__title">
                Мастера своего дела!
            </div>
        <!--/Content-->
            <div class="review-item-block__content">
Очень хорошие ребята! Добросовестно относятся к своей работе, старательные, профессионалы, мастера своего дела! Молодцы! Благодарим, Ирена Ивановна, за высокую оценку компании «Окнаград», в частности, профессиональных качеств наших сотрудников! Было приятно выполнить заказ для Вас. Спасибо за доверие и выбор компании «Окнаград»!<br>
Магазину требуются продавцы-консультанты с опытом работы со строительными материалами.
            </div>
        </div>

    </div>
</div>

<div class="review-item review-item__row">
    <div class="review-item__container cs-max-width">
        <div class="review-item-block">
            <div class="review-item-block__top-row">
            <!--Graduation data-->
                <div class="review-item-block__top-row-left">
                    <div class="review-item-block__graduation-data">
                        <div class="review-item-block__graduation-data-author">
                            Ирина Ивановна
                        </div>
                        <div class="review-item-block__graduation-data-contract">
                             Договор № 444-0952Н/БГ/ББ/141116
                        </div>
                        <div class="review-item-block__graduation-data-date">
                            13 января 2017 — 12:39
                        </div>
                    </div>
                </div>
            <!--/Graduation data-->
            <!--Vote stars-->
                <div class="review-item-block__top-row-right">
                    <div class="vote-stars">
                        <i class="vote-stars__star fa fa-star" aria-hidden="true"></i>
                        <i class="vote-stars__star fa fa-star" aria-hidden="true"></i>
                        <i class="vote-stars__star fa fa-star" aria-hidden="true"></i>
                        <i class="vote-stars__star fa fa-star" aria-hidden="true"></i>
                        <i class="vote-stars__star fa fa-star" aria-hidden="true"></i>
                    </div>
                </div>
            <!--/Vote stars-->
            </div>
        <!--Content-->
            <div class="review-item-block__title">
                Мастера своего дела!
            </div>
        <!--/Content-->
            <div class="review-item-block__content">
Очень хорошие ребята! Добросовестно относятся к своей работе, старательные, профессионалы, мастера своего дела! Молодцы! Благодарим, Ирена Ивановна, за высокую оценку компании «Окнаград», в частности, профессиональных качеств наших сотрудников! Было приятно выполнить заказ для Вас. Спасибо за доверие и выбор компании «Окнаград»!<br>
Магазину требуются продавцы-консультанты с опытом работы со строительными материалами.
            </div>
        </div>

    </div>
</div>

<div class="review-item review-item__row">
    <div class="review-item__container cs-max-width">
        <div class="review-item-block">
            <div class="review-item-block__top-row">
            <!--Graduation data-->
                <div class="review-item-block__top-row-left">
                    <div class="review-item-block__graduation-data">
                        <div class="review-item-block__graduation-data-author">
                            Ирина Ивановна
                        </div>
                        <div class="review-item-block__graduation-data-contract">
                             Договор № 444-0952Н/БГ/ББ/141116
                        </div>
                        <div class="review-item-block__graduation-data-date">
                            13 января 2017 — 12:39
                        </div>
                    </div>
                </div>
            <!--/Graduation data-->
            <!--Vote stars-->
                <div class="review-item-block__top-row-right">
                    <div class="vote-stars">
                        <i class="vote-stars__star fa fa-star" aria-hidden="true"></i>
                        <i class="vote-stars__star fa fa-star" aria-hidden="true"></i>
                        <i class="vote-stars__star fa fa-star" aria-hidden="true"></i>
                        <i class="vote-stars__star fa fa-star" aria-hidden="true"></i>
                        <i class="vote-stars__star fa fa-star" aria-hidden="true"></i>
                    </div>
                </div>
            <!--/Vote stars-->
            </div>
        <!--Content-->
            <div class="review-item-block__title">
                Мастера своего дела!
            </div>
        <!--/Content-->
            <div class="review-item-block__content">
Очень хорошие ребята! Добросовестно относятся к своей работе, старательные, профессионалы, мастера своего дела! Молодцы! Благодарим, Ирена Ивановна, за высокую оценку компании «Окнаград», в частности, профессиональных качеств наших сотрудников! Было приятно выполнить заказ для Вас. Спасибо за доверие и выбор компании «Окнаград»!<br>
Магазину требуются продавцы-консультанты с опытом работы со строительными материалами.
            </div>
        </div>

    </div>
</div>

<!--More reviews-->
<div class="more-reviews">
    <div class="more-reviews__button">
        <a href="#">Смотреть еще отзывы</a>
    </div>
</div>
<!--/More reviews-->

<!--/Review items-->

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
