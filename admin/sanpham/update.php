<?php
    if(is_array($sanpham)){
      extract($sanpham);
    }
    $hinhpath = "../upload/".$img;
    if(is_file($hinhpath)){
      $hinh = "<img src='".$hinhpath."' height='80'>";
      }else{
      $hinh = "no photo";
      }
?>

<div class="container">
  <h1>CẬP NHẬT LOẠI HÀNG HÓA</h1>
  <form class="row g-3" action="index.php?act=updatesp" method="POST">
    <!-- 
        <label> Mã san pham </label> <br>
        <input type="text" name="masp">
      </div>
    -->
  <div class="col-md-6">
    <div class="col-3">
      <label>Danh mục</label>
        <select class="form-select" name="iddm" aria-label="Default select example">
          <option value="0" selected>Tất cả</option>
            <?php
              foreach($listdanhmuc as $danhmuc){
                extract($danhmuc);
                if($iddm==$id) $s="selected"; else $s="";
                echo '<option value="'.$id.'" '.$s.'>'.$name.'</option>';
                //else echo '<option value="'.$id.'">'.$name.'</option>';
              }
                if(is_array($sanpham)){
                extract($sanpham);
              }
            ?>
        </select>
    </div>

    <label>Tên sản phẩm </label>
    <input class="form-control" type="text" name="tensp" value="<?=$name?>">

    <label>Giá</label>
    <input class="form-control" type="text" name="giasp" value="<?=$price?>">
    
    <label>Hình </label>
    <input class="form-control" type="file" name="hinh" value="<?=$name?>"><?=$hinh?><br>

    <label>Mô tả</label>
    <textarea class="form-control" name="mota" cols="30" rows="10" ><?=$mota?></textarea><br>

    <div class="g-3">
      <input type="hidden" name="id" value="<?=$id?>">
      <input class="btn btn-primary" name="capnhat" type="submit" value="Cập nhật">
      <input class="btn btn-success" type="reset" value="NHẬP LẠI">
      <a href="index.php?act=listsp"><input class="btn btn-warning" type="button" value="DANH SÁCH"></a>
    </div>

  </div>

      <?php
        if(isset($thongbao)&&($thongbao!=""))
        echo $thongbao;
      ?>

  </form>
</div>