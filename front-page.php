<?php while (have_posts()) : the_post(); ?>
	<div class="home-slider">
		<?php the_content(); ?>
	</div>
	<section>
		<div class="col-sm-4">
			ÁREAS DE CURSO
		</div>
		<?php $latest = new WP_Query('posts_per_page=2&post_type=post&category_name=noticias'); if ($latest->have_posts()) : ?>
		<?php while ($latest->have_posts()) : $latest->the_post(); ?>
		<div class="col-sm-4">
			<article class="new">
				<h4 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				<span class="date"><?php the_time('d/m/Y'); ?></span>
				<div class="description">
					<?php the_excerpt(); ?>
				</div>
			</article>
		</div>
		<?php endwhile; endif; wp_reset_postdata(); ?>
	</section>
<?php endwhile; ?>
