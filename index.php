<?php require __DIR__ . '/includes/theme.php'; ?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Этно Шик — Магия традиций в каждой детали</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <?php if ($isNight): ?>
    <link rel="stylesheet" href="assets/css/dark.css">
    <?php endif; ?>
</head>

<body>

    <header class="header">
        <div class="header__inner">
            <a href="index.php" class="logo">ЭТНО ШИК</a>

            <nav class="nav">
                <ul class="nav__list">
                    <li><a href="pages/catalog.php" class="nav__link">КАТАЛОГ</a></li>
                    <li><a href="pages/about.php" class="nav__link">О НАС</a></li>
                    <li><a href="pages/promotion.php" class="nav__link">АКЦИЯ </a></li>
                    <li><a href="pages/form.php" class="nav__link">РЕГИСТРАЦИЯ</a></li>
                    <li><a href="pages/login.php" class="nav__link">ВХОД</a></li>

                </ul>
            </nav>

            <div class="header__actions">
                <button class="icon">
                    🛒
                    <span class="cart-badge">0</span>
                </button>
            </div>
        </div>
    </header>


    <section class="hero">
        <div class="hero__inner">

            <div class="hero__content">
                <h1 class="hero__title">Этно Шик</h1>
                <p class="hero__subtitle">Магия традиций в каждой детали</p>
                <p class="hero__text">
                    Одежда, созданная с любовью к культурному наследию народов мира.
                    Натуральные ткани, ручная работа, уникальные узоры.
                </p>
                <a href="pages/catalog.php" class="btn--primary">СМОТРЕТЬ КОЛЛЕКЦИЮ</a>
            </div>

            <div class="hero__image">
                <img src="assets/images/hero.png">
            </div>

        </div>
    </section>


    <section class="features">
        <div class="features__inner">

            <div class="feature-item">
                <div class="feature-icon">🌿</div>
                <h3 class="feature-title">Натуральные ткани</h3>
                <p class="feature-text">Лён, хлопок, шёлк и шерсть от проверенных поставщиков</p>
            </div>

            <div class="feature-item">
                <div class="feature-icon">✋</div>
                <h3 class="feature-title">Ручная работа</h3>
                <p class="feature-text">Каждое изделие создаётся мастерами с многолетним опытом</p>
            </div>

            <div class="feature-item">
                <div class="feature-icon">🎨</div>
                <h3 class="feature-title">Уникальные узоры</h3>
                <p class="feature-text">Аутентичные орнаменты разных народов и культур</p>
            </div>

            <div class="feature-item">
                <div class="feature-icon">🌍</div>
                <h3 class="feature-title">По всему миру</h3>
                <p class="feature-text">Одежда из Японии, Индии, Африки, Мексики и славянских земель</p>
            </div>

        </div>
    </section>


    <section class="about">
        <div class="about__card">
            <div class="about__card-content">
                <h2 class="about__title">О нас</h2>
                <div class="about__divider"></div>
                <div class="about__texts">
                    <p class="about__text">
                        Мы верим, что одежда — это не просто ткань, а история, культура и
                        традиции, которые передаются из поколения в поколение.
                    </p>
                    <p class="about__text">
                        «Этно Шик» — это магазин, где встречаются древние ремёсла и
                        современный стиль. Мы сотрудничаем с мастерами из разных
                        уголков мира, чтобы предложить вам уникальные вещи, созданные с душой.
                    </p>
                    <p class="about__text">
                        Каждое изделие в нашей коллекции — это результат кропотливой
                        ручной работы, использования натуральных материалов и глубокого
                        уважения к культурному наследию.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <section class="collections">
        <div class="collections__inner">

            <h2 class="section-title">Наши коллекции</h2>

            <div class="collections__grid">


                <article class="collection-card">
                    <div class="collection-card__image">
                        <img src="assets/images/collection-japan.jpg">
                    </div>
                    <div class="collection-card__body">
                        <h3 class="card-title">Японская коллекция</h3>
                        <p class="card-label">КОЛЛЕКЦИЯ 2026</p>
                        <p class="card-text">
                            Аутентичные кимоно и юката из натурального шёлка и хлопка. Традиционная
                            японская вышивка и окрашивание техникой шибори. Каждый узор несёт глубокий смысл
                            и символику.
                        </p>
                        <ul class="card-features">
                            <li>✓ Натуральный шёлк и хлопок</li>
                            <li>✓ Ручная роспись и вышивка</li>
                            <li>✓ Традиционные техники окрашивания</li>
                        </ul>
                        <a href="pages/catalog.php" class="btn btn--outline-dark">СМОТРЕТЬ КОЛЛЕКЦИЮ</a>
                    </div>
                </article>

                <article class="collection-card">
                    <div class="collection-card__image">
                        <img src="assets/images/collection-slavic.jpg">
                    </div>
                    <div class="collection-card__body">
                        <h3 class="card-title">Славянская коллекция</h3>
                        <p class="card-label">КОЛЛЕКЦИЯ 2026</p>
                        <p class="card-text">
                            Вышиванки, сарафаны и рубахи с традиционной славянской вышивкой.
                            Натуральный лён и конопляная ткань.
                            Орнаменты, защищающие и дарующие силу предков.
                        </p>
                        <ul class="card-features">
                            <li>✓ 100% натуральный лён</li>
                            <li>✓ Ручная вышивка крестом</li>
                            <li>✓ Сакральные орнаменты</li>
                        </ul>
                        <a href="pages/catalog.php" class="btn btn--outline-dark">СМОТРЕТЬ КОЛЛЕКЦИЮ </a>
                    </div>
                </article>


                <article class="collection-card">
                    <div class="collection-card__image">
                        <img src="assets/images/collection-african.jpg">
                    </div>
                    <div class="collection-card__body">
                        <h3 class="card-title">Африканская коллекция</h3>
                        <p class="card-label">КОЛЛЕКЦИЯ 2026</p>
                        <p class="card-text">
                            Яркие платья и туники с африканскими принтами. Ткань ручной набойки,
                            натуральные красители. Энергия солнца и ритмы африканских барабанов в каждом изделии.
                        </p>
                        <ul class="card-features">
                            <li>✓ Хлопок ручной набойки</li>
                            <li>✓ Натуральные красители</li>
                            <li>✓ Уникальные племенные узоры</li>
                        </ul>
                        <a href="pages/catalog.php" class="btn btn--outline-dark">СМОТРЕТЬ КОЛЛЕКЦИЮ </a>
                    </div>
                </article>

            </div>
        </div>
    </section>

    <section class="process">
        <div class="process__inner">

            <h2 class="section-title">Как мы создаём одежду</h2>

            <div class="process__grid">

                <div class="process-item">
                    <span class="process-number">01</span>
                    <h3 class="process-item-title">Выбор тканей</h3>
                    <p class="process-text">
                        Только натуральные материалы: лён, хлопок, шёлк, шерсть.
                        Работаем с проверенными поставщиками со всего мира.
                    </p>
                </div>

                <div class="process-item">
                    <span class="process-number">02</span>
                    <h3 class="process-item-title">Создание эскизов</h3>
                    <p class="process-text">
                        Изучаем традиционные костюмы, консультируемся с
                        этнографами и создаём современные интерпретации.
                    </p>
                </div>

                <div class="process-item">
                    <span class="process-number">03</span>
                    <h3 class="process-item-title">Ручная работа</h3>
                    <p class="process-text">
                        Мастера вручную вышивают, красят и шьют каждое изделие,
                        вкладывая душу и уважение к традициям.
                    </p>
                </div>

                <div class="process-item">
                    <span class="process-number">04</span>
                    <h3 class="process-item-title">Контроль качества</h3>
                    <p class="process-text">
                        Каждое изделие проходит тщательную проверку перед отправкой вам.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <section class="testimonials">
        <div class="testimonials__inner">

            <h2 class="section-title">Отзывы наших клиентов</h2>

            <div class="testimonials__grid">

                <div class="review-card">
                    <div class="review-card__header">
                        <div class="review-card__avatar">АК</div>
                        <div class="review-card__info">
                            <h4 class="review-card__name">Анна К.</h4>
                            <p class="review-card__location">Москва</p>
                        </div>
                        <div class="review-card__stars">★★★★★</div>
                    </div>
                    <p class="review-card__text">
                        Заказывала японское кимоно для фотосессии. Качество превзошло все ожидания!
                        Шёлк натуральный, вышивка ручная, каждая деталь продумана. Теперь это моя
                        любимая вещь в гардеробе. Спасибо за магию!
                    </p>
                    <p class="review-card__date">7 мая 2026</p>
                </div>

                <div class="review-card">
                    <div class="review-card__header">
                        <div class="review-card__avatar">ДМ</div>
                        <div class="review-card__info">
                            <h4 class="review-card__name">Дмитрий М.</h4>
                            <p class="review-card__location">Санкт-Петербург</p>
                        </div>
                        <div class="review-card__stars">★★★★★</div>
                    </div>
                    <p class="review-card__text">
                        Покупал вышиванку в подарок жене. Она в восторге! Лён очень приятный к телу,
                        вышивка аккуратная. Видно, что сделано с душой. Доставка быстрая,
                        упаковка красивая. Обязательно закажу ещё!
                    </p>
                    <p class="review-card__date">3 мая 2026</p>
                </div>

                <div class="review-card">
                    <div class="review-card__header">
                        <div class="review-card__avatar">ЕС</div>
                        <div class="review-card__info">
                            <h4 class="review-card__name">Елена С.</h4>
                            <p class="review-card__location">Казань</p>
                        </div>
                        <div class="review-card__stars">★★★★★</div>
                    </div>
                    <p class="review-card__text">
                        Африканское платье — это просто огонь! Яркое, удобное, ткань дышит.
                        Получила массу комплиментов. Очень нравится философия магазина и уважение
                        к культурам. Рекомендую всем, кто ценит уникальность!
                    </p>
                    <p class="review-card__date">28 апреля 2026</p>
                </div>

                <div class="review-card">
                    <div class="review-card__header">
                        <div class="review-card__avatar">МП</div>
                        <div class="review-card__info">
                            <h4 class="review-card__name">Мария П.</h4>
                            <p class="review-card__location">Екатеринбург</p>
                        </div>
                        <div class="review-card__stars">★★★★★</div>
                    </div>
                    <p class="review-card__text">
                        Индийское сари — мечта, которая сбылась! Консультанты помогли выбрать
                        и даже рассказали, как правильно драпировать. Качество шёлка превосходное,
                        вышивка золотом просто роскошная. Чувствую себя богиней!
                    </p>
                    <p class="review-card__date">25 апреля 2026</p>
                </div>

            </div>



        </div>
    </section>

    <footer class="footer">
        <div class="footer__inner">

            <div class="footer__grid">

                <div class="footer__column">
                    <h3 class="footer__logo">ЭТНО ШИК</h3>
                    <p class="footer__desc">Одежда, созданная с уважением к традициям и любовью к натуральным материалам
                    </p>
                    <div class="footer__social">
                        <a href="#" class="social-link">Instagram</a>
                        <a href="#" class="social-link">VK</a>
                        <a href="#" class="social-link">Telegram</a>
                        <a href="#" class="social-link">Pinterest</a>
                    </div>
                </div>

                <div class="footer__column">
                    <h4 class="footer__heading">КАТАЛОГ</h4>
                    <ul class="footer__list">
                        <li><a href="#">Японская коллекция</a></li>
                        <li><a href="#">Славянская коллекция</a></li>
                        <li><a href="#">Африканская коллекция</a></li>
                    </ul>
                </div>

                <div class="footer__column">
                    <h4 class="footer__heading">ИНФОРМАЦИЯ</h4>
                    <ul class="footer__list">
                        <li><a href="pages/about.php">О нас</a></li>
                        <li><a href="#">Доставка и оплата</a></li>
                        <li><a href="#">Возврат и обмен</a></li>
                        <li><a href="#">Таблица размеров</a></li>
                        <li><a href="#">Уход за изделиями</a></li>
                        <li><a href="#">Блог</a></li>
                    </ul>
                </div>

                <div class="footer__column">
                    <h4 class="footer__heading">КОНТАКТЫ</h4>
                    <ul class="footer__list footer__contacts">
                        <li>📍 Екатеринбург, ул. Радищева, 27</li>
                        <li>📞 +7 (495) 123-45-67</li>
                        <li>✉️ hello@etnoshik.ru</li>
                        <li>🕐 Пн-Пт: 10:00 - 19:00</li>
                    </ul>
                </div>

            </div>

            <div class="footer__bottom">
                <p class="copyright">© 2026 Этно Шик. Все права защищены.</p>
                <div class="footer__legal">
                    <a href="#">Политика конфиденциальности</a>
                    <a href="#">Публичная оферта</a>
                </div>
            </div>

        </div>
    </footer>

</body>

</html>