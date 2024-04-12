<main class="container mb">
    <div class="row">
        <div class="col-md-8">
            <div class="boxleft">
                <div class="mb">
                    <div class="box_title"><h3 class="text-primary ">ĐƠN HÀNG CỦA BẠN</h3></div>
                    <div class="box_content">
                        <table class="table table-bordered mx-auto">
                            <thead>
                                <tr>
                                <th>Mã đơn hàng</th>
                                <th>Ngày mua</th>
                                <th>Số mặt hàng</th>
                                <th>Tổng giá trị</th>
                                <th>Trạng thái</th>
                                <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    if(is_array($listbill)){
                                        foreach ($listbill as $bill) {
                                            extract($bill);
                                            $ttdh=get_ttdh($bill['bill_status']);
                                            $countsp=loadall_cart_count($bill['id']);
                                            $huydh="index.php?act=huydh&id=".$id;
                                        echo'  <tr> 
                                            <td>Majestic-'.$bill['id'].'</td>
                                            <td>'.$bill['ngaydathang'].'</td>
                                            <td>'.$countsp.'</td>
                                            <td>'.$bill['total'].'</td>
                                            <td>'.$ttdh.'</td>
                                            <td><a href="'.$huydh.'">Hủy đơn hàng</a></td>
                                            </tr>';
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="row mb-3 justify-content-center">
                        <div class="col-12 text-center"> <!-- Sử dụng col-12 để đảm bảo nút chiếm toàn bộ chiều rộng -->
                            <a href="index.php" class="btn btn-primary">Về trang chủ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
