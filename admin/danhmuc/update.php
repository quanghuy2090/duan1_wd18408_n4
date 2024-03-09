<?php
    if(is_array($dm)){
        extract($dm);
    }
?>
<div class="container">
    <h1>CẬP NHẬT DANH MỤC</h1>
        <form action="index.php?act=updatedm" method="POST" class="row g-3">
            <div class="col-auto">
                <label> Mã loại </label> <br>
                <input class="form-control" name="maloai" type="text" placeholder="Nhập vào mã loại" aria-label="default input example"><br>

                <label>Tên loại </label> <br>
                <input class="form-control" placeholder="Nhập vào tên loại" aria-label="default input example" type="text" name="tenloai" value="<?php if(isset($name)&&($name!="")) echo $name;?>" >
            </div>
            <div class="g-3">
                <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id;?>">
                <input class="btn btn-primary" name="capnhat" type="submit" value="CẬP NHẬT">
                <input  class="btn btn-success" type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listdm"><input  class="btn btn-warning" type="button" value="DANH SÁCH"></a>
            </div>
        <?php
           if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                
        ?>
    </form>
</div>    