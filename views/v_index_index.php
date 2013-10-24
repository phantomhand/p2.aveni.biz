<aside id="featured" class="body">
	<article>
	
		<div class="signup">
			<h2>Welcome to <?=APP_NAME?>!</h2>
						
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pretium orci a molestie commodo. Aliquam sed metus libero. Maecenas adipiscing tempus accumsan.</p>
			
			<button type="button" href="users/signup">Sign up</button>
		</div>
		
		<div class="login">
			<h2>Sign In</h2>
			
		 	<form method='POST' action='/users/p_login'>
			    <p>Email<br>
			    <input type='email' name='email' style="height: 15px; width: 200px; margin-bottom: 5px;" required title="Must be a valid email address">
			    <br>		
			    Password<br>
			    <input type='password' name='password' style="height: 15px; width: 200px;" required>
			    <br>
			    </p>
		    
			    <?php if (isset ($error) ): ?>
			        <div class='error' style="color: red;">
			            Login failed. Please double check your email and password.
			        </div>
			        <br>
			    <?php endif; ?>
			
			    <input type='submit' value='Log in'>
			</form>
		 </div>
	</article>
</aside>