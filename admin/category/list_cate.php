

        <!-- main -->
        <main class="container_">
        
                <h3 class="alert alert-success text-success"> Danh sách danh mục</h3>
                <table class="table table-hover">
                    <thead  class="table-secondary" >
                        <tr>
                            <th></th>
                            <th>ID Danh Mục</th>
                            <th>Tên Danh Mục</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($list_category as $category) : extract($category); ?>
                        <tr>
                            <td><input class="form-check-input" type="checkbox"></td>
                            <td><?= $cate_id ?></td>
                            <td><?= $cate_name?></td>
                            <td>
                                <a href="index.php?act=edit_cate&id=<?= $category['cate_id'] ?>" class="btn btn-outline-primary fw-medium "><i class="far fa-edit"></i></a>
                                <a href="index.php?act=delete_cate&id=<?= $category['cate_id'] ?>" class="btn btn-outline-danger fw-medium" onclick="return confirm('Bạn muốn xóa : <?= $cate_name ?> ?')"><i class="fas fa-trash"></i></a>
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
                        <a href="index.php?act=add_cate"  class="btn btn-outline-success fw-medium">Nhập thêm</a>
                    </div>
                </form>
              
        </main>
