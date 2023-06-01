<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/style/app.css">
    <link rel="icon" href="../image/note_logo.png" type="image/x-icon">
    <title>За нас</title>
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
                    Тук може да намерите всичко, което желаете да научите за нас!
                </h1>
                <p>
                    Ние се занимаваме от близо 5 години с аудио техниката. Първоначално започнахме с мой колега да
                    инсталираме тонколони, усливатели и SUB буфери за автомобили. Разрастнахме се бързо, след което си
                    отворихме собствен магазин за аудио техника. Сега вече се занимаваме и с продажба на тонколони,
                    микрофони, CD плеъри за кола, домашни кина, усилватели и SUB буфери. Надяваме се, че това което търсите ще го намерите при нас!
                </p>
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