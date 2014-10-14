<?php get_template_part('templates/page', 'header'); ?>

<?php
    $args = array(
        'post_type' => 'curso',
        'category_name' => 'marketing-digital',
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
        $course_date = types_render_field("course_date", array("style" => "text", "format" => "j/m/Y"));
        list ($c_dia, $c_mes, $c_ano) = split ('[/.-]', $course_date);
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