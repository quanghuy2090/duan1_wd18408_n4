<?php
function viewcart($del)
{
    global $img_path;
    $tong = 0;
    $i = 0;
    if ($del == 1) {
        $xoasp_th = '<th>Tùy chọn</th>';
        $xoasp_td2 = '<td></td>';
    } else {
        $xoasp_th = '';
        $xoasp_td2 = '';
    }
    echo '<tr>
                <th>Hình ảnh</th>
                <th>Sản phẩm</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
                ' . $xoasp_th . '
            </tr>';
    foreach ($_SESSION['mycart'] as $cart) {
        $hinh = $img_path . $cart[2];
        $thanhtien = $cart[3] * $cart[4];
        $tong += $thanhtien;
        if ($del == 1) {
            $xoasp_td = '<td><a href="index.php?act=delcart&idcart=' . $i . '"><input type="button" value="Xóa"></a></td>';
        } else {
            $xoasp_td = '';
        }
        echo '
                <tr style="text-align:center">
                    <td><img src="' . $hinh . '" alt="" height="80px"></td>
                    <td>' . $cart[1] . '</td>
                    <td>' . $cart[3] . ' đ</td>
                    <td><a onclick=giam(this)>-</a><a>' . $cart[4] . '</a><a onclick=tang(this)>+</a><input type="hidden" value="' . $cart[0] . '"></td>
                    <td>' . $thanhtien . ' đ</td>
                    ' . $xoasp_td . '
                </tr>';
        $i += 1;
    }
    echo '<tr style="text-align:center">
                <td colspan="4" >Tổng đơn hàng</td>
                <td>' . $tong . ' đ</td>
                ' . $xoasp_td2 . '
            </tr>';
}
function bill_chi_tiet($idbill)
{
    global $img_path;
    $tong = 0;
    $i = 0;
    echo '<tr>
                    <th>Hình ảnh</th>
                    <th>Sản phẩm</th>
                    <th>Đơn giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                </tr>';
    foreach ($idbill as $cart) {
        $hinh = $img_path . $cart['img'];
        $tong += $cart['thanhtien'];

        echo '
                    <tr style="text-align:center">
                        <td><img src="' . $hinh . '" alt="" height="80px"></td>
                        <td>' . $cart['name'] . '</td>
                        <td>' . $cart['price'] . ' đ</td>
                        <td>' . $cart['soluong'] . '</td>
                        <td>' . $cart['thanhtien'] . ' đ</td>
                    </tr>';
        $i += 1;
    }
    echo '<tr style="text-align:center">
                    <td colspan="4" >Tổng đơn hàng</td>
                    <td>' . $tong . ' đ</td>
                </tr>';
}
function tongdonhang()
{
    $tong = 0;
    foreach ($_SESSION['mycart'] as $cart) {
        $thanhtien = $cart[3] * $cart[4];
        $tong += $thanhtien;
    }
    return $tong;
}
function insert_bill($iduser, $user, $address, $email, $tel, $pttt, $ngaydathang, $tongdonhang)
{
    $sql = "INSERT INTO bill(iduser,bill_user,bill_address,bill_email,bill_tel,bill_pttt,ngaydathang,total) VALUES('$iduser','$user','$address','$email','$tel','$pttt','$ngaydathang','$tongdonhang')";
    return pdo_execute_return_lastInsertId($sql);
}
function insert_cart($iduser, $idpro, $img, $name, $price, $soluong, $thanhtien, $idbill)
{
    $sql = "INSERT INTO cart(iduser,idpro,img,name,price,soluong,thanhtien,idbill) VALUES('$iduser','$idpro','$img','$name','$price','$soluong','$thanhtien','$idbill')";
    return pdo_execute($sql);
}
function loadone_bill($id)
{
    $sql = "SELECT * FROM bill WHERE id=" . $id;
    $bill = pdo_query_one($sql);
    return $bill;
}
function loadall_cart($idbill)
{
    $sql = "SELECT * FROM cart WHERE idbill=" . $idbill;
    $bill = pdo_query($sql);
    return $bill;
}
function loadall_bill($kyw = "", $iduser = 0)
{
    $sql = "SELECT * FROM bill WHERE 1";
    if ($iduser > 0)
        $sql .= " AND iduser=" . $iduser;
    if ($kyw != "")
        $sql .= " AND id LIKE '%" . $kyw . "%'";
    $sql .= " ORDER BY id desc";
    $listbill = pdo_query($sql);
    return $listbill;
}
function loadall_bill_home($iduser)
{
    $sql = "SELECT * FROM bill WHERE iduser=" . $iduser;
    $listbill = pdo_query($sql);
    return $listbill;
}
function loadall_cart_count($idbill)
{
    $sql = "SELECT * FROM cart WHERE idbill=" . $idbill;
    $bill = pdo_query($sql);
    return sizeof($bill);
}
function delete_bill($id)
{
    $sql = "DELETE FROM bill WHERE id=" . $id;
    pdo_execute($sql);
}
function update_bill($id, $bill_status)
{
    $sql = "UPDATE bill SET bill_status='" . $bill_status . "' WHERE id=" . $id;
    pdo_execute($sql);
}
function get_ttdh($n)
{
    switch ($n) {
        case '0':
            $tt = "Đơn hàng mới";
            break;
        case '1':
            $tt = "Đang xử lý";
            break;
        case '2':
            $tt = "Đang giao";
            break;
        case '3':
            $tt = "Đã giao";
            break;
        case '4':
            $tt = "Hủy đơn hàng";
            break;
        default:
            $tt = "Đơn hàng mới";
            break;
    }
    return $tt;
}
function get_pttt($n)
{
    switch ($n) {
        case '0':
            $tt = "Thanh toán khi nhận hàng";
            break;
        case '1':
            $tt = "Thanh toán online";
            break;
        default:
            $tt = "Thanh toán khi nhận hàng";
            break;
    }
    return $tt;
}

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>function tang(x) {
        let sl = x.previousSibling;
        let slcu = sl.innerHTML;
        let slmoi = parseInt(slcu) + 1;
        // sl.innerHTML = slmoi;

        let id = x.nextSibling.value;
        $.post("capnhatsoluong.php",
            {
                'id': id,
                'slmoi': slmoi
            },
            function (data, textStatus, jqXHR) {
                $("#cart").html(data);
            }
        );

        // let parent = x.parentElement;
        // let dongia_obj = parent.previousSibling.previousSibling;
        // let dongia =dongia_obj.innerText;
        // let tt_obj = parent.nextSibling.nextSibling;
        // let tt = parseInt(dongia)*parseInt(slmoi);
        // tt_obj.innerText=tt;
    }
    function giam(x) {
        let sl = x.nextSibling;
        let slcu = sl.innerHTML;
        if (parseInt(slcu) > 1) {
            var slmoi = parseInt(slcu) - 1;
            let id = x.nextSibling.nextSibling.nextSibling.value;
            $.post("capnhatsoluong.php",
                {
                    'id': id,
                    'slmoi': slmoi
                },
                function (data, textStatus, jqXHR) {
                    $("#cart").html(data);
                }
            );
        } else {
            alert('Không thể giảm thêm');
        }
        // let parent = x.parentElement;
        // let dongia_obj = parent.previousSibling.previousSibling;
        // let dongia =dongia_obj.innerText;
        // let tt_obj = parent.nextSibling.nextSibling;
        // let tt = parseInt(dongia)*parseInt(slmoi);
        // tt_obj.innerText=tt;

    }
</script>