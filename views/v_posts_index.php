<section id="content" class="body">

<?php foreach($posts as $post): ?>

	<article class="blab">
	
		<img class="avatar" src="<?=profile_image?>"/>
	
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