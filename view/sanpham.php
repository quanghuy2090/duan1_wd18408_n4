
<style>

    /* Nền và viền của thẻ select */
    #filterSelect {
        background-color: #f2f2f2;
        border: none;
        padding: 10px;
        font-size: 16px;
        width: 200px;
        border-radius: 5px;
    }

    /* Tùy chỉnh kiểu mũi tên xuống */
    #filterSelect::after {
        content: "\25BC";
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translateY(-50%);
        color: #888;
    }

    /* Tùy chỉnh tùy chọn trong danh sách */
    #filterSelect option {
        background-color: #fff;
        color: #555;
    }
    .col-4 {
        padding: 0;
    }

    .mpvc {
        position: relative;
        overflow: hidden;
        border: 2px solid #ccc;
        border-radius: 15px;
        width: 400px; /* Điều chỉnh kích thước khung */
        margin-left: auto; /* Căn giữa */
        margin-right: auto; /* Căn giữa */
    }

    .mpvc img {
        width: 100%;
        height: 170px;
        transition: transform 0.4s ease;
    }

    .mpvc:hover img {
        transform: scale(1.1);
    }
</style>
<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://dongphuchaianh.vn/wp-content/uploads/2021/06/banner-ao-polo-dong-phuc-cong-ty.jpg" class="d-block w-100" width="200" height="500" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://dojeannam.com/wp-content/uploads/2021/08/BANNER-WEB.11112.1.jpg" class="d-block w-100" width="200" height="500" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://file.hstatic.net/1000369857/collection/1919_730_polo_3da01ded33614497a1884a3b99489661.jpg" class="d-block w-100" width="200" height="500" alt="...">
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
</div> <br>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>

  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div><br>
<div class="row ">
    <div class="col-4">
        <div class="mpvc">
            <img src="img/GiaohangMP.png" alt="">
        </div>
    </div>
    <div class="col-4">
        <div class="mpvc">
            <img src="img/doitra.jpg" alt="">
        </div>
    </div>
    <div class="col-4">
        <div class="mpvc">
            <img src="img/l1d1.png" alt="">
        </div>
    </div>
</div>
<main class="catalog  mb container">
    <div class="boxleft"> <br>
        <h2 style="text-align: center;margin-bottom: 20px;">Sản phẩm theo danh mục</h2>
        <div class="items">
        <select id="filterSelect" aria-label="Disabled select example" onchange="redirectToLink()">
              <option selected value="0">Bộ lọc....</option>
              <option value="1">Áo phông</option>
              <option value="2">Áo khoác</option>
              <option value="3">Quần jeans</option>
              <option value="4">Quần short</option>
              <option value="5">Combo</option>
            </select> <br><br>
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
<br>
</main>
<!-- BANNER 2 -->
<script>
    function redirectToLink() {
        var selectElement = document.getElementById("filterSelect");
        var selectedValue = selectElement.value;
        
        if (selectedValue === "1") {
            window.location.href = "index.php?act=sanpham&iddm=1";
        } else if (selectedValue === "2") {
            window.location.href = "index.php?act=sanpham&iddm=2";
        } else if (selectedValue === "3") {
            window.location.href = "index.php?act=sanpham&iddm=3";
        } else if (selectedValue === "4") {
            window.location.href = "index.php?act=sanpham&iddm=5";
        } else if (selectedValue === "5") {
            window.location.href = "index.php?act=sanpham&iddm=6";
        }
    }
</script>