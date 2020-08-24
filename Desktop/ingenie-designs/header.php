<!DOCTYPE html>
<html <?php language_attributes(); ?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
	
    <meta name="author" content="Dexter" >

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head(); ?>
  </head>

  <body <?php body_class( $class ); ?>>
  <div class="container">
	  <div class="row">
		  <div class="headerego col-4 col-sm-9 col-md-3 col-lg-2"><img src="<?php header_image(); ?>" width="100%;" alt="" /></div>
  <div class="col-lg-8 col-md-6 col-sm-6 col-8">
      <?php
            if (display_header_text()==true){
                echo '<p>'.get_bloginfo('description').'</p>';                            
            } else{
                  //do something
             }
          ?> 
<div class="">
  <?php wp_nav_menu( array( 'theme_location' => 'topbar' ) ); ?>
  </div>          
            </div>
  
  </div>
</div>
	  
	  
    <div class="container">
	<?php wp_nav_menu( array( 'theme_location' => 'navbar' ) ); ?>
    </div>
    <div class="container">