<?php require __DIR__ . '/../includes/theme.php'; ?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <meta name="description" content="Формы обратной связи, анкета и отзыв">
    <meta name="author" content="Мерзляков Владислав">
    <link rel="stylesheet" href="../assets/css/style.css">
    <?php if ($isNight): ?>
    <link rel="stylesheet" href="../assets/css/dark.css">
    <?php endif; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
                    <li><a href="login.php" class="nav__link">ВХОД</a></li>
                    <li><a href="../index.php" class="nav__link">НА ГЛАВНУЮ</a></li>
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



    <section class="form-page">
        <div class="container">

            <h1 class="form-page-title">Регистрация</h1>
            <p class="form-page-subtitle">Создайте аккаунт, чтобы делать покупки</p>

            <form method="post" action="../index.php" autocomplete="on">
                <fieldset>
                    <legend>Создать аккаунт</legend>

                    <p>
                        <label for="username">Имя пользователя:</label><br>
                        <input type="text" id="username" name="username" minlength="3" maxlength="20"
                            pattern="[A-Za-z0-9]+" placeholder="Только буквы и цифры" required>
                        <span class="field-hint">От 3 до 20 символов, только латиница и цифры</span>
                    </p>

                    <p>
                        <label for="email">Email:</label><br>
                        <input type="email" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                            placeholder="user@example.com" required>
                        <span class="field-hint">Введите действующий email-адрес</span>
                    </p>

                    <p>
                        <label for="phone">Телефон:</label><br>
                        <input type="tel" id="phone" name="phone" pattern="\+7[0-9]{10}" placeholder="+7XXXXXXXXXX">
                        <span class="field-hint">Необязательно. Формат: +7XXXXXXXXXX</span>
                    </p>

                    <p>
                        <label for="password">Пароль:</label><br>
                        <input type="password" id="password" name="password" minlength="8" maxlength="20"
                            pattern="[A-Za-z0-9]+" placeholder="Буквы и цифры, от 8 символов" required>
                        <span class="field-hint">От 8 до 20 символов, только латиница и цифры</span>
                    </p>

                    <p>
                        <input type="checkbox" id="agree" name="agree" required>
                        <label for="agree">Я согласен с условиями использования</label>
                    </p>

                    <p>
                        <button type="submit">ЗАРЕГИСТРИРОВАТЬСЯ</button>
                        <button type="reset">Сбросить</button>
                    </p>

                </fieldset>
            </form>

            <p class="form-link">
                Уже есть аккаунт? <a href="login.php">Войти</a>
            </p>

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