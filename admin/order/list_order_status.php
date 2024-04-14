<main class="container">
        
        <h3 class="alert alert-primary text-primary"> Danh sách bill</h3>
        <?php include 'order/select_status.php' ?>
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
                        <td><?= number_format($tong_donhang) ?></td>
                        <td>
                           
                            <select class="form-select form-select-sm w-auto" id="status<?= $id?>" onchange="status_update(this)" aria-label="Small select example">
                                <!-- <option selected><?= $status_name ?></option> -->
                                <?php  foreach($status as $stt) :  ?>
                                    <option value="<?=$id?>&id_status=<?= $stt['status_id'] ?>" <?= $id_status == $stt['status_id'] ? 'selected': '' ?>
                                    ><?= $stt['status_name'] ?></option>
                                <?php endforeach ?>    
                             
                            </select>
                        </td>
                        <td><?= $phuongthuc_thanhtoan == 1 ? 'COD' : "Banking" ?></td>
                        <td><?= $order[9] ?></td>
                        
                        
                        <td>
                            <a href="?act=order_detail&id=<?= $id ?>" class="btn btn-primary fw-medium">Chi tiết <i class="fas fa-info-circle"></i></a>
                        </td>
                    </tr>
                <?php endforeach ?>
             
                
            </tbody>
            
        </table>
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
                    <a class="page-link <?= $page == $i ? 'active' : '' ?>" href="?act=select_bill&status_id=<?=$status_id?>&page=<?= $i ?>"><?= $i ?></a>
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
