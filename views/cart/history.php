<!-- <h4 class="text-center" style="padding: 60px 0px ;">Lịch sử đơn hàng</h4>
  <div class="container">
  <table class="table">
            <thead  class="table-secondary" >
                <tr>
                    <th></th>
                    <th>Tên sản phẩm</th>
                    <th>Ảnh</th>
                    <th>Số lượng</th>
                    <th>Đơn giá</th>
                    <th>Trạng thái</th>
                    <th>Ngày đặt</th>
                    <th></th><th></th>
                </tr>
            </thead>
            <tbody>
            <?php  foreach($order_history as $sp){
                        extract($sp);
                        // echo "<pre>";
                        // var_dump($order_history);
                        $hinh = $path_img.$hinhanh;
                    ?>

                    <tr>
                    <td></td>
                        <td><?= $ten_sanpham?></td>
                        <td> <img src="<?=$hinh ?>" class="img-thumbnail" width="80px" alt="..."> </td>                      
                        <td><?= $soluong?></td>
                        <td><?= $dongia?></td>
                        <td><?= $status_name?></td>
                        <td><?= $sp['16']?></td>
                        <td></td>
                        <td><a href="index.php?act=cancel_order&order_id="  class="btn btn-outline-danger fw-medium" onclick="return confirm('Xác nhận hủy đơn hàng  ')">Hủy đơn</a></td>
                    </tr>
                <?php }?>
            </tbody>
            
        </table>
  </div> -->

  <h2 class="text-center" style="padding: 60px 0px ;">Lịch sử đơn hàng</h2>
  <div class="container">
  <table class="table">
            <thead  class="table-secondary" >
                <tr>
                    <th></th>
                    <th>Mã đơn hàng</th>
                    <th>Phương thức thanh toán</th>
                    <th>Tổng tiền</th>
                    <th>Trạng thái</th>
                    <th>Ngày đặt</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php  foreach($order_history as $sp){
                        extract($sp);
                        // echo "<pre>";
                        // var_dump($order_history);
                        // $hinh = $path_img.$hinhanh;
                    ?>
                    <tr>
                        <td></td>
                        <td><?=$ma_donhang?></td>
                        <td><?= $phuongthuc_thanhtoan == 1 ? 'COD' : "Banking" ?></td>
                        <td><?=number_format($tong_donhang)?></td>
                        <td><?=$status_name?></td>
                        <td><?=$sp['9']?></td>
                        <td></td>
                        <td >
                            <a href="index.php?act=history_order_detail&order_id=<?= $id?>" class="btn btn-primary fw-medium">Chi tiết <i class="fas fa-info-circle"></i></a>
                    
                            <?= $id_status == 1 ? '<a href="index.php?act=cancel_order&order_id=' . $id . '" class="btn btn-outline-danger fw-medium" onclick="return confirm(\'Xác nhận hủy đơn hàng: ' . $ma_donhang . '\')">Hủy đơn</a>' : '' ?>      
                        </td>
                       
                    </tr>
                <?php }?>
            </tbody>
        </table>
  </div> 