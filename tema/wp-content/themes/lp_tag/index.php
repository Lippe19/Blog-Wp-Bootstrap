<?php get_header(); ?>

    <!-- ---------------------------------------------------- -->
    
    
    
    <div class="card border-0 text-white text-center">
        <img src="http://localhost/lp_tech/tema/wp-content/uploads/2019/06/Artigo_2.png" class="card-img banner-header" alt="Imagem de duas mãos segurando um tênis" height="550px">
        <div class="card-img-overlay bg-banner-header p-0 m-0 row">
            <div class="col align-self-end">
                <p class="mb-0 lead">Desenvolvido por LP Tag</p>
                <h1 class="mb-4">Seja Bem - Vindo ao Blog</h1>
                <p>
                    <a href="#" class="btn btn-lg btn-my-color-4 mb-3">Saiba mais</a>
                </p>
            </div>
        </div>
    </div>
    
    

    <!-- ---------------------------------------------------- -->
<div class="container">

<div class="py-5">
            <h5 class="border-bottom pb-2"><i class="fas fa-newspaper"></i> Destaques</h5>
    <div class="row pt-3">

        <?php
        // args
        $my_args = array(
            'post_type' => 'post',
            'posts_per_page' => 3,
            'category_name' => 'destaque'
        );
        // query
        $my_query = new WP_Query($my_args);
        ?>

<?php if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post(); ?>

                <!--ORIGINAL 
                    <div class="col-sm-12 col-md-4 mb-5">

                        <div class="card">
                <?php // the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid card-img-top')) ?>
                            <div class="card-body">
                                <h5 class="card-title mb-4">
        <?php // the_title();  ?>
                                </h5>
                                <a href="<?php // the_permalink();  ?>" class="btn btn-my-color-5">Leia mais</a>
                            </div>
                        </div>

                    </div>-->

                <div class="col-xl-4 col-lg-6">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid mb-3')) ?>
                    </a>
                    <h5>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h5>
                    <!--<p>As melhores taxas e condições para você que deseja realizar todos os seus sonhos na melhor fase vida.</p>-->
                    <p class="mb-0"><?php the_excerpt(); ?></p>
                    <p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-my-color-4 mt-3">Saiba mais</a>
                    </p>
                </div>



















    <?php endwhile;
endif;
?>

<!--        <div class="col-xl-4 col-12 mt-3 mt-xl-0">
            <div class="card">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item border-0">
                        <h5>
                            <a href="#">Empréstimo Consignado</a>
                        </h5>
                        <p class="mb-0">As melhores taxas e condições para você que deseja realizar todos.</p>
                    </li>
                    <li class="list-group-item border-0">
                        <h5>
                            <a href="#">Empréstimo Consignado</a>
                        </h5>
                        <p class="mb-0">As melhores taxas e condições para você que deseja realizar todos.</p>
                    </li>
                    <li class="list-group-item border-0">
                        <h5>
                            <a href="#">Empréstimo Consignado</a>
                        </h5>
                        <p class="mb-0">As melhores taxas e condições para você que deseja realizar todos.</p>
                    </li>
                    <li class="list-group-item border-0">
                        <h5>
                            <a href="#">Empréstimo Consignado</a>
                        </h5>
                        <p class="mb-0">As melhores taxas e condições para você que deseja realizar todos.</p>
                    </li>
                </ul>
            </div>
        </div>-->

<?php wp_reset_query(); ?>

    </div>

</div>
    
    
    
    
    


    <div class="row">

        <div class="col-md-8 col-sm-12">

            <h5 class="border-bottom pb-2 mb-3"><i class="fas fa-newspaper"></i> Novidades</h5>
            
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php get_template_part('content', get_post_format()); ?>

            <?php endwhile; ?>

                <?php else : get_404_template();
                endif;
                ?>

            <div class="blog-pagination mb-5 mt-4">
                <?php next_posts_link('Mais antigos'); ?> <?php previous_posts_link('Mais novos'); ?>
            </div>

        </div>

<?php get_sidebar(); ?>

    </div>

</div>
    
    
    
    
    <div class="bg-lc-gray py-5 mt-5" style="background-color: grey">
    <div class="container">
        <div class="row">

            <?php
                $args = array(
                    'post_type' => 'depoimentos',
                    'posts_per_page' => 2
                );
                $the_query = new WP_Query( $args );
            ?>

            <?php if ( $the_query->have_posts() ) : 
                while ( $the_query->have_posts() ) :
                $the_query->the_post(); ?>

                    <div class="col-md-6 col-sm-12 mb-4 mb-md-0">
                        <div class="card border-card-footer">
                            <div class="card-body">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>
            <?php else : ?>

                <div class="col-12">
                
                    <p class="lead">
                        Nenhum depoimento encontrado
                    </p>

                </div>

            <?php endif; ?>
      
        </div>
    </div>
</div>

    
    
    

<?php get_footer(); ?>