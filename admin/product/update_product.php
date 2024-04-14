

        <!-- main -->
        
        <?php
            if(is_array($product_by_id)){
                // extract($select_khach_update);
            }
            $hinh_path ='../uploads/'.$product_by_id['image'];
            if(is_file($hinh_path)){
                $img_product = "<img src='".$hinh_path."'";
            }else{
                $img_hh =" NO IMG" ;
            }
        //  print_r($product_by_id);

        ?>
        <main class="container_">
        
            <h3 class="alert alert-primary text-primary"> Cập nhật sản phẩm</h3>
   
            <form action="index.php?act=update_product" class="row g-3" method="post" enctype="multipart/form-data">
                
                <div class="col-4">
                    <label  class="form-label fw-bolder" >Tên sản phẩm</label>
                    <input type="text" class="form-control" name='name' value="<?= $product_by_id['name']?>">
                    <p class="text-danger"> <?= isset($error['name'])? $error['name'] :'' ?></p>
                </div>
                <div class="col-4">
                    <label  class="form-label fw-bolder" >Giá sản phẩm</label>
                    <input type="number" class="form-control" name='price' value="<?=$product_by_id['price']?>">
                    <p class="text-danger"> <?= isset($error['price'])? $error['price'] :'' ?></p>
                </div>
                
                <div class="col-4">   
                    <label  class="form-label fw-bolder" >Ảnh sản phẩm </label>
                    <div class="row">
                        <div class="col-9">
                            <input type="file" class="form-control " name='image' > 
                            
                        </div>
                        <div class="col-3">
                            <img src="<?= $hinh_path ?>" class="rounded-4" width="60px" alt="...">
                        </div>
                    </div>

                </div>
                
                <div class="col-4">
                    <label  class="form-label fw-bolder" >Lượt xem</label>
                    <input type="number" class="form-control" name='view' value="<?=$product_by_id['view']?>">
                    <p class="text-danger"> <?= isset($error['view'])? $error['view'] :'' ?></p>
                </div>
                <div class="col-4">
                    <label  class="form-label fw-bolder" >Giảm giá</label>
                    <input type="number" class="form-control" name='sale' value="<?=$product_by_id['sale']?>" >
                    <p class="text-danger"> <?= isset($error['sale'])? $error['sale'] :'' ?></p>
                </div>
                <div class="col-4">
                    <label  class="form-label fw-bolder" >Số lượng</label>
                    <input type="number" class="form-control" name='quantity' value="<?=$product_by_id['product_quantity']?>"  >
                    <p class="text-danger"> <?= isset($error['quantity_update'])? $error['quantity_update'] :'' ?></p>
                </div>
                <div class="col-4">
                    <label  class="form-label fw-bolder" >Ngày nhập</label>
                    <input type="date"  class="form-control" name='create_at' value="<?=$product_by_id['create_at']?>" >
                    <p class="text-danger"> <?= isset($error['create_at'])? $error['create_at'] :'' ?></p>
                </div>
                <div class="col-4">
                    <label  class="form-label fw-bolder"  >Danh mục</label>
                    <select class="form-select" id="autoSizingSelect" name="cate_id" >
                      <option value="">Chọn danh mục</option>
                      <?php foreach ($list_category as $category) : extract($category); ?>

                        <option value="<?= $cate_id ?>"
                        <?= $product_by_id['cate_id'] == $cate_id ? 'selected' : "" ?>>
                        <?= $cate_name?></option>
                        
                      <?php endforeach ?>

                      
                    </select>
                    <p class="text-danger"> <?= isset($error['cate'])? $error['cate'] :'' ?></p>
                </div>
                <div class="col-4">
                    <label  class="form-label fw-bolder" >Brand</label>
                    <select class="form-select" id="autoSizingSelect" name="brand_id" >
                      <option  value="">Chọn thương hiệu</option>

                      <?php foreach ($list_brand as $brand) : extract($brand); ?>

                        <option value="<?= $brand_id?>" 
                        <?= $product_by_id['brand_id'] == $brand_id ? 'selected' : "" ?>>
                        <?= $brand_name ?></option>
                        
                      <?php endforeach ?>

                    </select>
                    <p class="text-danger"> <?= isset($error['brand'])? $error['brand'] :'' ?></p>
                </div>
                <div class="col-12">
                    <label  class="form-label fw-bolder" >Mô tả</label>
                    <textarea class="form-control" name="description" placeholder="" id="floatingTextarea2" style="height: 100px"> <?=$product_by_id['description']?></textarea>
                   
                    <p class="text-danger"> <?= isset($error['description'])? $error['description'] :'' ?></p>
                </div>
                <div class="col-12">
                    <input type="hidden" name="product_id" value="<?=$product_by_id['product_id']?>">
                    <input type="submit" name="update" class="btn btn-outline-success fw-medium" value="Cập nhật"></input>
                    <button type="reset" name=""  class="btn btn-outline-info fw-medium">Nhâp lại</button>
                    <a href="index.php?act=list_product"  class="btn btn-outline-primary fw-medium">Danh sách</a>
                </div>
            </form> 
        </main>