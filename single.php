<?php get_header();?>
<div class="page-main clearfix">
		 <aside>
<?php get_sidebar();?>
		</aside>
		<article class="item-description">
				<div class="slider-pro" id="slider1">
				    <div class="sp-slides">
				        <?php #slide1 ?>
				        <div class="sp-slide">
				            <img class="sp-image" src="usces_the_itemImageURL($number)"/>
				        </div>
				        <?php #slide2 ?>
				        <div class="sp-slide">
				            <img class="sp-image" src="usces_the_itemImageURL($number)"/>
				        </div>
				        <?php #slide3 ?>
				        <div class="sp-slide">
				            <img class="sp-image" src="usces_the_itemImageURL($number)"/>
				        </div>
				        <?php #slide4 ?>
				        <div class="sp-slide">
				            <img class="sp-image" src="usces_the_itemImageURL($number)"/>
				        </div>
				        <?php #slide5 ?>
				        <div class="sp-slide">
				            <img class="sp-image" src="usces_the_itemImageURL($number)"/>
				        </div>
				    </div>

				    <div class="sp-thumbnails">
					    <img class="sp-thumbnail" src="usces_the_itemImageURL($number)"/>
					    <img class="sp-thumbnail" src="usces_the_itemImageURL($number)"/>
					    <img class="sp-thumbnail" src="usces_the_itemImageURL($number)"/>
					    <img class="sp-thumbnail" src="usces_the_itemImageURL($number)"/>
					    <img class="sp-thumbnail" src="usces_the_itemImageURL($number)"/>
					 </div>
  				</div>

				<div class="item-description-wrapper">
					<div class="right-item-description">
						<figcaption>
							<?php #itemの名前と投稿の名前を分ける ?>
							<h3><?php the_title();?></h3>
							<?php the_content();?>
						</figcaption>
				 </div>
				</div>
		</article>
					<?php #3つのお勧めアイテムの提示 ?>
					<?php $args = array(
						'category_name'  => 'item',
						'posts_per_page' => '3',
						'orderby'        => 'date',
					);
					$the_query = new WP_Query($args);
					if ($the_query->have_posts()):
					?>
			<article class="market clearfix">
						<div class="item">
							<strong>Latest</strong>
							<strong>Items</strong>
						</div>
			<?php while ($the_query->have_posts()):$the_query->the_post();?>
			<div class="item">
				<img src="<?php the_post_thumbnail();?>"></img>
				<a href="<?php the_permalink();?>" class="item-wrapper">
					<h3><?php the_title();?></h3>
					<p><?php usces_the_itemCprice();?></p>
				</a>
			</div>
			<?php endwhile;?>
			</article>
		<?php
			wp_reset_postdata();
		endif;?>
</div>
			<?php get_footer();?>
