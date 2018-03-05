<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 */

get_header(); ?>
	
	
<div class="sections-wrapper">
	<?php $query = new WP_Query('category_name=frontpage');

	if ($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
			
			
		
			<div class="grid-x frontpart snapsection" id="front-<?php the_title() ?>">
			
				<div>
					<?php the_title('<h2>', '</h2>'); ?>
					<?php the_content('<p>', '</p>'); ?>
				</div>

			</div>

	<?php
	endwhile; 
	endif;
	?>
			
</div> <!-- sections-wrapper -->	

<?php get_footer(); ?>