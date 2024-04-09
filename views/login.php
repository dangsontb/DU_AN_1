<div class="container">
    <div class="row my-5">
        <div class="col-md-6 offset-md-3">
            <h2 class="text-center">ĐĂNG NHẬP TÀI KHOẢN</h2>
        
            <form action="index.php?act=login" method="post">
                <div class="form-group mb-3">
                    <label  class="fw-bold">Tên đăng nhập:</label>
                    <input type="text" name="user_name" class="form-control"  placeholder="Nhập tài khoản" value="<?= !empty($_POST['user_name']) ? $_POST['user_name'] : false ?>" >
                    <div class="text-danger"><?= isset($error['user_name']) ? $error['user_name'] : '' ?></div>
                </div>
                <div class="form-group mb-3">
                    <label for="password" class="fw-bold">Mật khẩu:</label>
                    <input name="password" type="password" class="form-control" id="password" placeholder="Nhập mật khẩu" value="<?= !empty($_POST['cate_name']) ? $_POST['cate_name'] : false ?>" >
                </div>
                
                <input type="submit" name="btn_login" class="form-control btn bg-primary mb-3 text-white fw-semibold"  value="Đăng nhập">
                
            
            <p class="text-center">Bạn chưa có tài khoản ? <a href="index.php?act=register" class="btn-link-style btn-register" style="text-decoration: underline; ">Đăng ký tại đây</a></p>
            <p class="text-center">Bạn quên mật khẩu ? <a href="index.php?act=" class="btn-link-style btn-register" style="text-decoration: underline; ">tìm mật khẩu</a></p>
            </form>
        </div> 
    </div>
</div>