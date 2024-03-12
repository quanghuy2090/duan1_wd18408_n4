<!-- <link rel="stylesheet" href="./css/css.css"> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5eef691f30.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/509cc166d7.js" crossorigin="anonymous"></script> 
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">
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
                    <input type="submit" value="Đăng nhập" name="dangnhap" class="btn btn-info mt-2">
                    <a href="index.php?act=dangky" class="btn btn-info mt-2" >Đăng ký</a>
                    <input type="reset" value="Nhập lại" class="btn btn-info mt-2">
                </form>
                    
                <div class="box_content">
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