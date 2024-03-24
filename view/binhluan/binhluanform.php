<?php
    session_start();
    include "../../model/pdo.php";
    include "../../model/binhluan.php";

    $idpro = $_REQUEST['idpro'];
    $dsbl = loadall_binhluan($idpro);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        h3{
            color: red;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="mb">
        <div class="">
            <div class="box_title text-danger">BÌNH LUẬN</div>
            <hr>
            <div class="box_content form_account">
                <?php
                if(isset($_SESSION['user'])){
                    extract($_SESSION['user']);
                
                ?>
                <table>         
                    <?php
                        foreach ($dsbl as $bl){
                            extract($bl);
                            echo '<tr><td> '.$noidung.'</td>';
                            echo '<td>'.$iduser.'</td>';
                            echo '<td>'.$ngaybinhluan.'</td></tr>';
                                    
                        }
                    ?>
                </table>
                
            <div class="box_bl">
                <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
                    <input type="hidden" name="idpro" value="<?=$idpro?>">            
                    <input type="text" name="noidung">
                    <input type="submit" name="guibinhluan" value="Gửi bình luận">
                </form>
            </div>
            <?php
                }else{

            ?>
            
       
                    <?php
                        foreach ($dsbl as $bl){
                            extract($bl);
                            echo '<div><strong>'.$user.'</strong></div>';
                            echo '<div><em>'.$ngaybinhluan.'</em></div>';
                            echo '<div>'.$noidung.'</div>';  
                            echo '<i class="fa-solid fa-thumbs-up fa-lg" id="thumbs-up"></i> <span id="like-count">0</span>';
                            echo  '<hr>';


                        }
                    ?>

            <h3>Đăng nhập để gửi bình luận!</h3>
            <?php } ?>


            <?php
                
                if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
                    $noidung = $_POST['noidung'];
                    $idpro = $_POST['idpro'];
                    $iduser = $_SESSION['user']['id'];
                    $ngaybinhluan = date('h:i:sa d/m/Y');
                    insert_binhluan($noidung, $iduser,$idpro,$ngaybinhluan);
                    header("Location: ".$_SERVER['HTTP_REFERER']);
                }
            ?>
    </div>
</body>
</html>
<script>
    var likeCount = parseInt(localStorage.getItem("thumbsUpQuantity")) || 0;
    document.getElementById("like-count").textContent = likeCount;

    document.getElementById("thumbs-up").addEventListener("click", function() {
        likeCount++;
        localStorage.setItem("thumbsUpQuantity", likeCount);
        document.getElementById("like-count").textContent = likeCount;
    });
</script>