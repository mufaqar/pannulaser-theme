<?php

class Tailwind_Hover_Nav_Walker extends Walker_Nav_Menu {
    public function start_lvl( &$output, $depth = 0, $args = null ) {
        $output .= '<ul class="absolute left-0 top-full mt-2 w-48 bg-white border rounded shadow-lg opacity-0 group-hover:opacity-100 invisible group-hover:visible transition-all duration-200 z-50">';
    }

    public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $classes = empty($item->classes) ? [] : (array) $item->classes;
        $has_children = in_array('menu-item-has-children', $classes);
        $li_classes = $has_children ? 'relative group' : '';

        $output .= '<li class="' . esc_attr($li_classes) . '">';

        $link_classes = 'block px-4 py-2 text-gray-700 hover:bg-gray-100';

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
