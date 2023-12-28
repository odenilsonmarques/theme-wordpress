<!-- template reutilizavel -->

<?php
/*
        Template Name: General Template
    */
?>

<?php get_header(); ?>

<!-- nessa linha carregamos a imagem de cabeçalho -->
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />



<!-- aqui é como se fosse uma espécie de template e o wp tem uma seris de templates tags para exibir os conteúdos -->
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <div class="container">
                <div class="general-template">
                    <!-- nessa sections vai ser exibido os posts -->
                    <?php
                    if (have_posts()) :
                        while (have_posts()) : the_post();
                    ?>
                            <article>
                                <!-- exibe o titulo do post que foram criado no wp, Lembrando que post sao os proprios post e as páginas estáticas -->
                                <h1><?php the_title(); ?></h1>
                                <!-- exibe o conteudo do post -->
                                <?php the_content(); ?>
                            </article>
                        <?php
                        endwhile;
                    else :
                        ?>
                        <p>Nada ainda para mostrar</p>
                    <?php
                    endif
                    ?>
                </div>
            </div>

        </main>
    </div>
</div>

<?php get_footer(); ?>