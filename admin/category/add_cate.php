

        <!-- main -->
        <main class="container_">
        
            <h3 class="alert alert-primary text-primary"> Thêm mới danh mục</h3>
   
            <form action="index.php?act=add_cate" method="post">
                <div class="mb-3">
                    <label class="form-label fw-bolder">ID danh mục</label>
                    <input class="form-control" name='cate_id' value="auto number" id="disabledInput" type="text" placeholder="" disabled>
                </div>
                <div class="mb-3">
                    <label  class="form-label fw-bolder" >Tên danh mục</label>
                    <input type="text" class="form-control" name='cate_name' value="<?= !empty($_POST['cate_name']) ? $_POST['cate_name'] : false ?>">
                    <p class="text-danger"> <?= isset($cate_name_error)? $cate_name_error :'' ?></p>
                </div>

                <div class="mb-3">
                    <input type="submit" name="themmoi" class="btn btn-outline-success fw-medium" value="Thêm mới"></input>
                    <button type="reset" name=""  class="btn btn-outline-info fw-medium">Nhâp lại</button>
                    <a href="index.php?act=list_category"  class="btn btn-outline-primary fw-medium">Danh sách</a>
                </div>
                    
            </form> 
        </main>

 