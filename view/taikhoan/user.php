<style>
    a {
        text-decoration: none;
        color: #495057;
    }
</style>
<main>
    <div class="boxright">
        <div class="mb">
            <div class="box_title text-center">TÀI KHOẢN</div>
            <div class="box_content form_account">
                <?php
                if (isset ($_SESSION['user'])) {
                    extract($_SESSION['user']);
                    ?>
                    <h4>Xin chào:
                        <?= $user ?>
                    </h4><br>
                    <li class="form_li">
                        <a href="index.php?act=mybill">Đơn hàng của tôi</a>
                    </li>
                    <li class="form_li">
                        <a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a>
                    </li>
                    <?php if ($role == 1) { ?>
                        <li class="form_li">
                            <a href="admin/index.php">Đăng nhập Admin</a>
                        </li>
                    <?php } ?>
                    <li class="form_li">
                        <a href="index.php?act=thoat">Thoát</a>
                    </li>
                    <?php
                } else {
                    ?>
                    <div class="text-center">
                        <a href="index.php?act=dangnhap" class="btn btn-info mt-2">Đăng nhập</a>
                        <a href="index.php?act=ddangky" class="btn btn-info mt-2">Đăng ký</a>
                    </div>
                    </form>

                <?php } ?>
            </div>
        </div>
</main>