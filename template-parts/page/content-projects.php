<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Four_Oh_Five
 * @since 1.0
 * @version 1.0
 */

?>



<div class="container py-4">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
			
	
		<div class="entry-content">
			<?php
				the_content();

				fourohfive_edit_link( get_the_ID() );


			?>
			<?php the_title( '<h1 class="display-4">', '</h1>' ); ?>
		</div>
	</article>
</div>
