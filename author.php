<?php
/**
 * Author template.
 *
 * @package B4
 */
?>
<?php get_header(); ?>

<div class="sleeve_main">
	<?php if ( b4_user_can_post() && !is_archive() ) : ?>
		<?php locate_template( array( 'post-form.php' ), true ); ?>
	<?php endif; ?>
	<div id="main">

		<?php if ( have_posts() ) : ?>

		<h2>
			<?php printf( _x( 'Updates from %s', 'Author name', 'b4' ), b4_get_archive_author() ); ?>

			<span class="controls">
				<a href="#" id="togglecomments"> <?php _e( 'Toggle Comment Threads', 'b4' ); ?></a> | <a href="#directions" id="directions-keyboard"><?php _e( 'Keyboard Shortcuts', 'b4' ); ?></a>
			</span>
		</h2>

		<ul id="postlist">
			<?php while ( have_posts() ) : the_post(); ?>
	    		<?php b4_load_entry(); ?>
			<?php endwhile; ?>
		</ul>

		<?php else : ?>

		<h2><?php _e( 'Not Found', 'b4' ); ?></h2>
		<p><?php _e( 'Apologies, looks like this author does not have any posts.', 'b4' ); ?></p>

		<?php endif; // end have_posts() ?>

		<div class="navigation">
			<p class="nav-older"><?php next_posts_link( __( '&larr; Older posts', 'b4' ) ); ?></p>
			<p class="nav-newer"><?php previous_posts_link( __( 'Newer posts &rarr;', 'b4' ) ); ?></p>
		</div>

	</div> <!-- main -->

</div> <!-- sleeve -->

<?php get_footer(); ?>