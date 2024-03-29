<main class="catalog  mb ">
    <div class="boxleft">
        <div class="  mb">
            <div class="form-container sign-in">
                <div class="container">
                    <form class="form-control" method="post" action="index.php?act=dangnhap">
                        <h1 class="text-center">Đăng ký</h1>
                        <div class="social-icons text-center">
                            <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                            <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                            <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                        </div>
                        <div class="text-center">Hoặc đăng ký qua email</div>
                        <div class="row justify-content-center">
                            <div class="col-4">
                                <label class="form-label">Username:</label>
                                <input type="text" name="user"
                                    class="form-control ct-input border border-primary-subtle">
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-4 ">
                                <label class="form-label">Email:</label>
                                <input type="email" name="email"
                                    class="form-control ct-input border border-primary-subtle ">
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
                            <input type="submit" value="Đăng ký" name="dangky" class="btn btn-info mt-2">
                            <h2 class="text-center text-primary m-2">
                                <?php
                                if (isset ($thongbao) && ($thongbao) != "") {
                                    echo $thongbao;
                                }
                                ?>
                            </h2>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-10">
                                <h1 class="text-center">Đã có tài khoản? Đăng nhập ngay!</h1>
                            </div>
                            <div class="col-4 text-center">
                                <p>Hãy dăng nhập vào tài khoản của bạn</p>
                                <a href="index.php?act=dangnhap" class=" btn btn-info ">Đăng nhập</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>