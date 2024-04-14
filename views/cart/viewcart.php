<?php
  if(isset($_SESSION['user'])){
      $user = $_SESSION['user'];
      // echo "<pre>";
      // var_dump($user);
      extract($user);
?>

<br><br>
<div class="container">
  <h2 class="mt-4">Giỏ Hàng</h2>
  <div style="width: 70%; float: left;">
    <div>
      <?php if (!empty($_SESSION['giohang'])) {
                    $tong = 0;
                    $tongsp=0;
                    $i = 0;
                    
      ?>
      <table class="table">
        <thead>
          <tr>
            <th >STT</th>
            <th>Tên sản phẩm</th>
            <th>Hình</th>
            <th>Đơn giá</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
            <th>Hành động</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            foreach ($_SESSION['giohang'] as $item) {
              // var_dump($item);
              $thanhtien=$item['3'] * $item['4'];
              $tong+=$thanhtien;
              $tongsp+=$item['4'];
              $i++;
          ?>
             <tr class="text-center">
                    <td><?= ($i)?></id>
                    <td><?= $item['1'] ?></id>
                    <td> <img src="./uploads/<?= $item['2']?>" width="60" alt=""></id>
                    <td><?= number_format($item['3'])?> </id>
                    <td>
                      <a href="?act=plus&id=<?=$item[0] ?>&i=<?=$i -1 ?>"><i class="fas fa-plus"></i></a>
                      <?= $item['4'] ?>
                      <a href="?act=minus&id=<?=$item[0] ?>&i=<?=$i -1 ?>"><i class="fas fa-minus"></i></a>
                    </id>
                    <td><?=number_format($thanhtien) ?></id>
                    <td>
                      <a href="index.php?act=delete_cart&i=<?=$i -1 ?>"><i class="fas fa-trash fa-sm" style="color: #b80000;"></i></a>
                    </td>
                  </tr>
                  
          
          <?php } ?>
        </tbody>
      </table>
      <a href="index.php"><button class="btn btn-primary btn-block mt-3">Tiếp tục mua hàng</button></a>
      <a href="index.php?act=delete_cart"><button class="btn btn-primary btn-block mt-3">Xóa giỏ hàng</button></a>
    </div>

    <div style="margin-top: 100px;">
      <h4>Tổng Giỏ Hàng</h4>
        <ul class="list-group">
          <li class="list-group-item">Tổng sản phẩm: <span class="float-right text-danger fw-semibold"><?=$tongsp?></span></li>
          <li class="list-group-item">Tổng giá: <span class="float-right text-danger fw-semibold"><?=number_format($tong)?> VNĐ</span></li>
        </ul>
    </div>

    <div class="col-md-4">
      <?php }else {?>
        <h5 class="text-danger">Giỏ hàng trống. Vui lòng chọn thêm sản phẩm!</h5>
        <a href="index.php"><button class="btn btn-primary btn-block my-5">Tiếp tục mua hàng</button></a>
      <?php }?>
    </div>
  </div>


  <?php 
    if(!empty($_SESSION['giohang'])){
  ?>
      <!-- Thông tin đặt hàng -->
  <div style="width: 28%; float: right; margin-top: 30px">
    <form action="index.php?act=thanhtoan" method="post">
      <input type="hidden" name="tongdonhang" value="<?=$tong?>">
      <input type="hidden" name="user_id" value="<?= $user_id ?>">
      <div class="card">
        <div class="card-header cart text-primary fw-bold text-white">Thông tin đặt hàng</div>
        <div class="card-body">
       
          <div class="wrap-infocart mar-t5">
            <span>Họ và tên  : </span>
            <input name="name" type="text" value="<?= $fullname?>" class="ip-cart ml-91" placeholder="Nhập họ tên người nhận" required >
          </div>
          <div class="wrap-infocart mar-t5">
            <span>Địa chỉ: </span>
            <input name="address" type="text" value="<?= $address?>" class="ip-cart ml-158" placeholder="Nhập địa chỉ nhận hàng" required>
          </div>
          <div class="wrap-infocart mar-t5">
            <span>Email: </span>
            <input name="email" type="email" value="<?= $email?>" class="ip-cart ml-166" placeholder="Nhập email người nhận" required>
          </div>
          <div class="wrap-infocart mar-t5">
            <span>Điện thoại: </span>
            <input name="phone" type="text" value="<?= $phone?>" class="ip-cart ml-134" placeholder="Nhập số điện thoại người nhận" required>
          </div>
        </div>
      </div>

      <!-- phương thức thanh toán -->
      <div class="card mt-4 mb-4">
        <div class="card-header cart text-primary fw-bold text-white">Phương thức thanh toán</div>
        <div class="card-body">
          <div class="payment-option">
            <input class="form-check-input" type="radio" name="pttt" id="inlineRadio1" value="1" checked required>
            <label for="inlineRadio1">Thanh toán khi nhận hàng</label>
          </div>
          <div class="payment-option">
            <input class="form-check-input" type="radio" name="pttt" id="inlineRadio2" value="2">
            <label class="form-check-label" for="inlineRadio2">Chuyển khoản ngân hàng</label>
          </div>
          <div class="payment-option">
            <input class="form-check-input" type="radio" name="pttt" id="inlineRadio3" value="3">
            <label class="form-check-label" for="inlineRadio3">Thanh toán qua Momo</label>
          </div>
        </div>
      </div>
      <a href=""><input type="submit" class="btn btn-primary btn-block mt-3" name="thanhtoan" value="Thanh toán" style="margin-bottom: 150px;"></a>
    </form>
  </div>
</div>

<?php 
    }
}else{
    header('location: ?act=form_login');
} ?>

<!-- <td class="w-25">
  <div class="input-group mx-5 " style="width : 50%">
    <button class="btn btn-outline-secondary minusBtn" type="button" onclick="minusBtn(this)">-</button>
    <input type="text"  class="form-control quantityInput" value="'.$item['4'].'">
    <button class="btn btn-outline-secondary plusBtn" type="button"  onclick="plusBtn(this)">+</button>
  </div> -->
  <style>
     /* Style for the card containing the "Thông tin đặt hàng" section */
     table{
        width: 100%;
        margin-top: 40px;
    }
    table, td, th{
        border: 1px solid black;
        border-collapse: collapse;
    }
    th{
        background-color: #f68e64ca;
        color: black;
        padding: 8px 0px;
    }
     .card {
         margin-bottom: 20px;
         border: 1px solid #ccc;
         border-radius: 5px;
         box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
     }

     /* Style for the card header */
     .card-header {
         background-color: #007bff;
         color: #fff;
         padding: 10px;
         font-weight: bold;
     }

     /* Style for the card body */
     .card-body {
         padding: 20px;
     }

     /* Style for the input fields in "Thông tin đặt hàng" */
     .wrap-infocart {
         display: flex;
         align-items: center;
         margin-bottom: 15px;
     }

     .wrap-infocart span {
         width: 180px;
         font-weight: bold;
     }

     .ip-cart {
         flex: 1;
         padding: 10px;
         border: 1px solid #ccc;
         border-radius: 5px;
     }

     /* Style for the success message */
     .text-success {
         color: #28a745;
         font-weight: bold;
         margin-top: 10px;
     }

     .payment-option {
         margin-bottom: 10px;
     }

     .payment-option label {
         cursor: pointer;
         display: inline-block;
         padding-left: 30px;
         position: relative;
     }

     .payment-option input[type="radio"] {
         position: absolute;
         opacity: 0;
         cursor: pointer;
     }

     /* Create custom radio button appearance */
     .payment-option label:before {
         content: '';
         position: absolute;
         left: 0;
         top: 1px;
         width: 20px;
         height: 20px;
         border: 2px solid #007bff;
         border-radius: 50%;
     }

     /* Style the custom radio button when selected */
     .payment-option input[type="radio"]:checked+label:before {
         background-color: #007bff;
     }

     /* Optional: Add some hover effect */
     .payment-option label:hover:before {
         border-color: #0056b3;
     }
 </style>