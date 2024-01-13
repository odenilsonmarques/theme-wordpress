<!-- verificando se tem um sidebar ativo e chamando o id sidebar-blog definido na função mytheme_sidebars no arquivo functions -->
<?php if(is_active_sidebar('sidebar-blog')): ?>

<aside class="sidebar">
    <?php dynamic_sidebar('sidebar-blog');?>
</aside>

<?php endif;