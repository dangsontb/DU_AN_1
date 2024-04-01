<div class="container my-4">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="m-4">
                <h2 class="text-center">Thay đổi mật khẩu</h2>
            </div>
      
            <form action="index.php?act=channge_password" method="post">

                <div class="form-group  mb-3">
                    <label for="password"class="form-label fw-bold">Mật khẩu cũ :</label>
                    <input type="password" name="password" class="form-control" id="password" value="<?= !empty($_POST['password']) ? $_POST['password'] : false ?>">
                    <p class="text-danger"> <?= isset($error['password'])? $error['password'] :'' ?></p>
                </div>

                <div class="form-group  mb-3">
                    <label for="password"class="form-label fw-bold">Mật khẩu mới :</label>
                    <input type="password" name="password" class="form-control" id="password" value="<?= !empty($_POST['password']) ? $_POST['password'] : false ?>">
                    <p class="text-danger"> <?= isset($error['password'])? $error['password'] :'' ?></p>
                </div>

                <div class="form-group  mb-3">
                    <label for="password"class="form-label fw-bold">Xác nhận mật khẩu mới :</label>
                    <input type="password" name="password" class="form-control" id="password" value="<?= !empty($_POST['password']) ? $_POST['password'] : false ?>">
                    <p class="text-danger"> <?= isset($error['password'])? $error['password'] :'' ?></p>
                </div>
                
                <div class="form-group">
                    <input type="submit" name="signup" class="form-control btn btn-primary mb-3" value="Đăng ký">
                </div>
            
            </form>
        </div>
    </div>
</div>