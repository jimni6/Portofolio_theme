<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Jimmy Ni
    </title>
    <link rel="apple-touch-icon" sizes="180x180" href="../Portofolio_theme/assets/icons/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../Portofolio_theme/assets/icons/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../Portofolio_theme/assets/icons/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="../wp-content/themes/Portofolio_theme/assets/icons/favicon_io/site.webmanifest">
    <link rel="icon" href="../wp-content/themes/Portofolio_theme/assets/icons/favicon_io/favicon.ico">
	<link rel="mask-icon" href="../wp-content/themes/Portofolio_theme/assets/icons/favicon_io/logo_jn3.svg" color="#000000">
    <?php wp_head() ?>
</head>
<body ontouchstart="">
    <nav>
        <div class="navbar">
            <div class="container nav-container glass">
                <input class="checkbox" type="checkbox" name="" id="" />
                <div class="hamburger-lines">
                    <span class="line line1"></span>
                    <span class="line line2"></span>
                    <span class="line line3"></span>
                </div>
                <?php if ( function_exists( 'the_custom_logo' ) ) { the_custom_logo();} ?>
                <?php wp_nav_menu([
                    'theme_location'=>'header',
                    'container'=> false,
                    ]); ?>
            </div>
        </div>
    </nav>