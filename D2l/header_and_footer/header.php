<?php session_start() ?>
<header>
    <nav>
        <div class="logo">
            <h1>D2L</h1>
        </div>
        <div class="href">
            <a href="./coach.php">Коуч</a>
            <a href="./acc.php">Аккаунты</a>
            <a href="./training.php">Обучение</a>
            <a href="./help.php">Помощь</a>
            <!-- <img src="svg/Customer.svg" alt=""> -->
            <?php
            if (!isset($_SESSION['user'])) {
                echo "  
            <a href=\"../login.php\">Войти</a>
            <a href=\"../reg.php\">Регистрация</a>
       ";
            } else {
                echo "
                <a href=\"./back/logout.php\">Выйти</a>
                <a href=\"../basket.php\">Корзина</a>
            ";
            }
            ?>
        </div>

    </nav>


</header>