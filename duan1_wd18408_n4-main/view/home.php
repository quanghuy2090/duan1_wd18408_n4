
<style>
    a {
  text-decoration: none;
}
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

<main class="catalog  mb ">
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
<br>
<h2 class="text-center">Tất cả sản phẩm</h2>
<br>
<div class="items container">
  <select id="filterSelect" aria-label="Disabled select example" onchange="filterByPrice()">
    <option selected value="">Giá......</option>
    <option value="asc">Từ thấp đến cao</option>
    <option value="desc">Từ cao đến thấp</option>
  </select>
  <br> <br>

  <?php
    $i = 0;
    $columns = 4; // Số cột trong lưới

    $perPage = 8; // Số sản phẩm trên mỗi trang
    $page = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1; // Trang hiện tại

    // Tính toán vị trí bắt đầu của sản phẩm trên trang hiện tại
    $startIndex = ($page - 1) * $perPage;

    // Tính toán tổng số trang dựa trên tổng số sản phẩm và số lượng sản phẩm trên mỗi trang
    $totalPages = ceil(count($spnew) / $perPage);

    // Cắt danh sách sản phẩm thành trang hiện tại
    $productsForPage = array_slice($spnew, $startIndex, $perPage);

    // Sắp xếp sản phẩm nếu cần thiết
    $sort = isset($_GET['sort']) ? $_GET['sort'] : '';
    if ($sort === 'asc') {
        usort($productsForPage, function ($a, $b) {
            return $a['price'] - $b['price'];
        });
    } elseif ($sort === 'desc') {
        usort($productsForPage, function ($a, $b) {
            return $b['price'] - $a['price'];
        });
    }

    // Hiển thị sản phẩm cho trang hiện tại
    foreach ($productsForPage as $sp) {
        extract($sp);
        $hinh = $img_path . $img;
        if ($i % $columns == 0) {
            echo '<div class="row">';
        }

        // Xử lý class để căn giữa các cột
        $mr = ($i % $columns == $columns - 1) ? '' : 'mr';

        $linksp = "index.php?act=sanphamct&idsp=" . $id;

        echo '                
        <div class="col-md-' . (12 / $columns) . ' ' . $mr . '">
          <div class="card" style="width: 18rem;">
            <a class="item_name" href="' . $linksp . '"><img src="' . $hinh . '" class="card-img-top" width="50" height="300" alt=""></a>
            <div class="card-body">
              <a class="text-center text-dark-emphasis" href="' . $linksp . '">' . $name . '</a>
              <p class="text-danger">Giá: ' . $price . ' đ</p>  
              <form action="index.php?act=addtocart" method="post">
                <input type="hidden" name="id" value="' . $id . '">
                <input type="hidden" name="name" value="' . $name . '">
                <input type="hidden" name="img" value="' . $img . '">
                <input type="hidden" name="price" value="' . $price . '">
                <div >
                  <input type="submit" name="addtocart" class="btn btn-primary" value="Thêm giỏ hàng">
                  <input type="submit" name="addtocart" class="btn btn-danger" value="Mua ngay"> 
                </div>
              </form>    
            </div>
          </div>
        </div> ';

        $i++;

        if ($i % $columns == 0 || $i == count($spnew)) {
            echo '</div> <br>';
        }
    }

    // Hiển thị phân trang
    echo '<div class="pagination justify-content-center">';
    echo '<ul class="pagination">';
    
    if ($page > 1) {
        echo '<li class="page-item"><a class="page-link" href="index.php?page=' . ($page - 1) . '">Previous</a></li>';
    }
    
    for ($i = 1; $i <= $totalPages; $i++) {
        echo '<li class="page-item' . ($i == $page ? ' active' : '') . '"><a class="page-link" href="index.php?page=' . $i . '">' . $i . '</a></li>';
    }
    
    if ($page < $totalPages) {
        echo '<li class="page-item"><a class="page-link" href="index.php?page=' . ($page + 1) . '">Next</a></li>';
    }
    
    echo '</ul>';
    echo '</div>';
?>

</div>

<script>
  function filterByPrice() {
    var filterSelect = document.getElementById("filterSelect");
    var selectedOption = filterSelect.options[filterSelect.selectedIndex].value;

    // Thay đổi URL dựa trên lựa chọn được chọn
    if (selectedOption === "asc") {
      window.location.href = "index.php?sort=asc";
    } else if (selectedOption === "desc") {
      window.location.href = "index.php?sort=desc";
    }
  }
</script>

</main>


