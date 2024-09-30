<?php
// ? silence is golden
// ? code is poetry


function search_filter($query)
{
    if (!is_admin() && $query->is_main_query()) {
        /**
         *      adjust for the search page here if needed
         */
        if ($query->is_search) {
            // $query->set('post_type', 'post');
            // 


        }
    }
}
// add_action('pre_get_posts', 'search_filter');
add_filter('ppp_nonce_life', 'my_nonce_life');
function my_nonce_life()
{
    return 432000;
}
