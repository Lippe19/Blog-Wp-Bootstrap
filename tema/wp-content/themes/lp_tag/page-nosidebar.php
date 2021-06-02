<?php /* Template name: Sem barra lateral */ ?>

<?php get_header(); ?>

<section>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>  

            <!--<h3 class="mb-3">
            <?php the_title(); ?>
            </h3>-->

            <?php the_content(); ?>

        <?php endwhile; ?>

    <?php else : get_404_template();
    endif; ?>
            
            
</section>

<?php get_footer(); ?>