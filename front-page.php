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
  <?php $categories= get_terms(['taxonomy' => 'photo-categorie'])?>
    <select id='listecategories'>
     <option value="">CATEGORIES</option>
     <?php foreach($categories as $categorie){ ?>
     <option value="<?=$categorie->term_id;?>"><?=$categorie->name;?></option>
     <?php }?>
    </select> 
  </div>
  <div class="format">
  <?php $formats= get_terms(['taxonomy' => 'format']) ?>
    <select id='listeformats'>
     <option value="">FORMATS</option>
     <?php foreach($formats as $format){ ?>
     <option value="<?=$format->term_id;?>"><?=$format->name;?></option>
     <?php }?>
    </select> 
  </div>
  <div class="trier">
    <select id='ordre'>
     <option value="DESC">TRIER PAR</option>
     <option value="ASC">A partir des plus anciennes</option>
     <option value="DESC">A partir des plus récentes</option>
    </select> 
  </div>
</div>

<div class="galeriebox">
  <div class="galerie">
    <?php $loop = new WP_Query( array('post_type' => 'photo', 'posts_per_page' => 8,));?>
    <?php while ( $loop->have_posts()) : $loop->the_post(); ?>
    
    <ul>
      <li class="galerie_photo">
        <div class="hover_lightbox">
            <img class="fullscreen" src="<?php echo get_stylesheet_directory_uri(); ?>/images/fullscreen.png">
            <a href="<?php the_permalink() ?>"><img class="oeil" src="<?php echo get_stylesheet_directory_uri(); ?>/images/oeil.png"></a>  
            <div class="ref"><p><?php echo get_field("reference");?></p></div>
            <div class="cat"><p><?php echo get_the_terms($post,"photo-categorie")[0]->name;?></p></div> 
        </div>
        <div class="galerie_photos"> 
          <a href="#" data-ref="<?php echo get_field("reference");?>" data-cat="<?php echo get_the_terms($post,"photo-categorie")[0]->name;?>" ><?php the_post_thumbnail(); ?></a>
        </div>
      </li>
    </ul>
    <?php the_terms( $post->ID, 'photos','Photo'); ?>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
  </div>
</div>
<div class="loadmore"><p>Charger plus</p></div>
<?php get_footer(); ?>