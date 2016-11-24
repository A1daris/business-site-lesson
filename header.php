<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?php echo get_bloginfo('name'); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="favicon.png" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/bootstrap-grid.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fonts.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/media.css" />
    <?php wp_head(); ?>
</head>
<body>

<div class="hidden"></div>
<!--[if lt IE 9]>
<script src="libs/html5shiv/es5-shim.min.js"></script>
<script src="libs/html5shiv/html5shiv.min.js"></script>
<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="libs/respond/respond.min.js"></script>
<![endif]-->
<div class="top_menu_bg">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <a href="#" class="logo"><?php if ( have_posts() ) : query_posts('p=43');
                    while (have_posts()) : the_post(); ?>
                    <?php the_post_thumbnail(array(370, 250));
                 endwhile; endif; wp_reset_query(); ?></a>
            </div>
            <div class="col-md-6 col-md-offset-4">
                <nav>
                    <ul class="main_menu">
                        <li><a class="active" href="#">About us<span class="top_hover"></span></a></li>
                        <li><a href="#">Software</a><span class="top_hover"></span></li>
                        <li><a href="#">Downloads</a><span class="top_hover"></span></li>
                        <li><a href="#">Contacts</a><span class="top_hover"></span></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>