<?php
/**
 * @since   1.0.0
 *
 * @package Helpdesk
 */

namespace Helpdesk\Admin;

defined( 'ABSPATH' ) || exit;

/**
 * Class Taxonomy
 */
class Taxonomy {

    public static function types() {
        $labels = array(
            'name'              => _x( 'Types', 'taxonomy general name', 'helpdesk' ),
            'singular_name'     => _x( 'Type', 'taxonomy singular name', 'helpdesk' ),
            'search_items'      => __( 'Search Types', 'helpdesk' ),
            'all_items'         => __( 'All Types', 'helpdesk' ),
            'parent_item'       => __( 'Parent Type', 'helpdesk' ),
            'parent_item_colon' => __( 'Parent Type:', 'helpdesk' ),
            'edit_item'         => __( 'Edit Type', 'helpdesk' ),
            'update_item'       => __( 'Update Type', 'helpdesk' ),
            'add_new_item'      => __( 'Add New Type', 'helpdesk' ),
            'new_item_name'     => __( 'New Type Name', 'helpdesk' ),
            'menu_name'         => __( 'Type', 'helpdesk' ),
        );

        $args = array(
            'hierarchical'      => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'show_in_menu'      => false,
            'query_var'         => true,
            'show_in_rest'      => true,
            'rewrite'           => array( 'slug' => 'type' ),
        );

        register_taxonomy( 'ticket_type', array( 'ticket' ), $args );
    }

    public static function category() {
        $labels = array(
            'name'              => _x( 'Categories', 'taxonomy general name', 'helpdesk' ),
            'singular_name'     => _x( 'Category', 'taxonomy singular name', 'helpdesk' ),
            'search_items'      => __( 'Search Categories', 'helpdesk' ),
            'all_items'         => __( 'All Categories', 'helpdesk' ),
            'parent_item'       => __( 'Parent Category', 'helpdesk' ),
            'parent_item_colon' => __( 'Parent Category:', 'helpdesk' ),
            'edit_item'         => __( 'Edit Category', 'helpdesk' ),
            'update_item'       => __( 'Update Category', 'helpdesk' ),
            'add_new_item'      => __( 'Add New Category', 'helpdesk' ),
            'new_item_name'     => __( 'New Category Name', 'helpdesk' ),
            'menu_name'         => __( 'Categories', 'helpdesk' ),
        );

        $args = array(
            'hierarchical'      => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'show_in_menu'      => false,
            'query_var'         => true,
            'show_in_rest'      => true,
            'rewrite'           => array( 'slug' => 'category' ),
        );

        register_taxonomy( 'ticket_category', array( 'ticket' ), $args );
    }

    public static function priority() {
        $labels = array(
            'name'              => _x( 'Prioritise', 'taxonomy general name', 'helpdesk' ),
            'singular_name'     => _x( 'Priority', 'taxonomy singular name', 'helpdesk' ),
            'search_items'      => __( 'Search Prioritise', 'helpdesk' ),
            'all_items'         => __( 'All Prioritise', 'helpdesk' ),
            'parent_item'       => __( 'Parent Priority', 'helpdesk' ),
            'parent_item_colon' => __( 'Parent Priority:', 'helpdesk' ),
            'edit_item'         => __( 'Edit Priority', 'helpdesk' ),
            'update_item'       => __( 'Update Priority', 'helpdesk' ),
            'add_new_item'      => __( 'Add New Priority', 'helpdesk' ),
            'new_item_name'     => __( 'New Priority Name', 'helpdesk' ),
            'menu_name'         => __( 'Prioritise', 'helpdesk' ),
        );

        $args = array(
            'hierarchical'      => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'show_in_menu'      => false,
            'query_var'         => true,
            'show_in_rest'      => true,
            'rewrite'           => array( 'slug' => 'priority' ),
        );

        register_taxonomy( 'ticket_priority', array( 'ticket' ), $args );
    }
}

add_action( 'init', array( 'Helpdesk\Admin\Taxonomy', 'category' ) );
add_action( 'init', array( 'Helpdesk\Admin\Taxonomy', 'types' ) );
add_action( 'init', array( 'Helpdesk\Admin\Taxonomy', 'priority' ) );
