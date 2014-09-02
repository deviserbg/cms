				
<!-- Content -->
<div id="content" class="8u skel-cell-important">
    <section>
        <header>
            <h2><?=$article['Article']['title'] ?></h2>
            <span class="byline"><?=$article['Article']['subtitle'] ?></span>
        </header>
        <?php if(!empty($article['ArticleImage'])): ?>
        <p><a href="#" class="image full"><img src="<?=$article['ArticleImage'][0]['path'] ?>" alt="<?=$article['ArticleImage'][0]['title'] ?>"></a></p>
        <?php endif; ?>
        <p><?=$article['Article']['content'] ?></p>
    </section>
</div>
<!-- /Content -->

<!-- Sidebar -->
<div id="sidebar" class="4u">
    <section>
        <header>
            <h2>Gravida praesent</h2>
            <span class="byline">Praesent lacus congue rutrum</span>
        </header>
        <p>Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum. Maecenas luctus lectus at sapien. Consectetuer adipiscing elit.</p>
        <ul class="default">
            <li><a href="#">Pellentesque quis lectus gravida blandit.</a></li>
            <li><a href="#">Lorem ipsum consectetuer adipiscing elit.</a></li>
            <li><a href="#">Phasellus nec nibh pellentesque congue.</a></li>
            <li><a href="#">Cras aliquam risus pellentesque pharetra.</a></li>
            <li><a href="#">Duis non metus commodo euismod lobortis.</a></li>
            <li><a href="#">Lorem ipsum dolor adipiscing elit.</a></li>
        </ul>
    </section>
</div>
<!-- Sidebar -->
