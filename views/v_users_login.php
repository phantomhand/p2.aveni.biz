<aside id="featured" class="body">
	<article>
		<form method='POST' action='/users/p_login'>
		
			<h2>Log In</h2>
			
		    <p><strong>Email<br>
		    <input type='text' name='email' style="height: 15px; width: 200px; margin-bottom: 5px;" required title="Must be a valid email address">
		    <br>
		    		
		    Password<br>
		    <input type='password' name='password' style="height: 15px; width: 200px;" required>
		    <br>
		    </strong></p>
	    
		    <?php if (isset ($error) ): ?>
		        <div class='error'>
		            Login failed. Please double check your email and password.
		        </div>
		        <br>
		    <?php endif; ?>
		
		    <input type='submit' class="button" value='Log in'>
		</form>
	</article>
</aside>