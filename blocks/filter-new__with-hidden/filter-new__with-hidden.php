<!--filter-->   

    <div class="cat-filter dveri-pvh container" id="cat-filter">
        <div class="filter-items">
            <div class="filter-item filter-item__pvh filter-item_white active" id="pvh-dveri-pvh" onclick="pvhdveriActive()">
                ПВХ
            </div>
            <div class="cat-filter__grey">
                <div class="filter-item filter-item__metall filter-item_white" id="metall-dveri-pvh" onclick="metalldveriActive()">
                    МЕТАЛЛИЧЕСКИЕ
                    <div class="filter-item__metall-arrow"></div>
                </div>

                <div class="filter-item filter-item__grey-cell filter-item__nestandart filter-item_white active" id="nestandart-dveri-pvh" onclick="nestandartdveriActive()">
                    Нестандарт
                </div>

                <div class="filter-item filter-item__light-border">
                    <div class="filter-item filter-item__grey-cell filter-item__standart filter-item_white" id="standart-dveri-pvh" onclick="standartdveriActive()">
                        Стандарт
                    </div>
                    <form class="filter-item filter-item__grey-cell filter-item__grey-cell-form" action="/action_page.php">
                        <select name="cars" class="filter-item-select">
                            <option value="volvo">Все</option>
                            <option value="volvo">Уличные</option>
                            <option value="volvo">Подъездные</option>
                        </select>
                    </form>
                </div>            
            </div>
            <script>        
                function pvhdveriActive() {
                   document.getElementById("pvh-dveri-pvh").classList.toggle("active");
                }
                function metalldveriActive() {
                   document.getElementById("metall-dveri-pvh").classList.toggle("active");
                }      
                function nestandartdveriActive() {
                   document.getElementById("nestandart-dveri-pvh").classList.toggle("active");
                }      
                function standartdveriActive() {
                   document.getElementById("standart-dveri-pvh").classList.toggle("active");
                }    
            </script>
        </div>
        
        <!-- Сворачивающаяся часть -->
        <div class="cat-filter-hidden">
           
            <div id="cat-filter-hidden__title" class="cat-filter-hidden__title" onclick="filterHide()">
                <div class="cat-filter-hidden__show">
                    <i class="fa fa-long-arrow-down cat-filter-hidden__show-i" aria-hidden="true"></i> Показать дополнительные параметры
                </div>
                <div class="cat-filter-hidden__hide">
                    <i class="fa fa-long-arrow-up cat-filter-hidden__hide-i" aria-hidden="true"></i> Скрыть дополнительные параметры
                </div>
            </div>
            
            <div id="cat-filter-hidden__params" class="cat-filter-hidden__params cat-filter-hidden__params-hide">
               
                <form class="cat-filter-hidden__params-filter" action="/action_page.php">

                    <div class="cat-filter-hidden__form">
                        <div class="cat-filter-hidden__form-title">Бренд</div>

                        <select name="doors-standard__brands" class="cat-filter-hidden__select">
                            <option value="metallur">по умолчанию</option>
                            <option value="metallur">МеталЮр</option>
                            <option value="metallur">МеталЮр - 1</option>
                            <option value="metallur">МеталЮр - 2</option>
                        </select>

                    </div>

                    <div class="cat-filter-hidden__form">
                        <div class="cat-filter-hidden__form-title">Серия</div>

                        <select name="doors-standard__serie" class="cat-filter-hidden__select">
                            <option value="massiv-duba">по умолчанию</option>
                            <option value="massiv-duba">Массив дуба</option>
                            <option value="massiv-duba">Массив дуба - 1</option>
                            <option value="massiv-duba">Массив дуба - 2</option>
                        </select>

                    </div>
                    
                    <div class="cat-filter-hidden__params-reset">
                        <input class="cat-filter-hidden__params-reset-input" type="reset" value="Сбросить"><i class="fa fa-times cat-filter-hidden__params-reset-i" aria-hidden="true"></i>
                    </div>
                    
                    <script>
                        function filterHide() {
                            document.getElementById("cat-filter-hidden__params").classList.toggle("cat-filter-hidden__params-hide");
                            document.getElementById("cat-filter-hidden__title").classList.toggle("title-replace");
                        }
                    </script>

                </form>
                
            </div>
            
            
            
            
            
        </div>
        
        
        <!--/ Сворачивающаяся часть -->
        
    </div>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/blocks/filter-new__with-hidden/filter-new__with-hidden.css">
<!--/filter-->