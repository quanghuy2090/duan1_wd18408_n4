<main class="catalog  mb ">
    <div class="boxleft">
        <div class="  mb">
            <div class="container">
                <div class="box_title text-center">
                    CẬP NHẬT TÀI KHOẢN
                </div>
                <div class="box_content">
                    <?php
                    if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
                        extract($_SESSION['user']);
                    }
                    ?>
                    <form action="index.php?act=edit_taikhoan" method="post" class="form-control">
                        <div class="row justify-content-center">
                            <div class="col-4">
                                <label for="">Email:</label>
                                <input type="email" name="email" value="<?= $email ?>"
                                    class="form-control ct-input border border-primary-subtle">
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-4">
                                <label for="">Username:</label>
                                <input type="text" name="user" value="<?= $user ?>"
                                    class="form-control ct-input border border-primary-subtle">
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-4">
                                <label for="">Password:</label>
                                <input type="password" name="pass" value="<?= $pass ?>"
                                    class="form-control ct-input border border-primary-subtle">
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-4">
                                <label for="">Address:</label>
                                <input type="text" name="address" value="<?= $address ?>"
                                    class="form-control ct-input border border-primary-subtle">
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-4">
                                <label for="">Tel:</label>
                                <input type="text" name="tel" value="<?= $tel ?>"
                                    class="form-control ct-input border border-primary-subtle">
                            </div>
                        </div>
                        <input type="hidden" name="id" value="<?= $id ?>">
                        <div class="text-center mt-2">
                            <input type="submit" value=" Cập nhật" name="capnhat" class="btn btn-info">
                            <input type="reset" value="Nhập lại" class="btn btn-info">
                        </div>
                    </form>
                    <h2 class="thongbao">
                        <?php
                        if (isset($thongbao) && ($thongbao) != "") {
                            echo $thongbao;
                        }
                        ?>
                    </h2>

                </div>
            </div>

        </div>
    </div>


</main>