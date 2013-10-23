<aside id="featured" class="body">
	<article>
		<form method='POST' action='/users/p_login'>
		
			<h2>Log In</h2>
			
		    <p>Email<br>
		    <input type='text' name='email'>
		    <br><br>
		
		    Password<br>
		    <input type='password' name='password'>
		    <br><br> 
		    </p>
	    
		    <?php if (isset ($error) ): ?>
		        <div class='error' style="color: red;">
		            Login failed. Please double check your email and password.
		        </div>
		        <br>
		    <?php endif; ?>
		
		    <input type='submit' value='Log in'>
		</form>
	</article>
</aside>