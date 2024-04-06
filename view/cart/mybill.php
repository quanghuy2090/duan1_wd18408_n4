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
                                    <th>MÃ ĐƠN HÀNG</th>
                                    <th>NGÀY ĐẶT HÀNG</th>
                                    <th>SỐ LƯỢNG HÀNG</th>
                                    <th>TỔNG GIÁ TRỊ</th>
                                    <th>TRẠNG THÁI ĐƠN HÀNG</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (is_array($listbill)) {
                                    foreach ($listbill as $bill) {
                                        extract($bill);
                                        $ttdh = get_ttdh($bill['bill_status']);
                                        $countsp = loadall_cart_count($bill['id']);
                                        echo '<tr>
                                                <td>DVT-' . $bill['id'] . '</td>
                                                <td>' . $bill['ngaydathang'] . '</td>
                                                <td>' . $countsp . '</td>
                                                <td>' . $bill['total'] . ' đ</td>
                                                <td>' . $ttdh . '</td>
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
