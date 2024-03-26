
        <!-- main -->
        <main class="container_">
        
                <h3 class="alert alert-success text-success"> Danh sách Sản phẩm</h3>
                <form action="index.php?act=delete_product_by_checkbox" method="post">
                <table class="table table-hover">
                    <thead  class="table-secondary" >
                        <tr>
                            <th></th>
                            <th>ID SP</th>
                            <th>Tên SP</th>
                            <th>Giá</th>
                            <th>Hình ảnh</th>
                            <th>Sale</th>
                            <th>Ngày nhập</th>
                            
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($list_product as $product) : 
                            extract($product); 
                            $price = number_format("$price",0,",",".");;
                            $img= '../'.$GLOBALS['path_img'].$image;
                        ?>
                        <tr class="">
                            <td><input class="form-check-input" name="products_id[]" value="<?= $product_id ?>" type="checkbox"></td>
                            <td><?= $product_id?></td>
                            <td> <?= $name?></td>
                            <td> <?= $price?> </td>
                            <td> <img src="<?=$img ?>" class="img-thumbnail" width="60px" alt="..."> </td>
                            <td> <?= $sale?> </td>
                        
                            <td> <?= $create_at?> </td>
                            
                            <td>
                                <a href="index.php?act=edit_product&product_id=<?= $product_id ?>" class="btn btn-primary fw-medium">Edit</a>
                                <a href="index.php?act=delete_product&product_id=<?= $product_id ?>" class="btn btn-outline-danger fw-medium" onclick="return confirm('Xác nhận xóa')">Delete</a>
                            </td>
                        </tr>
                        <?php endforeach ?>    
                        
                    </tbody>
                    
                </table>
               
                    <div class="form-group">
                        <button name="" id="btnclick" class="btn btn-outline-primary fw-medium">Chọn tất cả</button>
                        <button type="reset"  class="btn btn-outline-info fw-medium">Bỏ chọn tất cả</button>
                        <input type="submit" name="delete_btn"  class="btn btn-outline-danger fw-medium" value="Xóa mục đã chọn">
                        <a href="index.php?act=add_product"  class="btn btn-outline-success fw-medium">Nhập thêm</a>
                    </div>
                </form>
              
        </main>
        <script>
          
          document.getElementById('btnclick').addEventListener('click',  function(event) {
              event.preventDefault();
              
              console.log("đã check");
              var checkboxes = document.querySelectorAll('.form-check-input');
              console.log(checkboxes)
              for (var i = 0; i < checkboxes.length; i++) {
                  checkboxes[i].checked = true;
                
              }
          });        
      </script>
