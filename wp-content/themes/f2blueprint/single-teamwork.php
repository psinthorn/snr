<?php get_header(); ?>
<?php 
    while(have_posts()){
        the_post(); 
        pageBanner();
?>
    <!-- <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php $pageBannerImage = get_field('page_banner_background_image'); echo $pageBannerImage['sizes']['pageBanner'] ?>"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php the_title(); ?></h1>
      <div class="page-banner__intro">
        <p><?php the_field('page_banner_sub_title'); ?></p>
      </div>
    </div>  
  </div> -->

  <div class="container container--narrow page-section">
    <div class="metabox metabox--position-up metabox--with-home-link">
      <p><a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('teamwork'); ?>"><i class="fa fa-home" aria-hidden="true"></i> Teacher(s) Profile Home</a> <span class="metabox__main"><?php the_title(); ?></span></p>
    </div>

      <div class="generic-content">
      <div class="row group">
        <div class="one-third">
            <?php the_post_thumbnail('teacherPortrait'); ?>
        </div>
        <div class="two-thirds">
             <?php the_content(); ?>
        </div>
      </div>
     
      
      <?php 
        $relatedPrograms = get_field('related_programs');

        if($relatedPrograms) { 
          echo '<hr class="section-break" />';
          echo '<h2 class="headline headline--medium">Subject(s) Taught</h2>';
          echo '<ul class="link-list min-list">';
        foreach ($relatedPrograms as $program) { ?>
            <li><a href="<?php echo get_the_permalink($program)?> "> <?php echo get_the_title($program); ?></a></li>
        <?php } echo '</ul>'; } ?>
  </div>

<?php         
    }
?>


<?php get_footer(); ?>
