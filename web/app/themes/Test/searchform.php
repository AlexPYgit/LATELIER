<form class="form-inline my-2 " action="<?php esc_url(home_url().'/') ?>">
    <div class="autoComplete_wrapper mb-4 ">
        <input id="autoComplete" type="search" name="s" value="<?php get_search_query() ?>" dir="ltr" spellcheck=false autocorrect="off" autocomplete="off" autocapitalize="off" maxlength="2048" tabindex="1">
    </div>
    <button type="submit" class="btn btn-success ">Rechercher</button> 
</form>