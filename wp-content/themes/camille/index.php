<?php get_header(); ?>
  <ul class="bxSlider">
    <li id="presentation" class="video"><?php the_field('contenu1'); ?></li>
    <li id="work" class="video"><?php the_field('contenu2'); ?></li>
    <li id="formation" class="video"><?php the_field('contenu3'); ?></li>
    <li id="brain" class="video"><?php the_field('contenu4'); ?></li>
  </ul>
<?php get_footer(); ?>
