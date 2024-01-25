<?php get_header(); ?>

<div id="primary">
    <div id="main">
        <div class="container">
            <!-- Nesse caso nao precisamos criar um if para verificar se tem post, pois ja estamos dentro do post -->
            <?php
            while( have_posts() ):
                the_post();
                ?>
                <article id="post-<?php the_ID();?>" <?php post_class(); ?>>
                    
                    <header>
                        <h1><?php the_title(); ?></h1>
                        <div class="meta-info">
                            <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
                            <p>Categories: <?php the_category( ' ' ); ?></p>
                            <p>Tags: <?php the_tags( '', ', ' ); ?></p>     
                        </div>
                    </header>
                    <div class="content">
                        <?php the_content(); ?>
                    </div>
                </article>
                <?php
                 // lógica para exibir ou nao os comentários
                // 1º argumento verifica se o post esta abertos a comentario. Lembra definimos isso no painel do wp
                // 2º verifica se existe comentarios no post. caso uma das condições seja verdaira entra no if e exibe os comentarios
                if (comments_open() || get_comments_number()) {
                    //exie um template de formulario de comentarios
                    comments_template();
                }
            endwhile;
            ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>