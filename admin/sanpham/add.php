<div class="row2">
         <div class="row2 font_title">
          <h1>THÊM MỚI SẢN PHẨM</h1>
         </div>
         <div class="row2 form_content ">
          <form action="index.php?act=addsp" method="POST" enctype="multipart/form-data">
           <div class="row2 mb10 form_content_container">
           <label> Danh mục </label> 
        
           <select name="iddm" >
            <?php
              foreach($listdanhmuc as $danhmuc){
                extract($danhmuc);
                echo '<option value="'.$id.'">'.$name.'</option>';
              }
            ?>
            
           </select>
            <input type="text" name="masp">
           </div>

           <div class="row2 mb10">
            <label>Tên sản phẩm </label>
            <input type="text" name="tensp" >
           </div>

           <div class="row2 mb10">
            <label>Giá</label> 
            <input type="text" name="giasp" >
           </div>

           <div class="row2 mb10">
            <label>Hình ảnh</label> 
            <input type="file" name="hinh" >
           </div>

           <div class="row2 mb10">
            <label>Mô tả </label> 
            <textarea name="mota" cols="30" rows="10"></textarea>
           </div>

           <div class="row mb10 ">
         <input class="mr20" name="themmoi" type="submit" value="THÊM MỚI">
         <input  class="mr20" type="reset" value="NHẬP LẠI">

         <a href="index.php?act=listsp"><input  class="mr20" type="button" value="DANH SÁCH"></a>
           </div>
           <?php
           if(isset($thongbao)&&($thongbao!=""))
                echo $thongbao;
           ?>
          </form>
         </div>
        </div>