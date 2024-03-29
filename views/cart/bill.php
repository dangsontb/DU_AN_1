<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fleur+De+Leah&family=Noto+Sans+Display:ital,wght@0,100..900;1,100..900&family=Oxanium:wght@200..800&family=Playball&family=Roboto:wght@300;700&display=swap" rel="stylesheet">
                    font chữ 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>


</style>
<body>
        <header>
          <!-- =========================================================== NAVBAR ============================================================ -->
            <div class="dieuhuong">
                <nav class="navbar navbar-expand-lg fixed-top">
                    <div class="logo">
                        <a class="navbar-brand d-flex" href="#">
                          <img src="../image/logo1.jpg" alt="" width="100">
                          <span style="font-family: Oxanium, sans-serif; font-weight: 800; padding-top: 34px;">Shoes Fashion</span>
                        </a>
                    </div>
                    <div class="container-fluid menu">
                      <a class="navbar-brand fs-6" href="#">Trang chủ</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse " id="navbarScroll">
                        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle fs-6 text-body-emphasis" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Nike
                                </a>
                                <ul class="dropdown-menu">
                                <li><a class="dropdown-item fs-6" href="#">Action</a></li>
                                <li><a class="dropdown-item fs-6" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider fs-6"></li>
                                <li><a class="dropdown-item fs-6" href="#">Something else here</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle fs-6 text-body-emphasis" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Converse
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item fs-6" href="#">Action</a></li>
                                    <li><a class="dropdown-item fs-6" href="#">Another action</a></li>
                                    <li><hr class="dropdown-divider fs-6"></li>
                                    <li><a class="dropdown-item fs-6" href="#">Something else here</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown"> 
                                <a class="nav-link dropdown-toggle fs-6 text-body-emphasis" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Adidas
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item fs-6" href="#">Action</a></li>
                                    <li><a class="dropdown-item fs-6" href="#">Another action</a></li>
                                    <li><hr class="dropdown-divider fs-6"></li>
                                    <li><a class="dropdown-item fs-6" href="#">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                        <form class="d-flex" role="search">
                          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                          <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                      </div>
                    </div>
                    <div class="d-flex icon">
                        <li class="nav-item dropdown" style="list-style: none; ">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user fa-lg" style="color: black;"></i>
                            </a>
                            <ul class="dropdown-menu" style="width: 50px;">
                                <li><a class="dropdown-item" href="#">Đăng nhập</a></li>
                                <li><a class="dropdown-item" href="#">Đăng kí</a></li>
                            </ul>
                        </li>
                        <li style="list-style: none;">
                            <a class="nav-link " href="#" style="padding:0px 5px 0px 12px;">
                            <i class="fas fa-cart-plus fa-lg"></i>
                            </a>
                        </li>
                    </div>
                </nav>
            </div>

        </header>
        
        <!-- =============================================== a ================================================= -->
        <div class="container" style="margin-top: 100px;">
            <div class="row">
              <div class="col-md-6 offset-md-3">
                <h2 class="text-center mb-4">Thanh Toán Đơn Hàng</h2>
                
                <form>
                <div class="card">
                 <div class="card-header cart text-primary fw-bold">Thông tin đặt hàng</div>
                 <div class="card-body">
                     <div class="wrap-infocart mar-t5">
                         <span>Tài khoản người dùng: </span>
                         <input name="user_name" type="text" class="ip-cart ml-60 font-weight-bolder" value=""/>
                     </div>
                     <div class="wrap-infocart mar-t5">
                         <span>Họ tên người đặt: </span>
                         <input name="full_name" type="text" class="ip-cart ml-91" placeholder="Nhập họ tên người nhận" value=""/>
                     </div>
                     <div class="wrap-infocart mar-t5">
                         <span>Địa chỉ: </span>
                         <input name="address" type="text" class="ip-cart ml-158" placeholder="Nhập địa chỉ nhận hàng" value=""/>
                     </div>
                     <div class="wrap-infocart mar-t5">
                         <span>Email: </span>
                         <input name="email" type="email" class="ip-cart ml-166" placeholder="Nhập email người nhận" value=""/>
                     </div>
                     <div class="wrap-infocart mar-t5">
                         <span>Điện thoại: </span>
                         <input name="phone" type="text" class="ip-cart ml-134" placeholder="Nhập số điện thoại người nhận" value=""/>
                     </div>
                    
                 </div>
             </div>
                </form>

                <div class="card mt-4 mb-4">
                 <div class="card-header cart text-primary fw-bold">Phương thức thanh toán</div>
                 <div class="card-body">
                     <div class="payment-option">
                         <input class="form-check-input" type="radio" name="payment" id="inlineRadio1" value="1" checked>
                         <label for="inlineRadio1">Thanh toán khi nhận hàng</label>
                     </div>
                     <div class="payment-option">
                         <input class="form-check-input" type="radio" name="payment" id="inlineRadio2" value="2">
                         <label class="form-check-label" for="inlineRadio2">Chuyển khoản ngân hàng</label>
                     </div>
                     <div class="payment-option">
                         <input class="form-check-input" type="radio" name="payment" id="inlineRadio3" value="3">
                         <label class="form-check-label" for="inlineRadio3">Thanh toán qua Momo</label>
                     </div>
                 </div>
             </div>


                <div class="container">
                    <div class="row">
                      <div class="col-md-8">
                        <table class="table" style="">
                          <thead>
                            <tr>
                              
                              <th scope="col">Sản phẩm</th>
                              <th scope="col">Hình ảnh</th>
                              <th scope="col">Size</th>
                              <th scope="col">Giá</th>
                              <th scope="col">Số lượng</th>
                              
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                             
                              <td>Tên sản phẩm</td>
                              <td><img src="" alt="Hình ảnh sản phẩm" ></td>
                              <td>Size</td>
                              <td>Giá sản phẩm</td>
                              <td><input type="number" value="1" class="form-control"></td>
                              
                            </tr>
                            
                          </tbody>
                        </table>
                      </div> 
                      <div class="col-md-4">
                        <br> <br>
                        <ul class="list-group">
                          <li class="list-group-item">Tổng sản phẩm: <span class="float-right">X </span></li>
                          <li class="list-group-item">Tổng giá: <span class="float-right">Y đồng</span></li>
                          
                        </ul>
                          
                      </div>
                    </div>
                </div>
                
                  <button type="submit" class="btn btn-success btn-block">Hoàn Tất Thanh Toán</button>
                
              </div>
            </div>
          </div> <br> <br>






        <!-- =============================================== FOOTER ================================================= -->
        <footer>
                <div class="container text-center">
                    <div class="row align-items-start">
                      <div class="col chinhsach">
                        <h4>Hỗ Trợ Khách Hàng</h4>
                        <p>Email: duan1shn@fpt.edu.vn</p>
                        <p> Hotline: 0123456789</p>
                        <p>Địa chỉ: Cổng số 1, Tòa nhà FPT Polytechnic, <br>
                        13 phố Trịnh Văn Bô, phường Phương Canh,<br> quận Nam Từ Liêm, TP Hà Nội</p>
                      </div>
                      <div class="col chinhsach">
                        <h4>Hướng Dẫn</h4>
                        <p>Hướng dẫn mua hàng</p>
                        <p>Phương thức thanh toán</p>
                        <p>Chính Sách Vận Chuyển</p> 
                        <p>Chính sách đổi trả</p>
                      </div>
                      <div class="col chinhsach">
                        <h4>Tài khoản của bạn</h4>
                        <p>Cập nhật tài khoản</p>
                        <p>Giỏ hàng</p>
                        <p>Lịch sử giao dịch</p>
                        <p>Kiểm tra đơn hàng</p>
                      </div>
                    </div>
                </div>
        </footer>
        <style>
     /* Style for the card containing the "Thông tin đặt hàng" section */
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
</body>
</html>