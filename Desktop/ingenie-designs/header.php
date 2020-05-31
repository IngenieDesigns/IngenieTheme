<!DOCTYPE html>
<html <?php language_attributes(); ?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	
    <meta name="author" content="dexter" >

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head(); ?>
  </head>

  <body <?php body_class( $class ); ?>>
  <div class="conntainer-fluid darkmint">
  <div class="container">
	  <div class="row">
		  <div class="d-sm-12 d-md-6 d-lg-block col-lg-3"><img src="//ingeniedesigns.co.uk/wp-content/uploads/2020/04/logocompressed2.png" alt="Ingenie Designs Logo" /></div>
		  <!-- <div class="headerego col-xs-4 col-sm-9 col-md-3 col-lg-3"><img src="<?php header_image(); ?>" width="100%;" alt="" /></div> -->
  <!-- <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">
      <?php
            if (display_header_text()==true){
                echo '<p>'.get_bloginfo('description').'</p>';                            
            } else{
                  //do something
            }
          ?>   </div> -->
		  <div class="col-lg-5 col-md-6 col-sm-6 hidden-xs">
			  
		  </div>
  <div class="col-lg-4 col-md-6 col-sm-6 hidden-xs">
  <?php wp_nav_menu( array( 'theme_location' => 'topbar' ) ); ?>
  </div>
  </div>
  </div>
	  </div>
  <div style="background-color:#E8E8E8;" class="fluid-container darkmint">
  <div class="container">
<div  class="row">
	<!-- <div class="d-sm-none d-md-none d-lg-block col-lg-3"><img src="http://ingeniedesigns.co.uk/wp-content/uploads/2019/05/60264718_883164938710440_4082613590215884800_n.png" width="100%;" alt="" /></div> -->
			<!-- <div class="headerego col-xs-4 col-sm-9 col-md-3 col-lg-3"><img src="<?php header_image(); ?>" width="100%;" alt="" /></div> -->
		<div style="padding-top:0%; margin-bottom:0px; margin-left: -15px;" class="col-xs-8 col-sm-12 col-md-9 col-lg-12">
			<?php wp_nav_menu( array( 'theme_location' => 'navbar' ) ); ?>
</div>
	
	  </div>
	
		
	</div>
	</div>
    

    <div class="fluid-container">