<h1>voici la liste des posts</h1>

<div class="col-sm-8">
	<?php for($i = 0; $i < $paging; $i++): ?>
	<a class="btn btn-primary" href="index.php?p=posts&page=<?=$i+1;?>"><?= $i+1; ?></a>
	<?php endfor; ?>
</div>