
<section><header>
        <h1>Danh sách bình luận</h1>
    </header>
    <form action="#" method="post">
        <table>
            <thead>
                <tr>
                    <th>Chọn</th>
                    <th>ID</th>
                    <th>Nội Dung</th>
                    <th>IDUser</th>
                    <th>IDpro</th>
                    <th>Ngày Bình Luận</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
            <?php
            foreach ($listbinhluan as $binhluan) {
                extract($binhluan);
                $suabl = "index.php?act=suabl&id=" .$id;
                $xoabl = "index.php?act=xoabl&id=" .$id;

                echo '<tr>
                    <td><input type="checkbox"></td>
                    <td>BL '.$id.'</td>
                    <td>'.$noidung.'</td>
                    <td>'.$iduser.'</td>
                    <td>'.$idpro.'</td>
                    <td>'.$ngaybinhluan.'</td>
                    <td><a href= "'.$xoabl.'"><input type="button" value="Xóa"onclick="return confirm("Bạn có chắc muốn xóa tài khoản này không?" ></a></td>
                </tr>';
            }
            ?>
            </tbody>
        </table>
        <div class="table-actions">
            <button onclick="chonTatCa()">Chọn tất cả</button>
            <button onclick="xoaTatCa()">Xóa tất cả</button>
        </div>
    </form>
    </section>