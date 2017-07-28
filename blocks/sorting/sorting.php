<!--sorting-->
<div class="cat-sort container">
    <div class="mod_space-around row no-gutters">
       
        <div class="cat-sort__by col-4">
            <div class="cat-sort-by-title">
                Сортировать по: 
            </div>
            <div id="cat-sort-by-name" class="cat-sort-by-name active" onclick="catSortByName()">Названию 
                <div class="cat-sort-by__arrows">
                    <div class="cat-sort-by__arrow-up"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></div>
                    <div class="cat-sort-by__arrow-down"><i class="fa fa-long-arrow-down" aria-hidden="true"></i></div>
                </div>
            </div>
            <div id="cat-sort-by-new" class="cat-sort-by-new" onclick="catSortByNew()">Новизне 
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
                <div id="cat-sort__show-result-all" class="cat-sort__show-result-all active" onclick="catSortShowResultAll()">Все</div>
                <div id="cat-sort__show-result-12" class="cat-sort__show-result-12" onclick="catSortShowResult12()">12</div>
                <div id="cat-sort__show-result-36" class="cat-sort__show-result-36" onclick="catSortShowResult36()">36</div>
            </div>    
        </div>
        <div class="cat-sort-actions-new-cont col-3">
            <div id="cat-sort__actions-new-only-actions" class="cat-sort__actions-new-only cat-sort__actions-new-only-actions active" onclick="catSortActionsNewOnlyActions()">Только акции</div>
            <div id="cat-sort__actions-new-only-new" class="cat-sort__actions-new-only cat-sort__actions-new-only-new" onclick="catSortActionsNewOnlyNew()">Только новинки</div>
        </div>
        <div class="cat-sort-pagination col-2">
            <div class="cat-sort-pagination-item active">1</div>
            <div class="cat-sort-pagination-item">2</div>
            <div class="cat-sort-pagination-item">3</div>
            <div class="cat-sort-pagination-item">4</div>
            <div class="cat-sort-pagination-between">...</div>
            <div class="cat-sort-pagination-item">15</div>
        </div>
              
        <script>
             function catSortByName() {
               document.getElementById("cat-sort-by-name").classList.toggle("active");
            }
             function catSortByNew() {
               document.getElementById("cat-sort-by-new").classList.toggle("active");
            }
             function catSortShowResultAll() {
               document.getElementById("cat-sort__show-result-all").classList.toggle("active");
            }
             function catSortShowResult12() {
               document.getElementById("cat-sort__show-result-12").classList.toggle("active");
            }
             function catSortShowResult36() {
               document.getElementById("cat-sort__show-result-36").classList.toggle("active");
            }
             function catSortActionsNewOnlyActions() {
               document.getElementById("cat-sort__actions-new-only-actions").classList.toggle("active");
            }
             function catSortActionsNewOnlyNew() {
               document.getElementById("cat-sort__actions-new-only-new").classList.toggle("active");
            }

        </script>
               
    </div>
</div>
<!--/sorting-->