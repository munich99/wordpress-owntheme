<?php


// query_posts(array('post_type' => 'page'));

    
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

$pages = get_pages();
foreach($pages as $page) {
    echo($page->post_title);
    echo($page->post_content);
}

