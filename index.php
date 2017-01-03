<?php get_header(); ?>
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<?php if (is_front_page()) : ?>
				<?php the_content(); ?>
			<?php else : ?>
				<article>
					<h1 id="page-title"><?php the_title(); ?></h1>
					<?php the_content(); ?>
				</article>
			<?php endif; ?>
		<?php endwhile; ?>
	<?php else : ?>
		<p>We're sorry, the page you're looking for is no longer available.</p>
	<?php endif; ?>
<?php get_footer(); ?>