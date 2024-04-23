<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>acc</title>
  <link rel="stylesheet" href="./index.css" />
</head>

<body>
  <?php include_once('./header_and_footer/header.php') ?>
  <main>
    <div class="acc">
      <div class="container">
        <h1 class="accTitle">Доступные аккаунты для покупки</h1>

        <div class="acc_cont">
          <?php
          require_once './back/connect.php';
          $sql = "SELECT * FROM `products` ";
          $product = mysqli_query($connect, $sql);
          if (mysqli_num_rows($product) > 0) {
            while ($row = mysqli_fetch_assoc($product)) {
          ?>
              <div class="acc_card open-modal">
                <h1><?php echo $row['name'] ?></h1>
                <img src="./img/<?php echo $row['img'] ?>" alt="" />
                <h1 class="textAcc">
                  <?php echo $row['about'] ?>
                </h1>
                <h1 class="priceAcc"><?php echo $row['price'] ?></h1>
                <a href="./back/cart.php?id=<?php echo $row['id'] ?>" class="priceAcc ">
                  Купить
                </a>
              </div>
          <?php
            }
          }
          ?>
        </div>

        <div class="overlay"></div>
        <div class="modal">
          <button class="close-modal">
            <img src="./svg/close-bold-svgrepo-com.svg" alt=""></button>
          <div class="modal_cont">

            <div class="slider">
              <div class="slide">
                <img src="./img/image 17.png" alt="Image 1" />
              </div>
              <div class="slide">
                <img src="./img/image 17.png" alt="Image 2" />
              </div>
              <div class="slide">
                <img src="./img/image 17.png" alt="Image 3" />
              </div>
              <div class="slide">
                <img src="./img/image 17.png" alt="Image 4" />
              </div>
              <div class="thumbnails">
                <img src="./img/image 17.png" alt="Thumbnail 1" />
                <img src="./img/image 17.png" alt="Thumbnail 2" />
                <img src="./img/image 17.png" alt="Thumbnail 3" />
                <img src="./img/image 17.png" alt="Thumbnail 4" />
              </div>
              <button class="arrow" id="prevBtn"><img src="./svg/arrow-sm-left-svgrepo-com.svg" alt=""></button>
              <button class="arrow" id="nextBtn"><img src="./svg/arrow-sm-right-svgrepo-com.svg" alt=""></button>
            </div>
            
            <h3></h3>
            <p class="modalParagraph"></p>

            <div class="info">
              <div class="infoBlock">
                MMR 7069 <br />ПОРЯДОЧНОСТЬ 8830 <br />КОЛИЧЕСТВО ЧАСОВ 300
                <br />РОДНАЯ ПОЧТА <br />23 УРОВЕНЬ ТРОФЕЯ <br />100 МАТЧЕЙ
                <br />НЕТ ПОПОЛНЕНИЙ
              </div>
              <div class="infoBlock ifB">
                Содержит все предметы из <br />
                набора Brightfist для Marci: <br />— Brightfist Armor;<br />—
                Brightfist Back;<br />— Brightfist Shoulder;<br />— Brightfist
                Head.
              </div>
            </div>




          </div>

        </div>
      </div>
    </div>
    <?php include_once('./header_and_footer/footer.php') ?>
  </main>
  <script src="./js/modal.js"></script>
  <script src="./js/slider.js"></script>
</body>

</html>
<!-- <!DOCTYPE html> -->
<!-- <html>
  <head>
    <title>Модальное окно</title>
    <style>
      .modal {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        z-index: 999;
      }

      .overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 998;
      }
    </style>
  </head>
  <body>
    <div class="card" data-content="Содержимое модального окна для Карточки 1">
      <h2>Карточка 1</h2>
      <button class="open-modal">Открыть модальное окно</button>
    </div>
    <div class="card" data-content="Содержимое модального окна для Карточки 2">
      <h2>Карточка 2</h2>
      <button class="open-modal">Открыть модальное окно</button>
    </div>
    Модальное окно
    <div class="overlay"></div>
    <div class="modal">
      <h3></h3>
      <p></p>
      <button class="close-modal">Закрыть</button>
    </div>
  </body>
</html> -->