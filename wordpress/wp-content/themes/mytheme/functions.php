<?php
//a funcao foi iniciada com o nome do tema, pois é uma boa pratica
//dentro dela chamamos a funcão wp_enqueue_style() do wordpress responsavel por carregar a folha de estilo
function mytheme_load_scripts()
{
    // a funcao do wordpress wp_enqueue_style() é responsavel por deixar as folhas de estilos enfileirada(carregadas)
    // o 1º parametro ('mytheme-style) é o identificador 
    // o 2º paramettro get_stylesheet_uri() refere-se ao caminho do arquivo css principal
    // o 3º parametro array() é para se passar alguma dependencia antes de carregar o css principal, como não tem fica o array vazio
    // o 4 parametro é referente a versao do arquivo, esse parametro é opcional. Também poderia informar um valor booleano
    // o 5º paramtro é referente ao tipo de midia, no caso passamos all que aceita todos
    wp_enqueue_style('mytheme-style', get_stylesheet_uri(), array(), 1.0, 'all');

    //carregando fonts do google
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap', array(), null);


    //carregando js. O 2º arqgumento usa a funcao get_template_directory_uri() seguinda do caminho do arquivo.
    //o ultimo parametro indica se quer adicionar o js no final da paǵina
    wp_enqueue_script('dropdown', get_template_directory_uri() . '/js/dropdown.js', array(), '1.0', true);
}
// essa funcão aciona um gancho passado no primeiro parametro wp_enqueue_scripts que chama a funcao mytheme_load_scripts() e esta chama a folha de estilo
add_action('wp_enqueue_scripts', 'mytheme_load_scripts');

function mytheme_config()
{
    //registrando nossos proprios menus. Lembando que deve-se criar no dashboard do wordpress as paǵina referente a cada menu
    // o array permite criar mais de um menu, que vai conter chave(também conhecido como slug) e valor
    register_nav_menus(
        array(
            'mytheme_main_menu' => 'Main Menu',
            'mytheme_footer_menu' => 'Footer Menu'
        )
    );

    //definindo configuração para a imagem que vai ficar no nosso reader pesornalizado, lembrando que poderia ter mais argumentos
    $args = array(
        'heigth' => 225,
        'widht' => 1920
    );
    add_theme_support('custom-header', $args);

    // adicionando suporte para miniaturas. No nosso projeto essas miniaturas estão no post. Com essa configuração o dashboard do wp va i permitir inserir img nos posts
    add_theme_support('post-thumbnails');
}

// o 3º parametro refere-se a prioridade, nesse caso a maoir(zero)
add_action('after_setup_theme', 'mytheme_config', 0);