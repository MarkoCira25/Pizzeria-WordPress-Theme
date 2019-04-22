

<?php
/*
* Template Name: Contact us.
*/
 get_header(); ?>


<?php while(have_posts()): the_post(); ?>
<div class="hero" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);">
  <div class="hero-content">
    <div class="hero-text">

<h2><?php the_title(); ?></h2>


  </div>
</div>


  </div>
  <div class="main-content conatiner reservation">
    <main class="text-conatiner content-text">
      <div class="reservation-info">
           <form class="reservation-form" method="post">
             <h2>Make a reservation</h2>
             <div class="field">
               <input type="text" name="name" placeholder="Name" required>
             </div>
             <div class="field">
               <input type="datetime-local" name="date" placeholder="Date" required>
             </div>
             <div class="field">
               <input type="email" name="email" placeholder="E-Mail" required>
             </div>
             <div class="field">
               <input type="tel" name="phone" placeholder="Phone Number" required>
             </div>
             <div class="field">
               <textarea name="message" placeholder="Messege" required></textarea>
             </div>
             <input type="submit" name="submit" class="button">

             <input type="hidden" name="hidden" value="1">
           </form>
      </div>
    </main>
  </div>



<?php endwhile; ?>

<?php get_footer(); ?>
