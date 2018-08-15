<div class="col-sm-8">
	<?php foreach($post AS $postList): ?>
	<h1><a href="<?= $postList->getUrl();?>"><?= $postList->getTitle();?></a></h1>
	<small>Par <?= $postList->getAuthor();?>, le <?= $postList->getDay() .' '.$postList->getMonth().' '.$postList->getYear();?></small>
	<p><?= $postList->getIntro();?></p>
	<?php endforeach; ?>
</div>

<div class="col-sm-8">
	<?php for($i = 0; $i < $paging; $i++): ?>
	<a class="btn btn-primary" href="index.php?p=posts&page=<?=$i+1;?>"><?= $i+1; ?></a>
	<?php endfor; ?>
</div>