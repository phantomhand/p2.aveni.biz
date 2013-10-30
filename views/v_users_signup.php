<aside id="featured" class="body">
	<article>
		<form method='POST' action='/users/p_signup'>
			
			<h2>Sign Up</h2>
			
		    First Name<br>
		    <input type='text' name='first_name' class="input">
		    <br>
		
		    Last Name<br>
		    <input type='text' name='last_name' class="input">
		    <br>
		
		    Email<br>
		    <input type='text' name='email' class="input">
		    <br>
		
		    Password<br>
		    <input type='password' name='password' class="input">
		    <br>
		    <br>
		
		    <input type='submit' value='Sign up'>
	
		</form>
		
		<?php if (isset ($error) ): ?>
		        <div class='error' style="color: red;">
		            You're already signed up! Why not <a href="/users/login">log in</a>?
		        </div>
		        <br>
		<?php endif; ?>
	</article>
</aside>