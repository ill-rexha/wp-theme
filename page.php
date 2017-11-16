<?php get_header();?>
	<div class="page-main clearfix">
	 <aside>
		<?php get_sidebar();?>
	</aside>
		<?php if(have_posts() ) : ?>
		<?php while(have_posts() ) : the_post(); ?>
		<article class="blog-description">
				<div class="all-rayouts">
					<h1 class="blog-titles"><?php the_title();?></h1>
					</br>
					</br>
					<?php the_content(); ?>
				</div>
		</article>
			<?php endwhile; ?>
			<?php else: ?>
					<h1>投稿が見つかりません</h1>
			<?php endif; ?>
	</div>
<?php get_footer();
