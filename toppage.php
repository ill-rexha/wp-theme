<?php
/*
Template Name:toppage.php
 */
?>
	<?php get_header();?>
		<div class="page-main clearfix">
			<aside>
				<?php get_sidebar();?>
			</aside>
			<?php #投稿を7つまで表示。3つの場合は一段になるようにcssの .marketで指定(高さをheight:100vh;にしていない。) ?>
			<?php
				$args = array(
					'post_type' =>'item',
					'posts_per_page' => 7
					);
				$the_query = new WP_Query( $args);
				if( $the_query->have_posts()) :
			?>
			<article class="market clearfix">
					<div class="col-md-3 col-xs-6 item">
						<strong>Latest</strong>
					</div>
					<?php while ( $the_query->have_posts() ) : $the_query->the_post();?>
						<div class="col-md-3 col-xs-6 item">
							<img src="<?php echo get_the_post_thumbnail();?>"></img>
							<!-- welcartの変数名 -->
							<a href="<?php the_permalink();?>" class="item-wrapper">
								<!-- welcartの変数名 -->
								<h3><?php the_title();?></h3>
								<p><?php usces_the_itemCprice();?></p>
							</a>
						</div>
					<?php endwhile;?>
					<?php
					wp_reset_postdata();
					endif;
					 ?>
			</article>
			<article class="col-md-10 col-md-offset-1 col-xs-12 infos clearfix">

				<?php $arg  = array(
					'post_type'=>'news',
					'posts_per_page'=>'5'
				);
				$second_query = new WP_query($arg);
				if ($second_query->have_posts() ):
				?>
				<?php #５つまで表示 ?>
				<section class="news-wrapper">
					<div class="infomations first">
              			<a class="the_title" href="<?php echo home_url();?>/news/">News</a>
            		</div>
					<?php while ($second_query->have_posts()) : $second_query->the_post(); ?>
					<div class="infomations clearfix">
						<img src="<?php the_post_thumbnail(); ?>"></img>
						<a  href="<?php the_permalink(); ?>" class="wrapper">
							<h3 class="info-title"><?php the_title(); ?></h3>
							<span class="mdy"><?php the_time('M d.Y'); ?></span><span class="author"><?php the_author(); ?></span>
							<p><?php the_excerpt(); ?></p>
						</a>
					</div>
				<?php endwhile; ?>
				<?php
					wp_reset_postdata();
					endif;
					 ?>
				</section>
		</article>
	</div>
<?php get_footer();
