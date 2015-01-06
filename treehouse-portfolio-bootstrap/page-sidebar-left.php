<?php
/*
	Template Name: Left Sidebar

*/	
?>

<?php get_header(); ?>

<!--Inserting the WP LOOP php code that loops through the content-->
<!--Has to be both the OPENING and the CLOSING php-->

    <section class="two-column row no-max pad">
      <div class="small-12 columns">
        <div class="row">
          <!-- Primary Column -->
          <div class="small-12 medium-7 medium-offset-1 medium-push-4 columns">
            <div class="primary">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
				<!--These PHP functions generate the title and the content-->
				  <h1><?php the_title(); ?></h1>
				  <p><?php the_content(); ?></p>
				  
				<?php endwhile; else : ?>
				
					<p><?php _e( 'Sorry, no pages.' ); ?></p>
					
				<?php endif; ?>
		
	  </div>
	</div>

	<!-- Secondary Column -->
	
	<?php get_sidebar( 'page' ) ;?>
	
	</div>
	</section>

<?php get_footer(); ?>