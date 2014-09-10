<?php while (have_posts()) : the_post(); ?>
	<div class="home-slider">
		<?php the_content(); ?>
	</div>
	<section class="midle-section">
		<div class="col-sm-4">
			<?php if ( is_active_sidebar( 'home_left_sidebar' ) ) : ?>
			<div id="home-left-sidebar" class="home-widget widget-area" role="complementary">
				<?php dynamic_sidebar( 'home_left_sidebar' ); ?>
			</div><!-- #home-left-sidebar -->
			<?php endif; ?>
		</div>
		<?php $latest = new WP_Query('posts_per_page=2&post_type=post&category_name=noticias'); if ($latest->have_posts()) : ?>
		<?php while ($latest->have_posts()) : $latest->the_post(); ?>
		<div class="col-sm-4">
			<a href="<?php the_permalink(); ?>" class="new-anchor">
				<article class="new">
					<?php
					if ( '' != get_the_post_thumbnail() ) {
					?>
						<header class="news-header">
							<?php echo get_the_post_thumbnail(); ?>
						</header>
					<?php
					} ?>
					<div class="news-body">
						<h4 class="title"><?php the_title(); ?></h4>
	<!-- 					<span class="date"><?php the_time('d/m/Y'); ?></span> -->
						<div class="description">
							<?php the_excerpt(); ?>
						</div>
					</div>
				</article>
			</a>
		</div>
		<?php endwhile; endif; wp_reset_postdata(); ?>
	</section>
<?php endwhile; ?>
