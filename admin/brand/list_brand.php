

        <!-- main -->
        <main class="container_">
        
                <h3 class="alert alert-success text-success"> Danh sách danh mục</h3>
                <table class="table table-hover">
                    <thead  class="table-secondary" >
                        <tr>
                            <th></th>
                            <th>Mã Brand</th>
                            <th>Tên Brand</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($list_brand as $brand) : extract($brand); ?>
                        <tr>
                            <td><input class="form-check-input" type="checkbox"></td>
                            <td><?= $brand_id ?></td>
                            <td><?= $brand_name?> </td>
                            <td>
                                <a href="" class="btn btn-primary fw-medium">Edit</a>
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
                        <a href="index.php?act=add_brand"  class="btn btn-outline-success fw-medium">Nhập thêm</a>
                    </div>
                </form>
              
        </main>
