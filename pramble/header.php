<!DOCTYPE html>
 	<html <?php language_attributes( ); ?>>
 		<head>
 			<meta charset="<?php bloginfo('charset' ); ?>">
            <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
           <!-- Bootstrap core CSS -->
        <!-- Custom styles for this template -->
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
 			<title><?php bloginfo('name');?> <?php wp_title('|' ); ?></title>
			 	<?php wp_head(); ?>
 		</head>

 		<?php 
	 		if (is_front_page() ):
	 			$pramble_classes = array ('pramble-class', 'my-class');
	 		else:
	 			$pramble_classes = array ('no-pramble-class');
	 		endif;
 		
 		?>
 	<body <?php body_class( $pramble_classes ); ?>>
    <header class="">
     	 <nav class="navbar navbar-default" role="navigation"> 
                    <div class="container-fluid"> 
                        <div class="navbar-header"> 
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> 
                                <span class="sr-only"><?php _e( 'Toggle navigation', 'pramble' ); ?></span> 
                                <span class="icon-bar"></span> 
                                <span class="icon-bar"></span> 
                                <span class="icon-bar"></span> 
                            </button>                         
                            <a class="navbar-brand" href="<?php echo esc_url( get_home_url() ); ?>">
<!--                                 <?php //bloginfo( 'name' ); ?>
 -->                                <img src=" <?php  bloginfo('stylesheet_directory');?>/images/logo.png" border="0" alt="Logo"> 
                            </a>                         
                        </div>                     
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> 
                            <?php wp_nav_menu( array(
                                    'theme_location' => 'primary',
                                    'menu_class' => 'nav navbar-nav navbar-right',
                                    'container' => '',
                                    'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                                    'walker' => new wp_bootstrap_navwalker()
                            ) ); ?> 
                        </div>                     
                    </div>                 
                </nav>
      		</header>

  		


