<?php
/*
Template Name: Página de curso
*/
?>

<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class('row'); ?>>
  	<div class="col-sm-7">
	    <header>
	      <h1 class="entry-title"><?php the_title(); ?></h1>
	    </header>
	    <div class="entry-content">
	      <?php the_content(); ?>
	    </div>
	</div>
    <div class="col-sm-5">
		<?php
			echo get_the_post_thumbnail(
										$postid,
					            		'full',
					            		array(
					            		'class'	=> "img-responsive"
					            		));
	    ?>
		<div class="more-info">
			<?php
				if (types_render_field("course_date" , array( "output" => "raw" )) != ""){
          			echo "<div class='course-date-calendar'>".types_render_field("course_date", array( "style" => "calendar" ))."</div>";
          		};
          		if (types_render_field("cidade" , array( "output" => "raw" )) != ""){
          			echo "<div class='course-city'>".types_render_field("cidade", array( "output" => "raw" ))."</div>";
          		};
          	?>
		</div>
    </div>
  </article>
<?php endwhile; ?>
