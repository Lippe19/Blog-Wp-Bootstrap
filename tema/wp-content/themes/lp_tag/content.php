<?php if (is_single()) : ?>

<div class="py-5">
    <?php 
    if (has_post_thumbnail()) {
        the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid rounde')); 
    } else {
        echo '<img src="http://localhost/lp_tech/tema/wp-content/uploads/2019/11/Imagem_Padrao.png" class="img-fluid">';
    }
    ?>
    
    <!--COMENTAR A LINHA DE BAIXO PARA VER A IMAGEM DESTACADA DO POST COMO UMA CAPA NO TOPO
    - Mudar no arquivo: single.php -->
    <h3 class="mb-3 mt-4 pt-2 border-top"><?php the_title(); ?></h3>
    
    <?php the_content(); ?>
    <p class="text-muted">Publicado em11: <span class="badge badge-my-color-2"><?php echo get_the_date('d/m/y'); ?></span></p>
    <hr>

    <?php comments_template(); ?>
</div>
    

<?php else : ?>


    <div class="blog-post">
<div class="row mt-4 align-items-center">
    <div class="col-md-6 col-sm-12">
        <a href="<?php the_permalink(); ?>">
    <?php 
    if (has_post_thumbnail()) {
        the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid rounde')); 
    } else {
        echo '<img src="http://localhost/lp_tech/tema/wp-content/uploads/2019/11/Imagem_Padrao.png" class="img-fluid">';
    }
    ?>
        </a>
    </div>
    <div class="col-md-6 col-sm-12 mt-3 mt-md-0">
        <p>
            <span class="badge badge-my-color-2">
                <?php the_category(', '); ?>
            </span>
        </p>
        <h5>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h5>
        <p class="mb-0"><?php the_excerpt(); ?></p>
        <p class="text-muted mt-3"><i class="far fa-clock"></i> <small>Publicado em: <?php echo get_the_date('d/m/y'); ?></small>
        </p>
    </div>
</div>
    </div>

<?php endif; ?>


