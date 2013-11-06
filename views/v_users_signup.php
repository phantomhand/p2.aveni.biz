<aside id="featured" class="body">
	<article>
		<form method='POST' action='/users/p_signup'>
			
			<h2>Sign Up</h2>
			
		    <p><strong>First Name<br>
		    <input type='text' name='first_name' class="input" required>
		    <br>
		
		    Last Name<br>
		    <input type='text' name='last_name' class="input" required>
		    <br>
		
		    Email<br>
			<input type='text' name='email' class="input" required title="Must be a valid email address">
		    <br>
		
		    Password<br>
		    <input type='password' name='password' class="input" required>
		    </strong></p>
		
		    <input type='submit' class="button" value='Sign up'>
	
		</form>
		
		<?php if ($error):?>
				<br>
			        <div class="error">
			            You're already signed up! Why not <a href="/users/login">log in</a>?
			        </div>
		<?php endif; ?>
	</article>
</aside>

