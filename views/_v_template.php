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
		        <li><a href='/posts'>Stream</a></li>
		        <li><a href='/posts/users'>Blabbrs</a></li>				
				
				<!-- Menu options for users who are not logged in -->
		        <?php else: ?>
				<li><a href='/users/signup'>Sign up</a></li>
				<li><a href='/users/login'>Log in</a></li>
				<li><a href='/about'>About</a></li>
				
				<li><a href='/'>Home</a></li>
		        <?php endif; ?>
		        
		        <?php if($user): ?>
		        <p class="welcome">Hi<?php if($user) echo ', '.$user->first_name; ?></p>
		        <?php endif; ?>
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
			<p><strong><?=APP_NAME?></strong></p>
				<img src="../images/blabbr-logo-sm-speech-long.png" alt="Blabbr logo" class="footericon" />
			<span class="speech">Blabbr is the place for you to tell everyone what you're thinking, as though anybody actually cares!</span>
		</span><!-- /.primary -->
	
		
			<span class="features"><strong>Now with bonus features!</strong><br>
								<ul>
									<li>Add a photo to your profile!</li>
									<li>Edit or delete your embarrassing Blabs!</li>
									<li>More cool stuff!</li>
								</ul>
			</span>
	
			</address><!-- /#about -->
		<p>© 2013 Frank Aveni</p>
	</footer><!-- /#contentinfo -->

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</body>
</html>