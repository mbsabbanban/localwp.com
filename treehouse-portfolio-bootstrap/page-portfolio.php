<?php
/*
	Template Name: Portfolio Page
*/
?>
<?php get_header(); ?>

<!--Inserting the WP LOOP php code that loops through the content-->
<!--Has to be both the OPENING and the CLOSING php-->

    <section class="row">
      <div class="small-12 columns text-center">
        <div class="leader">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
		<!--These PHP functions generate the title and the content-->
		  <h1><?php the_title(); ?></h1>
		  <p><?php the_content(); ?></p>
		  
		<?php endwhile; endif; ?>

<!--The Wordpress Loop ends here-->
        </div>
      </div>
    </section>

<?php get_template_part('content', 'portfolio'); ?>

	
<?php get_footer(); ?>