<?php
/**
 * Plugin Name: Master
 * Plugin URI: http://www.mywebsite.com/my-first-plugin
 * Description: Plugin for subscriber functionality
 * Version: 1.0
 * Author: Alex Hutchings
 * Author URI: http://www.mywebsite.com
 */

// add_menu_page(
//     'Subscribers',
//     'Subscribers',
//     'wpseo_manage_network_options',
//     '/wp-admin/edit.php?post_type=page'  
// );

add_action('init', 'register_subscriber_page');
add_action('init', 'register_email_page');

function register_subscriber_page()
{
    register_post_type(
		'subscriber',
		array(
			'labels'                => array(
                'name'                     => _x( 'Subscribers', 'post type general name' ),
                'singular_name'            => _x( 'Subscriber', 'post type singular name' ),
                'add_new'                  => _x( 'Add New', 'subscriber' ),
                'add_new_item'             => __( 'Add New Subscriber' ),
                'edit_item'                => __( 'Edit Subscriber' ),
                'new_item'                 => __( 'New Subscriber' ),
                'view_item'                => __( 'View Subscriber' ),
                'view_items'               => __( 'View Subscribers' ),
                'search_items'             => __( 'Search Subscribers' ),
                'not_found'                => __( 'No subscribers found.' ),
                'not_found_in_trash'       => __( 'No subscribers found in Trash.' ),
                'all_items'                => __( 'All Subscribers' ),
                'archives'                 => __( 'Subscriber Archives' ),
                'attributes'               => __( 'Subscriber Attributes' ),
                'insert_into_item'         => __( 'Insert into post' ),
                'uploaded_to_this_item'    => __( 'Uploaded to this subscriber' ),
                'filter_items_list'        => __( 'Filter subscribers list' ),
                'items_list_navigation'    => __( 'Subscribers list navigation' ),
                'items_list'               => __( 'Subscribers list' ),
                'item_published'           => __( 'Subscriber published.' ),
                'item_published_privately' => __( 'Subscriber published privately.' ),
                'item_reverted_to_draft'   => __( 'Subscriber reverted to draft.' ),
                'item_scheduled'           => __( 'Subscriber scheduled.' ),
                'item_updated'             => __( 'Subscriber updated.' ),
			),
            'public'                => true,
            'show_in_menu'          => true,
            'show_ui' => true,
			'menu_position'         => 22,
			'menu_icon'             => 'dashicons-email',
			'hierarchical'          => false,
			'rewrite'               => false,
			'query_var'             => false,
			'supports'              => array( 'title', 'custom-fields',  'revisions', 'post-formats' ),
        )
    );
}

function register_email_page()
{
    register_post_type(
		'Emails',
		array(
			'labels'                => array(
                'name'                     => _x( 'Emails', 'post type general name' ),
                'singular_name'            => _x( 'Email', 'post type singular name' ),
                'add_new'                  => _x( 'Add New', 'email' ),
                'add_new_item'             => __( 'Add New Email' ),
                'edit_item'                => __( 'Edit Email' ),
                'new_item'                 => __( 'New Email' ),
                'view_item'                => __( 'View Email' ),
                'view_items'               => __( 'View Emails' ),
                'search_items'             => __( 'Search Emails' ),
                'not_found'                => __( 'No emails found.' ),
                'not_found_in_trash'       => __( 'No emails found in Trash.' ),
                'all_items'                => __( 'All Emails' ),
                'archives'                 => __( 'Post Archives' ),
                'attributes'               => __( 'Post Attributes' ),
                'insert_into_item'         => __( 'Insert into post' ),
                'uploaded_to_this_item'    => __( 'Uploaded to this subscriber' ),
                'filter_items_list'        => __( 'Filter emails list' ),
                'items_list_navigation'    => __( 'Emails list navigation' ),
                'items_list'               => __( 'Emails list' ),
                'item_published'           => __( 'Email published.' ),
                'item_published_privately' => __( 'Email published privately.' ),
                'item_reverted_to_draft'   => __( 'Email reverted to draft.' ),
                'item_scheduled'           => __( 'Email scheduled.' ),
                'item_updated'             => __( 'Email updated.' ),
			),
            'public'                => true,
            'show_in_menu'          => true,
            'show_ui' => true,
			'menu_position'         => 22,
			'menu_icon'             => 'dashicons-email',
			'hierarchical'          => false,
			'rewrite'               => false,
			'query_var'             => false,
			'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'post-formats' ),
        )
    );
}