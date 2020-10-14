<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
   <header class="site-header" style="padding-top: 5rem">
      <div class="container-fluid pl-5">

        <img src="<?php echo get_theme_file_uri('/images/snr_logo.png'); ?>" class="img-fluid" alt="Samui Natien Logo" style="height: 5.5rem"> 

         <span class="school-logo-text pl-3 pt-3 " style="color: #fff">
          <strong>Samui Natien Resort</strong>
        </span>
          <span><a href="https://g.page/SamuiNatien?share" target="_blank"><img src="<?php echo get_theme_file_uri('/images/snr_google_map_pin.png'); ?>"    class="img-fluid pl-3" alt="Samui Natien Logo" style="height: 2.5rem; text-decoration: none;">
          </a></span>
          
         <div class="site-header__util pr-5">
            <ul class="nav navbar-nav navbar-right" style="color: #fff; list-style: none;">
               <li class="current-menu-item">for more and other enquiries direct email</li>
              <li>
                <span class="pull-right"><a href="mailto:info@samuinatien.com" target="_blank"><i class="fa fa-envelope" aria-hidden="true" style="color: #fff; list-style: none; text-decoration: none; letter-space: 1.2">  info@samuinatien.com</i></a>
                </span>
              </li>
            </ul>
        </div>

      </div>
    </header>
