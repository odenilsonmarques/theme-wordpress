<?php get_header(); ?>
<!-- aqui é como se fosse uma espécie de template e o wp tem uma serie  de templates tags para exibir os conteúdos -->
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <h1>Blog</h1>
            <div class="container">
                <div class="blog-itens">
                    <!-- nessa sections vai ser exibido os posts -->
                    <?php
                    if (have_posts()) :
                        while (have_posts()) : the_post();
                    ?>
                            <article>
                                <!-- exibe o titulo do post que foram criado no wp, Lembrando que post sao os proprios post e as páginas estáticas -->
                                <h2><?php the_title(); ?></h2>

                                <!-- aqui é para exibir as miniaturas nos posts. No lugar do array poredia ser (thumb, medium...) -->
                                <?php the_post_thumbnail(array(275, 275)); ?>

                                <div class="meta-info">
                                    <p>Postado em <?php echo get_the_date(); ?></p>
                                    <p>Autor <?php the_author_link(); ?></p>
                                    <!-- essa tag the_category aceita parametro e foi declarada apenas um para indicar separacao, pois um post pode ter mais de uma categoria, porem pode declarar sem os parametro -->
                                    <p>Categoria <?php the_category(''); ?></p>
                                    <p><?php the_tags('', ', '); ?></p>
                                </div>
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
                <!-- chamando o sidebar -->
                <?php get_sidebar(); ?>
            </div>
        </main>
    </div>
</div>
<?php get_footer(); ?>