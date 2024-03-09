<?php
    if(is_array($bill)){
        extract($bill);
    }
?>
<div class="container">
    <h1>CẬP NHẬT ĐƠN HÀNG</h1>
    <form class="row g-3" action="index.php?act=updatebill" method="POST">
        <div class="col-md-6">
            <label>Tên khách hàng</label> 
                <input class="form-control" type="text" name="iduser" disabled>

                <label>Số lượng hàng</label> 
                <input class="form-control" type="text" name="soluonghang" disabled>

                <label>Giá trị đơn hàng</label>
                <input class="form-control" type="text" name="total" disabled>

                <label>Ngày đặt hàng</label>
                <input class="form-control" type="text" name="ngaydathang" disabled>

            <div class="col-3">
                <label>Trạng thái</label><br>  
                <select class="form-select" aria-label="Default select example" name="bill_status">
                    <option value="0" >Đơn hàng mới</option>
                    <option value="1" >Đang xử lý</option>
                    <option value="2" >Đang giao</option>
                    <option value="3" >Đã giao</option>
                </select>
            </div><br>

            <div class="g-3">
                <!-- <input type="checkbox" name="bill_status"  > -->
                <input type="hidden" name="id" value="<?=$id?>">
                <input class="btn btn-primary" name="capnhat" type="submit" value="CẬP NHẬT">
                <a href="index.php?act=listbill"><input  class="btn btn-success" type="button" value="DANH SÁCH"></a>
            </div>
        </div>
        <?php
           if(isset($thongbao)&&($thongbao!="")) echo $thongbao;           
        ?>
    </form>    
</div>