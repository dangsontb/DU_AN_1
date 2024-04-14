
        <!-- main -->
        <main class="container_">
        
            <h3 class="alert alert-primary text-primary"> Update thương hiệu</h3>
   
            <form action="index.php?act=update_brand" method="post">
                <?php  
                if(is_array($show_one_brand)){
                    extract($show_one_brand);
                }
                ?>
                <div class="mb-3">
                    <label class="form-label fw-bolder">ID Brand</label>
                    <input class="form-control"  value="auto number" id="disabledInput" type="text" placeholder="" disabled>
                    <input type="hidden" name="brand_id" value="<?= $show_one_brand['brand_id'] ?>">
                </div>
                <div class="mb-3">
                    <label  class="form-label fw-bolder" >Tên Brand</label>
                    <input type="text" class="form-control" value="<?= $show_one_brand['brand_name'] ?>" name='brand_name'>
                    <p class="text-danger"> <?= isset($brand_name_error)? $brand_name_error :'' ?></p>
                </div>

                <div class="mb-3">
                    <input type="submit" name="update" class="btn btn-outline-success fw-medium" value="Update"></input>
                    <button type="reset" name=""  class="btn btn-outline-info fw-medium">Nhâp lại</button>
                    <a href="index.php?act=list_brand"  class="btn btn-outline-primary fw-medium">Danh sách</a>
                </div>
                    
            </form> 
        </main>