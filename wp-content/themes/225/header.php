<?php
if ($_SERVER['HTTP_HOST'] == 'localhost:8888') {
	$url = '';
} else {
	$url = 'http://146.66.103.28/~neograft/testtwo5.com/';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Blog Template for Bootstrap</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo get_bloginfo( 'template_directory' );?>/style.css" rel="stylesheet">
	<!-- animsition.css -->
	<link rel="stylesheet" href="<?php echo get_bloginfo( 'template_directory' );?>/js/animsition/dist/css/animsition.min.css">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head();?>
</head>

<body <?php body_class(); ?> >

	<header class="header">
		<a href="<?php echo $url ?>"><img class="menu-logo" src="<?php echo get_bloginfo( 'template_directory' );?>/images/nav_logo.png" alt=""></a>
		<input class="menu-btn" type="checkbox" id="menu-btn" />
	  <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
	  <ul class="menu">
			<li><a href="<?php echo $url ?>/" class="animsition-link">Home</a></li>
	    <li><a href="<?php echo $url ?>services/" class="animsition-link">Services</a></li>
	    <li><a href="<?php echo $url ?>portfolio/" class="animsition-link">Portfolio</a></li>
	    <li><a href="<?php echo $url ?>contact/">Contact</a></li>
	    <li><a href="<?php echo $url ?>hiring/">Hiring</a></li>
	  </ul>
</header>

	<div class="container-fluid animsition">
