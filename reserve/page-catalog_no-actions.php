<?php
/*
 Template Name: Каталог (без акций)
*/
?>

<?php //get_header();
include 'header.php';
?>  
       
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-catalog.css">
              
<!--breadcrumbs-->        
<div class="breadcrumb_bg container-fluid no-padding">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Главная</a></li>
            <li class="breadcrumb-item"><a href="#">Двери</a></li>
            <li class="breadcrumb-item active">Двери межкомнатные</li>
        </ol>
    </div>
</div>
<!--/breadcrumbs-->        

  

<!--header - II -->
<div class="cat-header">
    <div class="cat-header__container cs-max-width">
        <div class="mod_border-box cat-page-name">
            Каталог дверей
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
    function furnitureActive() {                                document.getElementById("furnitureActive").classList.toggle("active");
    }
</script>
<!--/active class in doors-->
            <div onclick="mejkomActive()" id="mejkomActive" class="cat-door-type cat-door-type__interior active">
                <img class="cat-door-type__img" src="<?php echo get_template_directory_uri(); ?>/images/catalog/cat-mejkom.png" alt="">Межкомнатные
            </div>
            <div onclick="vhodActive()" id="vhodActive" class="cat-door-type cat-door-type__entrance">
                <img class="cat-door-type__img" src="<?php echo get_template_directory_uri(); ?>/images/catalog/cat-vhod.png" alt="">Входные
            </div>
            <div onclick="furnitureActive()" id="furnitureActive" class="cat-door-type cat-door-type__furniture">
                <img class="cat-door-type__img" src="<?php echo get_template_directory_uri(); ?>/images/catalog/cat-furniture.png" alt="">Фурнитура
            </div>
        </div>
        <div class="mod_border-box">
            <input type="checkbox" name="cat-filter-btn" id="cat-filter-btn" checked>
            <label for="cat-filter-btn" class="cat-filter-btn" onclick="hideFilter()">
                <div class="cat-filter-btn__text-show">
                    Показать фильтр
                </div>
                <div class="cat-filter-btn__text-hide">
                    Скрыть фильтр
                </div>
                <i class="fa fa-angle-down cat-filter-btn-arrow_font" aria-hidden="true"></i>
                <i class="fa fa-angle-up cat-filter-btn-arrow_font" aria-hidden="true"></i>
            </label> 
        </div>
    </div>
    
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
    
</div>
<!--/header - II -->

    

<!--filter-->
   
    <!--hide-show filter-->
    <script>
        function hideFilter() {
          document.getElementById("cat-filter").classList.toggle("cat-filter-hide");
        }
    </script>
    <!--/hide-show filter-->
    
<div class="cat-filter container" id="cat-filter">
    <div class="filter-items">
        <div class="filter-item">
            <div class="filter-item__title">Бренд</div>
            <form action="/action_page.php">
                <select name="cars" class="filter-item-select">
                    <option value="volvo">Не выбрано</option>
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="fiat">Fiat</option>
                    <option value="audi">Audi</option>
                </select>
            </form>
        </div>

        <div class="filter-item">
            <div class="filter-item__title">Покрытие</div>
            <form action="/action_page.php">
                <select name="cars" class="filter-item-select">
                    <option value="volvo">Не выбрано</option>
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="fiat">Fiat</option>
                    <option value="audi">Audi</option>
                </select>
            </form>
        </div>

        <div class="filter-item">
            <div class="filter-item__title">Серия</div>
            <form action="/action_page.php">
                <select name="cars" class="filter-item-select">
                    <option value="volvo">Не выбрано</option>
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="fiat">Fiat</option>
                    <option value="audi">Audi</option>
                </select>
            </form>
        </div>

        <div class="filter-item">
            <div class="filter-item__title">Тип двери</div>
            <form action="/action_page.php">
                <select name="cars" class="filter-item-select">
                    <option value="volvo">Не выбрано</option>
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="fiat">Fiat</option>
                    <option value="audi">Audi</option>
                </select>
            </form>
        </div>

        <div class="filter-item">
            <div class="filter-item__title">Цвет</div>
            <form action="/action_page.php">
                <select name="cars" class="filter-item-select">
                    <option value="volvo">Не выбрано</option>
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="fiat">Fiat</option>
                    <option value="audi">Audi</option>
                </select>
            </form>
        </div>
    </div>
    <div class="reset-botton">
        Сбросить<i class="fa fa-times" aria-hidden="true"></i>
    </div>
    

</div>
<!--/filter-->

<!--sorting-->
<div class="cat-sort container">
    <div class="mod_space-around row no-gutters">
       
        <div class="cat-sort__by col-4">
            <div class="cat-sort-by-title">
                Сортировать по: 
            </div>
            <div class="cat-sort-by-name active">Названию 
                <div class="cat-sort-by__arrows">
                    <div class="cat-sort-by__arrow-up"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></div>
                    <div class="cat-sort-by__arrow-down"><i class="fa fa-long-arrow-down" aria-hidden="true"></i></div>
                </div>
            </div>
            <div class="cat-sort-by-new">Новизне 
                <div class="cat-sort-by__arrows">
                    <div class="cat-sort-by__arrow-up"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></div>
                    <div class="cat-sort-by__arrow-down"><i class="fa fa-long-arrow-down" aria-hidden="true"></i></div>
                </div>
            </div>
        </div>
        <div class="cat-sort__show col-3">
            <div class="cat-sort-total-cont">
                <div class="cat-sort__total">Всего:</div>
                <div class="cat-sort__total-result">49</div>
            </div>
            
            <div class="cat-sort-show-cont">
                <div class="cat-sort__show-show">Показать:</div>
                <div class="cat-sort__show-result-all">Все</div>
                <div class="cat-sort__show-result-12">12</div>
                <div class="cat-sort__show-result-36">36</div>
            </div>    
        </div>
        <div class="cat-sort-actions-new-cont col-3">
            <div class="cat-sort__actions-new-only cat-sort__actions-new-only-actions active">Только акции</div>
            <div class="cat-sort__actions-new-only cat-sort__actions-new-only-new">Только новинки</div>
        </div>
        <div class="cat-sort-pagination col-2">
            <div class="cat-sort-pagination-item active">1</div>
            <div class="cat-sort-pagination-item">2</div>
            <div class="cat-sort-pagination-item">3</div>
            <div class="cat-sort-pagination-item">4</div>
            <div class="cat-sort-pagination-between">...</div>
            <div class="cat-sort-pagination-item">15</div>
        </div>
               
    </div>
</div>
<!--/sorting-->

<!--catalog block-->

   
<div class="cat-block">
   
<!--catalog block - main block-->
    <div class="cat-block-main__row cs-max-width">

        <div class="">           
            <div class="cat-block-top__item-align">
                <div class="cat-block-top__item">
                    <div class="cat-block-top__item-align-center">
                        <div class="cat-block-top__label cat-block-top__label_new">Новинка</div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/catalog/cat-block-top__item-img-new.png" alt="" class="cat-block-top__item-img">
                        <div class="cat-block-top__item-title">
                            S29 Лиственница крем
                        </div>
                        <div class="cat-block-top__item-manufacturer">
                            Portas
                        </div>
                        <a class="cat-block-top__item-buy-a" href="<?php echo get_template_directory_uri(); ?>/psp-wp/двери-карточка-товара/">
                            <div class="cat-block-top__item-buy">
                                купить
                            </div>
                        </a>
                    </div>    
                </div>               
            </div>
        </div>        
        <div class="">           
            <div class="cat-block-top__item-align">
                <div class="cat-block-top__item">
                    <div class="cat-block-top__item-align-center">
                        <div class="cat-block-top__label cat-block-top__label_action">Акция</div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/catalog/cat-block-top__item-img-action.png" alt="" class="cat-block-top__item-img">
                        <div class="cat-block-top__item-title">
                            S29 Лиственница крем
                        </div>
                        <div class="cat-block-top__item-manufacturer">
                            Portas
                        </div>
                        <a class="cat-block-top__item-buy-a" href="<?php echo get_template_directory_uri(); ?>/psp-wp/двери-карточка-товара/">
                            <div class="cat-block-top__item-buy">
                                купить
                            </div>
                        </a>
                    </div>
                </div>            
            </div>    
        </div>
        <div class="">           
            <div class="cat-block-top__item-align">
                <div class="cat-block-top__item">
                    <div class="cat-block-top__item-align-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/catalog/cat-block-top__item-img-action.png" alt="" class="cat-block-top__item-img">
                        <div class="cat-block-top__item-title">
                            S29 Лиственница крем
                        </div>
                        <div class="cat-block-top__item-manufacturer">
                            Portas
                        </div>
                        <a class="cat-block-top__item-buy-a" href="<?php echo get_template_directory_uri(); ?>/psp-wp/двери-карточка-товара/">
                            <div class="cat-block-top__item-buy">
                                купить
                            </div>
                        </a>
                    </div>
                </div>            
            </div>    
        </div>
        <div class="">           
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
                        <a class="cat-block-top__item-buy-a" href="<?php echo get_template_directory_uri(); ?>/psp-wp/двери-карточка-товара/">
                            <div class="cat-block-top__item-buy">
                                купить
                            </div>
                        </a>
                    </div>    
                </div>               
            </div>
        </div>       
       
        <div class="">           
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
                        <a class="cat-block-top__item-buy-a" href="<?php echo get_template_directory_uri(); ?>/psp-wp/двери-карточка-товара/">
                            <div class="cat-block-top__item-buy">
                                купить
                            </div>
                        </a>
                    </div>    
                </div>               
            </div>
        </div>
        <div class="">           
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
                        <a class="cat-block-top__item-buy-a" href="<?php echo get_template_directory_uri(); ?>/psp-wp/двери-карточка-товара/">
                            <div class="cat-block-top__item-buy">
                                купить
                            </div>
                        </a>
                    </div>    
                </div>               
            </div>
        </div>             
        <div class="">           
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
                        <a class="cat-block-top__item-buy-a" href="<?php echo get_template_directory_uri(); ?>/psp-wp/двери-карточка-товара/">
                            <div class="cat-block-top__item-buy">
                                купить
                            </div>
                        </a>
                    </div>    
                </div>               
            </div>
        </div>             
        <div class="">           
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
                        <a class="cat-block-top__item-buy-a" href="<?php echo get_template_directory_uri(); ?>/psp-wp/двери-карточка-товара/">
                            <div class="cat-block-top__item-buy">
                                купить
                            </div>
                        </a>
                    </div>    
                </div>               
            </div>
        </div>
        
        <div class="">           
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
                        <a class="cat-block-top__item-buy-a" href="<?php echo get_template_directory_uri(); ?>/psp-wp/двери-карточка-товара/">
                            <div class="cat-block-top__item-buy">
                                купить
                            </div>
                        </a>
                    </div>    
                </div>               
            </div>
        </div>
        <div class="">           
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
                        <a class="cat-block-top__item-buy-a" href="<?php echo get_template_directory_uri(); ?>/psp-wp/двери-карточка-товара/">
                            <div class="cat-block-top__item-buy">
                                купить
                            </div>
                        </a>
                    </div>    
                </div>               
            </div>
        </div>             
        <div class="">           
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
                        <a class="cat-block-top__item-buy-a" href="<?php echo get_template_directory_uri(); ?>/psp-wp/двери-карточка-товара/">
                            <div class="cat-block-top__item-buy">
                                купить
                            </div>
                        </a>
                    </div>    
                </div>               
            </div>
        </div>             
        <div class="">           
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
                        <a class="cat-block-top__item-buy-a" href="<?php echo get_template_directory_uri(); ?>/psp-wp/двери-карточка-товара/">
                            <div class="cat-block-top__item-buy">
                                купить
                            </div>
                        </a>
                    </div>    
                </div>               
            </div>
        </div>      
    <!-- блоки для выравнивания элементов -->
        <div class="cat-block-top__item-align-help">
        </div>   
        <div class="cat-block-top__item-align-help">
        </div>
    <!--/ блоки для выравнивания элементов -->
    </div>
<!--/catalog block - main block-->

<!--pagination-->
    <div class="container mod_margin-top-50">
        <div class="cat-sort-pagination_bottom row">
            <div class="cat-sort-pagination col align-self-end">
                <div class="cat-sort-pagination-item active">1</div>
                <div class="cat-sort-pagination-item">2</div>
                <div class="cat-sort-pagination-item">3</div>
                <div class="cat-sort-pagination-item">4</div>
                <div class="cat-sort-pagination-between">...</div>
                <div class="cat-sort-pagination-item">15</div>
            </div>
        </div>
    </div>   
<!--/pagination-->
    
</div>   
  

<!--/catalog block-->

<!--text block-->
<div class="text-block container">
    <div class="text-block__preview">
        <div class="text-block__title">
            Межкомнатные и входные двери в Барановичах
        </div>
<!--block preview-->        
        <div class="text-block__text-body">
<p>Двери межкомнатные и ламинированные в Минске!</p>
<p>Двери межкомнатные являются неотъемлемой частью внутреннего пространства независимо от того, это офисное или жилое помещение. Современное производство готово предложить покупателю широкий ассортимент продукции способной подчеркнуть направление дизайна интерьера.
Межкомнатные двери - это одна из важнейших деталей помещения, которая одной из первых бросается в глаза.</p>
<p>Они должны выполнять две основные функции:
Эстетическая: гармонично дополнять общую концепцию в интерьере, соответствовать стилистическим и цветовым требованиям.
Практическая: обеспечивать разделение жилых и нежилых зон помещений, улучшать шумо и теплоизоляцию, создавая максимально комфортные условия.
Компания «Юркас» предлагает межкомнатные двери различной ценовой категории как отечественных, так и иностранных предприятий (раздвижные, массив, ПВХ, ламинированные и т.д) по всей Республике Беларусь и в городе Минск. У нас в магазине Вы сможете купить модели как класса эконом, универсальную, ПВХ или ламинированные, так и с необычным дизайнерским оформлением, элитные модели — при этом на всю линейку товаров предоставляются гарантии.
Межкомнатные двери – это одно из основных направлений деятельности нашей компании.</p>
        </div>
<!--/block preview-->
    </div>
<!--read more-->    
    <div class="text-block__read-more">
    <!--read more - bootstrap part-->
        <div id="accordion" role="tablist" aria-multiselectable="true">
            <div class="card">
            <!--read more text-->   
                <div id="collapseOne" class="collapse hide" role="tabpanel" aria-labelledby="headingOne">
                    <div class="card-block">
<p>Мы представляем разнообразие доступных цветов и материалов для отделки. Это прекрасная возможность для Вас выбрать подходящий товар. Специалисты и консультанты нашей компании всегда готовы проконсультировать и помочь при выборе ламинированной двери или другой интересующей двери по вашему запросу.</p>

<p>Мы максимально упростили процесс приобретения товара для наших клиентов, постоянно расширяя сеть собственных и дилерских салонов не только в городе Минск, но и во всех областных центрах и крупных региональных городах страны.
В наших магазинах вы найдете:
Профессиональных и приветливых консультантов, которые помогут вам определиться с выбором межкомнатной двери, чтобы она соответствовала интерьеру вашего дома;</p>

<p>Большое количество постоянно обновляющихся коллекций и моделей (раздвижные, массив, ламинированные, ПВХ и т.д.), идеально сочетающих в себе изящный стиль и гарантии качества от зарубежных и отечественных производителей.
Полная информационная поддержка — каталоги, образцы конструктива, а также возможность увидеть представленные в интернет-каталоге модели в наших салонах;
Компания Юркас предлагает всю линейку услуг, которая может Вам понадобиться (от покупки и до установки). Мы уверенно заявляем, что знаем в своем деле толк – работая на рынке межкомнатных дверей в течение многих лет, успели зарекомендовать себя как добросовестный и честный партнер, готовый в краткие сроки решать поставленные задачи.</p>
<p>Двери раздвижные
Раздвижные двери максимально функциональны и очень удобны в использовании, позволят сэкономить место в квартире. Они представляют возможность визуально увеличить пространство вашей квартиры, а также помогают в его трансформации. Элегантный дизайн раздвижных конструкций придаст интерьеру современный вид и изящность. Раздвижные перегородки дают возможность применять нестандартные решения при проектировании интерьера помещения. Ламинированные раздвижные системы в большинстве случаев применяются в качестве перегородки между кухней и гостиной.
Многоуровневый контроль и отслеживание современных тенденций позволяют нам предлагать своим клиентам оптимальные цены на качественный товар, соответствующий всем требованиям жизни современного человека.</p>
                    </div>
                </div>
            <!--/read more text-->    
            <!--read more button-->   
                <div class="card-header" role="tab" id="headingOne">
                    <h5 class="mb-0">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="collapsed">
                           
                            <div class="cat__read-more-text">Читать далее</div>      
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
<!--/text block-->

<!--purchase process-->
<div class="purchase-process container">
    <!--purchase process - bootstrap-->
        <!-- Nav tabs -->
    <ul class="row no-gutters nav nav-tabs" role="tablist">
        
        <li class="col nav-item">
            <a class="nav-link active" data-toggle="tab" href="#home" role="tab">                
                <div class="media">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/catalog/purchase-process-busket.png" alt="" class="d-flex mr-2">
                    <div class="media-body">
                        <div class="purchase-process__tab-title">
                            Как сделать заказ
                        </div>
                        <div class="purchase-process__tab-boby">
                            Поиск и выбор товара
                        </div>
                    </div>
                </div> 
                <div class="purchase-process__tab1-stick-left"></div>
                <div class="purchase-process__tab1-stick-right"></div>
            </a>
        </li>        
        
        <li class="col nav-item">
            <a class="nav-link" data-toggle="tab" href="#profile" role="tab">                
                <div class="media">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/catalog/purchase-process-card.png" alt="" class="d-flex mr-2">
                    <div class="media-body">
                        <div class="purchase-process__tab-title">
                            Как сделать заказ
                        </div>
                        <div class="purchase-process__tab-boby">
                            Поиск и выбор товара
                        </div>
                    </div>
                </div>            
                <div class="purchase-process__tab2-stick-left"></div>
                <div class="purchase-process__tab2-stick-right"></div>
            </a>
        </li>        
        <li class="col nav-item">
            <a class="nav-link" data-toggle="tab" href="#messages" role="tab">                
                <div class="media">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/catalog/purchase-process-deliver.png" alt="" class="d-flex mr-2">
                    <div class="media-body">
                        <div class="purchase-process__tab-title">
                            Как сделать заказ
                        </div>
                        <div class="purchase-process__tab-boby">
                            Поиск и выбор товара
                        </div>
                    </div>
                </div>
                <div class="purchase-process__tab3-stick-left"></div>
                <div class="purchase-process__tab3-stick-right"></div>            
            </a>
        </li>        
        <li class="col nav-item">
            <a class="nav-link" data-toggle="tab" href="#settings" role="tab">                
                <div class="media">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/catalog/purchase-process-ali.png" alt="" class="d-flex mr-2">
                    <div class="media-body">
                        <div class="purchase-process__tab-title">
                            Как сделать заказ
                        </div>
                        <div class="purchase-process__tab-boby">
                            Поиск и выбор товара
                        </div>
                    </div>
                </div>
                <div class="purchase-process__tab4-stick-left"></div>
                <div class="purchase-process__tab4-stick-right"></div>            
            </a>
        </li>
    </ul>

        <!-- Tab panes -->
    <div class="tab-content">
        <div class="fade tab-pane active show" id="home" role="tabpanel">
            <div class="content">
                <div class="row">
                    <div class="col"><img src="<? echo get_template_directory_uri(); ?>/images/catalog/purchase-process-content-call.png" alt=""></div>
                    <div class="col"><img src="<?php echo get_template_directory_uri(); ?>/images/catalog/purchase-process-content-measure.png" alt=""></div>
                    <div class="col"><img src="<?php echo get_template_directory_uri(); ?>/images/catalog/purchase-process-content-set.png" alt=""></div>
                    <div class="col"><img src="<?php echo get_template_directory_uri(); ?>/images/catalog/purchase-process-content-enjoy.png" alt=""></div>
                </div>
            </div>
        </div>
        <div class="fade tab-pane" id="profile" role="tabpanel">
            <div class="content">
                <div class="row">
                    <div class="col"><img src="<? echo get_template_directory_uri(); ?>/images/catalog/purchase-process-content-call.png" alt=""></div>
                    <div class="col"><img src="<?php echo get_template_directory_uri(); ?>/images/catalog/purchase-process-content-measure.png" alt=""></div>
                    <div class="col"><img src="<?php echo get_template_directory_uri(); ?>/images/catalog/purchase-process-content-set.png" alt=""></div>
                    <div class="col"><img src="<?php echo get_template_directory_uri(); ?>/images/catalog/purchase-process-content-enjoy.png" alt=""></div>
                </div>
            </div>
        </div>
        <div class="fade tab-pane" id="messages" role="tabpanel">
            <div class="content">
                <div class="row">
                    <div class="col"><img src="<? echo get_template_directory_uri(); ?>/images/catalog/purchase-process-content-call.png" alt=""></div>
                    <div class="col"><img src="<?php echo get_template_directory_uri(); ?>/images/catalog/purchase-process-content-measure.png" alt=""></div>
                    <div class="col"><img src="<?php echo get_template_directory_uri(); ?>/images/catalog/purchase-process-content-set.png" alt=""></div>
                    <div class="col"><img src="<?php echo get_template_directory_uri(); ?>/images/catalog/purchase-process-content-enjoy.png" alt=""></div>
                </div>
            </div>
        </div>
        <div class="fade tab-pane" id="settings" role="tabpanel">
            <div class="content">
                <div class="row">
                    <div class="col"><img src="<? echo get_template_directory_uri(); ?>/images/catalog/purchase-process-content-call.png" alt=""></div>
                    <div class="col"><img src="<?php echo get_template_directory_uri(); ?>/images/catalog/purchase-process-content-measure.png" alt=""></div>
                    <div class="col"><img src="<?php echo get_template_directory_uri(); ?>/images/catalog/purchase-process-content-set.png" alt=""></div>
                    <div class="col"><img src="<?php echo get_template_directory_uri(); ?>/images/catalog/purchase-process-content-enjoy.png" alt=""></div>
                </div>
            </div>   
        </div>
    </div>
    <!--/purchase process - bootstrap-->    
</div>
<!--/purchase process-->

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
