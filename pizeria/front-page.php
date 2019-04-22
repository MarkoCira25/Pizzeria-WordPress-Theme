<?php get_header(); ?>


<?php while(have_posts()): the_post(); ?>
<div class="hero front" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);">
  <div class="hero-content">
    <div class="hero-text">

      <h2><?php echo esc_html(get_option('blogdescription')) ?></h2>
      <?php the_content(); ?>
      <?php $url = get_page_by_title('About us'); ?>
      <br>
      <a class="button secondary" href="<?php echo get_permalink($url->ID); ?>">more info</a>
    </div>
  </div>
</div>

  <section class="conatiner">
    <h2 class="primary-text text-center">Gallery</h2>
          <?php $url = get_page_by_title('Gallery'); ?>
          <?php echo get_post_gallery($url->ID); ?>

</section>



<?php endwhile; ?>

<?php get_footer(); ?>
