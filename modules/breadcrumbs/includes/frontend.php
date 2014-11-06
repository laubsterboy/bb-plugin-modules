<?php

global $post;

if (!is_front_page() && is_page() && $post !== null) {
    $output = '<div class="' . $module->get_classname() . '"><div class="breadcrumbs-items"><p>';
    $separator = ' <span class="fl-breadcrumbs-separator">' . trim($settings->separator) . '</span> ';
    $output .= '<span class="fl-breadcrumbs-home-title"><a href="' . esc_url(home_url('/')) . '" title="' . get_bloginfo('name') . '" rel="home">' . trim($settings->home_title) . '</a></span>' . $separator;
    $title = get_the_title();

    if ($post->post_parent){
        $anc = get_post_ancestors($post->ID);
        $anc = array_reverse($anc);
        foreach ($anc as $ancestor) {
            $output .= '<a href="' . get_permalink($ancestor) . '" title="' . get_the_title($ancestor) . '">' . get_the_title($ancestor) . '</a>' . $separator;
        }

        $output .= $title;
    } else {
        $output .= $title;
    }

    $output .= '</p></div></div>';

    echo $output;
}

?>
