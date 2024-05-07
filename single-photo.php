<?php get_header(); ?>
<div class="main-single">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
  <div class="post">
    <div class="postinfo">    
      <h1 class="post-title"><?php the_title(); ?></h1>
      <div class="post-info">
       <p>RÉFÉRENCE : <?php echo get_field("reference");?></p>
       <p>CATÉGORIE : <?php echo get_the_terms($post,"photo-categorie")[0]->name;?></p>
       <p>FORMAT : <?php echo get_the_terms($post,"format")[0]->name;?></p>
       <p>TYPE : <?php echo get_field("type");?></p>
       <p>ANNÉE : <?php the_date("Y"); ?></p>
      </div>
    <hr>  
    </div>
    
    <div class="singleimg">
      <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full', array( 'itemprop' => 'image' ) ); } ?>
    </div>
  </div>
  
  <div class="photosingle">
    <div class="contactsingle">
     <p>Cette photo vous interesse?</p>
     <li class="menu-item-76">
      <a href="">Contact</a>
     </li>
    </div>
  
<?php $loop = new WP_Query( array('post_type' => 'photo', 'posts_per_page' => 1,"orderby"=>"desc"));?>
<?php while ( $loop->have_posts()) : $loop->the_post(); ?>
<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
<?php the_terms( $post->ID, 'photos','Photo'); ?>
<?php the_content(); ?>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
  </div>
<hr>
  <div class="vousaimerez">
    <h3>  VOUS AIMEREZ AUSSI </h3>

<?php $loop = new WP_Query( array('post_type' => 'photo', 'posts_per_page' => 2,"orderby"=>"rand"));?>
<?php while ( $loop->have_posts()) : $loop->the_post(); ?>
<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('medium'); ?></a>
<?php the_terms( $post->ID, 'photos','Photo'); ?>
<?php the_content(); ?>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>

  </div>
<?php endwhile; ?>
<?php endif; ?>
</div>

<?php get_footer(); ?>