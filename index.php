<?php get_header();?>
<header class="main_header">
    <div class="container head_bg">
        <div class="row">
            <div class="col-md-11 col-md-offset-1 header_list_2">
                <div class="list_3">
                    <h1><?php if ( have_posts() ) : query_posts('p=47');
                        while (have_posts()) : the_post(); ?>
                            <?php echo get_the_title();
                        endwhile; endif; wp_reset_query(); ?></h1>
                    <ul>
                        <li>Lorem ipsum dolor</li>
                        <li>Dolor from here quickly</li>
                        <li>Follow us everywhere you want</li>
                        <li>We have many other opportunities</li>
                        <li>And yes, the sweet tasty nice cookies!</li>
                    </ul>
                </div>
                <div class="ppl_wrap"><img src="<?php echo get_template_directory_uri(); ?>/img/people_2.png" alt="ppp"></div>
            </div>
            <div class="btn_wrap">
                <a href="#" alt="left arrow" class="left_arrow_2"></a>
                <div class="button_2">1. Create an application prototype</div>
                <a href="#" alt="left arrow" class="right_a"></a>
            </div>
        </div>
    </div>
</header>
<section><div class="h_line_2"></div>
    <div class="mid_bg">
        <div class="light_bg">
            <div class="container">
                <div class="row">
                    <?php if ( have_posts() ) : query_posts('cat=13');
                    while (have_posts()) : the_post(); ?>
                    <div class="col-md-3">
                        <div class="item_wrap">
                            <?php the_post_thumbnail(array(370, 250));?>
                            <h2><?php echo get_the_title();?></h2>
                            <?php echo the_content();?>
                        </div>
                    </div>
                    <? endwhile; endif; wp_reset_query(); ?>
               </div>
            </div>
        </div>
    </div>
</section>
















<?php get_footer();?>
