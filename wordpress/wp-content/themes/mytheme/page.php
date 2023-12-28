<?php get_header(); ?>

<!-- aqui é como se fosse uma espécie de template e o wp tem uma seris de templates tags para exibir os conteúdos -->
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <div class="container">
                <div class="page-item">
                    <?php
                        while (have_posts()) : the_post();
                    ?>
                        <article>
                            <header>
                            <h1><?php the_title(); ?></h1>
                            </header>
                            <!-- exibe o conteudo do post -->
                            <?php the_content(); ?>
                        </article>
                    <?php
                    endwhile;
                    ?>
                </div>
            </div>
        </main>
    </div>
</div>

<?php get_footer(); ?>