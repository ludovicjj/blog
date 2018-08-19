<div class="col-sm-12">
	<h1><?= $post->getTitle();?></h1>
	<small>Par <?= $post->getAuthor();?>, le <?= $post->getDay() .' '.$post->getMonth().' '.$post->getYear();?></small>
	<p><strong><?= $post->getIntro();?></strong></p>
	<p><?= $post->getContent();?></p>
</div>