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
      <a href="#">Contact</a>
     </li>
     <ul class="pagination justify-content-center mb-4">
	    <ul class="pagination justify-content-center mb-4">
		   <li class="page-item">
       <div class="imgnext">
       <?php $nextPost = get_next_post(); $nextThumbnail = get_the_post_thumbnail( $nextPost->ID ); next_post_link($nextThumbnail);?> 
       </div>  
			 <?php next_post_link(); ?><img class="slidernext" a href= "" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Lined.png">
	     </li>
	     <li class="page-item">
		   <?php previous_post_link(); ?><img class="sliderprev" src="<?php echo get_stylesheet_directory_uri(); ?>/images/Lineg.png"> 
	     </li>
	     </ul>
     </ul>
    </div>
    </div>
  </div>
    <hr>
  <div class="vousaimerez">
    <h3>  VOUS AIMEREZ AUSSI </h3>
  <div class="vousaimerezimg">
    <?php $loop = new WP_Query( array('post_type' => 'photo', 'posts_per_page' => 2,"orderby"=>"rand"));?>
    <?php while ( $loop->have_posts()) : $loop->the_post(); ?>
    
    <ul>
      <li class="">
        <div class="hover_lightbox">
            <img class="fullscreen" src="<?php echo get_stylesheet_directory_uri(); ?>/images/fullscreen.png">
            <a href="<?php the_permalink() ?>"><img class="oeil" src="<?php echo get_stylesheet_directory_uri(); ?>/images/oeil.png"></a>  
            <div class="ref"><p><?php echo get_field("reference");?></p></div>
            <div class="cat"><p><?php echo get_the_terms($post,"photo-categorie")[0]->name;?></p></div> 
        </div>
        <div class=""> 
          <a href="#" data-ref="<?php echo get_field("reference");?>" data-cat="<?php echo get_the_terms($post,"photo-categorie")[0]->name;?>" ><?php the_post_thumbnail('large'); ?></a>
        </div>
      </li>
    </ul>
    <?php the_terms( $post->ID, 'photos','Photo'); ?>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
  </div>
</div>
<?php endwhile; ?>
<?php endif; ?>
</div>

<?php get_footer(); ?>