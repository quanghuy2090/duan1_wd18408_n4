<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./img/banner1.jpg" class="d-block w-100" width="200" height="500" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./img/banner2.jpg" class="d-block w-100" width="200" height="500" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./img/banner3.jpg" class="d-block w-100" width="200" height="500" alt="...">
    </div>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>

  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div><br>

<main class="catalog  mb container">
    <div class="boxleft">
        <h2 style="text-align: center;margin-bottom: 20px;">Sản phẩm theo danh mục</h2>
        <div class="items">
            <?php
            $i = 0;
            $columns = 4; // Số cột mong muốn
            foreach ($dssp as $sp){
                extract($sp);
                $hinh =  $img_path.$img;
                $linksp="index.php?act=sanphamct&idsp=".$id;
                if ($i % $columns == 0) {
                    echo '<div class="row">';
                }
            
                if (($i == 2) || ($i == 5) || ($i == 8)) {
                    $mr = "";
                } else {
                    $mr = "mr";
                }
                echo '    
                <div class="col-md-' . (12/$columns) . ' ' . $mr . '">
                <div class="card" style="width: 18rem;">
                <a class="item_name" href="' . $linksp . '"><img src="' . $hinh . '" class="card-img-top" width="50" height="300" alt=""></a>
                
                <div class="card-body">
                <a class="text-center text-dark-emphasis" href="' . $linksp . '">' . $name . '</a>
                <p class="text-danger">Giá: ' . $price . ' đ</p>  
                <form action="index.php?act=addtocart" method="post">
                <input type="hidden" name="id" value="' . $id . '">
                <input type="hidden" name="name" value="'. $name . '">
                <input type="hidden" name="img" value="'.$img . '">
                <input type="hidden" name="price" value="' . $price . '">
                <div >
                <input type="submit" name="addtocart" class="btn btn-primary" value="Thêm giỏ hàng">
                <input type="submit" name="addtocart" class="btn btn-danger" value="Mua ngay"> 
                </div>
            </form>    
            </div>
            </div> 
    </div>';
            $i++;

            if ($i % $columns == 0 || $i == count($spnew)) {
                echo '</div> <br>';
            }
                }
            ?>
        </div>
    </div>
    <?php
    include_once "view/boxright.php";
    ?>
</main>
<!-- BANNER 2 -->