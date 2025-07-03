<?php
/**
 * Main Template for Trash Church Theme
 */
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
</head>
<body>
    <header>
        <h1><?php bloginfo('name'); ?></h1>
        <nav>
            <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
        </nav>
    </header>
    <main>
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                the_title('<h2>', '</h2>');
                the_content();
            endwhile;
        else :
            echo '<p>No content found.</p>';
        endif;
        ?>
    </main>
    <footer>
        <p>&copy; <?php echo date('Y'); ?> Trash Church. Web 1.0 Forever.</p>
    </footer>
</body>
</html>
