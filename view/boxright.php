
<style>
a {
text-decoration: none;
color:#495057;
}
</style>
<div class="text-center">
    <div class="badge text-bg-success text-wrap">DANH MỤC</div> <br>
    <div class="box_content2 product_portfolio"> <br>
        <ul>
            <?php
                foreach($dsdm as $dm){
                    extract($dm);
                    $linkdm="index.php?act=sanpham&iddm=".$id;
                    echo '
                    <button type="button" class="btn btn-info "><a href="'.$linkdm.'">'.$name.' </a> </button>
                    
                    ';

                }
            ?>
        </ul>
    </div>
</div>

<!-- DANH MỤC SẢN PHẨM BÁN CHẠY -->
<div class="text-center">
    <div class="badge text-bg-success text-wrap">SẢN PHẨM BÁN CHẠY</div>
    </div> <br>
        <div class="box_content">
        <?php
        $i = 0;
        $columns = 4; // Số cột mong muốn
                foreach($dstop10 as $sp){
                    extract($sp);
                    if ($i % $columns == 0) {
                        echo '<div class="row">';
                    }
                
                    if (($i == 2) || ($i == 5) || ($i == 8)) {
                        $mr = "";
                    } else {
                        $mr = "mr";
                    }
                    $linksp="index.php?act=sanphamct&idsp=".$id;
                    $img=$img_path.$img;
                    echo'   
                    <div class="col-md-' . (12/$columns) . ' ' . $mr . '">
                            <div class="card" style="width: 18rem;">
                    <a class="item_name" href="' . $linksp . '"><img src="' . $img . '" class="card-img-top" width="50" height="300" alt=""></a>
                    <div class="card-body">
                    <a class="text-center text-dark-emphasis" href="' . $linksp . '">' . $name . '</a>
                <p class="text-danger text-center">Giá: ' . $price . ' đ</p>  
                <form action="index.php?act=addtocart" method="post">
                <input type="hidden" name="id" value="' . $id . '">
                <input type="hidden" name="name" value="' . $name . '">
                <input type="hidden" name="img" value="' . $img . '">
                <input type="hidden" name="price" value="' . $price . '">
                <input type="submit" name="addtocart" class="btn btn-primary" value="Thêm giỏ hàng">
                <input type="submit" name="addtocart" class="btn btn-danger" value="Mua ngay">
            </form>   
            </div>
            </div></div>';   $i++;

            if ($i % $columns == 0 || $i == count($spnew)) {
                echo '</div> <br>';
            }
                }
                ?>
    </div>
</div>
