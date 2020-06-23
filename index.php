<?php get_header(); ?>

<main id="site-content" role="main" class="container">

	<?php 

	$archive_title    = '';
	
	if ( is_search() ) {
		global $wp_query;

		$archive_title = sprintf(
			'%1$s %2$s',
			'<i class="fa fa-search"></i>',
			'&ldquo;' . get_search_query() . '&rdquo;'
		);

	} elseif ( ! is_home() ) {
		$archive_title = single_term_title('', false);
	}

	if ( $archive_title ) : 

		global $wp_query;?>

		<header class="archive-title">
			<?php if ( $archive_title ) { ?>
				<h1><?php echo wp_kses_post( $archive_title ); ?></h1>
			<?php } ?>
    		
    	</header>
    	<div class="post-count">
			<small><?=$wp_query->found_posts?> <?=($wp_query->found_posts == 1 ? "post encontrado" : "posts encontrados");?></small>
		</div>

	<?php endif;

	get_search_form();

	if ( have_posts() ) :?>

		<div class="post-list">
        <?php while ( have_posts() ) : the_post();
        	get_template_part("template-parts/post-preview");
        endwhile; ?>
    	</div>

    	<div class="navigation-links">
    		<div class="newer-posts-link">
    			<?php previous_posts_link();?>
    		</div>
    		<div class="older-posts-link">
    			<?php next_posts_link();?>
    		</div>
    	</div>
    <?php endif; ?>
</main>

<?php get_footer(); ?>