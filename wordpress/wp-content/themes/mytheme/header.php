<!DOCTYPE html>
<!-- substituicao do tipo padrao de liguagem pt-br pelo nativo do wp, usando a funcao language_attributes(); -->
<html <?php language_attributes(); ?>>

<head>
    <!-- substituicao do charset padrao pelo nativo do wp, usando a funcao bloginfo('charset'); -->
    <meta <?php bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- por boa pratica no wordpress não é recomendado usar a tag title. Porem ainda se usar algo -->

    <!--essa funcao é responsavel por carregar as folhas de estilo, sem ela não irá funionar o estilo-->
    <?php wp_head(); ?>

</head>

<!-- A função body_class() em PHP é geralmente usada em temas do WordPress para adicionar classes CSS ao elemento <body> da página. -->

<body <?php body_class(); ?>>
    <div id="page" class="site">
        <header>
            <section class="top-bar">
                <div class="container">
                    <div class="logo">
                        <!-- exibir a logo. poderia colocar sem o a condiçao abaixo, porem caso o dono do site nao tenha logo, exibimos por exemplo o nome do site -->
                        <?php
                        if (has_custom_logo()) {
                            the_custom_logo();
                        } else {
                        ?>
                            <a href="<?php echo home_url('/'); ?>"><span><?php bloginfo('name'); ?></span></a>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="searchbox">
                        Search
                    </div>
                </div>
            </section>

            <section class="menu-area">
                <div class="container">
                    <nav class="main-menu">
                        <!-- nesse botão é criado o menu hambuguer juntamente com css e js -->
                        <button class="check-button">
                            <div class="menu-icon">
                                <div class="bar1"></div>
                                <div class="bar2"></div>
                                <div class="bar3"></div>
                            </div>
                        </button>
                        <!-- chamando o menu(mytheme_main_menu)  que foi registrado no function e criado no dashboard do wp atraveś da funcão nativa wp_nav_menu() -->
                        <?php wp_nav_menu(array('theme_location' => 'mytheme_main_menu', 'depth' => 2)); ?><!--o theme_location chama a chave do menu que foi regsitrado no function. O Ultimo paramentro refere-se a niveis de submenu-->
                    </nav>
                </div>
            </section>
        </header>

