<footer class="site-footer">
    <div class="container">
        <div class="copyright">
            <p>Copyryght X - All Right Reservados</p>
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