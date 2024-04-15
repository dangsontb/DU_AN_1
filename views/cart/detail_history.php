
<h4 class="text-center" style="padding: 60px 0px ;">Chi tiết đơn hàng</h4>
  <div class="container">
<table class="table table-hover text-center align-items-center">
            <thead  class="table-secondary" >
                <tr>
             
                    <th>Sản phẩm</th>
                    <th>Ảnh</th>
                    <th>Số lượng</th>
                    <th>Đơn giá</th>
                    <th>Số tiền</th>
                    <th></th>
                    <th></th>
                    
                </tr>
            </thead>
            <tbody>

                    <?php  foreach( $history_order_detail as $sp){
                        extract($sp);
                        // echo "<pre>";
                        // print_r($sp);
                        $hinh = $path_img.$hinhanh;
                    ?>
                    <tr>
                  
                        <td><?= $ten_sanpham?></td>
                        <td> <img src="<?=$hinh?>" class="img-thumbnail" width="60px" alt="..."> </td>                      
                        <td><?= $soluong?></td>
                        <td><?= number_format($dongia)?></td>
                        <td><?=$total =  number_format($soluong * $dongia)?></td>
                        <td></td>
                        <td>
                            <!-- <?= $id_status == 1 ?
                            '<a href="index.php?act=delete_order_detail&order_id=' . $id_order . '&id=' . $sp[0] . '" onclick="return confirm(\'Bạn có muốn xóa ' . $ten_sanpham . ' khỏi đơn hàng ?\')">
                            <i class="fas fa-trash fa-sm" style="color: #b80000;"></i></a>' : '' ?> -->
                        </td>
                    </tr>
                    <?php } ?>
            </tbody>     
        </table>
  </div>