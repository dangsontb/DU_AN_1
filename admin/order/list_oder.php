<main class="container_">
        
        <h3 class="alert alert-success text-success"> Danh sách bill</h3>
        <table class="table table-hover">
            <thead  class="table-secondary" >
                <tr>
                    <th></th>
                    <th>ID</th>
                    <th>Khách hàng</th>
                    <th>Tổng tiền</th>
                    <th>Trạng thái</th>
                    <th>Thanh toán</th>     
                    <th>Ngày mua</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($list_order as $order): extract($order);
                // echo "<pre>";
                // var_dump($order);
                
                ?>
                    <tr>
                        <td><input  class="form-check-input" type="checkbox"></td>
                        <td><?= $id ?></td>
                        <td><?= $user_name ?></td>
                        <td><?= $tong_donhang ?></td>
                        <td><?= $status_name ?></td>
                        <td><?= $phuongthuc_thanhtoan == 1 ? 'COD' : "Banking" ?></td>
                        <td><?= $order[6] ?></td>
                        
                        
                        <td>
                            <a href="bill-detail.html" class="btn btn-primary fw-medium">Chi tiết</a>
                            <a href="" class="btn btn-outline-danger fw-medium" onclick="return confirm('Xác nhận xóa')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach ?>
             
                
            </tbody>
            
        </table>
        <!-- <form action="" method="post">
            <div class="form-group">
                <button name="btn_insert" class="btn btn-outline-primary fw-medium">Chọn tất cả</button>
                <button type="reset"  class="btn btn-outline-info fw-medium">Bỏ chọn tất cả</button>
                <a   class="btn btn-outline-danger fw-medium">Xóa mục đã chọn</a>
                
            </div>
        </form> -->
        <div aria-label="Page navigation example" class="chuyentrang">
            <ul class="pagination justify-content-center" >
                <li class="page-item">
                    <?php 
                    if(isset($page) && $page > 1){
                        $prev_page = $page - 1;
                    ?>
                    <a class="page-link " href="?act=list_bill&page=<?= $prev_page ?>" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    </a>
                    <?php }?>
                </li>
                
                <?php
                for ($i = 1; $i <= $total_pages; $i++) {
                    // Thiết lập trang mặc định nếu không có tham số trang được truyền hoặc tham số trang trống
                    $page = isset($page) && !empty($page) ? $page : 1;
                ?>

                    <li class="page-item">
                    <a class="page-link <?= $page == $i ? 'active' : '' ?>" href="?act=list_bill&page=<?= $i ?>"><?= $i ?></a>
                    </li>
                <?php } ?>

                <li class="page-item">
                    <?php 
                    if(isset($page)  && isset($total_pages) && $total_pages > $page  ){
                        if($page <  $total_pages){
                            $next_page = $page + 1;
                        } 
                                    
                    ?> 
                        <a class="page-link" href="?act=list_bill&page=<?= $next_page ?>" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        </a>
                    <?php }?>
                </li>
            </ul>
        </div>
      
</main>