<div class="container my-4">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="m-4">
                <h2 class="text-center">ĐĂNG KÝ TÀI KHOẢN</h2>
            </div>
      
        
            <form action="index.php?act=signup" method="post">
                <div class="form-group  mb-3">
                    <label for="name"class="form-label fw-bold">Tên đăng nhập:</label>
                    <input type="text" name="user_name" class="form-control" id="name" value="<?= !empty($_POST['user_name']) ? $_POST['user_name'] : false ?>">
                    <p class="text-danger"> <?= isset($error['user_name'])? $error['user_name'] :'' ?></p>
                </div>

                <div class="form-group  mb-3">
                    <label for="password"class="form-label fw-bold">Mật khẩu:</label>
                    <input type="password" name="password" class="form-control" id="password" value="<?= !empty($_POST['password']) ? $_POST['password'] : false ?>">
                    <p class="text-danger"> <?= isset($error['password'])? $error['password'] :'' ?></p>
                </div>

                <div class="form-group  mb-3">
                    <label for="confirm-password"class="form-label fw-bold">Xác nhận mật khẩu:</label>
                    <input type="password" name="repassword" class="form-control" id="confirm-password" value="<?= !empty($_POST['repassword']) ? $_POST['repassword'] : false ?>">
                    <p class="text-danger"> <?= isset($error['repassword'])? $error['repassword'] :'' ?></p>
                </div> 

                <div class="form-group  mb-3">
                    <label for="name"class="form-label fw-bold">Họ và Tên:</label>
                    <input type="text" name="fullname" class="form-control" id="name"  value="<?= !empty($_POST['fullname']) ? $_POST['fullname'] : false ?>">
                    <p class="text-danger"> <?= isset($error['fullname'])? $error['fullname'] :'' ?></p>
                </div>

                <div class="form-group  mb-3">
                    <label for="email"class="form-label fw-bold">Email:</label>
                    <input type="email" name="email" class="form-control" id="email"  placeholder="name@example.com" value="<?= !empty($_POST['email']) ? $_POST['email'] : false ?>"> 
                    <p class="text-danger"> <?= isset($error['email'])? $error['email'] :'' ?></p>
                </div>

                <div class="form-group  mb-3">
                    <label for="phone" class="form-label fw-bold">Số Điện Thoại:</label>
                    <input type="tel" name="tel" class="form-control" id="phone" value="<?= !empty($_POST['tel']) ? $_POST['tel'] : false ?>">
                    <p class="text-danger"> <?= isset($error['tel'])? $error['tel'] :'' ?></p>
                </div>
                
                <div class="form-group  ">
                    <label for="name"class="form-label fw-bold">Địa chỉ:</label>
                    <input type="text" name="address" class="form-control" id="name" value="<?= !empty($_POST['address']) ? $_POST['address'] : false ?>">
                    <p class="text-danger"> <?= isset($error['address'])? $error['address'] :'' ?></p>
                </div>

                <div class="form-group">
                    <input type="submit" name="signup" class="form-control btn btn-primary mb-3" value="Đăng ký">
                </div>
            
            </form>
        </div>
    </div>
</div>