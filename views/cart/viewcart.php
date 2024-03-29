<br><br><br>
        <div class="container">
            <h2 class="mt-4">Giỏ Hàng</h2>
            <div class="row">
              <div class="col-md-8">

<!-- <?php 
echo "<pre>";
print_r($_SESSION['giohang']);


?> -->

              <?php if (!empty($_SESSION['giohang'])) {
                            $tong = 0;
                            $tongsp=0;
                            $i = 0;
                           
              ?>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Hình</th>
                    <th scope="col">Đơn giá</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Thành tiền</th>
                    <th scope="col">Hành động</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    foreach ($_SESSION['giohang'] as $item) {
                      $thanhtien=($item['3']) *($item['4']) ;
                      $tongtien=number_format(($item['3']) *($item['4']));
                      $tong+=$thanhtien;
                      $dongia=number_format($item['3']);
                      $tongsp+=$item['4'];
                      echo '<tr>
                              <td>'.($i+1).'</id>
                              <td>'.$item['1'].'</id>
                              <td>'.$item['2'].'</id>
                              <td>'. $dongia.'</id>
                              <td>'.$item['4'].'</id>
                              <td>'.$tongtien.'</id>
                              <td>
                                <a href="index.php?act=delete_cart&i='.$i.'"><i class="fas fa-trash fa-sm" style="color: #b80000;"></i></a>
                              </td>
                            </tr>';
                     $i++;
                    } ?>
                  </tbody>
                </table>
                <a href="index.php"><button class="btn btn-primary btn-block mt-3">Tiếp tục mua hàng</button></a>
                <a href="index.php?act=delete_cart"><button class="btn btn-primary btn-block mt-3">Xóa giỏ hàng</button></a>
              </div>
              <div class="col-md-4">
                <h4>Tổng Giỏ Hàng</h4>
                <ul class="list-group">
                  <li class="list-group-item">Tổng sản phẩm: <span class="float-right text-danger fw-semibold"><?=$tongsp?></span></li>
                  <li class="list-group-item">Tổng giá: <span class="float-right text-danger fw-semibold"><?=$tong?> VNĐ</span></li>
                  
                </ul>
                <a href=""><button class="btn btn-primary btn-block mt-3">Thanh toán</button></a>
                <?php }else {?>
                  <h5 class="text-danger">Giỏ hàng trống. Vui lòng chọn thêm sản phẩm!</h5>
                  <a href="index.php"><button class="btn btn-primary btn-block mt-3">Tiếp tục mua hàng</button></a>
                <?php }?>
              </div>
            </div>
          </div><br><br>
