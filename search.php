<?php 

global $wp_query;

//Count Posts
$countPosts = $wp_query->found_posts;
//Query 
$query = get_search_query();

get_header(); 

get_footer(); 

?>