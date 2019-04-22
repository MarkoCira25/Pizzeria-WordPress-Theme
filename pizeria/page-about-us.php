<?php get_header(); ?>


<?php while(have_posts()): the_post(); ?>
<div class="hero" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);">
  <div class="hero-content">
    <div class="hero-text">

      <h2><?php the_title(); ?></h2>
    </div>
  </div>
</div>

  <div class="main-content conatiner">
    <main class="text-conatiner content-text">
      <?php the_content(); ?>
    </main>
  </div>


<?php endwhile; ?>


<!--orgianl recepti*/-->
<?php
   $args = array(
   'post_type'  => 'post',
   'p' => 68,
 );
   $query = new WP_Query($args);
  ?>
  <!--beer Post*/-->
        <?php
           $args1 = array(
           'post_type'  => 'post',
           'p' => 70,
         );
           $anaderquery = new WP_Query($args1);
          ?>
          <!--wood*/-->
                <?php
                   $args2 = array(
                   'post_type'  => 'post',
                   'p' => 72,
                 );
                   $twoquery = new WP_Query($args2);
                  ?>
    <div class="box">
      <div class="box-inforamcion ">
  <!--orgianl recepti*/-->
        <?php while($query->have_posts()) : $query->the_post(); ?>
              <div class="content-box-one">
                  <?php the_post_thumbnail( array(300,300) ); ?>
                    <div class="about-botom-text">
                      <h4><?php the_title();?></h4>
                      <?php echo wp_trim_words( get_the_content(), 20); ?>
                    </div>
                </div>
          <?php endwhile;?>
          <!--beer Post*/-->
          <?php while($anaderquery->have_posts()) : $anaderquery->the_post(); ?>
                <div class="content-box-two">
                      <div class="about-botom-texttree">
                        <h4><?php the_title(); ?></h4>
                        <?php echo wp_trim_words( get_the_content(), 20); ?>
                      </div>
                      <?php the_post_thumbnail( array(300,300)); ?>
                    </div>
            <?php endwhile; ?>
            <!--wood*/-->
            <?php while($twoquery->have_posts()) : $twoquery->the_post(); ?>
                  <div class="content-box-tree">
                          <?php the_post_thumbnail( array(300,300)); ?>
                        <div class="about-botom-text-red">

                          <h4><?php the_title(); ?></h4>
                          <div class="text-in-red-fild">
                            <?php echo wp_trim_words( get_the_content(), 20); ?>
                          </div>

                        </div>
                      </div>
              <?php endwhile; ?>


          </div>
</div>

<?php get_footer(); ?>
