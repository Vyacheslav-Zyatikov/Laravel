<h1>Новости</h1>
<br>
<?php foreach ($news as $newsItem): ?>
    <div>
        <strong><a href="/news/<?=$newsItem['id_category']?>/<?=$newsItem['id']?>"><?=$newsItem['title']?></a></strong>
        <p><?=$newsItem['description']?></p>
        <hr>
    </div>
<?php endforeach; ?>
