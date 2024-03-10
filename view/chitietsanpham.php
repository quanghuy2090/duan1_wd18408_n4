<style>
td {
    padding: 0 20px;
}

</style>
<main class="catalog  mb ">
    <div class="boxleft">
        <?php extract($sanpham); ?>
        <div class="  mb">
            <div class="text-center">
            <div class="badge text-bg-success text-wrap" style="width: 12rem;">
Chi tiết sản phẩm
</div> <br>
            </div>
            <div class="">
                <?php 
                    $hinh = $img_path . $img;                
                    echo "<div class='row'>";   
                    echo "<div class='col-5'>";   
                    echo "<img src='$hinh' width='400' height='300px'>";  
                    echo "</div>";
                    echo "<div class='col-6'>"; 
                    echo "<h2 class='fw-bold'> $name</h2>"; 
                    echo " <h4 class='text-danger'>$price đ</h4>";               
                    echo "<p class='fw-semibold'>$mota</p>";



                    echo '<form action="index.php?act=addtocart" method="post">
                            <input type="hidden" name="id" value="'.$id.'">
                            <input type="hidden" name="name" value="'.$name.'">
                            <input type="hidden" name="img" value="'.$img.'">
                            <input type="hidden" name="price" value="'.$price.'">
                            <input type="submit" name="addtocart" class="btn btn-primary" value="Thêm giỏ hàng">
                        </form>';
                        echo "</div>";
                        echo "<div class='col'>";
                        echo "</div>";
                        echo "</div>";
                        echo "<hr><br>";
                ?>

            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
            
                $("#binhluan").load("view/binhluan/binhluanform.php", {idpro: <?=$id?>});
            
            });
        </script>
        <div class="bl" id="binhluan">

        </div>

        <div class=" mb">
            <div class="box_content">
                <?php foreach($sanphamcl as $value): ?>
                <li>
                    <a href="index.php?act=sanphamct&idsp=<?=$value['id']?>">
                        <?=$value['name']?>
                    </a>
                </li>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <?php
    include "view/boxright.php";
?>

</main>