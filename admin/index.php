<?php 
    session_start();
    include "header.php";
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/binhluan.php";
    include "../model/taikhoan.php";
    include "../model/cart.php";
    
    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch ($act) {
        // CONTROLLER DANH MỤC
        case 'adddm':
            $thongbao1 = [];
            // Kiểm tra nếu người dùng đã gửi dữ liệu từ form
            if(isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                // Kiểm tra nếu 'tenloai' được gửi từ form
                if(isset($_POST['tenloai']) && !empty($_POST['tenloai'])) {
                    $tenloai = $_POST['tenloai'];
                    // Gọi hàm insert_danhmuc để thêm dữ liệu vào cơ sở dữ liệu
                    insert_danhmuc($tenloai);
                    $thongbao = "Thêm thành công";
                } else {
                    $thongbao1['tenloai'] = "Vui lòng nhập tên danh mục";
                }
            }
            include "danhmuc/adddm.php";
            break;

        case 'listdm':
            if(isset($_POST['listok']) && ($_POST['listok'])){
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            $listdanhmuc = loadall_danhmuc($kyw);
            $listdanhmuc=loadall_danhmuc();
            include "danhmuc/listdm.php";
            break;

        case 'xoadm':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_danhmuc($_GET['id']);
            }
            $listdanhmuc=loadall_danhmuc();
            include "danhmuc/listdm.php";
            break;
            case 'suadm':
                if(isset($_GET['id']) && ($_GET['id'] > 0)){
                    $dm = loadone_danhmuc($_GET['id']); 
                }
                include "danhmuc/update.php";
                break;   

        case 'updatedm':
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                $tenloai=$_POST['tenloai'];
                $id = $_POST['id'];
                update_danhmuc($id,$tenloai);
                $thongbao="Cập nhật thành công";
                }
                $listdanhmuc=loadall_danhmuc();
            include "danhmuc/listdm.php";
            break;
        
        // CONTROLLER SẢN PHẨM
        case 'addsp':
            if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                $iddm=$_POST['iddm']; 
                $tensp=$_POST['tensp'];
                $giasp=$_POST['giasp'];
                $mota=$_POST['mota'];
                $hinh=$_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (isset($_FILES['hinh']) && $_FILES['hinh']['name'] !== "") {
                if(move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)){
                }else{
                    $hinh=" ";
                }
            }
                insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm);
                $thongbao="Thêm thành công";
            }
            $listdanhmuc=loadall_danhmuc();
                //lấy danh sách các danh mục sản phẩm từ model
                include "sanpham/adddsp.php";
                break;

        case 'suasp':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $sanpham=loadone_sanpham($_GET['id']);
            }
            
            $listdanhmuc=loadall_danhmuc();
            include "sanpham/updatesp.php";
            break;    
                
        case 'updatesp':
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                $id=$_POST['id'];
                $iddm=$_POST['iddm'];
                $tensp=$_POST['tensp'];
                $giasp=$_POST['giasp'];
                $mota=$_POST['mota']; 
                $hinh=$_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if(move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)){
                    //echo "The file". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has bee upload.";
                } else {
                    //echo "Sory";
                }
                update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh);
                $thongbao="Cập nhật thành công";
                }
                $listdanhmuc=loadall_danhmuc();
                $listsanpham=loadall_sanpham();
            include "sanpham/listsp.php";
            break;

        case 'listsp':
            if(isset($_POST['listok']) && ($_POST['listok'])){
                $kyw=$_POST['kyw'];
                $iddm=$_POST['iddm'];
            }else{
                $kyw='';
                $iddm=0;
            }
            $listdanhmuc=loadall_danhmuc();
            $listsanpham=loadall_sanpham($kyw,$iddm);
            include "sanpham/listsp.php";
            break;

        case 'xoasp':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_sanpham($_GET['id']);
            }
            $listsanpham=loadall_sanpham();
            include "sanpham/listsp.php";
            break;

        // CONTROLLER KHÁCH HÀNG    
        case 'listtk':
            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/listtk.php";
            break;

        case 'xoatk':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_taikhoan($_GET['id']);
            }
            $listtaikhoan = loadall_taikhoan();
            $listrole= loadall_role();
            include "taikhoan/listtk.php";
            break;

        case 'suatk':
            if(isset($_GET['id']) && ($_GET['id'] > 0)) {
                $taikhoan = loadone_taikhoan($_GET['id']);
            }
            $listrole=loadall_role();
            include "taikhoan/updatetk.php";
            break;

        case 'updatetk':
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                $id=$_POST['id'];
                $idrole=$_POST['idrole'];
                update_role($id,$idrole);
            }
                $listrole=loadall_role();
                $listtaikhoan=loadall_taikhoan();
            include "taikhoan/listtk.php";
            break;

        // CONTROLLER BINH LUAN
        case 'listbl': 
            $listbinhluan = loadall_binhluan(0);
            include "binhluan/listbl.php";
            break;

        case 'xoabl':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_binhluan($_GET['id']);
            }
            $listbinhluan = loadall_binhluan(0);
            include "binhluan/listbl.php";
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

        case 'xoabill':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_bill($_GET['id']);
            }
            $listbill = loadall_bill();
            include "bill/listbill.php";
            break;

        case 'thongke':
            $listthongke = loadall_thongke();
            include "./thongke/thongke.php";
            break;    

        default:
            include "home.php";
            break;
        }
    }else{
        include "home.php";
    }
    include "footer.php";
?>