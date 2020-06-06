<?php

// Add header menu
add_action('init', function () {
  register_nav_menu( 'site_header', __( 'Cabecera de la página', 'theme-slug' ) );
});

// Enqueue styles
add_action('wp_enqueue_scripts', function () {
	wp_enqueue_style( 'mycustomtheme-style', get_stylesheet_uri());
	wp_enqueue_style( 'dm-sans', "https://fonts.googleapis.com/css2?family=DM+Sans&display=swap");
});

add_theme_support( 'custom-logo' );

// Walker style override
if ( !function_exists( 'MyCustomTheme_comment_template' ) ) {

    function MyCustomTheme_comment_template($comment, $args, $depth)
    { 
    	?> 
       	<div id="comment-<?php comment_ID();?>" <?php comment_class( $comment->has_children ? 'parent' : '', $comment ); ?>>

			<article id="div-comment-<?php comment_ID(); ?>" class="comment-container">

				<div class="comment-author-img">
					<?php if ( 0 != $args['avatar_size'] ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
				</div>

				<div class="comment-body">

					<div class="comment-meta">
						<span class="comment-author">
							<strong>
								<?php echo get_comment_author_link( $comment ) ?>
							</strong>
						</span>
						<span class="comment-datetime">
							<i class="fa fa-clock-o"></i> 
							<time datetime="<?php comment_time( 'c' ); ?>">
								<?php printf( __( '%1$s at %2$s' ), get_comment_date( '', $comment ), get_comment_time() ); ?>
							</time>
						</span>
					</div>

					<div class="comment-text">
						<?php comment_text(); ?>
					</div>

					<?php comment_reply_link( array_merge( $args, array(
						'add_below' => 'div-comment',
						'depth'     => $depth,
						'max_depth' => $args['max_depth'],
						'before'    => '<div class="reply">',
						'after'     => '</div>'
					) ) ); ?>

				</div>

			</article>

		</div> 

       	<?php 
    }
} 