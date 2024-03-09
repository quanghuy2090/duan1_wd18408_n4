<div class="container">
<h1>THÊM MỚI SẢN PHẨM</h1>
  <form class="row g-3" action="index.php?act=addsp" method="POST" enctype="multipart/form-data">
    <div class="col-md-6">
      <div class="col-3">
      <label>Danh mục</label> 
        <select name="iddm" class="form-select" aria-label="Default select example">
          <?php
              foreach($listdanhmuc as $danhmuc){
                extract($danhmuc);
                echo '<option value="'.$id.'">'.$name.'</option>';
            }
          ?>
        </select>
      </div>
  
      <label>Mã sản phẩm</label>
      <input class="form-control" type="text" name="masp">

      <label>Tên sản phẩm </label>
      <input class="form-control" type="text" name="tensp">

      <label>Giá</label> 
      <input class="form-control" type="text" name="giasp">

      <label  class="form-label">Hình ảnh</label> 
      <input class="form-control" type="file" name="hinh">

      <label>Mô tả </label> 
      <textarea class="form-control" name="mota" cols="30" rows="10"></textarea><br>

      <div class="g-3">
        <input class="btn btn-primary" name="themmoi" type="submit" value="THÊM MỚI">

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