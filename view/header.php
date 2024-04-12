<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>H2T Fashion </title>
  <!-- <link rel="stylesheet" href="./css/css.css"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/5eef691f30.js" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/509cc166d7.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lexend&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
  <script src="main.js"></script>
</head>
<style>
  .custom-input {
    height: 25px;
    /* Chiều cao mới của input */
    position: relative;
    left: 10vh;
  }

  .cus-input {
    height: 25px;
    /* Chiều cao mới của input */
    position: relative;
    left: 22vh;
  }
</style>

<body>
  <nav class="navbar navbar-expand-lg bg-light-subtle border-bottom">
    <div class="container-fluid justify-content-center bg">
      <div class="dropdown">
  </div>
      <a class="navbar-brand " href="index.php">
        <img src="img/logo11.png" width="90px" height="auto" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <ul class="nav justify-content-center ">
        <li class="nav-item">
          <a class="nav-link active text-dark-emphasis hover-nav" aria-current="page" href="index.php">Trang chủ</a>

        </li>
        <li class="nav-item">
          <a class="nav-link text-dark-emphasis" href="index.php?act=gioithieu">Giới thiệu</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-dark-emphasis" href="#" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Sản phẩm
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item text-dark-emphasis" href="index.php?act=sanpham&iddm=1">Áo phông</a></li>
            <li><a class="dropdown-item text-dark-emphasis" href="index.php?act=sanpham&iddm=2">Áo khoác</a></li>
            <li><a class="dropdown-item text-dark-emphasis" href="index.php?act=sanpham&iddm=3">Quần jeans</a></li>
            <li><a class="dropdown-item text-dark-emphasis" href="index.php?act=sanpham&iddm=5">Quần short</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark-emphasis" href="index.php?act=lienhe">Liên hệ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark-emphasis" href="index.php?act=tintuc">Tin tức</a>
        </li>
      </ul>
      <form class="d-flex " role="search" action="index.php?act=sanpham" method="post">
        <div class="custom-input" id="search-container">
          <input class="form-control me-2 custom-input border border-success-subtle" type="search" placeholder="Search"
            size="25" aria-label="Search" name="keyword">
        </div>
        <div class="cus-input">
          <a href="index.php?act=user" class="text-dark-emphasis"><i class="fa-solid fa-user"></i></a>
          <a href="index.php?act=viewcart" class="text-dark-emphasis"> <i class="fa-solid fa-cart-shopping"></i></a>
        </div>
      </form>
    </div>

  </nav>
</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">

  </script>
