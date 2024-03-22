

        <!-- main -->
        <main class="container_">
        
            <h3 class="alert alert-success text-success"> Thêm mới sản phẩm</h3>
   
            <form action="" class="row g-3" method="post" enctype="multipart/form-data">
                
                <div class="col-4">
                    <label  class="form-label fw-bolder" >Tên sản phẩm</label>
                    <input type="text" class="form-control" name='name'>
                    <p class="text-danger"> <?= isset($error['name'])? $error['name'] :'' ?></p>
                </div>
                <div class="col-4">
                    <label  class="form-label fw-bolder" >Giá sản phẩm</label>
                    <input type="number" class="form-control" name='price' value="0">
                    <p class="text-danger"> <?= isset($error['price'])? $error['price'] :'' ?></p>
                </div>
                
                <div class="col-4">
                    <label  class="form-label fw-bolder" >Ảnh sản phẩm</label>
                    <input type="file" class="form-control" name='image'>
                    <p class="text-danger"> <?= isset($error['image'])? $error['image'] :'' ?></p>
                </div>
                
                <div class="col-4">
                    <label  class="form-label fw-bolder" >Lượt xem</label>
                    <input type="number" class="form-control" name='view'>
                    <p class="text-danger"> <?= isset($error['view'])? $error['view'] :'' ?></p>
                </div>
                <div class="col-4">
                    <label  class="form-label fw-bolder" >Giảm giá</label>
                    <input type="number" class="form-control" name='sale'>
                    <p class="text-danger"> <?= isset($error['sale'])? $error['sale'] :'' ?></p>
                </div>
                <div class="col-4">
                    <label  class="form-label fw-bolder" >Ngày nhập</label>
                    <input type="date" value="" class="form-control" name='create_at'>
                    <p class="text-danger"> <?= isset($error['create_at'])? $error['create_at'] :'' ?></p>
                </div>
                <div class="col-4">
                    <label  class="form-label fw-bolder"  >Danh mục</label>
                    <select class="form-select" id="autoSizingSelect" name="cate_id">
                      <option selected value="">Chọn danh mục</option>
                      <?php foreach ($list_category as $category) : extract($category); ?>

                        <option value="<?= $cate_id ?>"><?= $cate_name?></option>
                        
                      <?php endforeach ?>

                      
                    </select>
                    <p class="text-danger"> <?= isset($error['cate'])? $error['cate'] :'' ?></p>
                </div>
                <div class="col-4">
                    <label  class="form-label fw-bolder" >Brand</label>
                    <select class="form-select" id="autoSizingSelect" name="brand_id">
                      <option selected value="">Chọn thương hiệu</option>

                      <?php foreach ($list_brand as $brand) : extract($brand); ?>

                        <option value="<?= $brand_id?>"><?= $brand_name ?></option>
                        
                      <?php endforeach ?>

                    </select>
                    <p class="text-danger"> <?= isset($error['brand'])? $error['brand'] :'' ?></p>
                </div>
                <div class="col-12">
                    <label  class="form-label fw-bolder" >Mô tả</label>
                    <textarea class="form-control" name="description" placeholder="" id="floatingTextarea2" style="height: 100px"></textarea>
                   
                    <p class="text-danger"> <?= isset($error['description'])? $error['description'] :'' ?></p>
                </div>
                <div class="col-12">
                    <input type="submit" name="themmoi" class="btn btn-outline-success fw-medium" value="Thêm mới"></input>
                    <button type="reset" name=""  class="btn btn-outline-info fw-medium">Nhâp lại</button>
                    <a href="index.php?list_product"  class="btn btn-outline-primary fw-medium">Danh sách</a>
                </div>
            </form> 
        </main>