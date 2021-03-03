<?php
header('Content-Type: text/html; charset=utf-8');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html>
<html>
    <title>Лендинг</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:100italic,100,300italic,300,400italic,400,500italic,500,700italic,700,900italic,900&subset=latin,cyrillic,cyrillic-ext" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <body>

        <!-- Старт блока навигации -->
        <div class="top">
            <div class="bar card" id="myNavbar">
                <div class="container">
                    <a href="#" class="logo"><img src="/img/logo.png" alt="Logo"></a>
                    <!-- Правый блок -->
                    <div class="right hide-small">
                        <a href="#price" class="bar-item button">Цены</a>
                        <a href="#advantage" class="bar-item button">Преимущества</a>
                        <a href="#delivery" class="bar-item button">Доставка и оплата</a>
                        <a href="#guarantee" class="bar-item button">Гарантия</a>
                        <button class="button hide-medium button-outlined">Заказать звонок</button>
                    </div>
                </div>

                <a href="javascript:void(0)" class="bar-item button right bar-close-button hide-large hide-medium" onclick="tr_open()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
        </div>

        <!-- Сайдбар -->
        <nav class="sidebar bar-block black card animate-left hide-medium hide-large" style="display:none" id="mySidebar">
            <a href="javascript:void(0)" onclick="tr_close()" class="bar-item button large padding-16 close-button"> ×</a>
            <a href="#price" onclick="tr_close()" class="bar-item button">Цены</a>
            <a href="#advantage" onclick="tr_close()" class="bar-item button">Преимущества</a>
            <a href="#delivery" onclick="tr_close()" class="bar-item button">Доставка и оплата</a>
            <a href="#guarantee" onclick="tr_close()" class="bar-item button">Гарантия</a>
            <a href="#call" onclick="tr_close()" class="bar-item button">Заказать звонок</a>
        </nav>

        <!-- Хеадер с фоновым рисунком -->
        <header class="bgimg-1 display-container" id="home">
            <div class="container">
                <div class="display-left text-header" >
                    <div  class="hide-small">Распродажа очков RAY-BAN</div >
                    <span class="xxlarge hide-large hide-medium">Распродажа очков RAY-BAN</span>
                    <div  class="large">С доставкой по всей России</div >
                </div> 
            </div>
            <div class="shape-1 overflow-hidden">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1904 97">
                <path fill="#ffffff" fill-opacity="1" d="M952,49.805C533.481,49.805,171.72,29.485,0.016,0H0v97.322h1904V0h-0.015
                      C1732.281,29.485,1370.519,49.805,952,49.805z"/>
                </svg>
            </div> 
        </header>

        <!-- Старт блока "Товары" -->
        <div class="container" id="price">
            <h2 class="center">ОЧКИ УНИСЕКС</h2>
            <div class="row-padding">
                <div class="col xl4 l6 m6 margin-bottom">
                    <div class="card">
                        <img src="/img/catalog/1/1.jpg" alt="Wayfarer" >
                        <div class="product">
                            <div class="right">
                                <div class="discount small right-align">
                                    <del>3 900 руб.</del><span class="text-red">-50%</span>
                                </div> 
                                <div class="panel red">
                                    1 950 руб.
                                </div>  
                            </div>
                            <div class="right name-prouct"> 
                                <div class="align-items-center">
                                    <h3>Wayfarer</h3>
                                </div>
                            </div>
                            <div>
                                <p>Классическая модель в черной глянцевой пластиковой оправе с темно-зелеными линзами. Благодаря применению шарнирной системы оправа характеризуетсядолгим сроком службы.</p>
                                <p><button class="button white border-2 text-red border-red block">Подробнее</button></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col xl4 l6 m6 margin-bottom">
                    <div class="card">
                        <img src="/img/catalog/2/1.jpg" alt="Cats" >
                        <div class="product">
                            <div class="right">
                                <div class="discount small right-align">
                                    <del>6 900 руб.</del><span class="text-red">-50%</span>
                                </div> 
                                <div class="panel red">
                                    3 450 руб.
                                </div>  
                            </div>
                            <div class="right name-prouct align-items-center">
                                <div class="right">
                                    <div class="panel khaki">ХИТ</div>
                                </div>
                                <div class="align-items-center">
                                    <h3>Cats</h3>
                                </div>
                            </div>
                            <div>
                                <p>Крупные коричневые градиентные линзы из стекла отлично скроют и защитят ваши глаза на солнечном пляже, а переливающиеся пятнистые леопардовые дужки подчеркнут образ.</p>
                                <p><button class="button white border-2 text-red border-red block">Подробнее</button></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col xl4 l6 m6 margin-bottom">
                    <div class="card">
                        <img src="/img/catalog/3/1.jpg" alt="Round metal" >
                        <div class="product">
                            <div class="right">
                                <div class="discount small right-align">
                                    <del>4 700 руб.</del><span class="text-red">-50%</span>
                                </div> 
                                <div class="panel red">
                                    2 350 руб.
                                </div>  
                            </div>
                            <div class="right name-prouct"> 
                                <div class="align-items-center">
                                    <h3>Round metal</h3>
                                </div>
                            </div>
                            <div>
                                <p>Классическая модель в металлической оправе матового серого цвета. Линзы натурального зеленого оттенка с технологией защитного покрытия G15.</p>
                                <p><button onclick="onClick()" class="button white border-2 text-red border-red block">Подробнее</button></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Старт блока "Преимущества"  -->
        <div class="advantage " id="advantage">
            <div class="container">
                <div class="row-padding center">
                    <div class="col xl3 l3 m6">
                        <img src="/img/icon/5.png" alt="Круглосуточный прием заявок">
                        <hr>
                        <h6>Круглосуточный прием заявок.</h6>
                    </div>
                    <div class="col xl3 l3 m6">
                        <img src="/img/icon/4.png" alt="Wayfarer">
                        <hr>
                        <h6>Перед отправкой очки проходят 100% проверку.</h6>
                    </div>
                    <div class="col xl3 l3 m6">
                        <img src="/img/icon/7.png" alt="Wayfarer">
                        <hr>
                        <h6>Доставка почтой России 1<br>-классом.</h6>
                    </div>
                    <div class="col xl3 l3 m6">
                        <img src="/img/icon/6.png" alt="Wayfarer">
                        <hr>
                        <h6>Постоянные акции и скидкиe</h6>
                    </div>
                    <div class="col xl12">
                        <button class="button red round-xxlarge">Заказать звонок</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Старт блока "Доставка"  -->
        <div class="shape-2 ">
        </div> 
        <div class="container" id="delivery">
            <div class="row-padding" style="margin-top:64px">
                <div class="col xl4 l4 m6">
                    <div class="">
                        <img class="margin-right  left" src="/img/icon/1.png"  alt="Доставка почтой"><span class="large">Доставка</span>
                        <p class="opacity">Доставка почтой в течение 1-10 рабочих дней. Стоимость доставки товара от 300 р.</p>
                    </div>
                </div>
                <div class="col xl4 l4 m6">
                    <div class="">
                        <img class="margin-right  left" src="/img/icon/2.png"  alt="Доставка почтой"><span class="large">Оплата</span>
                        <p class="opacity">Никаких предоплат! Оплата заказов осуществляется во время получения на почте.</p>
                    </div>
                </div>
                <div class="col xl4 l4 m6">
                    <div class="">
                        <img class="margin-right  left" src="/img/icon/3.png"  alt="Доставка почтой"><span class="large">Гарантии</span>
                        <p class="opacity">Вы вправе отказаться от покупки в течение 14 дней с момента получения заказа.</p>
                    </div>
                </div>  
                <div class="col xl12 center ">
                    <button class="button round-xxlarge button-outlined">Скрыть подробности</button>
                </div>
            </div>
        </div>
        <!-- Старт блока "Гарантия"  -->
        <div class="guarantee" id="guarantee">
            <div class="row-padding container">
                <div class="col xl6 l6 m6">
                    <div class="left-guarantee">
                        <h2 class="text-red">Гарантия</h2>
                        <h6 class="text-red">Оплата при получении</h6>
                        <li class="text-white">Мы не берем с вас предоплату.</li>
                        <li class="text-white">Оплата заказа осуществляется при получении в почтовом отделении.</li>
                        <h6 class="text-red">Гарантии на товар</h6>
                        <li class="text-white">Перед отправкой товары проходят 100% проверку.</li>
                        <li class="text-white">Мы вернем вам деньги, если что-то окажется не так.</li>
                        <li class="text-white">Мы соблюдаеи Закон "О защите прав потребителей".</li>
                        <li class="text-white">Вы праве отказаться от покупки в течение 14 дней с момента получения заказа, независимо от причины возврата.</li>
                        <h6 class="text-red">Возврат денег</h6>
                        <li class="text-white">Вам необходимо обратиться в службу поддержки клиентов.</li>
                        <li class="text-white">Выслать нам купленный товар.</li>
                        <p class="text-white">Мы вернем вам деньги за исключением расходов на доставку.</p>
                    </div>
                </div>
                <div class="col xl6 l6 m6 ">
                    <div class="right-guarantee">
                        <h2 class="text-red">Доставка и оплата</h2>
                        <h6 class="text-red">Доставка почтой России</h6>
                        <p class="text-white">Мы вам доверяем и не требуем с вас предоплаты. Мы уважаем ваше время, и поэтому все заказы отправляем только бандеролями 1 класса. Вы можете забрать и оплатить свои новые очки на почте в любое удобное для вас время.</p>
                        <li class="text-white">Стоимость доставки товара от 300 р.</li>
                        <h6 class="text-red">Скорость доставки Почты России</h6>
                        <p class="text-white">Мы отправим ваш заказ уже сегодня 1 классом. Очки дойдут до Вас быстро и без единой царапинки.</p>
                        <li class="text-white">Доставка займет 1-10 рабочих дней.</li>
                        <p class="text-white">Чтобы ускорить прибытие вашего заказа, мы отправляем бандероли с Главпочтапмта два раза в день, включая выходные дни.</p>
                        <h6 class="text-red">Оплата заказа наложенным платежом</h6>
                        <li class="text-white">Оплата осуществляется в почтовомотделении при получении зазказа.</li>
                        <h6 class="text-red">Условия доставки почтой России</h6>
                        <p class="text-white">В момент отправки, каждому заказу присваивается номер. По номеру можно отследить доставку посылки на сайте Почты России. Мы незамедлительно вышлем номер на ваш e-mail или СМС-сообщением. Получить заказможно в почтовом отделении, индекс которого был указан при оформлении заказа. Уведомлениео о доставке заказа придет по вашему адресу. Если уведомление вам не поступило, то через 14 дней сходите на почту самостоятельно. Скорее всего ваши очки уже ждут вас на почте. Для получения заказа на почте возьмите с собой паспорт. Срок хранения заказа в почтовом отделении составляет 1 месяц с момента поступления. Просим вас своевременно получить пришедший заказ. В настоящее время, мы осуществляем доставку только по России.  .</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Модальный блок-->
        <div id="modal01" class="modal black" onclick="this.style.display = 'none'">
            <span class="button xxlarge black padding-large display-topright" title="Close Modal Image">×</span>
            <div class="modal-content animate-zoom center transparent padding-64">
                <img id="img01" class="image">
                <p id="caption" class="opacity large"></p>
            </div>
        </div>
        <div class="shape-3 overflow-hidden">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1905 172">
            <path fill="#ffffff" fill-opacity="1" d="M1931.877,119.268c-641.816,70.309-1290.061,70.312-1931.877,0C4.392,79.512,8.778,39.756,13.167,0
                  C646.209,69.361,1285.669,69.406,1918.71,0C1923.1,39.756,1927.495,79.511,1931.877,119.268z"/>
            </svg>
        </div> 
        <!-- Footer -->
        <footer class="center black">
            <div class="container main-footer">
                <div class="row-padding">
                    <div class="col xl5 l5 m6 left-align histilka">
                        <img class="margin-right  left" src="/img/histilka.png" alt="Чистилка в подарок">
                        <span class="medium text-white">Чистилка в подарок</span>
                        <p class="opacity">Мы дарим Вам прекрасную чистилку для очков, которая очистит все и приведет в идеальное состояние стекла. Не оставит царапин и каких-либо разводов. Чистилка, отличный помощник для ухода за Вашим зрением. Ведь в нрязные и замазанные очки просто не возможно смотреть.</p>
                    </div>
                    <div class="col xl3 l3 m6">
                        <p class="xxxlarge text-red">50%</p>
                        <h5 class="text-white">Не тяните кота за хвост</h5>
                        <p class="sub opacity">Закажите очки Ray-Ban прямо сейчас и получите скидку 50%</p>
                    </div>
                    <div class="col xl4 l4 m6 left-align calls">
                        <form action="/action_page.php" target="_blank">
                            <p>Мобильный номер телефона<input class="input border-red border-2 black" placeholder="Номер телефона" type="text" required name="Phone"></p>
                            <p>Как к Вам обращаться<input class="input border-red border-2 black" placeholder="Ваше имя" type="text" required name="Name"></p>
                            <p><button class="button red block" type="submit">ЗАКАЗАТЬ</button></p>
                        </form>
                    </div>
                </div>
            </div>
            <div class="subfooter">
                <div class="container">
                    <div class="row-padding">
                        <div class="col xl3 l3 m6 left-align address">
                            <p class="text-red small">ООО "ВЕКТОР" ОГРН: 1156658094086,<br> ИНН 6658479619,<br>620109, г. Екатеринбург, ул. Крауля, д. 9а, о. 407</p>
                        </div>
                        <div class="col xl3 l3 m6 left-align ">
                            <p class="small opacity"><a href="#" >Политика конфиденциальности</a></p>
                            <p class="small less opacity"><a href="#" >Пользовательское соглашение</a></p>
                        </div>
                        <div class="col xl6 l6 m6 left-align">
                            <p class="small opacity"><a href="#" >Сайт разработан компнаией JUNZER</a></p>
                            <p class="small less opacity">© 2020 Lovely Shopping. Все права защищены</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <script>
            // Модальный блок
            function onClick(element) {
                //   document.getElementById("img01").src = element.src;
                document.getElementById("modal01").style.display = "block";
                var captionText = document.getElementById("caption");
                captionText.innerHTML = element.alt;
            }


            // Управление сайдбаром
            var mySidebar = document.getElementById("mySidebar");

            function tr_open() {
                if (mySidebar.style.display === 'block') {
                    mySidebar.style.display = 'none';
                } else {
                    mySidebar.style.display = 'block';
                }
            }

            // Close the sidebar with the close button
            function tr_close() {
                mySidebar.style.display = "none";
            }
        </script>

    </body>
</html>
