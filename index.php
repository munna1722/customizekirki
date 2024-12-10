<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ); ?> | <?php bloginfo( 'description' ); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
  
    <nav>
        <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
    </nav>
    
</header>

<main>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article>
           <div class="header-section-one" >
               <h2><?php echo get_theme_mod('text_setting'); ?></h2>
               
               <p><?php echo get_theme_mod('textarea_setting');?></p>

              <a href="<?php echo the_permalink( ); ?>">Click More</a>

           </div>

           <div class="header-section-two">
              <div class="image_area">
                  <img src="<?php echo get_template_directory_uri(  ); ?>/img/cusomizekirki.jpg">
              </div>
           </div>
        </article>
    <?php endwhile; else : ?>
        <p>No content available.</p>
    <?php endif; ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>
