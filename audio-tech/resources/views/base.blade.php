<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/style/app.css">
    <link rel="icon" href="../image/note_logo.png" type="image/x-icon">
    <title>Развитие на аудио технологиите</title>
</head>

<body>
    @include('partials.header')

    <div class='banner'>
        <div class="wrapper">
            <div class="left">
                <h1>
                    Развитие на аудио технологиите
                </h1>
                <div class="text">
                    <p>
                        Новите технологии са повлияли върху почти всяка една сфера в живота ни. През последните месеци
                        разглеждахме как технологичният подем се е отразил на телевизията, комуникацията, на начина ни
                        на
                        пазаруване, на четенето и прочие. Днес ще спрем поглед на измененията, настъпили в музиката. Без
                        значение дали се гледаше концерт по телевизията или на живо, музиката беше повод за събиране и
                        съпреживяване. Днес в музиката силно развита е индивидуалната консумация. Интернет позволява да
                        гледаш концерти онлайн, да слушаш радио на личните си слушалки, движейки се, или да свалиш
                        музикални
                        произведения на различни устройства с цел бързина и удобство.
                    </p>
                </div>
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

    <!-- Тук започва PopUp -->
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

    <!-- Секция Продукти -->
    <div class="products">
        <div class="wrapper">
            <h1>
                Топ продукти
            </h1>
            <p style='text-align: center;'>
                Най- често закупени продукти за последния месец от нашият магазин:
            </p>
            <div class="prod">
                <ul>
                    <li>
                        <div class="prodimg1">
                            <img src="../image/cd_player.png" alt="">
                            <p>Sony CD player DSXA410BT</p>
                            <p>Свързаност: AUX; USB; Bluetooth; NFC; iPhone control; iPod control; ISO connectors</p>
                            <p>Максимална аудио мощност (W) 4 x 55</p>
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
                </ul>
            </div>
        </div>
    </div>
    
    @include('partials.footer')

</body>
</html>
