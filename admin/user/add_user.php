

        <!-- main -->
        <main class="container-fluid">
           <div >
            <h3 class="alert alert-success text-success"> Thêm mới người dùng</h3>
   
            <form action="index.php?act=add_user" class="row g-3" method="post" >
               
                <div class="col-4">
                    <label  class="form-label fw-bolder" >Tên tài khoản</label>
                    <input type="text" class="form-control" name='name'>
                    <p class="text-danger"> <?= isset($error['user_name'])? $error['user_name'] :'' ?></p>
                </div>
                <div class="col-4">
                    <label  class="form-label fw-bolder" >Mật khẩu</label>
                    <input type="password" class="form-control" name='pass' >
                    <p class="text-danger"> <?= isset($error['pass'])? $error['pass'] :'' ?></p>
                </div>
                
                
                <div class="col-4">
                    <label  class="form-label fw-bolder" >Họ tên</label>
                    <input type="text" class="form-control" name='fullname'>
                    <p class="text-danger"> <?= isset($error['fullname'])? $error['fullname'] :'' ?></p>
                </div>
                <div class="col-4">
                    <label  class="form-label fw-bolder" >Email</label>
                    <input type="email" class="form-control" name='email'>
                    <p class="text-danger"> <?= isset($error['email'])? $error['email'] :'' ?></p>
                </div>
                <div class="col-4">
                    <label  class="form-label fw-bolder" >Số điện thoại</label>
                    <input type="tel" value="" class="form-control" name='tel'>
                    <p class="text-danger"> <?= isset($error['tel'])? $error['tel'] :'' ?></p>
                </div>
                <div class="col-4">
                    <label  class="form-label fw-bolder" >Địa chỉ</label>
                    <input type="text" value="" class="form-control" name='address'>
                    <p class="text-danger"> <?= isset($error['address'])? $error['address'] :'' ?></p>
                </div>
                <div class="col-4">
                    <label  class="form-label fw-bolder" >Role</label>
                    <div class="form-control">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="roles" id="inlineRadio1" value="0" checked>
                            <label class="form-check-label" for="inlineRadio1">Khách Hàng</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="roles" id="inlineRadio2" value="1">
                            <label class="form-check-label" for="inlineRadio2">Admin</label>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-4">
                    <label  class="form-label fw-bolder" >Ngày tạo</label>
                    <input type="datetime-local" value="" class="form-control" name='date'>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div> -->
                <div class="col-12">
                    <input type="submit" name="themmoi" class="btn btn-outline-success fw-medium" value="Thêm mới"></input>
                    <button type="reset" name=""  class="btn btn-outline-info fw-medium">Nhâp lại</button>
                    <a href="index.php?act=list_user"  class="btn btn-outline-primary fw-medium">Danh sách</a>
                </div>
                    
            </form> 
           </div>
        </main>

