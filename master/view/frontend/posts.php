<div class="col-sm-8">
	<?php foreach($post AS $post): ?>
	<h1><?= $post->getTitle();?></h1>
	<small>Par <?= $post->getAuthor();?>, le <?= $post->getDay() .' '.$post->getMonth().' '.$post->getYear();?></small>
	<p><?= $post->getIntro();?></p>
	<?php endforeach; ?>
</div>

<div class="col-sm-8">
	<?php for($i = 0; $i < $paging; $i++): ?>
	<a class="btn btn-primary" href="index.php?p=posts&page=<?=$i+1;?>"><?= $i+1; ?></a>
	<?php endfor; ?>
</div>