<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Новый агрегатор новостей</title>
</head>
<body>
<header>
    <menu>
        <ul>
            <li>
                <a href="/news/category">Категории новостей</a>
            </li>
            <li>
                <a href="/auth">Страница авторизации</a>
            </li>
            <li>
                <a href="/news/addnews">Страница добавления новостей</a>
            </li>
        </ul>
    </menu>
</header>
<main>
    <div>
        <h2>Новый агрегатор новостей</h2>
        <p>Точка сбора самых интересных и актуальных новостей российских онлайн-медиа. <br>
            В проекте участвуют отобранные нами русскоязычные издания. Вы можете выбрать конкретные темы и
            получить выборку новостей по ним. <br> При клике на заголовок новости вы попадете на полнотекстовый
            материал на сайте издания.</p>
    </div>
</main>
<footer></footer>
</body>
</html>
