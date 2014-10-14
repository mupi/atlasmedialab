<?php
/*
Template Name: Equipe
*/
?>

<?php get_template_part('templates/page', 'header'); ?>

<?php

    /** array com as configurações da query **/
    $args = array(
        'posts_per_page' => 10,
        'post_type' => 'member',
        'order' => 'ASC'
    );
    query_posts($args);
?>

<?php while (have_posts()) : the_post(); ?>

    <article <?php post_class('row team-member'); ?>>
        <header class="col-sm-3">
            <div class="img-circle team-picture">
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
            </div>
        </header>
        <section class="col-sm-9">
            <h2 class="entry-title"><?php the_title(); ?></h2>
            <?php the_content(); ?>
        </section>

    </article>

<?php endwhile; ?>

 <?php wp_reset_query(); ?>
