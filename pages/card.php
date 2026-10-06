<?php require __DIR__ . '/../includes/theme.php'; ?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Шёлковое кимоно — Этно Шик</title>
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
                    <li><a href="promotion.php" class="nav__link">АКЦИЯ </a></li>
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

    <main>

        <section class="product-order">
            <div class="container product-order__inner">


                <div class="order-form">
                    <h2 class="form-title">Оформление заказа</h2>

                    <form action="#" method="post" class="checkout-form">
                        <input type="text" name="name" placeholder="Ваше имя" required>
                        <input type="email" name="email" placeholder="Ваш e-mail" required>
                        <input type="text" name="city" placeholder="Город (при доставке СДЭК)">

                        <div class="delivery-options">
                            <label>
                                <input type="radio" name="delivery" value="pickup" checked>
                                Самовывоз (ул. Готвальда 53)
                            </label>
                            <label>
                                <input type="radio" name="delivery" value="cdek-point">
                                Доставка СДЭК по пункту выдачи: 600 RUB
                            </label>
                            <label>
                                <input type="radio" name="delivery" value="cdek-door">
                                СДЭК до двери: 1 200 RUB
                            </label>
                        </div>

                        <button type="submit" class="btn-submit">Оформить заказ</button>
                    </form>
                </div>


                <div class="product-image-large">
                    <img src="../assets/images/hqWPB.jpg" alt="Шёлковое кимоно">
                </div>

            </div>
        </section>


        <div class="order-info">
            <p>После оформления и оплаты заказа с вами свяжутся для подтверждения</p>
            <a href="#" class="privacy-link">Политика защиты и обработки персональных данных</a>
        </div>
    </main>

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
                        <li><a href="about.php">О нас</a></li>
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