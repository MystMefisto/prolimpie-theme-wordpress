<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head()?>
</head>


<body>

    <header class='container nav-bar'>
        <div class='social-navbar'>
        <a href="https://facebook.com/prolimpie">
        <i class="fa-brands fa-facebook"></i>
    </a>
    <a href="https://www.linkedin.com/company/prolimpie-mexicana-s.a.-de-c.v./">
        <i class="fa-brands fa-linkedin"></i>
    </a>
    <a href="https://wa.me/528116901516">
        <i class="fa-brands fa-whatsapp"></i>
    </a>
        </div>

        <div class='menu-container'>
            <div class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/logo.png" alt="Prolimpie logo">
            </div>
            <div class='container-contact-container'>
                <div class='header-contact-container'>
                    <div class='icon-contact-container'>
                        <i class="fa-solid fa-phone"></i>
                    <p class='copy-contact-container'>
                        Llámenos lunes a viernes 08:00 a 18:00hrs<br>
                        <b>8183737750</b> ó al <b>8183737751</b>
                    </p>
                    </div>
                    <?php
              $args =array(
                  'theme_location'=> 'menu-principal',
                  'container' =>'nav',
                  'container_class'=>'menu-principal'
               );

               wp_nav_menu($args)
          ?>
                </div>
                <a class='catalog-btn' href="#">catálogo</a>
            </div>
        </div>

    </header>