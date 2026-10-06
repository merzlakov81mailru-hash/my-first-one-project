<?php require __DIR__ . '/../includes/theme.php'; ?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог — Этно Шик</title>

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
                    <li><a href="about.php" class="nav__link">О НАС</a></li>
                    <li><a href="promotion.php" class="nav__link">АКЦИЯ </a></li>
                    <li><a href="form.php" class="nav__link">РЕГИСТРАЦИЯ</a></li>
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

    <main>
        <section class="catalog-hero">
            <h1 class="section-title">Каталог одежды</h1>
            <p class="catalog-subtitle">Выберите категорию ниже</p>
        </section>

        <section class="collection-section">
            <div class="container">
                <h2 class="collection-title">Японская коллекция</h2>

                <div class="products-grid">
                    <article class="product-card">
                        <div class="product-image">
                            <img src="../assets/images/hqWPB.jpg" alt="Юката летняя">
                        </div>
                        <div class="product-info">
                            <h3 class="product-name">Юката летняя</h3>
                            <p class="product-desc">Хлопок, узор сакуры</p>
                            <div class="product-footer">
                                <span class="product-price">12 500 ₽</span>
                                <a href="card.php" class="btn-buy">Купить</a>
                            </div>
                        </div>
                    </article>


                    <article class="product-card">
                        <div class="product-image">
                            <img src="../assets/images/ieQdx.jpg" alt="Шёлковое кимоно">
                        </div>
                        <div class="product-info">
                            <h3 class="product-name">Шёлковое кимоно</h3>
                            <p class="product-desc">Натуральный шёлк, ручная роспись</p>
                            <div class="product-footer">
                                <span class="product-price">24 900 ₽</span>
                                <button class="btn-buy">Купить</button>
                            </div>
                        </div>
                    </article>

                    <article class="product-card">
                        <div class="product-image">
                            <img src="../assets/images/Klqwa.jpg" alt="Хаори (куртка)">
                        </div>
                        <div class="product-info">
                            <h3 class="product-name">Хаори (куртка)</h3>
                            <p class="product-desc">Традиционный крой, лён</p>
                            <div class="product-footer">
                                <span class="product-price">18 000 ₽</span>
                                <button class="btn-buy">Купить</button>
                            </div>
                        </div>
                    </article>

                    <article class="product-card">
                        <div class="product-image">
                            <img src="../assets/images/17792103724810.png" alt="Кимоно свадебное">
                        </div>
                        <div class="product-info">
                            <h3 class="product-name">Кимоно свадебное</h3>
                            <p class="product-desc">Белый шёлк, золотая вышивка</p>
                            <div class="product-footer">
                                <span class="product-price">45 000 ₽</span>
                                <button class="btn-buy">Купить</button>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="collection-section">
            <div class="container">
                <h2 class="collection-title">Славянская коллекция</h2>

                <div class="products-grid">
                    <article class="product-card">
                        <div class="product-image">
                            <img src="../assets/images/1779210801f4ae.png" alt="Вышиванка женская">
                        </div>
                        <div class="product-info">
                            <h3 class="product-name">Вышиванка женская</h3>
                            <p class="product-desc">Лён, ручная вышивка</p>
                            <div class="product-footer">
                                <span class="product-price">6 500 ₽</span>
                                <button class="btn-buy">Купить</button>
                            </div>
                        </div>
                    </article>

                    <article class="product-card">
                        <div class="product-image">
                            <img src="../assets/images/17792110463256.png" alt="Сарафан 'Русь'">
                        </div>
                        <div class="product-info">
                            <h3 class="product-name">Сарафан "Русь"</h3>
                            <p class="product-desc">Конопляная ткань, орнамент</p>
                            <div class="product-footer">
                                <span class="product-price">8 200 ₽</span>
                                <button class="btn-buy">Купить</button>
                            </div>
                        </div>
                    </article>

                    <article class="product-card">
                        <div class="product-image">
                            <img src="../assets/images/shirt.png" alt="Рубаха косоворотка">
                        </div>
                        <div class="product-info">
                            <h3 class="product-name">Рубаха косоворотка</h3>
                            <p class="product-desc">Мужская, хлопок</p>
                            <div class="product-footer">
                                <span class="product-price">5 800 ₽</span>
                                <button class="btn-buy">Купить</button>
                            </div>
                        </div>
                    </article>

                    <article class="product-card">
                        <div class="product-image">
                            <img src="../assets/images/Festive poneva.png" alt="Понёва праздничная">
                        </div>
                        <div class="product-info">
                            <h3 class="product-name">Понёва праздничная</h3>
                            <p class="product-desc">Шерсть, клетка</p>
                            <div class="product-footer">
                                <span class="product-price">9 500 ₽</span>
                                <button class="btn-buy">Купить</button>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="collection-section">
            <div class="container">
                <h2 class="collection-title">Африканская коллекция</h2>

                <div class="products-grid">
                    <article class="product-card">
                        <div class="product-image">
                            <img src="../assets/images/Dashiki dress.png" alt="Платье Дашики">
                        </div>
                        <div class="product-info">
                            <h3 class="product-name">Платье Дашики</h3>
                            <p class="product-desc">Яркий принт, хлопок</p>
                            <div class="product-footer">
                                <span class="product-price">4 900 ₽</span>
                                <button class="btn-buy">Купить</button>
                            </div>
                        </div>
                    </article>

                    <article class="product-card">
                        <div class="product-image">
                            <img src="../assets/images/Kente Tunic.png" alt="Туника Кенте">
                        </div>
                        <div class="product-info">
                            <h3 class="product-name">Туника Кенте</h3>
                            <p class="product-desc">Традиционные узоры Ганы</p>
                            <div class="product-footer">
                                <span class="product-price">5 500 ₽</span>
                                <button class="btn-buy">Купить</button>
                            </div>
                        </div>
                    </article>

                    <article class="product-card">
                        <div class="product-image">
                            <img src="../assets/images/African maxi skirt.png" alt="Юбка макси Африка">
                        </div>
                        <div class="product-info">
                            <h3 class="product-name">Юбка макси Африка</h3>
                            <p class="product-desc">Натуральный краситель</p>
                            <div class="product-footer">
                                <span class="product-price">4 200 ₽</span>
                                <button class="btn-buy">Купить</button>
                            </div>
                        </div>
                    </article>

                    <article class="product-card">
                        <div class="product-image">
                            <img src="../assets/images/ankaar.jpg" alt="Шарф Анкара">
                        </div>
                        <div class="product-info">
                            <h3 class="product-name">Шарф Анкара</h3>
                            <p class="product-desc">Восковая набойка</p>
                            <div class="product-footer">
                                <span class="product-price">2 100 ₽</span>
                                <button class="btn-buy">Купить</button>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>
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