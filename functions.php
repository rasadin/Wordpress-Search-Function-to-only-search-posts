Solution 1: function.php nicher code toko add korlee e hbe...

<?php
function SearchFilter($query) {
    if ($query->is_search) {
        $query->set('post_type', 'post');
    }
    return $query;
}
add_filter('pre_get_posts','SearchFilter');
?>


OR
solution 2: C:\xampp\htdocs\rasadin_elementor_plugin\wp-includes\general-template.php
jekhane seache form ta sekhane nicher field add korle e hbe... 


<input type="hidden" name="post_type" value="post" />

