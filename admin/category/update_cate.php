

        <!-- main -->
        <main class="container_">
        
            <h3 class="alert alert-primary text-primary"> Update danh mục</h3>
   
            <form action="index.php?act=update_cate" method="post">
            <?php  
                if(is_array($show_one_cate)){
                    extract($show_one_cate);
                }
                ?>
                <div class="mb-3">
                    <label class="form-label fw-bolder">ID danh mục</label>
                    <input class="form-control" name='ma_loai' value="auto number" id="disabledInput" type="text" placeholder="" disabled>
                    <input type="hidden" name="cate_id" value="<?= $show_one_cate['cate_id'] ?>">
                </div>
                <div class="mb-3">
                    <label  class="form-label fw-bolder" >Tên danh mục</label>
                    
                    <input type="text" class="form-control" value="<?= $show_one_cate['cate_name'] ?>" name='cate_name'>
                    <p class="text-danger"> <?= isset($cate_name_error)? $cate_name_error :'' ?></p>


                    <div class="invalid-feedback">
                        aaaaaz
                    </div>
                </div>

                <div class="mb-3">
                    <input type="submit" name="update" class="btn btn-outline-success fw-medium" value="Cập nhật"></input>
                    <button type="reset" name=""  class="btn btn-outline-info fw-medium">Nhâp lại</button>
                    <a href="index.php?act=list_category"  class="btn btn-outline-primary fw-medium">Danh sách</a>
                </div>
                    
            </form> 
        </main>

