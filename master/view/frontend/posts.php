<div class="col-sm-8">
    <?php foreach ($post as $posts) : ?>
    <h1><a href="<?= $posts->getUrl();?>"><?= $posts->getTitle();?></a></h1>
    <small>
        Par <?= $posts->getAuthor();?>, 
        le <?= $posts->getDay() .' '.$posts->getMonth().' '.$posts->getYear();?>
    </small>
    <p><?= $posts->getIntro();?></p>
    <?php endforeach; ?>
</div>

<div class="col-sm-8">
    <?php for ($i = 0; $i < $paging; $i++) : ?>
    <a class="btn btn-primary" href="index.php?p=posts&page=<?=$i+1;?>"><?= $i+1; ?></a>
    <?php endfor; ?>
</div>