<main class="container">

          <!-- =============================================================== CHÍNH SÁCH ========================================================== -->
            <div class="text-center camket">
                <div class="row align-items-start">
                  <div class="col">
                    <i class="fas fa-rocket fa-rotate-270 fa-lg logo" style="color: #E40001;"></i>
                    <h4 class=" ">Giao hàng nhanh 1-2 ngày</h4>
                    <span>Miễn Ship khi chuyển khoản trước</span>
                  </div>
                  <div class="col">
                    <i class="fas fa-medal fa-lg logo" style="color: #E40001;"></i>
                    <h4 class="">Cam kết chất lượng</h4>
                    <span>Hàng chính hãng 100%</span>
                  </div>
                  <div class="col">
                    <i class="fas fa-handshake fa-lg logo" style="color: #E40001;"></i>
                    <h4 class="">Hỗ trợ mua hàng</h4>
                    <span>Tư vấn tận tình, hỗ trợ đổi hàng</span>
                  </div>
                </div>
              </div>
           </div>

           <!-- ============================================================= BOXLEFT============================================================= -->
           <?php include "boxleft.php";?>
            
                <!-- ============================================================== BOXRIGHT ================================================================ -->
                <div class="boxright">

                  <!-- =================================== LỰA CHỌN ===================================== -->
                    <?php include "chon.php"?>
                    <!-- ====================================== SẢN PHẨM ======================================= -->
                    <div class="row row-cols-1 row-cols-md-3 g-4 sanpham">

                        <?php
                          foreach ($spnew as $sp) {
                            extract($sp);
                            $link_product="index.php?act=product_detail&product_id=".$product_id;
                            $hinh = $path_img.$image;
                            $sale_price=$price - ( $price *  $sale )/100;
                            $price_sale =number_format(( $price - ( $price *  $sale )/100));
                            echo '<div class="col name">
                                      <a href="'.$link_product.'">
                                        <div class="card h-100 item">
                                          <img src="'.$hinh.'" class="card-img-top" alt="...">
                                          <div class="card-body">
                                            <h6 class="card-title text-left">'.$name.'</h6>
                                            <p class="card-text text-left text-danger fw-semibold gia_ht">'.$price_sale.' VNĐ</p>
                                            <div class="gia">
                                              <del>'.$price = number_format($price).' VNĐ</del>
                                              <span class="bg-danger text-light rounded-circle giamgia">'.$sale.'%</span>
                                            </div>
                                            <form action="index.php?act=addtocart" method="post">
                                                <input type="hidden" name="product_id" value="'.$product_id.'">
                                                <input type="hidden" name="tensp" value="'.$name.'">
                                                <input type="hidden" name="gia" value="'.$sale_price.'">
                                                <input type="hidden" name="hinh" value="'.$image.'">
                                                <button type="submit" class=" muahang" name="addtocart" style="background-color: white; border:none"><i class="fas fa-cart-plus fa-lg"></i></button>
                                            </form>
                                          </div>
                                        </div>
                                      </a>
                                    </div>';
                          }
                        ?>
                       
                    </div>
                    <!-- ============================================ CHUYỂN TRANG ============================================== -->

                   <style>
                      p{
                        background-color: white;
                        border: none;
                      }
                   </style>

                    <div aria-label="Page navigation example" class="chuyentrang">
                      <ul class="pagination justify-content-center" >
                        <li class="page-item">
                        <?php 
                          if(isset($_GET['trang']) && $_GET['trang'] > 1){
                              $prev_page = $_GET['trang'] - 1;
                        ?>
                          <a class="page-link " href="?trang=<?= $prev_page ?>" aria-label="Previous">
                          <span aria-hidden="true">&laquo;</span>
                          </a>
                        <?php }?>
                        </li>
                        <?php 
                        $tong_trang =ceil($tong_sanpham/9);
                        for ($i=1; $i <= $tong_trang ; $i++) {
                            if(empty($_GET['trang'])  ){
                              $page =1;
                            }else{
                              $page = $_GET['trang'];
                            }
                          ?>
                          <li class="page-item "><a class="page-link <?= $page == $i ? 'active' : ''  ?>" href="?trang=<?=$i?>"><?=$i?></a></li>
                        <?php } ?>
                        

                        <li class="page-item">
                        <?php 
                            if(isset($_GET['trang'])  && isset($tong_trang) && $tong_trang > $_GET['trang'] ){
                                if($_GET['trang'] <  $tong_trang){
                                    $next_page = $_GET['trang'] + 1;
                                } 
                                            
                        ?> 
                            <a class="page-link" href="?trang=<?= $next_page ?>" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            </a>
                        <?php }?>
                        </li>
                      </ul>
                    </div>
                </div>
            </div>
        </div>
      </main>

