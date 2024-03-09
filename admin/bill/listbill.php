    <div class="container">
        <h1>DANH SÁCH ĐƠN HÀNG</h1>
        <form action="index.php?act=listbill" method="post">

            <nav class="navbar bg-body-tertiary">
                <div class="col-3">
                    <form class="d-flex" role="search">
                        <button class="btn btn-primary" type="submit" name="listok">Tìm kiếm</button>
                        <input class="form-control me-2" type="search" aria-label="Search" name="kyw" placeholder="Tìm mã đơn hàng">
                    </form>
                </div>
            </nav>

            <div class="text-center">
            <table class="table table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>MÃ ĐƠN HÀNG</th>
                            <th>KHÁCH HÀNG</th>
                            <th>SỐ LƯỢNG HÀNG</th>
                            <th>GIÁ TRỊ ĐƠN HÀNG</th>
                            <th>NGÀY ĐẶT HÀNG</th>
                            <th>TRẠNG THÁI</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                        <?php
                            foreach($listbill as $bill){
                                extract($bill);
                                $kh = $bill["bill_user"].'
                                <br> '.$bill["bill_email"].'
                                <br> '.$bill["bill_address"].'
                                <br> '.$bill["bill_tel"];
                                $countsp = loadall_cart_count($bill['id']);
                                $ttdh = get_ttdh($bill['bill_status']);
                                $suabill="index.php?act=suabill&id=".$id;
                                $xoabill="index.php?act=xoabill&id=".$id;
                            echo '<tr>
                                <td>DVT-'.$bill['id'].'</td>
                                <td>'.$kh.'</td>
                                <td>'.$countsp.'</td>
                                <td>'.$bill['total'].' đ</td>
                                <td>'.$bill['ngaydathang'].'</td>
                                <td>'.$ttdh.'</td>
                                <td><a href="'.$suabill.'"><input class="btn btn-success" type="button" value="Sửa"></a>   
                               <a href="'.$xoabill.'"><input class="btn btn-danger" type="button" value="Xóa"></a></td>
                            </tr>';
                        }
                    ?>   

            </table>
        </div>
    </div>