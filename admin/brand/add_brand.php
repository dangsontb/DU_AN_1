
        <!-- main -->
        <main class="container_">
        
            <h3 class="alert alert-success text-success"> Thêm mới thương hiệu</h3>
   
            <form action="" method="post">
                <div class="mb-3">
                    <label class="form-label fw-bolder">ID Brand</label>
                    <input class="form-control" name='brand_id' value="auto number" id="disabledInput" type="text" placeholder="" disabled>
                </div>
                <div class="mb-3">
                    <label  class="form-label fw-bolder" >Tên Brand</label>
                    <input type="text" class="form-control" name='brand_name'>
                    <p class="text-danger"> <?= isset($brand_name_error)? $brand_name_error :'' ?></p>
                </div>

                <div class="mb-3">
                    <input type="submit" name="themmoi" class="btn btn-outline-success fw-medium" value="Thêm mới"></input>
                    <button type="reset" name=""  class="btn btn-outline-info fw-medium">Nhâp lại</button>
                    <a href="index.php?act=list_brand"  class="btn btn-outline-primary fw-medium">Danh sách</a>
                </div>
                    
            </form> 
        </main>