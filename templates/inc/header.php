<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="wr">
    <div class="container">
        <header class="header row">
            <div class="col h"><a href="#">Наши работы</a> </div>
            <div class="col h"><a href="#">Опт</a> </div>
            <div class="col h"><a href="#">Как заказать</a> </div>
            <div class="col h"><a href="#">Отзывы</a> </div>
        </header>
    </div>
</div>
<div class="container">
    <section class="navigation row">
        <div class="col-2"><img src="https://volgograd.bilkam.ru/upload/CNext/2c5/2c50d3c018ab95ccb02ca18383408e01.jpg" alt="Logo"> </div>
        <div class="col-2">
            <div class="city_title">Ваш город</div>
            <div class="city_chooser"><a href="#" id="city">Волгоград</a></div>
        </div>
        <div class="col-3 search">
            <input class="form-control" type="text" placeholder="Поиск" aria-label="Search" style="background: whitesmoke">
        </div>
        <div class="col-1 search-btn">
            <div class="search-button-div" >
                <button class="btn btn-search" type="submit" name="s" value="Найти"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg></button>
                <span class="close-block inline-search-hide"><span class="svg svg-close close-icons"></span></span>
            </div>
        </div>
        <div class="col-2"><div class="inner-table-block">
                <div class="phone">
                    <i class="svg svg-phone"></i>
                    <h5><a rel="nofollow" href="tel:+78442203623" style="color: black">8 (844) 220-36-23</a></h5>
                </div>
                <div class="schedule" >
                    Пн-Вс с 9:00 до 21:00<br>
                    <div class="mail-new" style="margin-top: 3px;">
                        <a style="font-size: 14px; color: #1faee9;" href="mailto:sales@bilkam.ru;">sales@bilkam.ru</a>
                    </div>										</div>
            </div></div>
        <div class="col-2">
            <button type="button" class="btn btn-info1">Заказать звонок</button>
        </div>
    </section>
    <section class="menubar row">
        <div class="col m"><a href="#" class="men-links">Акции</a> </div>
        <div class="col"><a href="#" class="men-links">Памятники из гранита</a> </div>
        <div class="col"><a href="#" class="men-links">Виды памятников</a> </div>
        <div class="col"><a href="#" class="men-links">По цвету</a> </div>
        <div class="col"><a href="#" class="men-links">Мемориальные комплексы</a> </div>
        <div class="col"><a href="#" class="men-links">Благоустройство</a> </div>
    </section></div>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/LR_CRUDS/funeral">Похороны</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/LR_CRUDS/brigade">Бригады</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/LR_CRUDS/hall">Залы</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/LR_CRUDS/plot">Участки</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/LR_CRUDS/necropolis">Кладбища</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/LR_CRUDS/monument">Памятники</a>
                </li>
            </ul>
        </div>
    </nav>

</body>
