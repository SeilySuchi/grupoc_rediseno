<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
 <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
 <?php header('Content-Type: text/html; charset=UTF-8');?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div class="hideshow menup-mobile" id="menup-mobile">
	  <aside>
	    <a href="#" onclick="toggle('menup-mobile');" class="menup">Menu
	      <div class="lineaverde"></div><div class="lineaverde"></div><div class="lineaverde"></div>
	    </a>
	  </aside>
	  <section>
	      <nav id="nav" class="main-navigation" role="navigation">
	        <?php prana_primary_menu(); ?>
	      </nav>
	  </section>
        </div>

<div class="wrapper">

  <header id="header" class="site-header" role="banner">
	<a href="<?php echo site_url(); ?>">
	  <img class="logogrupocemaco" src="<?php echo site_url(); ?>/wp-content/themes/grupocemaco/images/headers/grupocemaco-header.png"/>
	</a>

	<div class="menu-mobile-boton">
	  <a href="#" onclick="toggle('menup-mobile');" class="menup">Menu
	    <div class="lineaverde"></div><div class="lineaverde"></div><div class="lineaverde"></div>
	  </a>
	</div>

      <div class="menu-desk">
	      <nav id="nav" class="main-navigation" role="navigation">
	        <?php prana_primary_menu(); ?>
	      </nav>
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