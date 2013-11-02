<aside id="featured" class="body home">
	<article>
	
		<div class="signup">
			<h2>Welcome to <?=APP_NAME?>!</h2>
						
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pretium orci a molestie commodo. 
			Aliquam sed metus libero. Maecenas adipiscing tempus accumsan.</p>
			
			<form method='POST' action='/users/signup'><input type="submit" value="Sign up" class="button">
			</form>
		    
		</div>
		
		<div class="login">
		
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
			    
		    <?php if (isset ($error) ): ?>
		        <div class='error' style="color: red;">
		            <p><strong>Login failed.<br>
		            Please check your email and password.</strong></p>
		            <?php echo $error ?>
		        </div>
		        <br>
		    <?php endif; ?>
		 </div>
	</article>
</aside>