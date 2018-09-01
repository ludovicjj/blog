<div class="container-fluid conteneur">
    <div class="container bloc-posts">        
        
        <div class="col-lg-9 col-md-12 col-sm-12">
            <div class="row">
                <?php foreach ($post as $posts) : ?>
                <div class="news">
                    <div class="col-sm-12 news-image">
                        <a href="<?= $posts->getUrl();?>"><img src="<?= $posts->getImage();?>"/></a>
                    </div>
                    <div class="col-sm-12 news-text">
                        <h1><a href="<?= $posts->getUrl();?>"><?= $posts->getTitle();?></a></h1>
                        <small>
                            Par <?= $posts->getAuthor();?>, 
                            le <?= $posts->getDay() .' '.$posts->getMonth().' '.$posts->getYear();?>
                        </small>
                        <p><?= $posts->getIntro();?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="col-lg-9 col-md-12 col-sm-12">
            <ul class="pagination justify-content-center">
                <?php for ($i = 0; $i < $paging; $i++) : ?>
                <li class="page-item
                <?php
                if (isset($_GET['page'])) {
                    if ($_GET['page'] == $i +1) {
                         echo 'active';
                    }
                } else {
                    if ($i == 0) {
                        echo 'active';
                    }
                }   
                ?>">
                    <a class="page-link" href="index.php?p=posts&page=<?=$i+1;?>"><?= $i+1; ?></a>
                </li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>