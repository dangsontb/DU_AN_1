<div class="container">
    <div class="row my-5">
        <div class="col-md-6 offset-md-3">
            <h2 class="text-center mb-2">Quên Mật Khẩu</h2>
        
            <form action="index.php?act=forgot_password" method="post">
                <div class="form-group mb-3">
                    <label  class="form-label fw-bold">Tên đăng nhập:</label>
                    <input type="text" name="user_name" class="form-control"  placeholder="Nhập tài khoản" value="<?= !empty($_POST['user_name']) ? $_POST['user_name'] : false ?>" >
                    <div class="text-danger"><?= isset($error['user_name']) ? $error['user_name'] : '' ?></div>
                </div>
                <div class="form-group mb-3">
                    <label for="email" class="form-label fw-bold">Email:</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="Nhập mật khẩu" value="<?= !empty($_POST['email']) ? $_POST['email'] : false ?>" >
                </div>
                
                <input type="submit" name="btn_confirm" class="form-control btn bg-primary mb-3 text-white fw-semibold"  value="Xác nhận">
                
                <div class="form-group mb-3">
                    <label  class="form-label fw-bold "><?= isset($password) ? $password : ''?></label>
                </div>
            
            <p class="text-center">Bạn chưa có tài khoản ? <a href="index.php?act=register" class="btn-link-style btn-register" style="text-decoration: underline; ">Đăng ký tại đây</a></p>
            <p class="text-center">Bạn đã có tài khoản ? <a href="index.php?act=login" class="btn-link-style btn-register" style="text-decoration: underline; ">Đăng nhập tại đây</a></p>
            </form>
        </div> 
    </div>
</div>