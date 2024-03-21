
        <!-- main -->
        <main class="container_">
        
                <h3 class="alert alert-success text-success"> Danh sách Sản phẩm</h3>
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
                            <th>View</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($list_product as $product) : 
                            extract($product); 
                            $img= '../'.$GLOBALS['path_img'].$image;
                        ?>
                        <tr class="">
                            <td><input class="form-check-input" type="checkbox"></td>
                            <td><?= $product_id?></td>
                            <td> <?= $name?></td>
                            <td> <?= $price?> </td>
                            <td> <img src="<?=$img ?>" class="img-thumbnail" width="60px" alt="..."> </td>
                            <td> <?= $sale?> </td>
                        
                            <td> <?= $create_at?> </td>
                            <td> <?= $view?></td>
                            <td>
                                <a href="edit_product.html" class="btn btn-primary fw-medium">Edit</a>
                                <a href="" class="btn btn-outline-danger fw-medium" onclick="return confirm('Xác nhận xóa')">Delete</a>
                            </td>
                        </tr>
                        <?php endforeach ?>    
                        
                    </tbody>
                    
                </table>
                <form action="" method="post">
                    <div class="form-group">
                        <button name="" class="btn btn-outline-primary fw-medium">Chọn tất cả</button>
                        <button type="reset"  class="btn btn-outline-info fw-medium">Bỏ chọn tất cả</button>
                        <a   class="btn btn-outline-danger fw-medium">Xóa mục đã chọn</a>
                        <a href="index.php?act=add_product"  class="btn btn-outline-success fw-medium">Nhập thêm</a>
                    </div>
                </form>
              
        </main>
