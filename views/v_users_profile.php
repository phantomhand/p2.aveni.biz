<aside id="featured" class="body">
	<article>
		
		<figure>
			<?php if ( ($user->image == NULL) ): ?> 
				<img class="avatar-lg" src="../images/avatar-question.jpg" alt="Blabbr User Pic" height="200" width="200"/>
			
			<?php elseif (isset ($user->image) ): ?>
				<img class="avatar-lg" src="<?=$user->image?>" alt="Blabbr User Pic" height="200" width="200"/>
			<?php endif; ?>			
					
				<label for="file">Update your profile image</label>
				<form method='POST' enctype="multipart/form-data" action='/users/add_image/'>
					<input type='file' name='image'>
					<input type='submit' class="button">
				</form>
			</div>
		</figure>
		
		<hgroup>
			<h2><?=$user->first_name?>'s Profile</h2>
		</hgroup>
		
		<p>
		<strong>Name:</strong> <?=$user->first_name?> <?=$user->last_name?><br>
		
		<strong>Email:</strong> <?=$user->email?><br>
		
		<form method='POST' action='/users/p_add_bio'>
		<label for='bio'>Bio:</label><br>
		<textarea style="width: 400px; height: 80px;" name='content' id='content'></textarea><br>
		<input type='submit' value='Add bio' class="button" style="float: left; margin-top: -12px;">
		</p>
		<!--<p>
		 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pretium orci a molestie commodo. 
		 Aliquam sed metus libero. Maecenas adipiscing tempus accumsan. Mauris venenatis dictum arcu at interdum. 
		 Vestibulum fermentum augue id scelerisque egestas. Nam malesuada, mauris placerat malesuada consectetur.
		</p>-->
	
	</article>
</aside><!-- /#featured -->

