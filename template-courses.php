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
        $cont_aux = $cont;
        $cont++;
?>
    <?php
        if (($cont == 1) || ($cont_aux % 3 == 0)){
            echo "<div class='row'>";
        }
    ?>
    <?php get_template_part('templates/coursecard'); ?>
    <?php
        if ($cont % 3 == 0){
            echo "</div>";
        }
    ?>
<?php
    endwhile;
?>
<?php wp_reset_query(); ?>
