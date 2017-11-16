<?php
/*
Template Name:archive-news.php
 */
?>
<?php get_header();?>
  <div class="page-main clearfix">
       <aside>
      <?php get_sidebar();?>
  </aside>
      <article class="col-md-10 col-md-offset-1 col-xs-12 infos clearfix">
          <?php #投稿があるだけ表示 ?>
          <section class="news-wrapper">
            <div class="infomations first">
              <a class="the_title" href="<?php echo home_url();?>/news/">News</a>
            </div>
            <?php if (have_posts()):?>
            <?php while (have_posts()):the_post();?>
            <div class="infomations">
              <img src="<?php the_post_thumbnail();?>"/>
              <a  href="<?php the_permalink();?>" class="wrapper">
                <h3 class="info-title"><?php the_title();?></h3>
                <span class="mdy"><?php the_time('M j,Y');?></span><span class="author"><?php the_author();?></span>
                <p><?php the_excerpt();?></p>
              </a>
          </div>
        <?php endwhile;?>
        <?php endif;?>
        </section>
    </article>
  </div>
<?php get_footer();?>
