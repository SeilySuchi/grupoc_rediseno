<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="wrapper">

  <header id="header" class="site-header" role="banner">

      <div class="container_16 container_header_top clearfix">
        <div class="grid_16">
	  <img src="<?php get_site_url(); ?>wp-content/themes/grupocemaco/images/headers/grupocemaco-header.png"/>
        </div>
      </div>


      <div class="container_16 clearfix">
        <div class="grid_16">

	  <a href="#" onclick="toggle('menup-mobile');" class="menup">Menu
	    <div class="lineaverde"></div><div class="lineaverde"></div><div class="lineaverde"></div>
	  </a>
	    <div class="hideshow" id="menup-mobile">
	      <nav id="nav" class="main-navigation" role="navigation">
	        <?php prana_primary_menu(); ?>
	      </nav></div>
        </div>
      </div>

  </header>




<script>
function toggle(target){

  var artz = document.getElementsByClassName('hideshow');
  var targ = document.getElementById(target);
  var isVis = targ.style.display=='block';

  // hide all
  for(var i=0;i<artz.length;i++){
     artz[i].style.display = 'none';
  }
  // toggle current
  targ.style.display = isVis?'none':'block';

  return false;
}
</script>