<?php get_header(); ?>

<main id="site-content" role="main">

	<?php if (have_posts()) :
 
        while (have_posts()) : the_post();?>

            <article id="post-<?php the_ID();?>" <?php post_class("single-post");?>>

            	<?php if (! is_page()) :?>
        		<header class="post-title">
            		<h1 ><?php the_title();?></h1>
            	</header>
            	<div class="post-meta">
            		<small><i class="fa fa-calendar-o"></i> <time><?=the_date()?></time></small>
            		<small><i class="fa fa-th"></i> <?=the_category(', ', 'single')?></small>
            		<?php if (comments_open() || get_comments_number()) :?>
            		<small><a href="#comments-section-anchor"><i class="fa fa-comments"></i> <?php comments_number();?></a></small>
            		<?php endif;?>
            	</div>
            	<?php endif;?>

                <div class="post-content">
                    <?php the_content();?>
                </div>

                <?php if (has_tag()): ?>
                <div class="post-footer">
                	<div class="post-tags">
                		<?php the_tags("", "");?>
                	</div>
                </div>
            	<?php endif;?>

                <?php if (comments_open() || get_comments_number()) :
	            	comments_template();
	            endif; ?>

            </article>
            
        <?php endwhile;
    endif; ?>
</main>

<?php get_footer(); ?>
