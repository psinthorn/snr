<?php get_header(); ?>
<?php 
    while(have_posts()){
        the_post(); 
        // pageBanner();
?>
   

  <div class="container container--narrow page-section">
  
<?php 
    $theParentId = wp_get_post_parent_id(get_the_ID());
    if ($theParentId) {
?>
    <div class="metabox metabox--position-up metabox--with-home-link">
      <p><a class="metabox__blog-home-link" href="<?php echo get_permalink($theParentId); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($theParentId) ?></a> <span class="metabox__main"><?php echo the_title(); ?></span></p>
    </div>
<?php
    }
?>
  
  <?php 
  
  $checkHaveChaildArray = get_pages(array(
            'child_of' => get_the_ID()
    )
  ); 
  
  if ($theParentId or $checkHaveChaildArray) { ?>
    
    <div class="page-links">
      <h2 class="page-links__title"><a href="<?php echo get_permalink(get_the_ID($theParentId)); ?>"><?php echo get_the_title($theParentId); ?></a></h2>
      <ul class="min-list">
        <?php 
            if ($theParentId) {
                $findTheParentIdOf = $theParentId;
            }else {
                $findTheParentIdOf = get_the_ID();
            }

            wp_list_pages(
                array(
                    'title_li' => NULL,
                    'child_of' => $findTheParentIdOf,
                    'sort_column' => 'menu_order'
                )
            );
        ?>
      </ul>
    </div>

<?php } ?>


    <div class="generic-content">
     <?php the_content(); ?>
    </div>

  </div>

<?php         
    }
?>

<?php get_footer(); ?>