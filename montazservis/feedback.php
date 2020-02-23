<!doctype html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Веб-студия &quot;FRESH WEB&quot; предлагает полный комплекс услуг для проектов любого уровня и
                    любой стадии готовности - от начальной, когда есть лишь идея, нуждающаяся в разработке,
                    создании инструментов и продвижении, до заключительной, когда ресурсу необходима только
                    поддержка.">
    <link rel="shortcut icon" href="/img/favicon.ico"/>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900&display=swap&subset=cyrillic-ext" rel="stylesheet">
    <title>Fresh WEB</title>
</head>
<body>
<header class="header">
    <div class="logo">
        <a href="index.html">
            <img src="img/logo.png" alt="logo">
        </a>
    </div>


    <div class="hamburger-menu">
        <input id="menu__toggle" type="checkbox" />
        <label class="menu__btn" for="menu__toggle">
            <span></span>
        </label>
        <ul class="menu__box">
            <li>
                <a class="menu__item" href="index.html">Главная</a>
            </li>
            <li>
                <a class="menu__item" href="about.html">О&nbsp;компании</a>
            </li>
            <li>
                <a class="menu__item" href="projects.html">Наши&nbsp;проекты</a>
            </li>
            <li>
                <a class="menu__item" href="services.html">Услуги</a>
            </li>
            <li>
                <a class="menu__item" href="contacts.html">Контакты</a>
            </li>
        </ul>
    </div>


    <nav class="nav">
        <ul>
            <li>
                <a href="index.html">Главная</a>
            </li>
            <li>
                <a href="about.html">О&nbsp;компании</a>
            </li>
            <li>
                <a href="projects.html">Наши&nbsp;проекты</a>
            </li>
            <li>
                <a href="services.html">Услуги</a>
            </li>
            <li>
                <a href="contacts.html">Контакты</a>
            </li>
        </ul>
    </nav>
    <div class="nav-contacts">
        <a href="tel:+7(963)0479220">+7&nbsp;(963)&nbsp;047&nbsp;92&nbsp;20</a><br>
        <a href="mailto:freshweb@gmail.com">sale@freshw.ru</a>
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

</body>
</html>