<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/style/app.css">
    <link rel="icon" href="../image/note_logo.png" type="image/x-icon">
    <title>Дейност</title>
</head>

<body>
    <!-- Тук започва секция Header -->
    <header>
        <div class="head">
            <div class="wrapper">
                <div class='left home'>
                    <img src="../image/note_logo.png" alt="">
                    <a href="#">Добре дошли</a>
                </div>
                <nav>
                    <a id='home' href='../pages/index.html'>Начало</a>
                    <a id='shop' href='../pages/shop.html'>Магазин</a>
                    <a id='history' href='../pages/history.html'>История</a>
                    <a id='activity' href='../pages/activity.html'>Дейност</a>
                    <a id='forus' href='../pages/forus.html'>За нас</a>
                    <a class='loginbtn' href='#'>Вход</a>
                </nav>
            </div>
        </div>
    </header>
    
    <!-- Тук започва секция Banner -->
    <div class='banner'>
        <div class="wrapper">
            <div class="left">
                <h1>
                    Всичко, свързано с нашата работа
                </h1>
                <ul>
                    <li>
                        <div class="leftimg">
                            <img src="../image/pioneer_logo.png" alt="" />
                            <img src="../image/bose_logo.png" alt="" />
                            <img src="../image/sony_logo.png" alt="" />
                        </div>
                    </li>
                </ul>
            </div>
            <div class="right">
                <img src="../image/banner_cinema.png" alt="">
            </div>
        </div>
    </div>

    <!-- Тук започва Popup -->
    <div id='overlay' class="overlay">
        <div class="popup">
            <img class='close closelog' src="../image/close.png">
            <form action="">
                <h3>Вход</h3>
                <label for="email">Email:</label>
                <input placeholder="Моля въведете мейл!" type="email" />
                <label for="password">Password:</label>
                <input type="password" placeholder="Моля въведете парола!" />

                <button class='close' type="submit">Вход</button>
            </form>
        </div>
    </div>

    <!-- Тук започва секция "Дейност" -->
    <div class="products">
        <div class="wrapper">
            <ul>
                <li>
                    <h1>Дейност и информация за нашата работа</h1>
                    <p>
                        Занимаваме се с монтаж на аудио системи, предназначени за всякаъв тип автомобил. Разполагаме с
                        доставка по адреси за другата техника. Всеки продукт, закупен от Вас, независимо от цената му
                        може
                        да се завърне до 1 месец при фабричен дефект. Полуавате и гаранция от 2 години при запазване на
                        касовата бележка и опаковката. Не важи при монтаж, който не е извършен от наш служител!
                    </p>
                    <hr />
                    <br />
                    <h1>Още за техниката</h1>
                    <p>
                        С течение на времето устройствата почнаха да се смаляват все повече – от CD плеър до малка
                        джаджа,
                        събираща се в шепата ни. Един от главните герои в музикалната еволюция е MP3. Това е вид
                        формат, подходящ за съхранение на аудио или видео съдържание. Информацията, която носи файлът,
                        се
                        запаметява на всякакви електронни носители на музика (компютър, таблет, телефон ит.н.) Оттам
                        идва и
                        името на популярното преносимо устройство за музика “MP3 плеър”. Свързвайки устройството с
                        компютър,
                        свалянето на музика от Интернет става много лесно. Друг интересен феномен в музиката е Youtube
                        - уебсайт за безплатно споделяне на видеа. Там можем да намерим канали на различни певци и
                        да гледаме техните видеоклипове. Сайтът разполага със записи от различни предавания, новини и
                        дори
                        филми. Просто напиши в търсачката, отбелязана с
                        лупа, какво искаш да намериш и резултатите ще се появят отдолу.
                    </p>
                    <br />
                </li>
            </ul>
        </div>
    </div>

    <!-- Секция Футър -->
    <footer>
        <div class="wrapper">
            <div class="left">
                <a href='#'>
                    Благодарим ви за отделеното внимание!
                </a>
            </div>
            <ul class="right">
                <li>
                    <h3>Полезно</h3>
                    <a id='home' href='../pages/index.html'>Начало</a>
                    <a id='shop' href='../pages/shop.html'>Магазин</a>
                    <a id='history' href='../pages/history.html'>История</a>
                    <a id='activity' href='../pages/activity.html'>Дейност</a>
                    <a id='forus' href='../pages/forus.html'>За нас</a>
                </li>
                <li>
                    <h3>Контакти</h3>
                    <a href="mailto:dobromir03062001@gmail.com">
                        dobromir03062001@gmail.com
                    </a>
                    <a href="tel:0878753009">
                        0878753009
                    </a>
                    <address>
                        Велико Търново ул.Оборище №2
                        <address>
                </li>
            </ul>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="../resources/js/script.js"></script>
</body>

</html>
