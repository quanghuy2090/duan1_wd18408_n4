<main class="catalog  mb ">
    <div class="boxleft">
        <div class="  mb">
            <div class="box_title">
                ĐĂNG KÝ TÀI KHOẢN
            </div>
            <div class="box_content">
                <form action="index.php?act=dangky" method="post">
                    <label for="">Email:</label>
                    <input type="email" name="email" >
                    <label for="">Username:</label>
                    <input type="text" name="user" >
                    <label for="">Password:</label>
                    <input type="password" name="pass" ><br>
                    <input type="submit" value="Đăng ký" name="dangky" class="btn btn-info mt-2" >
                    <input type="reset" value="Nhập lại" class="btn btn-info mt-2">
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