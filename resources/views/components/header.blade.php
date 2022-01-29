<header>
    <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7 py-4">
                    <h4 class="text-white">О нас</h4>
                    <p class="text-muted">Точка сбора самых интересных и актуальных новостей российских онлайн-медиа.
                        В проекте участвуют отобранные нами русскоязычные издания. Вы можете выбрать конкретные темы и
                        получить выборку новостей по ним. При клике на заголовок новости вы попадете на полнотекстовый
                        материал на сайте издания.</p>
                </div>
                <div class="col-sm-4 offset-md-1 py-4">
                    <nav>
                        <ul>
                            <li>
                                <a href="{{ route('indexCategories') }}">Категории новостей</a>
                            </li>
                            <li>
                                <a href="/auth">Страница авторизации</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.news.create') }}">Страница добавления новостей</a>
                            </li>
                            <li>
                                <a href="{{ route('user.feedback.index') }}">Оставить отзыв</a>
                            </li>
                            <li>
                                <a href="{{ route('user.request.index') }}">Запрос на выгрузку данных.</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a href="/" class="navbar-brand d-flex align-items-center">
                <strong>Новый агрегатор новостей</strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader"
                    aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</header>
