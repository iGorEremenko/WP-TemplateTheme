<?php
/**
 * Присвоение кастомных класов для тега body
 * ---------------------------------------------------------------------------------------------------------------------
 */
function custom_body_class($wp_classes)
{
    if (is_front_page()) { //проверяет главная ли это страница если да то присваевает body клас "index"
        $wp_classes[] = 'index';
    }

    if (is_page(10)) { //проверка на наличие страницы с id-10 если это страница с id-10 то присваевает body клас "page-id10"
        $wp_classes[] = 'page-id10';
    }

    return $wp_classes;
}

add_filter('body_class', 'custom_body_class');
