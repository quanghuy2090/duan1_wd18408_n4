

<section id="contai">
    <header>
        <h1>Danh sách đơn hàng</h1>
    </header>
        <form action="index.php?act=listbill" method="post">
            <table>
                <thead>
                    <tr>
                        <th>MĐH</th>
                        <th>Khách hàng</th>
                        <th>Số lượng</th>
                        <th>Giá tiền</th>
                        <th>Ngày đặt hàng</th>
                        <th>Trạng thái</th>
                        <th>Thao tác</th>
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
                            <td>H2T'.$bill['id'].'</td>
                            <td>'.$kh.'</td>
                            <td>'.$countsp.'</td>
                            <td>'.$bill['total'].' đ</td>
                            <td>'.$bill['ngaydathang'].'</td>
                            <td>'.$ttdh.'</td>
                            <td><a href="'.$suabill.'"><input type="button" value="Sửa"></a>   
                            <a href="'.$xoabill.'"><input type="button" value="Xóa"></a></td>
                        </tr>';
                    }
                ?>   
            </table>

            <div class="table-actions">
                <button onclick="chonTatCa()">Chọn tất cả</button>
                <button onclick="xoaTatCa()">Xóa tất cả</button>
            </div>
        </form>    
</section>


