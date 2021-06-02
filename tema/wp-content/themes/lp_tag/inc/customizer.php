<?php 
function bs4wp_customize_register($wp_customize) {
    //Rodapé
    $wp_customize -> add_section('footer', array(
        'title' => __('Rodapé', 'BS 4 + WP'),
        'description' => sprintf(__('Opções para o rodapé','BS 4 + WP')),
        'priority' => 20
    ));
    //primeira coluna
    $wp_customize -> add_setting('footer_descricao', array(
        'default' => _x('Meu primeiro tema de WordPress', 'BS 4 + WP'),
        'type' => 'theme_mod'
    ));
    $wp_customize -> add_control('footer_descricao',array(
        'label' => __('Descricao do rodapé', 'BS 4 + WP'),
        'section' => 'footer',
        'type' => 'textarea'
    ));
    
    $wp_customize -> add_setting('footer_telefone', array(
        'default' => _x('(17) 98888-8888', 'BS 4 + WP'),
        'type' => 'theme_mod'
    ));
    $wp_customize -> add_control('footer_telefone',array(
        'label' => __('Telefone', 'BS 4 + WP'),
        'section' => 'footer'
    ));
    
    $wp_customize -> add_setting('footer_email', array(
        'default' => _x('exemplo@gmail.com', 'BS 4 + WP'),
        'type' => 'theme_mod'
    ));
    $wp_customize -> add_control('footer_email',array(
        'label' => __('E-mail', 'BS 4 + WP'),
        'section' => 'footer'
    ));
    //Cor de fundo do rodape
    $wp_customize -> add_setting('footer_color_section', array(
        'default' => _x('#E4A014', 'BS 4 + WP'),
        'type' => 'theme_mod'
    ));
    $wp_customize -> add_control(new WP_Customize_Color_Control($wp_customize,'link2_color',array(
            'label' => __('Selecione a cor do rodapé', 'BS 4 + WP'),
            'settings' => 'footer_color_section',
            'section' => 'footer'
     )));
    
//    $wp_customize -> add_setting('footer_email2', array(
//        'default' => _x('exemplo@gmail.com', 'BS 4 + WP'),
//        'type' => 'theme_mod'
//    ));
//    $wp_customize -> add_control('footer_email2',array(
//        'label' => __('E-mail', 'BS 4 + WP'),
//        'section' => 'footer',
//        'priority' => 4
//    ));
    
    
    
    
    
    
    
    
    
    
    //Customizar Seção
    $wp_customize -> add_section('custom_section', array(
        'title' => __('Customizar Seção', 'BS 4 + WP'),
        'description' => sprintf(__('Opções para customizar a seção','BS 4 + WP')),
        'priority' => 40
    ));
    //Radio Button
    $wp_customize -> add_setting('permission_section', array(
        'default' => 'Yes'
    ));
    
    $wp_customize -> add_control('permission_section', array(
        'type' => 'radio',
        'section' => 'custom_section',
        'settings' => 'permission_section',
        'label' => __('Deseja exibir a seção', 'BS 4 + WP'),
        'choices' => array(
            'Yes' => 'Sim',
            'No' => 'Não'
        ),
        'priority' => 1
    ));
    //Título
    $wp_customize -> add_setting('title_section', array(
        'default' => _x('Meu primeiro tema de WordPress', 'BS 4 + WP'),
        'type' => 'theme_mod'
    ));
    $wp_customize -> add_control('title_section',array(
        'label' => __('Título da seção', 'BS 4 + WP'),
        'section' => 'custom_section'
    ));
    //Texto
    $wp_customize -> add_setting('text_section', array(
        'default' => _x('Meu primeiro tema de WordPress...', 'BS 4 + WP'),
        'type' => 'theme_mod'
    ));
    $wp_customize -> add_control('text_section',array(
        'label' => __('Título da seção', 'BS 4 + WP'),
        'section' => 'custom_section',
        'type' => 'textarea'
    ));
    //Imagem
    $wp_customize -> add_setting('image_section');
    
    $wp_customize -> add_control(new WP_Customize_Cropped_Image_Control(//WP_Customize_Image_Control
            $wp_customize,
            'image_section_theme',
     array(
            'label' => __('Baixar imagem', 'BS 4 + WP'),
            'settings' => 'image_section',
            'section' => 'custom_section',
		'width'                  => 500,
		'height'                 => 500,
		'flex-height'            => true,
		'flex-width'             => true
     )));
    //Exibir Pagina 
    $wp_customize -> add_setting('pages_section');
    
    $wp_customize -> add_control('pages_section', 
        array(
            'type' => 'dropdown-pages',
            'section' => 'custom_section',
            'settings' => 'pages_section',
            'label' => __('Escolha uma pagina de destino para o botão', 'BS 4 + WP')
    ));
//    //Cor de fundo do botao
//    $wp_customize -> add_setting('button_color_fundo_section', array(
//        'default' => _x('#E4A014', 'BS 4 + WP'),
//        'type' => 'theme_mod'
//    ));
//    
//    $wp_customize -> add_control(new WP_Customize_Color_Control(
//            $wp_customize,
//            'link_color',
//     array(
//            'label' => __('Selecione a cor do botão', 'BS 4 + WP'),
//            'settings' => 'button_color_fundo_section',
//            'section' => 'custom_section'
//     )));
    //Cor da letra do botao
    $wp_customize -> add_setting('button_color_link_section');
    
    $wp_customize -> add_control(new WP_Customize_Color_Control(
            $wp_customize,
            'link1_color',
     array(
            'label' => __('Selecione a cor da letra do botão', 'BS 4 + WP'),
            'settings' => 'button_color_link_section',
            'section' => 'custom_section'
     )));
    
    //Cor do fundo do botao
    $wp_customize -> add_setting('button_color_link22_section');
    
    $wp_customize -> add_control(new WP_Customize_Color_Control(
            $wp_customize,
            'text_color',
     array(
            'label' => __('Selecione a cor do fundo do botão', 'BS 4 + WP'),
            'settings' => 'button_color_link22_section',
            'section' => 'custom_section'
     )));
    
    
    
    
    
    
    
    //Customizar Menu 
    $wp_customize -> add_section('custom_menu', array(
        'title' => __('Customizar Menu', 'BS 4 + WP'),
        'description' => sprintf(__('Opções para customizar o menu','BS 4 + WP')),
        'priority' => 20
    ));
    //Cor de fundo do menu  
    $wp_customize -> add_setting('menu_color_section', array(
        'default' => _x('#E4A014', 'BS 4 + WP'),
        'type' => 'theme_mod'
    ));
    
    $wp_customize -> add_control(new WP_Customize_Color_Control(
            $wp_customize,
            'link_color',
     array(
            'label' => __('Selecione a cor do menu', 'BS 4 + WP'),
            'settings' => 'menu_color_section',
            'section' => 'custom_menu'
     )));
    //Cor da letra do menu 
    //-descomentar arquivo: header.php (ctr + f = ALTERAR A COR DO TEXTO DO MENU)
//    $wp_customize -> add_setting('menu_color_link_section', array(
//        'default' => _x('#00FFFF', 'BS 4 + WP'),
//        'type' => 'theme_mod'
//    ));
//    $wp_customize -> add_control(new WP_Customize_Color_Control(
//            $wp_customize,
//            'text_color',
//     array(
//            'label' => __('Selecione a cor da letra do menu', 'BS 4 + WP'),
//            'settings' => 'menu_color_link_section',
//            'section' => 'custom_menu'
//     )));
    
    //Radio Button
    $wp_customize -> add_setting('position_menu', array(
        'default' => 'Yes'
    ));
    
    $wp_customize -> add_control('position_menu', array(
        'type' => 'radio',
        'section' => 'custom_menu',
        'settings' => 'position_menu',
        'label' => __('Posicao do menu', 'BS 4 + WP'),
        'choices' => array(
            'Yes' => 'Rolagem com a pagina',
            'No' => 'Fixo ao topo'
        ),
        'priority' => 1
    ));
    
   
    
    
}
add_action('customize_register','bs4wp_customize_register');