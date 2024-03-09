<div class="container">
<h1>THÊM MỚI DANH MỤC</h1>
<form class="row g-3" action="index.php?act=adddm" method="POST">
    <div class="col-auto">
      <label> Mã loại </label>
        <input class="form-control" name="maloai" type="text" placeholder="Nhập vào mã loại" aria-label="default input example"><br>
      <label>Tên loại </label>
        <input class="form-control" name="tenloai" type="text" placeholder="Nhập vào tên loại" aria-label="default input example"><br>
      <div class="g-3">
        <input class="btn btn-primary" name="themmoi" type="submit" value="THÊM MỚI">

        <input  class="btn btn-success" type="reset" value="NHẬP LẠI">

        <a href="index.php?act=listdm"><input  class="btn btn-warning" type="button" value="DANH SÁCH"></a>
      </div>
        <?php
          if(isset($thongbao)&&($thongbao!=""))
            echo $thongbao;
        ?>
    </div>
  </form>
</div>