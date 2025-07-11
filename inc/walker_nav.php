<?php

class Tailwind_Hover_Nav_Walker extends Walker_Nav_Menu {
    public function start_lvl( &$output, $depth = 0, $args = null ) {

        $output .= '<ul class="md:absolute md:bg-primary left-0 md:mt-9  md:w-52 w-full md:py-2 py-0 md:shadow-lg hidden group-hover:block invisible group-hover:visible transition-all duration-200 z-50">';

    }

    public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $classes = empty($item->classes) ? [] : (array) $item->classes;
        $has_children = in_array('menu-item-has-children', $classes);
        $li_classes = $has_children ? 'relative group child_nav' : 'parent_nav';

        $output .= '<li class="' . esc_attr($li_classes) . '">';

        $link_classes = 'block text-white hover:text-secondry';

        $output .= '<a href="' . esc_url($item->url) . '" class="' . esc_attr($link_classes) . '">';
        $output .= esc_html($item->title);
        $output .= '</a>';
    }

    public function end_el( &$output, $item, $depth = 0, $args = null ) {
        $output .= '</li>';
    }

    public function end_lvl( &$output, $depth = 0, $args = null ) {
        $output .= '</ul>';
    }
}