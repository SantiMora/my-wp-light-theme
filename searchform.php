<form id="searchform" class="searchform" method="get" action="<?php echo home_url('/'); ?>">
    <input type="text" name="s" placeholder="<?=__( 'Search:', 'twentytwenty' )?>" value="<?php the_search_query();?>">
    <button type="submit"><i class="fa fa-search"></i></button>
</form>