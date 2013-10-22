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
	<img src="../images/blabber-logo.png" alt="Blabber Logo" class="logo" />
	<h1><a href="/">Blabber<br></a></h1>
	<p><strong>Pretend Anyone Cares!<strong></p>
	<p class="welcome">Welcome<?php if($user) echo ', '.$user->first_name; ?></p>
 
	<nav><ul>
		<li><!--class="active"--><a href='/'>Home</a></li>
		
		 <!-- Menu for users who are logged in -->
        <?php if($user): ?>
		<li><a href='/users/logout'>Logout</a></li>
		<a href='/users/profile'>Profile</a>
		
		<!-- Menu options for users who are not logged in -->
        <?php else: ?>
 
		<li><a href='/users/signup'>Sign up</a></li>
		<li><a href='/users/login'>Log in</a></li>

        <?php endif; ?>
	</ul></nav>
 
</header><!-- /#banner -->

<body id="index" class="home">
            

    </div>

    <br>
    
	<?php if(isset($content)) echo $content; ?>

	<?php if(isset($client_files_body)) echo $client_files_body; ?>
	
	<footer id="contentinfo" class="body">
	<address id="about" class="vcard body">
		<span class="primary">
			<strong><a href="#" class="fn url">Blabber</a></strong>
 
			<span class="role">Blah Blah Blah</span>
		</span><!-- /.primary -->
		
		<img src="../images/blabber-logo-sm.png" alt="Blabber Logo" class="photo" />
		<span class="bio">Blabber is the place for you to tell everyone what you're thinking as though anybody actually cares!</span>
 
	</address><!-- /#about -->
	<p>© 2013 <a href="">Phantom Hand</a>.</p>
</footer><!-- /#contentinfo -->

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</body>
</html>