<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" >
    <div class="form-group">
        <label class="form-label" for="s">Поиск: </label>
        <div class="d-flex align-items-center">
            <input type="text" value="<?php echo get_search_query() ?>" name="s" id="s" class="form-control mt-0"/>
            <input type="submit" id="searchsubmit" value="найти" class=" m-0 form-btn--search"/>
        </div>
    </div>
</form>
