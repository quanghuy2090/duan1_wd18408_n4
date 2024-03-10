<style>
.ct-input{
    width: 50%;
    position: relative;
    left:50vh;
}
.ct-radio{

    position: relative;
    left:80vh;
}

</style>
<main class="catalog mb ">
    <div class="boxleft"> 
    <form action="index.php?act=billconfirm" method="post">
                <div class=" mb">
                        <div class="text-center">THÔNG TIN KHÁCH HÀNG</div>
                            <div class="text-center">
                                <form class="">
                                    <?php
                                        if(isset($_SESSION['user'])){
                                            $user = $_SESSION['user']['user'];
                                            $address = $_SESSION['user']['address'];
                                            $email = $_SESSION['user']['email'];
                                            $tel = $_SESSION['user']['tel'];
                                        }else{
                                            $user = "";
                                            $address = "";
                                            $email = "";
                                            $tel = "";
                                        }
                                    ?>

                                        <td><label class="form-label ">Tên khách hàng</label></td>
                                        <td><input type="text" class="form-control ct-input border border-primary-subtle" size="25" name="user" value="<?=$user?>"></td>

                                        <td><label class="form-label">Địa chỉ</label></td>
                                        <td><input type="text" class="form-control ct-input border border-primary-subtle" name="address" value="<?=$address?>"></td>

                                        <td><label class="form-label">Email</label></td>
                                        <td><input type="text" class="form-control ct-input border border-primary-subtle" name="email" value="<?=$email?>"></td>

                                        <td><label class="form-label">Số điện thoại</label></td>
                                        <td><input type="text"class="form-control ct-input border border-primary-subtle" name="tel" value="<?=$tel?>"></td>

                                    </form>
                            </div>
                    </div> <br>
                    <div class="mb">
                        <div class="text-center">PHƯƠNG THỨC THANH TOÁN</div>
                            <div class="box_content">
 
                                    <div class="ct-radio">
                                        <td><input type="radio" class="form-check-input" value="Trả tiền khi nhận hàng" name="pttt" checked>
                                        <label class="form-check-label" for="flexRadioDefault1"> Thanh toán khi nhận hàng </label>
                                    </td> 
                                        <td> <input type="radio" class="form-check-input" value="Thanh toán online" name="pttt">
                                        <label class="form-check-label" for="flexRadioDefault1"> Thanh toán ngay </label></td>
                                    </div>

                            </div>
                    </div> <br>
                    <div class="mb">
                        <div class="text-center">THÔNG TIN GIỎ HÀNG</div>
                            <div class="box_content">
                                <table class="table">
                                    <?php
                                        viewcart(0);
                                    ?>
                                </table>
                            </div>
                    </div>
                    <div class="container text-center">
                        <a href="index.php"><input type="button" class="btn btn-secondary" value="Về trang chủ"></a>
                        <a href=""><input type="submit" class="btn btn-info" value="Xác nhận thanh toán" name="dongydathang"></a>
                    </div>

    </form>

    </div>

</main>

