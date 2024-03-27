<?php
ob_start();
session_start();
include "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "model/binhluan.php";
include "model/taikhoan.php";
include "model/cart.php";

include "view/header.php";
include "global.php";

if (!isset ($_SESSION['mycart']))
    $_SESSION['mycart'] = [];

$spnew = loadall_sanpham_home();
$dsdm = loadall_danhmuc();
$dstop10 = loadall_sanpham_top10();


if (isset ($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case "sanpham":
            if (isset ($_POST['keyword']) && $_POST['keyword'] > 0) {
                $kyw = $_POST['keyword'];
            } else {
                $kyw = "";
            }
            if (isset ($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $dssp = loadall_sanpham($kyw, $iddm);
            $tendm = load_ten_dm($iddm);
            include "view/sanpham.php";
            break;

        case "sanphamct":
            if (isset ($_POST['guibinhluan'])) {
                insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
            }
            if (isset ($_GET['idsp']) && $_GET['idsp'] > 0) {
                $sanpham = loadone_sanpham($_GET['idsp']);
                $sanphamcl = load_sanpham_cungloai($_GET['idsp'], $sanpham['iddm']);
                // $binhluan = loadall_binhluan($_GET['idsp']);
                include "view/chitietsanpham.php";
            } else {
                include "view/home.php";
            }
            break;
            
        case 'dangky':
            if (isset ($_POST['dangky']) && $_POST['dangky']) {
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = checkuser($user, $pass);
                $checkemail = checkemail($email);
                $regex = "/([a-z0-9_]+|[a-z0-9_]+\.[a-z0-9_]+)@(([a-z0-9]|[a-z0-9]+\.[a-z0-9]+)+\.([a-z]{2,4}))/i";
                if (empty ($user)) {
                    $userErr = "* Chưa điền Username";
                }elseif (is_array($checkuser)) {
                    $user = $checkuser;
                    $userErr = "* Username đã tồn tại";
                }
                if (empty ($pass)) {
                    $passErr = "* Chưa điền Password";
                }
                if (empty ($email)) {
                    $emailErr = "* Chưa điền Email";
                }elseif (!preg_match($regex, $email)) {
                    $emailErr = "Vui lòng nhập địa chỉ email hợp lệ";
                }elseif (is_array($checkemail)) {
                    $email = $checkemail;
                    $emailErr = "* Email đã tồn tại";
                }
                if (empty ($userErr) && empty ($emailErr) && empty ($passErr)) {
                    insert_taikhoan($email, $user, $pass);
                    header('Location: index.php?act=dangnhap');
                }
            }
            include "Modern-Login-master/Modern-Login-master/dangky.php";
            break;
        case 'dangnhap':
            if (isset ($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = checkuser($user, $pass);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    header('Location: index.php');
                } elseif (empty ($user)) {
                    $userErr = "* Chưa điền Username";
                } else {
                    $thongbao = "Tài khoản hoặc mật khẩu không đúng. Vui lòng kiểm tra hoặc đăng ký!";
                }
                if (empty ($pass)) {
                    $passErr = "* Chưa điền Password";
                }
            }
            include "Modern-Login-master/Modern-Login-master/dangnhap.php";
            break;
        case 'user':
            include "view/taikhoan/user.php";
            break;
        case 'edit_taikhoan':
            if (isset ($_POST['capnhat']) && ($_POST['capnhat'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $id = $_POST['id'];
                /*
                $checkuser = checkuser($user, $pass);
                $checkemail = checkemail($email);
                $checkaddress = checkaddress($address);
                $checktel = checktel($tel);
                $regex = "/([a-z0-9_]+|[a-z0-9_]+\.[a-z0-9_]+)@(([a-z0-9]|[a-z0-9]+\.[a-z0-9]+)+\.([a-z]{2,4}))/i";
                if (empty ($user)) {
                    $userErr = "* Chưa điền Username";
                }elseif (is_array($checkuser)) {
                    $user = $checkuser;
                    $userErr = "* Username đã tồn tại";
                }
                if (empty ($pass)) {
                    $passErr = "* Chưa điền Password";
                }
                if (empty ($email)) {
                    $emailErr = "* Chưa điền Email";
                }elseif (!preg_match($regex, $email)) {
                    $emailErr = "Vui lòng nhập địa chỉ email hợp lệ";
                }elseif (is_array($checkemail)) {
                    $email = $checkemail;
                    $emailErr = "* Email đã tồn tại";
                }
                if (empty ($address)) {
                    $addressErr = "* Chưa điền Address";
                }elseif (is_array($checkaddress)) {
                    $address = $checkaddress;
                    $addressErr = "* Address đã tồn tại";
                }
                if (empty ($tel)) {
                    $telErr = "* Chưa điền Tel";
                }elseif (is_array($checktel)) {
                    $tel = $checktel;
                    $telErr = "* Tel đã tồn tại";
                }
                if (empty ($userErr) && empty ($emailErr) && empty ($passErr)) {
                   
                    header('Location: index.php?act=dangnhap');
                }
                */
                update_taikhoan($id, $user, $pass, $email, $address, $tel);
                $_SESSION['user'] = checkuser($user, $pass);
                header('Location: index.php?act=edit_taikhoan');
            }
            include "view/taikhoan/edit_taikhoan.php";
            break;
        case 'addtocart':
            if (isset ($_POST['addtocart']) && ($_POST['addtocart'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $img = $_POST['img'];
                $price = $_POST['price'];
                $soluong = 1;
                $thanhtien = $soluong * $price;
                $spadd = [$id, $name, $img, $price, $soluong, $thanhtien];
                array_push($_SESSION['mycart'], $spadd);
            }
            include "view/cart/viewcart.php";
            break;
        case 'delcart':
            if (isset ($_GET['idcart'])) {
                array_splice($_SESSION['mycart'], $_GET['idcart'], 1);
            } else {
                $_SESSION['mycart'] = [];
            }
            header('Location: index.php?act=viewcart');
            break;
        case 'viewcart':
            include "view/cart/viewcart.php";
            break;
        case 'bill':
            include "view/cart/bill.php";
            break;
        case 'billconfirm':
            if (isset ($_POST['dongydathang']) && ($_POST['dongydathang'])) {
                if (isset ($_SESSION['user']))
                    $iduser = $_SESSION['user']['id'];
                else
                    $id = 0;
                $user = $_POST['user'];
                $address = $_POST['address'];
                $email = $_POST['email'];
                $tel = $_POST['tel'];
                $pttt = $_POST['pttt'];
                $ngaydathang = date('h:i:sa d/m/Y');
                $tongdonhang = tongdonhang();

                $idbill = insert_bill($iduser, $user, $address, $email, $tel, $pttt, $ngaydathang, $tongdonhang);

                // insert vao session my cart & $idbill
                foreach ($_SESSION['mycart'] as $cart) {
                    insert_cart($_SESSION['user']['id'], $cart[0], $cart[2], $cart[1], $cart[3], $cart[4], $cart[5], $idbill);
                }
                // xoa session cart
                $_SESSION['mycart'] = [];
            }
            $bill = loadone_bill($idbill);
            $billct = loadall_cart($idbill);
            include "view/cart/billconfirm.php";
            break;
        case 'mybill':
            $listbill = loadall_bill_home($_SESSION['user']['id']);
            include "view/cart/mybill.php";
            break;
        case 'thoat':
            session_unset();
            header('Location: index.php');
            break;
        case 'gioithieu':
            include "view/gioithieu.php";
            break;
        case 'lienhe':
            include "view/lienhe.php";
            break;
        case 'tintuc':
            include "view/tintuc.php";
            break;


    }
} else {
    include "view/home.php";
}

include "view/footer.php";
ob_end_flush();
