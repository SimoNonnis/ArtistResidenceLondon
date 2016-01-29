<?php 

/*Template Name: Food-Drink Page*/

get_header(); ?> 


<section class="medium-container" role="main">

  <header>
      <h1 class="u-textCenter u-textUpperCase u-textBreak page-title">
        <?php
          $title = get_field('custom_page_title');
        ?>
        <?php if($title): ?>
          <?php echo $title;  ?>
        <?php else: ?>
          <?php echo get_the_title(); ?> 
        <? endif; ?>
      </h1>
  </header>

  <div <?php post_class('border-t border-b half-half-container food-and-drink-page u-cf'); ?> >
    <div class="content-container">
      <h2 class="content-container__title"><?php the_field('cbox-title'); ?></h2>
      <p><?php the_field('cbox-p'); ?></p>
    </div>
    <div class="promo-container">
      <?php get_template_part('partials/promo'); ?>  
    </div>
    
  </div>

  
  <?php if( have_rows('food_and_drink_content') ): ?>
  <section>

    <?php while( have_rows('food_and_drink_content') ): the_row(); 
 
      // vars
      $image = get_sub_field('food_and_drink_image');
      $title = get_sub_field('food_and_drink_title');
      $text = get_sub_field('food_and_drink_text');
      $menu = get_sub_field('food_and_drink_menu');
 
    ?>

    <article class="media-obj u-cf">
      <div class="square media-obj__img">
        <img src="<?php echo $image['sizes']['post-thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
      </div>

      <div class="media-obj__body u-overflow-hid u-position-rel u-textLeft">
      
        <h1 class="u-textCapitalize media-obj-body__title"><?php echo $title; ?></h1>
        <p class="u-textItalic"><?php echo $text; ?></p>
        
        <?php if( $menu ):?>
          <a href="<?php echo $menu; ?>" target="_blank" class="btn btn-skin btn-skin-link-color btn-top-space u-inlineBlock u-textCapitalize u-textInheritColor" >View Menu</a>
        <?php endif; ?>
      </div>
    </article>


    <?php endwhile; ?>
 
  
  </section>
  <?php endif; ?>  
  
</section>

	


<?php get_footer(); ?>