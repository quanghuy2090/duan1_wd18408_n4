<main class="catalog  mb ">
    <div class="boxleft">
        <div class="  mb">
            <div class="box_title">
                ĐĂNG NHẬP TÀI KHOẢN
            </div>
            <div class="box_content">
                <form action="index.php?act=dangnhap" method="post">
                    <label for="">Username:</label>
                    <input type="text" name="user" >
                    <label for="">Password:</label>
                    <input type="password" name="pass" ><br>
                    <input type="submit" value="Đăng nhập" name="dangnhap">
                    <input type="reset" value="Nhập lại">
                </form>
                <h2 class="thongbao">
                <?php
                    if(isset($thongbao)&&($thongbao)!=""){
                        echo $thongbao;
                    }
                ?>
                </h2>
                
            </div>
        </div>

        
    </div>


</main>