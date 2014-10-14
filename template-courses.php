<?php
/*
Template Name: Cursos
*/
?>

<?php
	$today = date("m/j/Y");
    /** array com as configurações da query **/
    $args = array(
        'posts_per_page' => 10,
        'post_type' => 'curso',
        'meta_key' => strtotime('course_date'),
        'meta_value' => strtotime($today),
        'meta_compare' => '>=',
        'orderby' => 'meta_value_num',
        'order' => 'ASC'
    );
    query_posts($args);
?>

<?php
	$cont = 0;
    while (have_posts()) : the_post();
    	$course_date = types_render_field("course_date", array("style" => "text", "format" => "j/m/Y"));
    	list ($c_dia, $c_mes, $c_ano) = split ('[/.-]', $course_date);
		$cont_aux = $cont;
    	$cont++;
	?>
	<?php
		if (($cont == 1) || ($cont_aux % 3 == 0)){
			echo "<div class='row'>";
		}
	?>

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
    </article>

    <?php
		if ($cont % 3 == 0){
			echo "</div>";
		}
	?>
<?php
    endwhile;
?>
</div>

 <?php wp_reset_query(); ?>
