<section id="content" class="body">
	<article>
		<form method='POST' action='/posts/p_add'>
			<label for='content'>Add a new Blab:</label><br>
			<textarea style="width: 715px;" name='content' id='content'></textarea>
			
			<input type='submit' value='Blab away!' class="button" style="float: right; margin-top: -12px;">	
		</form>
	
		<br>
		<hr>
		<br>
		
		<hgroup>
			<h2>Latest Blabs</h2>
		</hgroup>
	
			<?php foreach($posts as $post):?>					
			
				<article class="blab">
					<!-- If set, print this user's image -->
					<?php if(empty($post['image'])): ?>
					<img class="avatar" src="../images/avatar-question-sm.jpg" alt="Blabbr User Pic" height="80" width="80"/>
					
					<!-- If not, print the default image -->
					<?php else: ?>
					<img class="avatar" src="<?=$post['image']?>"/>
					<?php endif; ?>
					
					<!-- Show the post info and content -->
					<h1 class="postusername"><?=$post['first_name']?> <?=$post['last_name']?></h1>
						<p class="blabtext"><?=$post['content']?>
						
							<br>
							<time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>">
							<?=Time::display($post['created'])?>
							</time>
						</p>
				</article>
			<?php endforeach; ?>
			
	</article>
</section>