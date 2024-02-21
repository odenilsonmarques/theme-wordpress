<footer class="site-footer">
    <div class="container">
        <div class="copyright">
              <!-- a funcção get_theme_mod é para pegar o valor do bando de dados e lembrar que no arquivo cusomizer foi definido o 'type' => 'theme_mod' na section. O segundo paramentro é o valor padrao para quando nao houver valor inserindo pelo usuario -->
              <p><?php echo get_theme_mod('set_copyright', 'Copyright X - All Rights Reserved'); ?></p>
        </div>

        <nav class="footer-menu">
             <!-- chamado o menu  que foi registrado no function e criado no dashboard do wp atraveś da funcão nativa wp_nav_menu() -->
             <?php wp_nav_menu(array('theme_location' => 'mytheme_footer_menu', 'depth'=>1));?><!--o theme_location chama a chave do menu que foi regsitrado no function. O Ultimo paramentro refere-se a niveis de submenu- no caso o valor um (1) não permite criar submenu-->
        </nav>
    </div>
            
        </footer>
    </div>
     <!--essa funcao é responsavel por carregar o js, sem ela não irá funionar o script-->
     <?php wp_footer(); ?>
</body>
</html>