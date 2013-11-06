<aside id="featured" class="body home">
	<article>
	
		<?php if (!$user): ?> <!-- If visitor is not logged in, show Sign up and Log in options -->
			
			<div class="signup"> <!-- Sign up -->
				
				<h2>Welcome to <?=APP_NAME?>!</h2>
							
				<p>Got something on your mind? Don't just think it to yourself... 
				Blab it to anyone who will listen! You can also follow others and see what they are Blabbing about.
				So, what are you waiting for? Sign up now and start Blabbing!</p>
				
				<form method='POST' action='/users/signup'><input type="submit" value="Sign up" class="button">
				</form>
			    
			</div> <!-- Close sign up -->
			
			<div class="login"> <!-- Log in form -->
			
				<h2>Log In</h2>
				
			 	<form method='POST' action='/users/p_login'>
				    <p><b>Email</b><br>
					    <input type='email' name='email' class="input" required title="Must be a valid email address">
					    <br>		
					    <b>Password</b><br>
					    <input type='password' name='password' class="input" required>
					    <br>
				    </p>
				    <input type='submit' value='Log in' class="button">
				</form>
				   
				<br>
				    
			    <?php if (isset ($error) ): ?> <!-- Show an error if the login failed -->
			        <div class='error'>
			            <p><strong>Login failed.<br>
			            Please check your email and password.</strong></p>
			    		<?php echo $error ?>
					</div>
			</div> <!-- Close log in form -->
			
			<br>
			        
		<?php endif;?><!-- Close non-logged in view -->
		    
		<?php else:?> <!-- If user is logged in, show a greeting and a list of features -->
		
			<div class="signup"> <!-- Greeting and list -->
			
				<h2><?php echo $user->first_name; ?>, this is your <?=APP_NAME?>!</h2>
					
				<p><b>What would you like to do? You can:</b></p>			
				<ul>
					<li>View <a href="/users/profile">your profile</a></li>
					<li>Add a <a href="/users/profile">profile image</a></li>
					<li>See <a href="/posts/users">who is Blabbing</a></li>
					<li>Follow <a href="/posts/users">other Blabbrs</a></li>
					<li>Check out the <a href="/posts">latest Blabbs</a></li>			
				</ul>
			</div> <!-- Close list -->
			
			<div class="login"> <!-- Grid image -->
			
			<a href="/posts/users"><img src="/images/user-grid-mini.jpg" alt="Blabbr User Grid" height="184" width="360"></a>
				
			</div> <!-- Close grid image -->
			
		<?php endif;?> <!-- Close logged in view -->
		 
	</article>
</aside>