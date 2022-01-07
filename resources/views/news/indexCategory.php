<h1>Категории новостей</h1>
<br>
<?php foreach ($newsCategory as $newsItem): ?>
    <div>
        <strong><a href="/news/<?=$newsItem['id_category']?>"><?=$newsItem['title']?></a></strong>
        <hr>
    </div>
<?php endforeach; ?>
