<html <?php language_attributes(); ?> >
<head>
   <?php wp_head(); ?>
   <title>Sebas Theme</title>
</head>
<body>



<?php 
get_search_form();
?>

<?php 
wp_nav_menu(array(
   'theme_location' =>'main-nav'
));
?>


    
