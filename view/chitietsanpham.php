<style>
    td {
        padding: 0 20px;
    }

    .size-button {
        padding: 10px;
        margin-right: 10px;
        cursor: pointer;
    }

    .selected {
        background-color: yellow;
    }

    .quantity-container {
        display: flex;
        align-items: center;
    }

    .quantity-btn {
        background-color: #f1f1f1;
        border: none;
        padding: 8px 12px;
        font-size: 16px;
        cursor: pointer;
    }

    .quantity-value {
        margin: 0 10px;
        font-size: 16px;
    }
</style>
<main class="container ">
    <input type="hidden" name="" value="">
    <div class="text-center">
        <?php extract($sanpham); ?>
        <h3 class="badge text-bg-success text-wrap" style="width: 12rem;">
            Chi tiết sản phẩm

        </h3>
    </div><br>

    <div>
        <?php
        if (isset($_POST['soluong']) && isset($_POST['soluong']) > 0) {
            $soluong = $_POST['soluong'];
        } else {
            $soluong = 1;
        }
        $hinh = $img_path . $img;
        echo "<div id='ctsp'>";
        echo "<div class='row'>";
        echo "<div class='col-5'>";
        echo "<img src='$hinh' width='400' height='300px'>";
        echo "</div>";
        echo "<div class='col-6'>";
        echo "<h2 class='fw-bold'> $name</h2>";
        echo " <h4 class='text-danger'>$price đ</h4>";
        echo ' <strong> Size :</strong> <span id="selected-size"></span>';
        echo ' <span class="size-button" onclick="setSize("S")">S</span>
                    <span class="size-button" onclick="setSize("M")">M</span>
                    <span class="size-button" onclick="setSize("L")">L</span>';
        echo '<div class="m-2">
                <button class="btn" onclick="giamSoluong()">-</button>
                <a id="quantity">'.$soluong.'</a>
                <button class="btn" onclick="tangSoluong()">+</button>
                </div>';
        echo "<p class='fw-semibold'>$mota</p>";
        echo '<form action="index.php?act=addtocart" method="post">
                <input type="hidden" name="id" value="' . $id . '">
                <input type="hidden" name="name" value="' . $name . '">
                <input type="hidden" name="img" value="' . $img . '">
                <input type="hidden" name="price" value="' . $price . '">
                <input type="submit" name="addtocart" class="btn btn-primary" value="Thêm giỏ hàng">
            </form>';
            'form
                <input type="hidden" name="id" value="' . $id . '">
                <input type="hidden" name="name" value="' . $name . '">
                <input type="hidden" name="img" value="' . $img . '">
                <input type="hidden" name="price" value="' . $price . '">
                <input type="submit" name="addtocart" class="btn btn-primary" value="Thêm giỏ hàng">
            </form>';
        echo "</div>";
        echo "<div class='col'>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "<br>";
        ?>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {

            $("#binhluan").load("view/binhluan/binhluanform.php", { idpro: <?= $id ?> });

        });
    </script>
    <div class="" id="binhluan">
        <form action="">
            <input type="text" name="msg">
            <button><input type="submit" class="btn btn-warning" name="guibinhluan">Gửi bình luận</button>
        </form>
    </div>

    <!-- <div class=" mb">
            <div class="box_content">
                <?php foreach ($sanphamcl as $value): ?>
                <li>
                    <a href="index.php?act=sanphamct&idsp=<?= $value['id'] ?>">
                        <?= $value['name'] ?>
                    </a>
                </li>
                <?php endforeach; ?>
            </div>
        </div> -->
    </div>
    <?php
        include "view/boxright.php";
    ?>

</main>
<script src="/jquery-3.4.1.min.js" ></script>
<script>
    var selectedSize = '';

    function setSize(size) {
        if (selectedSize !== '') {
            var prevSizeElement = document.getElementById('size-' + selectedSize);
            prevSizeElement.classList.remove('selected');
        }

        selectedSize = size;
        document.getElementById('selected-size').textContent = size;

        var currentSizeElement = document.getElementById('size-' + selectedSize);
        currentSizeElement.classList.add('selected');
    }
    function giamSoluong() {
        var quantityElement = document.getElementById('quantity');
        var currentQuantity = parseInt(quantityElement.innerText);

        if (currentQuantity > 1) {
            currentQuantity--;
            quantityElement.innerText = currentQuantity;
        } else {
            alert("Số lượng sản phẩm đã là 1, không thể giảm thêm!");
        }
    }

    function tangSoluong() {
        var quantityElement = document.getElementById('quantity');
        var currentQuantity = parseInt(quantityElement.innerText);

        currentQuantity++;
        quantityElement.innerText = currentQuantity;
    }

</script>