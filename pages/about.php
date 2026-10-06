<?php require __DIR__ . '/../includes/theme.php'; ?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О нас — Этно Шик</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <?php if ($isNight): ?>
    <link rel="stylesheet" href="../assets/css/dark.css">
    <?php endif; ?>
</head>

<body>


    <header class="header">
        <div class="header__inner">

            <a href="../index.php" class="logo">ЭТНО ШИК</a>

            <nav class="nav">
                <ul class="nav__list">
                    <li><a href="catalog.php" class="nav__link">КАТАЛОГ</a></li>
                    <li><a href="about.php" class="nav__link">О НАС</a></li>
                    <li><a href="promotion.php" class="nav__link">АКЦИЯ</a></li>
                    <li><a href="form.php" class="nav__link">РЕГИСТРАЦИЯ</a></li>
                    <li><a href="login.php" class="nav__link">ВХОД</a></li>
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



    <section class="page-hero">
        <h1 class="section-title">О нас</h1>
        <p class="page-hero__subtitle">
            Мы создаём одежду, которая соединяет культуры и людей.
            Каждое изделие — это история, рассказанная через ткань и узор.
        </p>
    </section>



    <section class="about-page__story">
        <div class="about-page__story-inner">

            <div>
                <h2 class="about-page__story-title">Как всё начиналось</h2>
                <p class="about-page__story-text">
                    «Этно Шик» появился в 2018 году, когда основательница магазина Анна Верова вернулась
                    из путешествия по Японии с чемоданом, полным кимоно и нерасказанных историй.
                    Она поняла: такая одежда заслуживает, чтобы её носили каждый день — а не хранили
                    в шкафу как сувенир.
                </p>
                <p class="about-page__story-text">
                    Сегодня мы сотрудничаем с мастерами из более чем 15 стран. Каждый поставщик
                    проходит личную встречу и проверку: мы убеждаемся, что изделия созданы
                    с уважением к традициям и без эксплуатации.
                </p>
                <p class="about-page__story-text">
                    Наша миссия проста — дать каждому человеку возможность носить частицу
                    мировой культуры и чувствовать себя особенным.
                </p>
                <a href="catalog.php" class="btn">Смотреть коллекцию</a>
            </div>

            <div>
                <img src="../assets/images/hero.png" alt="Основательница магазина Анна Верова">
            </div>

        </div>
    </section>






    <section class="about-page__values">
        <h2 class="section-title">Наши ценности</h2>

        <div class="about-page__values-grid">

            <div class="value-card">
                <span class="value-card__icon"></span>
                <h3 class="value-card__title">Натуральность</h3>
                <p class="value-card__text">
                    Только проверенные натуральные материалы: лён, хлопок, шёлк, шерсть.
                    Никакого синтетика, никакой химии.
                </p>
            </div>

            <div class="value-card">
                <span class="value-card__icon"></span>
                <h3 class="value-card__title">Честность</h3>
                <p class="value-card__text">
                    Мы платим мастерам справедливо и не скрываем происхождение изделий.
                    Каждый товар имеет историю и имя создателя.
                </p>
            </div>

            <div class="value-card">
                <span class="value-card__icon"></span>
                <h3 class="value-card__title">Уважение к культуре</h3>
                <p class="value-card__text">
                    Мы не копируем — мы сохраняем. Каждый орнамент используется
                    с разрешения общины и несёт свой исконный смысл.
                </p>
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
                        <li><a href="catalog.php">Японская коллекция</a></li>
                        <li><a href="catalog.php">Славянская коллекция</a></li>
                        <li><a href="catalog.php">Африканская коллекция</a></li>
                    </ul>
                </div>

                <div class="footer__column">
                    <h4 class="footer__heading">ИНФОРМАЦИЯ</h4>
                    <ul class="footer__list">
                        <li><a href="about.php">О нас</a></li>
                        <li><a href="#">Доставка и оплата</a></li>
                        <li><a href="#">Возврат и обмен</a></li>
                        <li><a href="#">Таблица размеров</a></li>
                        <li><a href="#">Уход за изделиями</a></li>
                    </ul>
                </div>

                <div class="footer__column">
                    <h4 class="footer__heading">КОНТАКТЫ</h4>
                    <ul class="footer__list footer__contacts">
                        <li>📍 Москва, ул. Этническая, 15</li>
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