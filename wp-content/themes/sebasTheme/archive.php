<?php

if(have_posts()) {
    while(have_posts()){
        the_post();
        echo "<span>";
        the_title();
        echo "</span><br>";
        the_content();
    }
}

?>
