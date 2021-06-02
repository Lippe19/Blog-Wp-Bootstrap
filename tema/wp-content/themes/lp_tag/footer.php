
<!--Footer -->
<footer class="footer-stuff">
    <!-- Fim Footer -->
    <section class="rodape" style="background-color: <?php echo get_theme_mod('footer_color_section'); ?>;">
        <div class="container">
            <div class="row">

                <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <div class="news">
                        <?php
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                        if (has_custom_logo()) {
                            echo '<img src="' . esc_url($logo[0]) . '" class="img-fluid centraliza-img" height="45">';
                        } else {
                            echo '<h1>' . get_bloginfo('name') . '</h1>';
                            echo '<p class="lead">' . get_bloginfo('description') . '</p>';
                        }
                        ?>
                        <br>
                        <div class="texto-corpo-rodape sobre-nos-rodape">
                            <p><?php echo get_theme_mod('footer_descricao', 'Meu primeiro tema de WordPress'); ?></p><br>
                        </div>
                    </div>
                </div>


                <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <div class="news">
                        <h6 class="texto-titulo-rodape">
                            Tags
                        </h6>
                        <br>
                        <div class="texto-corpo-rodape">
                            <p><!-- HREF: referencia ancoras e paginas -->
                                <label class="tag margem-tag"><a href="servicos.php#visual" class="a-r"><font class="texto-tag">MidiasSociais</font></a></label>
                                <label class="tag margem-tag"><a href="sobre.php#processos" class="a-r"><font class="texto-tag">#4Etapas</font></a></label>
                                <label class="tag margem-tag"><a href="index.php#lptag" class="a-r"><font class="texto-tag">LPTag</font></a></label>
                                <label class="tag margem-tag"><a href="servicos.php#sites" class="a-r"><font class="texto-tag">#Sites</font></a></label>
                                <label class="tag margem-tag"><a href="servicos.php#loja" class="a-r"><font class="texto-tag">e-commerce</font></a></label>
                                <label class="tag margem-tag"><a href="sobre.php" class="a-r"><font class="texto-tag">#SobreNos</font></a></label>
                                <label class="tag margem-tag"><a href="servicos.php" class="a-r"><font class="texto-tag">servicos</font></a></label>
                                <label class="tag margem-tag"><a href="index.php" class="a-r"><font class="texto-tag">#SitesProfissionais</font></a></label>
                            </p>
                            <br>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <div class="news">
                        <h6 class="texto-titulo-rodape">
                            Contato
                        </h6>
                        <br>
                        <div class="texto-corpo-rodape">
                            <p><a href="#" class="a-r">
                                    <font class="ml-2 texto-tag">
                                        <i class="fas fa-envelope mr-1"></i>
                                        <?php echo get_theme_mod('footer_telefone', '(17) 98888-8888'); ?>
                                    </font>
                                </a></p>
                            <p><a href="#" class="a-r">
                                    <font class="ml-2 texto-tag">
                                        <i class="fas fa-phone-alt mr-1"></i>
                                        <?php echo get_theme_mod('footer_email', 'exemplo@gmail.com'); ?>
                                    </font>
                                </a></p>
                            <br>
                        </div>
                    </div>
                </div>


                <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-5">
                    <div class="news">
                        <h6 class="texto-titulo-rodape">
                            Siga-nos
                        </h6>
                        <br>
                        <!--
                         <div class="rede" id="face">
                             <a href="https://www.facebook.com/lp.tag/" target="_blank" tabindex="0" role="button" data-toggle="popover" data-trigger="focus" title="Nos siga no Facebook" data-content="Conexão com Facebook em fase de desenvolvimento..." data-placement="top">
                                 <i class="icone fab fa-facebook-square"></i>
                             </a>
                         </div>
                         <div class="rede" id="inst">
                             <a href="https://instagram.com/lp.tag?igshid=pylwgg9j6f11" target="_blank" tabindex="0" role="button" data-toggle="popover" data-trigger="focus" title="Nos siga no Instagram" data-content="Conexão com Instagram em fase de desenvolvimento..." data-placement="top">
                                 <i class="icone fab fa-instagram"></i>
                             </a>
                         </div>
                        -->
                        <div 
                            class="fb-page" 
                            data-href="https://www.facebook.com/lp.tag/" 
                            data-tabs="timeline" 
                            data-width="370" 
                            data-height="70" 
                            data-small-header="false" 
                            data-adapt-container-width="true" 
                            data-hide-cover="false" 
                            data-show-facepile="true">
                            <blockquote cite="https://www.facebook.com/lp.tag/" class="fb-xfbml-parse-ignore">
                                <a href="https://www.facebook.com/lp.tag/" class="a-r">LP Tag</a>
                            </blockquote>
                        </div>
                    </div>
                </div>

            </div><!-- row -->
        </div>
    </section>

    <!-- Fim  -->
    <section class="fim">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    © 2019 Direitos autorais: <a href="https://lptag.com.br" class="a-r">LP Tag</a>
                </div>
            </div>
        </div>
    </section>

</footer>


    <?php wp_footer(); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php bloginfo('template_url') ?>/js/jquery.js"></script>
    <script src="<?php bloginfo('template_url') ?>/js/popper.js"></script>
    <script src="<?php bloginfo('template_url') ?>/js/bootstrap.js"></script>
    <script src="<?php bloginfo('template_url') ?>/js/script.js"></script>
  </body>
</html>