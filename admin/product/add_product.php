

        <!-- main -->
        <main class="container_">
        
            <h3 class="alert alert-success text-success"> Thêm mới sản phẩm</h3>
   
            <form action="" class="row g-3" method="post" enctype="multipart/form-data">
                <div class="col-4">
                    <label class="form-label fw-bolder">ID sản phẩm </label>
                    <input class="form-control" name='ma_loai' value="auto number" id="disabledInput" type="text" placeholder="" disabled>
                </div>
                <div class="col-4">
                    <label  class="form-label fw-bolder" >Tên sản phẩm</label>
                    <input type="text" class="form-control" name=''>
                    <div class="valid-feedback">
                        
                    </div>
                </div>
                <div class="col-4">
                    <label  class="form-label fw-bolder" >Giá sản phẩm</label>
                    <input type="number" class="form-control" name='' value="0">
                    <div class="valid-feedback">
                        
                    </div>
                </div>
                
                <div class="col-4">
                    <label  class="form-label fw-bolder" >Ảnh sản phẩm</label>
                    <input type="file" class="form-control" name=''>
                    <div class="valid-feedback">
                       
                    </div>
                </div>
                <div class="col-4">
                    <label  class="form-label fw-bolder" >Lượt xem</label>
                    <input type="text" class="form-control" name=''>
                    <div class="valid-feedback">
                        
                    </div>
                </div>
                <div class="col-4">
                    <label  class="form-label fw-bolder" >Giảm giá</label>
                    <input type="text" class="form-control" name=''>
                    <div class="valid-feedback">
                        
                    </div>
                </div>
                <div class="col-4">
                    <label  class="form-label fw-bolder" >Ngày nhập</label>
                    <input type="date" value="" class="form-control" name=''>
                    <div class="valid-feedback">
                        
                    </div>
                </div>
                <div class="col-4">
                    <label  class="form-label fw-bolder" >Danh mục</label>
                    <select class="form-select" id="autoSizingSelect">
                      <option selected>Chọn danh mục</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-4">
                    <label  class="form-label fw-bolder" >Brand</label>
                    <select class="form-select" id="autoSizingSelect">
                      <option selected>Chọn thương hiệu</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-12">
                    <label  class="form-label fw-bolder" >Mô tả</label>
                    <textarea class="form-control" placeholder="" id="floatingTextarea2" style="height: 100px"></textarea>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-12">
                    <input type="submit" name="themmoi" class="btn btn-outline-success fw-medium" value="Thêm mới"></input>
                    <button type="reset" name=""  class="btn btn-outline-info fw-medium">Nhâp lại</button>
                    <a href="list_product.html"  class="btn btn-outline-primary fw-medium">Danh sách</a>
                </div>
                    
            </form> 
        </main>