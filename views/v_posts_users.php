<aside id="featured" class="body">
	<article>
		<h2>Who's Blabbing?</h2>
			<br>
		
	
			<?php foreach($users as $user): ?>
			
				<div class="userlisting">
					
					<!-- If set, print this user's image -->
					<?php if(empty($user['image'])): ?>
				    <img class="avatar-mini" src="/images/avatar-question-mini.png" height="40" width="40" alt="Blabbr user pic"/>
				    
				    <!-- If not, print the default image -->
				    <?php else: ?>
				    <img class="avatar-mini" src="<?=$user['image']?>" height="40" width="40" alt="Blabbr user pic"/>
				    <?php endif; ?>
				    
				    <!-- Print this user's name -->
				    <b><?=$user['first_name']?> <?=$user['last_name']?></b>
				
				    <!-- If there exists a connection with this user, show a unfollow link -->
				    <?php if(isset($connections[$user['user_id']])): ?>
				        <a class="followbutton" href='/posts/unfollow/<?=$user['user_id']?>'>Unfollow</a>
				
				    <!-- Otherwise, show the follow link -->
				    <?php else: ?>
				        <a class="followbutton" href='/posts/follow/<?=$user['user_id']?>'>Follow</a>
				    <?php endif; ?>
			    </div>
			
			    <br><br>	
			<?php endforeach; ?>
	</article>
</aside>
