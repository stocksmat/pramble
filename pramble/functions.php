<?php 



	   /**
	   		===========================================================
				Enqueue scripts
			===========================================================
		 
		
					 * @param string $handle Script name
					 * @param string $src Script url
					 * @param array $deps (optional) Array of script names on which this script depends
					 * @param string|bool $ver (optional) Script version (used for cache busting), set to null to disable
					 * @param bool $in_footer (optional) Whether to enqueue the script before </head> or before </body>
		 */
		function pramble_script_enqueue() {
				// wp_enqueue_script( 'jquery', get_template_directory_uri() . '/bootstrap/js/jquery.min.js', array(), '1.0.0', true);
				// wp_enqueue_script( 'customjs1', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js/', array(), '1.0.0', true );
				// wp_enqueue_script( 'ieviewportbugworkaround', get_template_directory_uri() . '/assets/js/ie10-viewport-bug-workaround.js', array(), null, true);
				// wp_enqueue_style( 'customstyle', get_template_directory_uri() . '/css/pramble.css', array(), '1.0.0', 'all' ); 
				// wp_enqueue_style( 'customstyle2', get_template_directory_uri() . '/bootstrap/css/bootstrap.css', array(), '1.0.0', 'all' );
				// //wp_enqueue_style( 'customstyle1', get_template_directory_uri() . '/css/foundation.css', array(), '6.0.0', 'all' );
				// //wp_enqueue_script( 'customjs', get_template_directory_uri() . '/js/pramble.js/', array(), '1.0.0', true );

			    // enqueue the scripts for the site//
						wp_deregister_script( 'jquery' );
			            wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', false, null, true);// the true arg tells wordpress to load the js in before the closing head tag

			            wp_deregister_script( 'bootstrap' );
			            wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', false, null, true);

			            wp_deregister_script( 'ieviewportbugworkaround' );
			            wp_enqueue_script( 'ieviewportbugworkaround', get_template_directory_uri() . '/assets/js/ie10-viewport-bug-workaround.js', false, null, true);

	  

	           wp_deregister_style( 'bootstrap' );
	           wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.css', false, null, 'all');
	           wp_enqueue_style( 'customstyle', get_template_directory_uri() . '/css/pramble.css', array(), '1.0.0', 'all' ); 
				
		}

	
		add_action( 'wp_enqueue_scripts', 'pramble_script_enqueue' );

			/*
			===========================================================
				Theme support functions
			===========================================================
			*/

		function pramble_theme_setup() {

			add_theme_support( 'title-tag' );    
    
		    add_theme_support( 'post-thumbnails' );

		    set_post_thumbnail_size( 825, 510, true );

			add_theme_support('custom-background' );

			add_theme_support('custom-header' );

			add_theme_support('post-thumbnails' );

			add_theme_support('post-formats', array ('aside','image','video') );

			add_theme_support( 'html5', array(
	        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	    	) );

	    	add_theme_support( 'custom-logo', array(
				'height'      => 100,
				'width'       => 400,
				'flex-height' => true,
				'flex-width'  => true,
				'header-text' => array( 'pramble', '' ),
				) );

			/*
			===========================================================
				Activate menues
			===========================================================
			*/
						//add_theme_support('menus');	
			//register_nav_menu( 'primary', 'Primary Header Navigation' );
			//register_nav_menu( 'secondary', 'Footer Navigation' );
			register_nav_menus( array(
			'primary' => __( 'Primary Menu',      'pramble' ),
			 //'secondary'=>__( 'Footer Navigation', 'pramble'),
			 'social'  => __( 'Social Links Menu', 'pramble' ),
			  ) );

			}

			add_action('init','pramble_theme_setup');



			require_once "inc/bootstrap/wp_bootstrap_navwalker.php";

			/*
			===========================================================
				sidebar functions
			===========================================================
			*/
			function pramble_widget_setup() {
		   /**
			* Creates a sidebar
			* @param string|array  Builds Sidebar based off of 'name' and 'id' values.
			*/
			$args = array(
				'name'          =>  'Sidebar',
				'id'            => 'sidebar-1',
				'description'   => 'standard sidebar',
				'class'         => 'custom',
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h2 class="widget-title">',
				'after_title'   => '</h2>',
			);
		
			register_sidebar( $args );
	
			}

			add_action('widgets_init','pramble_widget_setup' );

			/*
			===========================================================
				sidebar functions
			===========================================================
			*/
			function pramble_remove_version(){
				return '';
			}	

			add_filter('the_generator', 'pramble_remove_version' );
			/*
			===========================================================
				custom post types
			===========================================================
			*/

			function pramble_custom_post_type (){
	
	$labels = array(
		'name' => 'Community',
		'singular_name' => 'Community',
		'add_new' => 'Add Item',
		'all_items' => 'All Items',
		'add_new_item' => 'Add Item',
		'edit_item' => 'Edit Item',
		'new_item' => 'New Item',
		'view_item' => 'View Item',
		'search_item' => 'Search Community',
		'not_found' => 'No items found',
		'not_found_in_trash' => 'No items found in trash',
		'parent_item_colon' => 'Parent Item'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revisions',
		),
		'taxonomies' => array('category', 'post_tag'),
		'menu_position' => 5,
		'exclude_from_search' => false
	);
	register_post_type('community',$args);
}
			add_action('init','pramble_custom_post_type');





