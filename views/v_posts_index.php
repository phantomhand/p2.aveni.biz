<section id="content" class="body">

	<form method='POST' action='/posts/p_add'>

	    <label for='content'>Blab away:</label><br>
	    <textarea style="width: 715px;" name='content' id='content'></textarea>
	
	    <input type='submit' value='Add new Blab'>

	</form>
	
	<br>
		<hr>
	<br>

<?php foreach($posts as $post): ?>

	<article class="blab">
	
		<img class="avatar" src="../images/avatar-question-sm.jpg"/>
	
	    <h1 class="postusername"><?=$post['first_name']?> <?=$post['last_name']?></h1>

	    <p><?=$post['content']?>
		
		<br>
	    <time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>">
	        <?=Time::display($post['created'])?>
	    </time>
	    <br>
	    <br>
	    </p>
	
	</article>

<?php endforeach; ?>

</section>