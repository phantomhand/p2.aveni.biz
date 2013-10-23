<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title><?php if(isset($title)) echo $title; ?></title>						
	<!-- Controller Specific JS/CSS -->
	<link rel="stylesheet" href="/css/app.css" type="text/css">
    <!--[if IE]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<!--[if lte IE 7]>
	<script src="js/IE8.js" type="text/javascript"></script><![endif]-->
	<!--[if lt IE 7]>
	<link rel="stylesheet" type="text/css" media="all" href="css/ie6.css"/><![endif]-->
    
    <!-- Controller Specific CSS/JS -->
    <?php if(isset($client_files_head)) echo $client_files_head; ?>	
</head>

<header id="banner" class="body">
	<img src="../images/blabbr-logo.png" alt="Blabbr logo" class="logo" width="200" height="147"/>
		<h1><a href="/">Blabbr<br></a></h1>
		<p><strong>Pretend anybody cares!<strong></p>
	
		<!-- Navigation -->
		<nav>
			<ul>
			    <!-- Menu for users who are logged in -->
		        <?php if($user): ?>
		        <li><a href='/users/logout'>Logout</a></li>
		        <li><a href='/users/profile'>Profile</a></li>
		        <li><a href=''>Stream</a></li>
		        	<p class="welcome">Welcome<?php if($user) echo ', '.$user->first_name; ?></p>
				
				
				<!-- Menu options for users who are not logged in -->
		        <?php else: ?>
				<li><a href='/users/signup'>Sign up</a></li>
				<li><a href='/users/login'>Log in</a></li>
				<li><a href=''>About</a></li>
		        <?php endif; ?>
		        
		        <li><!--class="active"--><a href='/'>Home</a></li>
			</ul>
		</nav><!-- End Navigation -->
</header><!-- /#banner -->

<body id="index" class="home">

	<?php if(isset($content)) echo $content; ?>

	<?php if(isset($client_files_body)) echo $client_files_body; ?>
	
	<br>

	<footer id="contentinfo" class="body">
		<address id="about" class="vcard body">
		<span class="primary">
				<p style="margin-top: -10px;"><strong><?=APP_NAME?></strong></p>
			<span class="role">Blah Blah Blah Blah</span>
		</span><!-- /.primary -->
	
		<img src="../images/blabbr-logo-sm.png" alt="Blabbr logo" class="photo" />
			<span class="bio">Blabbr is the place for you to tell everyone what you're thinking, as though anybody actually cares!</span>
	
			</address><!-- /#about -->
		<p>© 2013 Frank Aveni</p>
	</footer><!-- /#contentinfo -->

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</body>
</html>