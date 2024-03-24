

        <!-- main -->
        <main class="container-fluid row">
        
                <h3 class="alert alert-success text-success"> Danh sách Sản phẩm</h3>
                <form action="" method="post">
                    <table class="table table-hover">
                        <thead  class="table-secondary" >
                            <tr>
                                <th></th>
                                <th>ID </th>
                                <th>Tên TK</th>
                                <th>Mật khẩu</th>
                                <th>Họ tên</th>
                                <th>Email</th>
                                <th>SĐT</th>
                                <th>Địa chỉ</th>
                                <th>Role</th>
                                <th>Ngày tạo</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <tr>
                                <td><input class="form-check-input" type="checkbox"></td>
                                <td>1</td>
                                <td>Dangson</td>
                                <td>123456 </td>
                                <td>Đặng Văn Sơn </td>
                                <td>dangvanson@gmail.com</td>
                                <td>0339530282</td>
                                <td>Kiến Xương - Thái Bình</td>
                                <td>Admin</td>
                                <td>1/1/1111 </td>
                                <td>
                                    <a href="index.php?act=edit_user" class="btn btn-outline-primary fw-medium "><i class="far fa-edit"></i></a>
                                    <a href="index.php?act=delete_user" class="btn btn-outline-danger fw-medium" onclick="return confirm('Xác nhận xóa')"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>

                            
                        </tbody>
                    </table>
            
                    <div class="form-group">
                        <button name="" class="btn btn-outline-primary fw-medium">Chọn tất cả</button>
                        <button type="reset"  class="btn btn-outline-info fw-medium">Bỏ chọn tất cả</button>
                        <button  class="btn btn-outline-danger fw-medium">Xóa mục đã chọn</button>
                        <a href="index.php?act=add_user"  class="btn btn-outline-success fw-medium">Nhập thêm</a>
                    </div>
                </form>  
        </main>
