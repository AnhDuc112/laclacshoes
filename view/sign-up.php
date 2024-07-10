<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="bread"><span><a href="index.html">Trang Chủ</a></span> / <span>Đăng ký</span></p>
            </div>
        </div>
    </div>
</div>
<div id="colorlib-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="contact-wrap">
                    <h3>Đăng ký</h3>
                    <form action="?view=sign_up" class="contact-form" method="post">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Họ và tên</label>
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Your name">
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Your email address">
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="sdt">Số điện thoại</label>
                                    <input type="text" id="sdt" name="sdt" class="form-control" placeholder="Your phone ">
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="address">địa chỉ</label>
                                    <input type="text" id="address" name="address" class="form-control" placeholder="Your email address">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="password-input">
                                        <label for="exampleInputEmail1">Mật khẩu</label>
                                        <input type="password" id="password" name="password"  class="form-control" placeholder="Your password ">
                                        <div class="toggle-password" onclick="togglePasswordVisibility()">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path d="M12 3.75c-4.1 0-7.57 3.24-9 7.5 1.43 4.26 4.9 7.5 9 7.5s7.57-3.24 9-7.5c-1.43-4.26-4.9-7.5-9-7.5zm0 12c-2.48 0-4.5-2.02-4.5-4.5s2.02-4.5 4.5-4.5 4.5 2.02 4.5 4.5-2.02 4.5-4.5 4.5zm0-7.5c-1.38 0-2.5 1.12-2.5 2.5s1.12 2.5 2.5 2.5 2.5-1.12 2.5-2.5-1.12-2.5-2.5-2.5zm0 3c-.69 0-1.25-.56-1.25-1.25s.56-1.25 1.25-1.25 1.25.56 1.25 1.25-.56 1.25-1.25 1.25z"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <button type="submit" name="signup" class="btn btn-primary">Đăng ký</button>
                                </div>
                            </div>
                        </div>
                    </form>		
                </div>
            </div>
        </div>
    </div>
</div>

<?php
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
if(isset($_POST['signup'])){
    $name1=$_POST['name'];
    $email1=$_POST['email'];
    $sdt1=$_POST['sdt'];
	$address1=$_POST['address'];
	$pass1=$_POST['password'];
	if($name1 ==""|| $email1="" || $sdt1="" || $address1="" || $pass1 ="" ){
        echo '<script>confirm("Bạn đã để trống trường dữ liệu, vui lòng nhập lại !")</script>';
    }
    elseif(!preg_match("/^[a-zA-Z-' ]*$/",test_input($name1))) {
        echo '<script>confirm("trường dữ liệu không hợp lệ vui lòng nhập lại !")</script>';
    }
    elseif(!filter_var(test_input($email1), FILTER_VALIDATE_EMAIL)) {
        echo '<script>confirm("trường dữ liệu không hợp lệ vui lòng nhập lại !")</script>';
      }
    elseif(!preg_match("/[^0-9]/",test_input($sdt1))) {
        echo '<script>confirm("trường dữ liệu không hợp lệ vui lòng nhập lại !")</script>';
    } elseif(!preg_match("/^[a-zA-Z-' ]*$/",test_input($address1))) {
        echo '<script>confirm("trường dữ liệu không hợp lệ vui lòng nhập lại !")</script>';
    }
   
           
}



?>