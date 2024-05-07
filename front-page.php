<?php get_header(); ?>

<div class="bannerimg">
  <?php $loop = new WP_Query( array('post_type' => 'photo', 'posts_per_page' => 1,"orderby"=>"rand"));?>
  <?php while ( $loop->have_posts()) : $loop->the_post(); ?>
  <?php the_post_thumbnail(); ?>
  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>
  <div class="titrebanniere">
    <?php echo wp_get_attachment_image( 135, "", array( "class" => "img-responsive" ) );  ?>
  </div>
</div>


<div class="taxonomy">
  <div class="categorie">
  <?php wp_list_categories(['taxonomy' => 'photo-categorie']); ?>
  </div>
  <div class="format">
  <?php wp_list_categories(['taxonomy' => 'format']); ?>
  </div>
</div>

<div class="galeriebox">
<div class="galerie">
<?php $loop = new WP_Query( array('post_type' => 'photo', 'posts_per_page' => 8,));?>
<?php while ( $loop->have_posts()) : $loop->the_post(); ?>
<a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
<?php the_terms( $post->ID, 'photos','Photo'); ?>
<?php the_content(); ?>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
</div>
</div>
<?php get_footer(); ?>