<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap&subset=cyrillic"
        rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <title>Монтаж-сервис</title>
</head>
<body>
    <header class="header-bg">
        <div class="container">
            <div class="header">
                <div class="logo"><img src="img/logo.png" alt="logo" class="logo-img"></div>
                <nav class="header-nav">
                    <input id="menu-toggle" type="checkbox">
                    <label class="menu-btn" for="menu-toggle">
                        <span></span>
                    </label>
                    <ul class="nav-menu">
                        <li class="menu-item">
                            <a href="index.html" class="menu-link">
                                Главная
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="about.html" class="menu-link">
                                О нас
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="work.html" class="menu-link">
                                виды работ
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="contacts.html" class="menu-link">
                                контакты
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="contacts">
                    <a href="tel:+79000000000" class="contact-link">
                        +7 (900) 000 00 00
                    </a>
                    <a href="mailto:" class="contact-link">
                        montazhplus@gmail.com
                    </a>
                </div>
            </div>
        </div>
    </header>

<body>

<div class="feedback-page">
<?php
$back = "<p><a href=\"javascript: history.back()\">Вернуться назад</a></p>";

if(!empty($_POST['name']) and !empty($_POST['mail']) and !empty($_POST['company']) and !empty($_POST['phone'])
    and !empty($_POST['message'])){
    $name = trim(strip_tags($_POST['name']));
    $company = trim(strip_tags($_POST['company']));
    $mail = trim(strip_tags($_POST['mail']));
    $phone = trim(strip_tags($_POST['phone']));
    $message = trim(strip_tags($_POST['message']));

    mail('sale@freshw.ru', 'Письмо с FRESHW.RU',
        'Вам написал: '.$name.'<br />Его номер: '.$phone.'<br />Его почта: '.$mail.'<br />
      Его сообщение: '.$message,"Content-type:text/html;charset=UTF-8");

    echo "Ваше сообщение успешно отправлено!<Br> Вы получите ответ в 
      ближайшее время<Br> $back";

    exit;
}
else {
    echo "Для отправки сообщения заполните все поля! $back";
    exit;
}
?>;
</div>

    <footer>
        <div class="container">
            <div class="footer">
                <span class="copyright">
                    &copy;2020-<script type="text/javascript">
                        document.write(new Date().getFullYear());
                    </script>. Все права защищены.
                </span>
                <a href="tel:89000000000" class="footer-link">
                    +7 (900) 000 00 00
                </a>
                <span class="slash">|</span>
                <a href="mailto:montazh@gmail.com" class="footer-link">
                    montazh@gmail.com
                </a>
            </div>
        </div>
    </footer>
</body>
</html>