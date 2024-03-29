
<nav class="navbar container navbar-expand-lg navbar-light bg-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php" title="Trang chủ " previewlistener="true">Trang chủ </a>
            </li>
            <li class="nav-item">
                <a class="nav-link"  title="" previewlistener="true"> / </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?act=lienhe" title="Liên hệ " previewlistener="true">Liên hệ</a>
            </li>
        </ul>
    </nav>
    <div class="row ">
        <div class="col-1"></div>
        <div class="col-5 text-center">
        <h3><span style="font-size:23px; color: gray;">Gửi liên hệ về H2T</span></h3>
        <div class=" justify-content-center">
        <form method="post" action="index.php" id="form" role="form" class="form ok">
    <div class="row">
        <div class="col-md-6 space20">
            <input  type="text" class="input-md form-control" name="fullname" value="" placeholder="Nhập họ tên">
        </div>
        <br>
        <div class="col-md-6 space20">
            <input type="email" class="input-md form-control" name="email" value="" placeholder="Email của bạn">
        </div>
        <br>
        <br>
    </div>
    <div class="row">
        <div class="col-md-6 space20">
            <input class="input-md form-control" name="phone" placeholder="Điện thoại" maxlength="100"  type="text" value="">
        </div>
    </div>
    <br>
    <div class="space20">
        <input class="input-md form-control" name="address" placeholder="Địa chỉ" maxlength="1000"  type="text" value="">
    </div>
    <br>
    <div class="space20">
        <select name="type"  class="form-control">
            <option value="">--- Chọn chủ đề liên hệ ---</option>
            <option value="1">Cần tư vấn mua hàng</option>
            <option value="2">Hỏi về tình trạng đơn hàng</option>
            <option value="3">Phàn nàn dịch vụ</option>
            <option value="4">Chủ đề khác</option>
        </select>
    </div>
    <br>
    <div class="space20">
        <textarea  name="content" id="text" class="input-md form-control" rows="6" placeholder="Nội dung liên hệ" maxlength="1000"></textarea>
    </div>
    <br>
    <div class="space20">
        <div class="g-recaptcha" data-sitekey="your-recaptcha-sitekey">
            <!-- Your reCAPTCHA HTML code here -->
        </div>
        Bạn hãy check vào check box (ô chọn) để xác thực
    </div>
    <button type="submit" class="btn btn-danger">Gửi liên hệ</button>
</form>
<br>
        </div>
        </div>
        <div class="col-6 ">
        <h3 class="text-center"><span style="font-size:23px; color: gray;">Thông tin liên hệ </span></h3>
        <div class="media-list"> 
            <div class="media"> 
                <div class="media-body"> 
                <i class="pull-left fa fa-home"></i> <strong>Trụ sở chính:</strong><br> Số 13, Trịnh Văn Bô, Phương Canh, Nam Từ Liêm, Hà Nội </div>  <br>
                </div> <div class="media"> 
                    <div class="media-body"> 
                <i class="pull-left fa fa-phone"></i> <strong>Điện thoại:</strong><br> + 84 234 567 88 <br> + 1 234 567 89  </div> <br>
             </div> <div class="media"> 
                <div class="media-body"> 
                <i class="pull-left fa fa-envelope-o"></i> <strong>Email:</strong><br>	h2t.fs@gmail.com </div> <br>
             </div> 
             <div class="contact-details"> 
                <p> Chúng tôi chuyên bán các dòng sản phẩm thời trang : Quần jean , quần tây, quần kaki, áo sơ mi, áo khoác, áo vest, áo thun, phụ kiện nam, giày dép nam...</p> </div> </div>
        </div>
    </div>
    <script>
    // Function to validate the form
    function validateForm() {
        // Get form inputs
        var fullname = document.forms["form"]["fullname"].value;
        var email = document.forms["form"]["email"].value;
        var phone = document.forms["form"]["phone"].value;
        var address = document.forms["form"]["address"].value;
        var type = document.forms["form"]["type"].value;
        var content = document.forms["form"]["content"].value;

        // Check if any field is empty
        if (fullname === "" || email === "" || phone === "" || address === "" || type === "" || content === "") {
            alert("Vui lòng điền đầy đủ thông tin ");
            return false;
        }

        // Validate email format
        var emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if (!email.match(emailRegex)) {
            alert("Vui lòng nhập địa chỉ email hợp lệ");
            return false;
        }

        // Additional validation logic can be added here

        // Form is valid
        return true;
    }

    // Attach form validation to submit event
    document.getElementById("form").addEventListener("submit", function (event) {
        if (!validateForm()) {
            event.preventDefault(); // Prevent form submission if validation fails
        }
    });
</script>