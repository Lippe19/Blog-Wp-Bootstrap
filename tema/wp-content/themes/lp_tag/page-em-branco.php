<?php /* Template name: Pagina Customizada */ ?>
<?php get_header(); ?>






        <div id="carouselExampleIndicators" class="carousel slide bg-banner-header" data-ride="carousel">
            <div class="carousel-inner">
                <?php
                    // args
                    $my_args_banner = array( 'post_type' => 'banners', 'posts_per_page' => 3, );
                    // query
                    $my_query_banner = new WP_Query($my_args_banner);
                ?>

                <?php
                if ($my_query_banner->have_posts()) :
                    $banner = $banners[0];
                    $c = 0; 
                    while ($my_query_banner->have_posts()) :
                        $my_query_banner->the_post(); 
                ?>
                <div class="carousel-item <?php $c++; if ($c == 1) { echo 'active'; } ?>">
                    <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid rounde d-block w-100 banner-header')) ?>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>
                            <?php the_title(); ?>
                        </h5>
                        <br>
                        <h5>
                        <?php the_content(); ?>
                        </h5>
                    </div>
                    <!--<img src="http://localhost/lp_tech/tema/wp-content/uploads/2019/06/Imagem_contato-4.png" class="" alt="...">-->
                </div>
                    <?php 
                        endwhile;
                    endif;
                    ?>
                <?php wp_reset_query(); ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

            <hr class="barra anima" />
        </div>




        
        <div id="carouselExampleIndicators1" class="carousel slide bg-banner-header" data-ride="carousel">
            <div class="carousel-inner">
                <?php
                    // args
                    $my_args_banner1 = array( 'post_type' => 'pontos', 'posts_per_page' => 3, );
                    // query
                    $my_query_banner1 = new WP_Query($my_args_banner1);
                ?>

                <?php
                if ($my_query_banner1->have_posts()) :
                    $banner = $pontos[0];
                    $c = 0; 
                    while ($my_query_banner1->have_posts()) :
                        $my_query_banner1->the_post(); 
                ?>
                <div class="carousel-item <?php $c++; if ($c == 1) { echo 'active'; } ?>">
                    <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid rounde d-block w-100 banner-header')) ?>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>
                            <?php the_title(); ?>
                        </h5>
                    </div>
                    <!--<img src="http://localhost/lp_tech/tema/wp-content/uploads/2019/06/Imagem_contato-4.png" class="" alt="...">-->
                </div>
                    <?php 
                        endwhile;
                    endif;
                    ?>
                <?php wp_reset_query(); ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

            <hr class="barra anima" />
        </div>


    
    
    
    
    
    
<div class="container">
    
    
    

<?php
if (get_theme_mod('permission_section') == 'Yes') {
    ?>
        <div class="row align-items-center my-4">
            <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                <div class="news text-center">
                    <p class="h2"><?php echo get_theme_mod('title_section', 'Meu primeiro tema de WordPress'); ?></p>
                    <p><?php echo get_theme_mod('text_section', 'Meu primeiro tema de WordPress'); ?></p>
                    <p>
                        <a href="<?php echo get_the_permalink(get_theme_mod('pages_section')); ?>" target="_blank">
                            <button class="btn btn-default" style="background-color: <?php echo get_theme_mod('button_color_link22_section'); ?>; color: <?php echo get_theme_mod('button_color_link_section'); ?>">
                                Clique
                            </button>
                        </a>
                    </p>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <div class="news">
                    <p><img src="<?php echo wp_get_attachment_url(get_theme_mod('image_section')); ?>" class="img-fluid" height="150" width="150"></p>
                </div>
            </div>
        </div>
    <?php
}
?>
</div>















<?php get_footer(); ?>