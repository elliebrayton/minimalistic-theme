<?php wp_footer(); ?>
<!--START FOOTER-->
    <footer class="footer">
        <?php if(has_nav_menu('footer-nav')) {
            wp_nav_menu(array(
                'theme_location' => 'footer-nav',
                'container_class' => 'footer-nav',
                'menu_class' => 'menu footer-nav-items'
            ));
        } else echo '<p>"Please select a main menu through your dashboard"</p>';

        ?>
    </footer>
<!--END FOOTER-->
</body>

<html>