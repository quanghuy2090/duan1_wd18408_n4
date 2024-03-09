<div class="container">
    <h1>DANH SÁCH TÀI KHOẢN</h1>
        <form action="#" method="POST">
            <div class="text-center">
                <table class="table table-hover table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>MÃ TK</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Tel</th>
                            <th>Vai trò</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <?php
                        foreach($listtaikhoan as $taikhoan){
                            extract($taikhoan);
                            $suatk="index.php?act=suatk&id=".$id;
                            $xoatk="index.php?act=xoatk&id=".$id;
                            echo '<tr>
                                <td>'.$id.'</td>
                                <td>'.$user.'</td>
                                <td>'.$pass.'</td>
                                <td>'.$email.'</td>
                                <td>'.$address.'</td>
                                <td>'.$tel.'</td>
                                <td>'.$role.'</td>
                                <td><a href="'.$suatk.'"><input class="btn btn-success" type="button" value="Sửa"></a>   
                                    <a href="'.$xoatk.'"><input class="btn btn-danger" type="button" value="Xóa"></a></td>
                                </tr>';
                        }
                    ?>       
                </table>
            </div>
            <a href="index.php?act=adddm"> <input  class="btn btn-primary" type="button" value="NHẬP THÊM"></a>
        </form>
    </div>