<main class="catalog  mb ">
    <div class="boxleft">
        <div class="  mb">
            <div class="form-container sign-in">
                <div class="container">
                    <form class="form-control" method="post" action="index.php?act=dangnhap">
                        <h1 class="text-center">Đăng nhập</h1>
                        <div class="social-icons text-center">
                            <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                            <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                            <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                        </div>
                        <div class="text-center">Hoặc sử dụng tài khoản đã đăng ký</div>
                        <div class="row justify-content-center">
                            <div class="col-4">
                                <label class="form-label">Username:</label>
                                <input type="text" name="user"
                                    class="form-control ct-input border border-primary-subtle">
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-4">
                                <label class="form-label">Password:</label>
                                <input type="password" name="pass"
                                    class="form-control ct-input border border-primary-subtle"><br>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="#" class=" btn btn-info">Quên mật khẩu?</a>
                            <button class=" btn btn-info">Đăng nhập</button>
                            <h2>
                                <?php
                                if (isset ($thongbao) && ($thongbao) != "") {
                                    echo $thongbao;
                                }
                                ?>
                            </h2>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-10">
                                <h1 class="text-center">Chưa có tài khoản? Đăng ký ngay!</h1>
                            </div>
                            <div class="col-4 text-center">
                                <p>Hãy dăng ký để được truy cập đầy đủ chức năng</p>
                                <a href="index.php?act=dangky" class=" btn btn-info ">Đăng ký</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</main>