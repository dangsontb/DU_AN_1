

        <!-- main -->
        <main class="container-fluid">
           <div >
            <h3 class="alert alert-success text-success"> Update người dùng</h3>
   
            <form action="index.php?act=update_user" class="row g-3" method="post" enctype="multipart/form-data">
                <div class="col-4">
                    <label class="form-label fw-bolder">ID user </label>
                    <input class="form-control" name='ma_loai' value="auto number" id="disabledInput" type="text" placeholder="" disabled>
                </div>
                <div class="col-4">
                    <label  class="form-label fw-bolder" >Tên tài khoản</label>
                    <input type="text" class="form-control" name=''>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-4">
                    <label  class="form-label fw-bolder" >Mật khẩu</label>
                    <input type="password" class="form-control" name='' >
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                
                
                <div class="col-4">
                    <label  class="form-label fw-bolder" >Họ tên</label>
                    <input type="text" class="form-control" name=''>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-4">
                    <label  class="form-label fw-bolder" >Email</label>
                    <input type="email" class="form-control" name=''>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-4">
                    <label  class="form-label fw-bolder" >Số điện thoại</label>
                    <input type="tel" value="" class="form-control" name=''>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-4">
                    <label  class="form-label fw-bolder" >Địa chỉ</label>
                    <input type="text" value="" class="form-control" name=''>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-4">
                    <label  class="form-label fw-bolder" >Role</label>
                    <div class="form-control">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="0" checked>
                            <label class="form-check-label" for="inlineRadio1">Khách Hàng</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="1">
                            <label class="form-check-label" for="inlineRadio2">Admin</label>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <label  class="form-label fw-bolder" >Ngày tạo</label>
                    <input type="datetime-local" value="" class="form-control" name=''>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-12">
                    <input type="submit" name="themmoi" class="btn btn-outline-success fw-medium" value="Update"></input>
                    <button type="reset" name=""  class="btn btn-outline-info fw-medium">Nhâp lại</button>
                    <a href="list-user.html"  class="btn btn-outline-primary fw-medium">Danh sách</a>
                </div>
                    
            </form> 
           </div>
        </main>

