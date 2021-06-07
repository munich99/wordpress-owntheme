<?php

echo "<h2>That's static page</h2>";
    
if(have_posts()){
    while(have_posts()){
        the_post();
        echo "<h2>";
        the_title();
        echo "</h2>";
        the_content();
    }

} else 
{ 
    echo "keine Post";
}

