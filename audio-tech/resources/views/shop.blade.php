<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/style/app.css">
    <link rel="icon" href="../image/note_logo.png" type="image/x-icon">
    <title>Магазин</title>
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

    <!-- Тук започва секция Banner -->
    <div class='banner'>
        <div class="wrapper">
            <div class="left">
                <h1>
                    Добре дошли в нашият онлайн магазин!
                </h1>
                <p>
                    При нас можете да намерите всичко свързано с аудио техниката. Каквото и да търсите, при нас ще го
                    намерите.
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
    <div class="products">
        <div class="wrapper">
            <h1>
                Всички предлагани от нас продукти:
            </h1>
            <hr/>
            <br/>
            <div class="prod">
                <ul>
                    <li>
                        <div class="prodimg1">
                            <img src="../image/cd_player.png" alt="">
                            <p>Sony CD player DSXA410BT</p>
                            <p>Тип продукт Авто CD/MP3 плеър</p>
                            <p>Място за монтиране: Предно табло</p>
                            <p>Свързаност: AUX; USB; Bluetooth; NFC; iPhone control; iPod control; ISO connectors</p>
                            <p>Поддържани аудио формати: MP3; WMA; FLAC</p>
                            <p> Тип дисплей: Дигитален</p>
                            <p> Цвят на дисплея: Черен; Зелен; Червен</p>
                            <p> Съвместимост с мобилни устройства: iOS</p>
                            <p> Максимална аудио мощност (W) 4 x 55</p>
                        </div>
                    </li>
                    <li>
                        <div class="prodimg1">
                            <img src="../image/boseheadphones.png" alt="">
                            <p>Безжични стерео слушалки BOSE 700NC BK OVER-EAR</p>
                            <p>Батерия до 20 часа</p>
                            <p>Шумопотискане и бързо зареждане</p>
                        </div>
                    </li>
                    <li>
                        <div class="prodimg1">
                            <img src="../image/homecinemapioneer.png" alt="">
                            <p>Комплект 5 тонколони за домашно кино Pioneer S-ES3TB</p>
                            <p>Честота на съраунд говорител 40 - 30000 Hz</p>
                            <p>Обща RMS мощност:150 W 100 W 150 W 500 W</p>

                        </div>
                    </li>
                    <li>
                        <div class="prodimg1">
                            <img src="../image/pioneercd.png" alt="">
                            <p>Плеър за кола Pioneer DEH-80PRS</p>
                            <p>Playback MP3, WMA & AAC</p>
                            <p> Pre outs 3 RCA</p>
                            <p>Pre out level Hight Volt 5V</p>
                            <p> Features Front Aux, USB, Ipod control</p>
                            <p>Audio 16band EQ 3-way DSP, BB, HP/LP filter</p>

                        </div>
                    </li>
                    <li>
                        <div class="prodimg1">
                            <img src="../image/sound.png" alt="">
                            <p>Професионални тонколони Temeisheng DP-2304</p>
                            <p>Свързаност: Bluetooth; USB; SD; FM;</p>
                            <p>Цвят: Черен</p>
                            <p>Тип монтиране: на пода</p>
                            <p>Обща мощност: 600W</p>
                        </div>
                    </li>
                    <li>
                        <div class="prodimg1">
                            <img src="../image/usbkingston.png" alt="">
                            <p>USB Flash памет Kingston DataTraveler 100 G3</p>
                            <p>Памет: 64GB</p>
                            <p>Интерфейс: USB 3.0</p>
                            <p>Цвят: Черен</p>
                            <p>Скорост на трансфер при запис (MB/s): 10</p>
                        </div>
                    </li>
                </ul>
            </div>
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