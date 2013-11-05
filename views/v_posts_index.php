<aside id="featured" class="body">
	<article>
		<form method='POST' action='/posts/p_add'>
			<label for='content'>Add a new Blab:</label><br>
			<textarea style="width: 715px;" name="content" id='content'></textarea>
			
			<input type='submit' value='Blab away!' class="button" style="float: right; margin-top: -12px;">	
		</form>
	
		<br>
		<hr>
		<br>
		
		
		<h2>Latest Blabs</h2>
		
	
			<?php foreach($posts as $post):?>					
			
				<article class="blab">
					<!-- If set, print this user's image -->
					<?php if(empty($post['image'])): ?>
					<img class="avatar" src="../images/avatar-question-sm.jpg" height="80" width="80"  alt="Blabbr user pic"/>
					
					<!-- If not, print the default image -->
					<?php else: ?>
					<img class="avatar" src="<?=$post['image']?>" height="80" width="80"  alt="Blabbr user pic"/>
					<?php endif; ?>
					
					<!-- Show the post info and content -->
					<h1 class="postusername"><?=$post['first_name']?> <?=$post['last_name']?></h1>
						<p class="blabtext"><?=$post['content']?>

						<br>
						<br>
							
							<!-- If posted by this user, show a button allowing deletion -->
						    <?php if($user): ?>
						    	<form method='POST' action='/posts/p_delete'>
						    		<input type="hidden" name="post_id" value="<?=$post['post_id']?>">
							       	<input type="submit" value="Delete" class="deletebutton">
							    </form>
							<?php else: ?>			    				    
						    
						    <?php endif; ?>
						    <br>
							<time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>">
							<?=Time::display($post['created'])?>
							</time>
							
						</p>
				</article>
				    
			<?php endforeach; ?>
			
			<?php if (!$posts): ?>
			        <div style="color: red;">
			            You're not currently following Blabbrs! Why not <a href="posts/users/">add some</a>?
			        </div>
			        <br>
			<?php endif; ?>
	</article>
</aside>