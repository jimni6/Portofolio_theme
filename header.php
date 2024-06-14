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
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <?php wp_head() ?>
</head>
<body ontouchstart="">
    <nav>
        <div class="navbar">
            <div class="container nav-container glass">
                <input class="checkbox" type="checkbox" name="" id="menu-toggle" />
                <label for="menu-toggle" class="hamburger-lines">
                    <span class="line line1"></span>
                    <span class="line line2"></span>
                    <span class="line line3"></span>
                </label>
                <?php if ( function_exists( 'the_custom_logo' ) ) { the_custom_logo();} ?>
                
                <?php wp_nav_menu([
                    'theme_location'=>'header',
                    'container'=> false,
                    ]); ?>
                <div class="social-icons">
                    <a href="https://github.com/jimni6" target="_blank"><i class="fab fa-github"></i></a>
                    <a href="https://www.linkedin.com/in/jimmy-ni-a01159239/" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a href="https://www.instagram.com/dev_with_jim/" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://discord.com/users/Jimmy NI#5975" target="_blank"><i class="fab fa-discord"></i></a>
                </div>
            </div>
        </div>
    </nav>