<!-- template não reutilizavel -->
<?php get_header(); ?>

<!-- aqui é como se fosse uma espécie de template e o wp tem uma series de templates tags para exibir os conteúdos -->
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <section class="hero">
                Hero
            </section>
            <section class="services">
                <h2>Services</h2>
                <!-- aqui exibimos os widgets. Lembrar de chamar no arquivo functions-->
                <div class="container">
                    <div class="services-item">
                        <?php
                            if(is_active_sidebar('services-1')){
                                dynamic_sidebar('services-1');
                            }
                        ?>
                    </div>
                    <div class="services-item">
                        <?php
                            if(is_active_sidebar('services-2')){
                                dynamic_sidebar('services-2');
                            }
                        ?>
                    </div>
                    <div class="services-item">
                        <?php
                            if(is_active_sidebar('services-3')){
                                dynamic_sidebar('services-3');
                            }
                        ?>
                    </div>
                </div>
            </section>
            
            <!-- loop customizado -->
            <section class="home-blog">
                <h2>Latest news</h2>
                <div class="container">
                    <?php

                    $args = array(
                        'post_type' => 'post',
                        'post_per_page' => 3, //qtd de posts retornados
                        'category__in' => array(6, 7, 8), //nesse caso pegamos os id das posts com categorias
                        'category__not_in' => (1) //nesse caso pegamos o id do post sem categoria

                    );
                    //aqui a variavel $posList passa a ser um objeto da classe wp_query e essa faz a consultas dos $args
                    $postList = new WP_Query($args);

                    if ($postList->have_posts()) :
                        while ($postList->have_posts()) : $postList->the_post();
                    ?>
                            <article class="latest-news">
                                <!-- aqui é para exibir a imagem -->
                                <?php the_post_thumbnail('large'); ?>
                                <h3><?php the_title(); ?></h3>
                                <div class="meta-info">
                                    <p>
                                        por <span><?php the_author_posts_link(); ?></span>
                                    </p>
                                </div>
                                <!-- exibe o resumo do conteudo do post -->
                                <?php the_excerpt(); ?>
                            </article>
                        <?php
                        endwhile;

                        // essa funcao garante que esse loop não vai afetar a consulta padrao do wp caso exista nessa pagina também
                        wp_reset_postdata();
                    else :
                        ?>
                        <p>Nada ainda para mostrar</p>
                    <?php
                    endif
                    ?>

                </div>
            </section>

        </main>
    </div>
</div>

<?php get_footer(); ?>