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
    </div>