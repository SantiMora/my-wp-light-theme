
<article id="post-<?php the_ID();?>" <?php post_class("post-preview");?> onclick="window.location='<?=get_the_permalink()?>';">

	<h2><?php the_title();?></h2>

    <div class="post-meta">
		<small><i class="fa fa-calendar-o"></i> <time><?=get_the_date();?></time></small>
		<small><i class="fa fa-th"></i> <?=the_category(', ', 'single')?></small>
		<?php if (comments_open() || get_comments_number()) :?>
		<small>
			<i class="fa fa-comments"></i> 
			<a href="<?=get_the_permalink()?>#comments-section-anchor">&nbsp;<?=get_comments_number();?>&nbsp;</a>
		</small>
		<?php endif;?>
	</div>

    <div class="post-content-preview">
        <?php the_excerpt();?>
    </div>

    <?php if (has_tag()): ?>
    <div class="post-footer">
    	<div class="post-tags">
    		<?php the_tags("", "");?>
    	</div>
    </div>
	<?php endif; ?>

</article>
