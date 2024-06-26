<?php get_header(); ?>
<hr class="hr2">
<div class="main-single">
<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    
    <div class="post">
      <div class="postinfo">    
        <h1 class="post-title"><?php the_title(); ?></h1>
        <p>RÉFÉRENCE : <?php echo get_field("reference");?></p>
        <p>CATÉGORIE : <?php echo get_the_terms($post,"photo-categorie")[0]->name;?></p>
        <p>FORMAT : <?php echo get_the_terms($post,"format")[0]->name;?></p>
        <p>TYPE : <?php echo get_field("type");?></p>
        <p>ANNÉE : <?php the_date("Y"); ?></p>
      </div>
      <div class="singleimg">
      <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full', array( 'itemprop' => 'image' ) ); } ?>
      </div>
      <hr class="hrUn">
    </div>
    
    <div class="photosingle">
      <div class="contactsingle">
      <p>Cette photo vous interesse?</p>
      <button class="btn-contact">Contact</button>
      <ul class="pagination">
        <li class="page">
        <?php $nextPost = get_next_post();?>
          <?php if($nextPost) { ?>
            <div class="imgnext">
              <?php 
                $nextThumbnail = get_the_post_thumbnail( $nextPost->ID ); 
                next_post_link($nextThumbnail);
              ?> 
            </div>   
            <a href="<?php echo get_the_permalink($nextPost->ID); ?>">
              <img class="slidernext" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Lined.png"> 
            </a>
          <?php } ?>
        </li>
        <li class="page">
          <?php $prevPost = get_previous_post();?>
          <?php if($prevPost) { ?>
            <div class="imgprev">
              <?php 
                $prevThumbnail = get_the_post_thumbnail( $prevPost->ID ); 
                previous_post_link($prevThumbnail);
              ?> 
            </div>   
            <a href="<?php echo get_the_permalink($prevPost->ID); ?>">
              <img class="sliderprev" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Lineg.png"> 
            </a>
          <?php } ?>
        </li>
      </ul>
      </div>
    </div>
    </div>
    <div class="vousaimerez">
    <hr>
      <h3>  VOUS AIMEREZ AUSSI </h3>
     <div class="vousaimerezimg">
      <?php $categories = get_the_terms(get_the_ID(),'photo-categorie'); ?>
      <?php //var_dump($categories); ?>
      <?php if ($categories): ?>

        <?php $test = $categories[0]->slug; ?>
        <?php $args=array(
          'post_type' => 'photo',
          'post__not_in' => array(get_the_ID()),
          'posts_per_page'=> 2,
          'oderby' => 'rand', 
          'tax_query' => array(
            array(
              'taxonomy' => 'photo-categorie',
              'field' => 'slug',
              'terms' => $test,
            ),
          )
        );
        //var_dump($categories[0]->slug); ?>

<div class="galeriebox">
  <div class="galerie-single">
    <?php $loop = new WP_Query($args);?>
    <?php while ( $loop->have_posts()) : $loop->the_post(); ?>
    <?php
      $thumbnail_id= get_post_thumbnail_id();
      $image = wp_get_attachment_image_src($thumbnail_id, 'full');
    ?>
    <div class="galerie_photo">
        <div class="hover_lightbox">
            <img 
              class="fullscreen" src="<?php echo get_stylesheet_directory_uri(); ?>/images/fullscreen.png" 
              data-src="<?php echo esc_url($image[0]); ?>"
              data-ref="<?php echo get_field("reference");?>" 
              data-cat="<?php echo get_the_terms($post,"photo-categorie")[0]->name;?>"
            >
            <a href="<?php the_permalink() ?>"><img class="oeil" src="<?php echo get_stylesheet_directory_uri(); ?>/images/oeil.png"></a>  
            <div class="ref"><p><?php echo get_field("reference");?></p></div>
            <div class="cat"><p><?php echo get_the_terms($post,"photo-categorie")[0]->name;?></p></div> 
        </div>
        <div class="galerie_photos"> 
          <a href="<?php the_permalink() ?>" data-ref="<?php echo get_field("reference");?>" data-cat="<?php echo get_the_terms($post,"photo-categorie")[0]->name;?>" ><?php the_post_thumbnail(); ?></a>
        </div>
    </div>
    <?php the_terms( $post->ID, 'photos','Photo'); ?>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    <?php endif; ?>
  </div>
</div>
    </div>
  <?php endwhile; ?>
<?php endif; ?>
</div>

<?php get_footer(); ?>

