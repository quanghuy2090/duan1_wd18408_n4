<div class="container">
    <h1>DANH SÁCH LOẠI HÀNG HÓA</h1>
        <form action="index.php?act=listsp" method="POST">
            <div class="text-center">
                <table class="table table-hover table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>MÃ LOẠI</th>
                            <th>TÊN SẢN PHẨM</th>
                            <th>HÌNH</th>
                            <th>GIÁ</th>
                            <th>LƯỢT XEM</th>
                            <th>THAO TÁC</th>
                        </tr>
                    </thead>
                        <?php
                            foreach($listsanpham as $sanpham){
                                extract($sanpham);
                                $suasp="index.php?act=suasp&id=".$id;
                                $xoasp="index.php?act=xoasp&id=".$id;
                                $hinhpath = "../upload/".$img;
                                if(is_file($hinhpath)){
                                    $hinh = "<img src='".$hinhpath."' height='80'>";
                                }else{
                                    $hinh = "no photo";
                                }
                                echo '<tr>                       
                                    <td>'.$id.'</td>
                                    <td>'.$name.'</td>
                                    <td>'.$hinh.'</td>
                                    <td>'.$price.'</td>
                                    <td>'.$luotxem.'</td>
                                    <td><a href="'.$suasp.'"><input class="btn btn-success" type="button" value="Sửa"></a>   
                                        <a href="'.$xoasp.'"><input class="btn btn-danger" type="button" value="Xóa"></a></td>
                                </tr>';
                            }
                        ?>    
                </table>
            </div>
        <a href="index.php?act=addsp"><input  class="btn btn-primary" type="button" value="NHẬP THÊM"></a>     
    </form>
</div>