<h4 class="text-center" style="padding: 60px 0px ;">Lịch sử đơn hàng</h4>
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
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php  foreach($order_history as $sp){
                        extract($sp);
                        // echo "<pre>";
                        // var_dump($order_detail);
                        $hinh = $path_img.$hinhanh;
                    ?>

                    <tr>
                    <td></td>
                        <td><?= $ten_sanpham?></td>
                        <td> <img src="<?=$hinh ?>" class="img-thumbnail" width="60px" alt="..."> </td>                      
                        <td><?= $soluong?></td>
                        <td><?= $dongia?></td>
                        <td><?= $status_name?></td>
                        <td><?= $create_at?></td>
                    </tr>
                <?php }?>
            </tbody>
            
        </table>
  </div>