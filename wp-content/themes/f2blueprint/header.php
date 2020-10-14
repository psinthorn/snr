<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
   <header class="site-header">
      <div class="container-fluid pl-5 pr-5 pt-5">
      <div class="d-none d-md-block d-lg-block">
       <img src="<?php echo get_theme_file_uri('/images/snr_logo.png'); ?>" class="img-fluid" alt="Samui Natien Logo" style="height: 5.5rem"> 

         <span class="school-logo-text pl-3 pt-3" style="color: #fff">
          <strong>Samui Natien Resort</strong>
        </span>
          <span><a href="https://g.page/SamuiNatien?share" target="_blank"><img src="<?php echo get_theme_file_uri('/images/snr_google_map_pin.png'); ?>"    class="img-fluid pl-3" alt="Samui Natien Logo" style="height: 2.5rem; text-decoration: none;">
          </a></span>
          


        <!-- <h1 class="school-logo-text float-left">
          <a href="<?php echo site_url(); ?>"><strong>Samui</strong>Natien</a>
        </h1>
        <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i> -->


        <div class="site-header__menu group">
          <nav class="main-navigation"> 
          </nav>
          
          <div class="site-header__util">
            <ul class="nav navbar-nav navbar-right" style="color: #fff; list-style: none;">
               <li class="current-menu-item">for more and other enquiries direct email</li>
              <li>
                <span class="pull-right"><a href="mailto: samuinatienresort@gmail.com" target="_blank" style="color: #fff; list-style: none; text-decoration: none; height: 1.2rem; a:link: text-decoration: none; a:visited: text-decoration: none">
               <img src="<?php echo get_theme_file_uri('/images/snr-social-envelope.png') ?>" alt="Samui Natien email" class="img-fluid pr-2 " style="color: #fff; list-style: none; text-decoration: none; height: 1.2rem; a:link: text-decoration: none; a:visited: text-decoration: none">info@samuinatien.com
          </a>
                </span>
              </li>
            </ul>
          </div>


        </div>


    
</div>
          <!-- Show on small only -->
          <div class="d-xs-block d-sm-block d-md-none">
            <div class="t-center">
            <img src="<?php echo get_theme_file_uri('/images/snr_logo.png'); ?>" class="img-fluid" alt="Samui Natien Logo" style="height: 5.5rem"> <br/>
            <span class="school-logo-text pl-3 pt-3" style="color: #fff">
              <small>Samui Natien Resort</small>
            </span>
          </div>

        </div>

      </div>
    </header>
