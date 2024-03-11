<div class="container">
    <h1>DANH SÁCH BÌNH LUẬN</h1>
        <form action="#" method="POST">
            <div class="text-center">
                <table class="table table-hover table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>NỘI DUNG</th>
                            <th>NGƯỜI BÌNH LUẬN</th>
                            <th>SẢN PHẨM BÌNH LUẬN</th>
                            <th>NGÀY BÌNH LUẬN</th>
                            <th>THAO TÁC</th>
                        </tr>
                    </thead>

                    <?php
                        foreach($listbinhluan as $binhluan){
                            extract($binhluan);
                            $suabl="index.php?act=suatk&id=".$id;
                            $xoabl="index.php?act=xoatk&id=".$id;
                            echo '<tr>
                                <td>'.$id.'</td>
                                <td>'.$noidung.'</td>
                                <td>'.$iduser.'</td>
                                <td>'.$idpro.'</td>
                                <td>'.$ngaybinhluan.'</td>
                                <td>  
                                    <a href="'.$xoabl.'"><input class="btn btn-danger" type="button" value="Xóa"></a></td>
                                </tr>';
                        }
                    ?>       
                </table>
            </div>
        </form>
    </div>