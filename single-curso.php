<?php
/*
Template Name: Página de curso
*/
?>

<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class('row'); ?>>
  	<div class="col-sm-4">
	    <header>
	      <h1 class="entry-title"><?php the_title(); ?></h1>
	    </header>
	    <div class="entry-content">
	      <?php the_content(); ?>
	    </div>
	</div>
    <div class="col-sm-8">
		<figure>
			<?php echo get_the_post_thumbnail(); ?>
		</figure>
    </div>
  </article>
<?php endwhile; ?>
