<form action="#" method="POST">
    <div class="container">
        <h1>DANH SÁCH DANH MỤC</h1>
        <div class="text-center">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>MÃ LOẠI</th>
                        <th>TÊN LOẠI</th>
                        <th>THAO TÁC</th>
                    </tr>
                </thead>
                <?php
                    foreach($listdanhmuc as $danhmuc){
                        extract($danhmuc);
                        $suadm="index.php?act=suadm&id=".$id;
                        $xoadm="index.php?act=xoadm&id=".$id;
                        echo '<tr>
                            <td>'.$id.'</td>
                            <td>'.$name.'</td>
                            <td><a href="'.$suadm.'"><input class="btn btn-success" type="button" value="Sửa"></a>   
                                <a href="'.$xoadm.'"><input class="btn btn-danger"type="button" value="Xóa"></a></td>
                            </tr>';
                    }
                ?>
           </table>
        </div>
        <a href="index.php?act=adddm"> <input  class="mr20 btn btn-primary" type="button" value="NHẬP THÊM"></a>
    </div>
</form>