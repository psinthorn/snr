<?php 
get_header();
pageBanner(); 
?>

<div class="container container--narrow page-section">

<ul class="link-list min-list">
    <?php 
        while (have_posts()) {
            the_post();
    ?>
           
                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                    
    <?php        
        }  
    ?>

    </ul>

    <?php  echo paginate_links(); ?>



    <hr class="section-break" />
    <p> </p>   
</div>


<?php get_footer(); ?>