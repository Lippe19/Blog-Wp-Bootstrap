<?php get_header(); ?>

    <!-- UMA OPCAO DE POST - IMAGEM DO POST COMO CAPA NO TOPO
    - Mudar no arquivo: content.php
    
    <div class="card border-0 text-white text-center">
        <?php 
//        if (has_post_thumbnail()) {
//            the_post_thumbnail('post-thumbnail', array('class' => 'rounde card-img banner-header img-capa-post')); 
//        } else {
//            echo '<img src="http://localhost/lp_tech/tema/wp-content/uploads/2019/11/Imagem_Padrao.png" class="img-capa-post">';
//        }
        ?>
        <div class="card-img-overlay bg-banner-header p-0 m-0 row">
            <div class="col align-self-center">
                <p class="mb-0 lead"><?php // echo get_the_date('d/m/y'); ?></p>
                <h1 class="mb-4"><?php // the_title(); ?></h1>
            </div>
        </div>
    </div>-->





    <div class="container">

      <div class="row">
          
        <div class="col-md-8 col-sm-12">

          <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

            <?php get_template_part('content', get_post_format()); ?>

          <?php endwhile; ?>

          <?php else : get_404_template();  endif; ?>

        </div>

        <?php get_sidebar(); ?>

      </div>

    </div>

<?php get_footer(); ?>