<?php
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";
include "../model/cart.php";
    include "header.php";
    // CONTROLLER DANH MUC
    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch($act){

            case 'adddm':
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                    $tenloai=$_POST['tenloai'];
                    insert_danhmuc($tenloai);
                    $thongbao="Them thanh cong";
                }
                include "danhmuc/add.php";
                break;

            case 'listdm':   
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            case 'xoadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_danhmuc($_GET['id']);
                }
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            case 'suadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $sql= "select * from danhmuc where id=".$_GET['id'];
                    $dm=pdo_query_one($sql);
                    // return $dm;               
                }
                
                include "danhmuc/update.php";
                break;
            case 'updatedm':
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $tenloai=$_POST['tenloai'];
                    $id=$_POST['id'];
                    update_danhmuc($id,$tenloai);
                    $thongbao="Cập nhật thành công";
                }
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/list.php";
                break;

                /* CONTROLLER SAN PHAM */
                case 'addsp':
                    if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                        $iddm=$_POST['iddm'];
                        $tensp=$_POST['tensp'];
                        $giasp=$_POST['giasp'];
                        $mota=$_POST['mota'];
                        $hinh=$_FILES['hinh']['name'];
                        $target_dir = "../upload/";
                        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                        if(move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)){
                           // echo "the file ". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])). "has been uploaded.";
                        }else{
                           // echo "sorry, there was an error";
                        }
                        insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm);
                        $thongbao="Them thanh cong";
                    }
                    $listdanhmuc=loadall_danhmuc();
                    //var_dump($listdanhmuc);
                    include "sanpham/add.php";
                    break;
    
                case 'listsp':  
                    if(isset($_POST['listok']) && ($_POST['listok'])){
                        $kyw= $_POST['kyw'];
                        $iddm = $_POST['iddm'];
                    }else{
                        $kyw='';
                        $iddm = 0;
                    }
                    $listdanhmuc=loadall_danhmuc(); 
                    $listsanpham=loadall_sanpham_home();
                    include "sanpham/list.php";
                    break;
                case 'xoasp':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        delete_sanpham($_GET['id']);
                    }
                    $listsanpham=loadall_sanpham_home();
                    include "sanpham/list.php";
                    break;
                case 'suasp':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        $sanpham=loadone_sanpham($_GET['id']);                
                    }
                    $listdanhmuc=loadall_danhmuc();
                    include "sanpham/update.php";
                    break;
                case 'updatesp':
                    if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                            $id=$_POST['id'];
                            $iddm=$_POST['iddm'];
                            $tensp=$_POST['tensp'];
                            $giasp=$_POST['giasp'];
                            $mota=$_POST['mota'];
                            $hinh=$_FILES['hinh']['name'];
                            $target_dir = "../upload/";
                            $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                            if(move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)){
                               // echo "the file ". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])). "has been uploaded.";
                            }else{
                               // echo "sorry, there was an error";
                            }
                        update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh);
                        $thongbao="Cập nhật thành công";
                    }
                    $listdanhmuc=loadall_danhmuc();
                    $listsanpham=loadall_sanpham_home();
                    include "sanpham/list.php";
                    break;
                /* CONTROLLER TAI KHOAN */
                case 'dskh':
                    $listtaikhoan=loadall_taikhoan();
                    include "taikhoan/list.php";
                    break;
                case 'xoatk':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        delete_taikhoan($_GET['id']);
                    }
                    $listtaikhoan=loadall_taikhoan();
                    include "taikhoan/list.php";
                    break;
                // CONTROLLER ĐƠN HÀNG
                case 'listbill':
                    if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
                        $kyw = $_POST['kyw'];
                    }else{
                        $kyw = "";
                    }
                    $listbill = loadall_bill($kyw,0);
                    include "bill/listbill.php";
                    break;
                case 'suabill':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        $bill=loadone_bill($_GET['id']);                
                    }
                    $listbill=loadall_bill($kyw="",0);
                    include "bill/updatebill.php";
                    break;
                case 'updatebill':
                    if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                        $bill_status=$_POST['bill_status'];
                        $id=$_POST['id'];
                        update_bill($id,$bill_status);
                        $thongbao="Cập nhật thành công";
                    }
                    $listbill=loadall_bill($kyw="",0);
                    include "bill/listbill.php";
                    break;
                // case 'xoabill':
                //     if(isset($_GET['id'])&&($_GET['id']>0)){
                //         delete_bill($_GET['id']);
                //     }
                //     $listbill = loadall_bill_admin();
                //     include "bill/listbill.php";
                //     break;
                default:
                    include "home.php";
                    break;
        }
    }else{
        include "home.php";
    }
    include "footer.php";
?>
