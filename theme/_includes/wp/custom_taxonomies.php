<?php

	//create a custom taxonomy name it topics for your posts

	function create_custom_taxonomies() {

		////////////////////////////////////////////
		// "Role" custom taxonomy (Team Member)
		////////////////////////////////////////////
		$roleLabels = array(
			'name' => _x( 'Roles', 'roles' ),
			'singular_name' => _x( 'Role', 'roles' ),
			'search_items' =>  __( 'Search Roles' ),
			'all_items' => __( 'All Roles' ),
			'parent_item' => __( 'Parent Role' ),
			'parent_item_colon' => __( 'Parent Role:' ),
			'edit_item' => __( 'Edit Role' ),
			'update_item' => __( 'Update Role' ),
			'add_new_item' => __( 'Add New Role' ),
			'new_item_name' => __( 'New Role Name' ),
			'menu_name' => __( 'Roles' ),
		);

		register_taxonomy('roles',array('team_member_cpt'), array(
			'hierarchical' => true,
			'labels' => $roleLabels,
			'show_ui' => true,
			'show_in_rest' => true,
			'show_admin_column' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => 'role-group' ),
		));

		////////////////////////////////////////////
		// "Department" custom taxonomy (Team Member)
		////////////////////////////////////////////
		$departmentLabels = array(
			'name' => _x( 'Departments', 'department' ),
			'singular_name' => _x( 'Department', 'department' ),
			'search_items' =>  __( 'Search Departments' ),
			'all_items' => __( 'All Departments' ),
			'parent_item' => __( 'Parent Department' ),
			'parent_item_colon' => __( 'Parent Department:' ),
			'edit_item' => __( 'Edit Department' ),
			'update_item' => __( 'Update Department' ),
			'add_new_item' => __( 'Add New Department' ),
			'new_item_name' => __( 'New Department Name' ),
			'menu_name' => __( 'Departments' ),
		);

		register_taxonomy('department',array('team_member_cpt'), array(
			'hierarchical' => true,
			'labels' => $departmentLabels,
			'show_ui' => true,
			'show_in_rest' => true,
			'show_admin_column' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => 'department' ),
		));

		////////////////////////////////////////////
		// "Resource Type" custom taxonomy (Resource)
		////////////////////////////////////////////
		$resTypeLabels = array(
			'name' => _x( 'Resource Types', 'resource-type' ),
			'singular_name' => _x( 'Resource Type', 'resource-type' ),
			'search_items' =>  __( 'Search Resource Types' ),
			'all_items' => __( 'All Resource Types' ),
			'parent_item' => __( 'Parent Resource Type' ),
			'parent_item_colon' => __( 'Parent Resource Type:' ),
			'edit_item' => __( 'Edit Resource Type' ),
			'update_item' => __( 'Update Resource Type' ),
			'add_new_item' => __( 'Add New Resource Type' ),
			'new_item_name' => __( 'New Resource Type Name' ),
			'menu_name' => __( 'Resource Types' ),
		);

		register_taxonomy('resource-type',array('resource_cpt'), array(
			'hierarchical' => true,
			'labels' => $resTypeLabels,
			'show_ui' => true,
			'show_in_rest' => true,
			'show_admin_column' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => 'resource-type' ),
		));

	}


	add_action( 'init', 'create_custom_taxonomies', 0 );