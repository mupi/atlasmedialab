	<article <?php post_class('col-sm-4'); ?>>
    	<div class="card-curso">
            <header>
            	<a href="<?php the_permalink(); ?>">
	            	<?php
	            	$postid = get_the_ID();
	            	echo get_the_post_thumbnail(
	            		$postid,
	            		'full',
	            		array(
	            		'class'	=> "img-responsive"
	            		)
	            	);
	            	?>
            	</a>
            </header>
        	  <a href="<?php the_permalink(); ?>">
          		<h2 class="entry-title"><?php the_title(); ?></h2>
          	</a>

          	<?php
          		if (types_render_field("cidade" , array( "output" => "raw" )) != ""){
          			echo "<span>".types_render_field("cidade", array( "output" => "raw" ))."</span>";
          		};
          	?>
        </div>
    </article>