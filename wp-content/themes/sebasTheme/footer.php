<?php 
wp_footer();
?> 

<?php 
wp_nav_menu(
    array(
        'theme_location' => 'footer-nav',
        'container_class' => "super-dupa-classe",
        'link_before' => "<b>davor </b>"
    )    );
?> 

</body>
</html>