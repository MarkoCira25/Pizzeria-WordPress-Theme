
<footer>
<?php
$args = array(
  'theme_location' => 'header-menu',
  'container' => 'nav',
  'after' => '<span class="separator"> | </span>'

);
wp_nav_menu( $args);
 ?>
<div class="location">
  <p>Jovana popovica 10,Nova Pazova Srbija</p>
  <p>Phone Number:+381-62-17-44-950</p>
</div>

<div class="copyright">
  <p>All rights reserved <?php echo date('Y'); ?></p>

</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
