
<main class="">
    <div class="boxleft">
        <form action="index.php?act=billconfirm" method="post">
            <div class="text-center">
                <h2>THÔNG TIN KHÁCH HÀNG</h2>
            </div>
            <form class="row g-3">
                <?php
                if (isset($_SESSION['user'])) {
                    $user = $_SESSION['user']['user'];
                    $address = $_SESSION['user']['address'];
                    $email = $_SESSION['user']['email'];
                    $tel = $_SESSION['user']['tel'];
                } else {
                    $user = "";
                    $address = "";
                    $email = "";
                    $tel = "";
                }
                ?>
                <div class="row">
                    <div class="row justify-content-center">
                        <div class="col-4">
                            <label class="form-label">Tên khách hàng</label>
                            <td><input type="text" class="form-control ct-input border border-primary-subtle" size="25"
                                    name="user" value="<?= $user ?>"></td>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-4">
                            <label class="form-label">Địa chỉ</label>
                            <td><input type="text" class="form-control ct-input border border-primary-subtle"
                                    name="address" value="<?= $address ?>"></td>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-4">
                            <label class="form-label">Email</label>
                            <td><input type="text" class="form-control ct-input border border-primary-subtle"
                                    name="email" value="<?= $email ?>"></td>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-4">
                            <label class="form-label">Số điện thoại</label>
                            <td><input type="text" class="form-control ct-input border border-primary-subtle" name="tel"
                                    value="<?= $tel ?>"></td>
                        </div>
                    </div>
                </div>
            </form><br>

            <div class="text-center">PHƯƠNG THỨC THANH TOÁN</div><br>
            <div class="box_content text-center ">
                <div class="ct-radio">
                    <td><input type="radio" class="form-check-input" value="Trả tiền khi nhận hàng" name="pttt" checked>
                        <label class="form-check-label" for="flexRadioDefault1"> Thanh toán khi nhận hàng </label>
                    </td>
                    <td> <input type="radio" class="form-check-input" value="Thanh toán online" name="pttt">
                        <label class="form-check-label" for="flexRadioDefault1"> Thanh toán ngay </label>
                    </td>
                </div>

            </div><br>

            <div class="container">
                <div class="text-center">THÔNG TIN GIỎ HÀNG</div>
                <div class="text-center">
                    <table class="table">
                        <thead>
                            <?php
                            viewcart(0);
                            ?>
                        </thead>
                    </table>
                </div>
            </div>
            <div class="container text-center">
                <a href="index.php"><input type="button" class="btn btn-secondary" value="Về trang chủ"></a>
                <a href=""><input type="submit" class="btn btn-info" value="Xác nhận thanh toán"
                        name="dongydathang"></a>
            </div><br>

        </form>

    </div>

</main>