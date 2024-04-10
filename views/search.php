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
                    <?php include 'chon.php'?>

                    <!-- ====================================== SẢN PHẨM ======================================= -->
                    <div class="row row-cols-1 row-cols-md-3 g-4 sanpham">

                        <?php
                          foreach ($list_product as $sp) {
                            extract($sp);
                            $link_product="index.php?act=product_detail&product_id=".$product_id;
                            $hinh = $GLOBALS['path_img'].$image;
                            echo '<div class="col name">
                                      <a href="'.$link_product.'">
                                        <div class="card h-100 item">
                                          <img src="'.$hinh.'" class="card-img-top" alt="...">
                                          <div class="card-body">
                                            <h6 class="card-title text-left">'.$name.'</h6>
                                            <p class="card-text text-left text-danger fw-semibold gia_ht">'.$price_sale =number_format(( $price - ( $price *  $sale )/100)).' VNĐ</p>
                                            <div class="gia">
                                              <del>'.$price = number_format($price).' VNĐ</del>
                                              <span class="bg-danger text-light rounded-circle giamgia">'.$sale.'%</span>
                                            </div>
                                            <a href="#" class=" muahang">
                                              <i class="fas fa-cart-plus fa-lg"></i>
                                            </a>
                                          </div>
                                        </div>
                                      </a>
                                    </div>';
                          }
                        ?>
                  
          
                    </div>

                    <!-- ============================================ CHUYỂN TRANG ============================================== -->
                    <div aria-label="Page navigation example" class="chuyentrang">
                        <ul class="pagination justify-content-center" >
                          <li class="page-item">
                            <?php 
                              if(isset($page) && $page > 1){
                                  $prev_page = $page - 1;
                            ?>
                              <a class="page-link " href="?act=keyword&keyword=<?=$keyw?>&page=<?= $prev_page ?>" aria-label="Previous">
                              <span aria-hidden="true">&laquo;</span>
                              </a>
                            <?php }?>
                          </li>
                          <?php 
                         
                            for ($i=1; $i <= $total_pages ; $i++) {

                              $page = isset($page) && !empty($page) ? $page : 1;
                          ?>
                          <li class="page-item "><a class="page-link <?= $page == $i ? 'active' : ''  ?>" 
                            href="?act=keyword&keyword=<?=$keyw?>&page=<?=$i?>"><?=$i?></a></li>
                          <?php } ?>

                          <li class="page-item">
                            <?php 
                              if(isset($page)  && isset($total_pages) && $total_pages > $page  ){
                                if($page <  $total_pages){
                                    $next_page = $page + 1;
                                }                  
                            ?> 
                              <a class="page-link" href="?act=keyword&keyword=<?=$keyw?>&page=<?= $next_page ?>" aria-label="Next">
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
