
        <!-- main -->
        <main class="container_">
        
                <h3 class="alert alert-primary text-primary"> Danh sách Sản phẩm</h3>
                <form action="index.php?act=delete_product_by_checkbox" method="post">
                <table class="table table-hover">
                    <thead  class="table-secondary" >
                        <tr>
                            <th></th>
                            <th>ID SP</th>
                            <th>Tên SP</th>
                            <th>Giá</th>
                            <th>Hình ảnh</th>
                            <th>Sale</th>
                            <th>Số lượng</th>
                            <th>Ngày nhập</th>
                            
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($list_product as $product) : 
                            extract($product); 
                            $price = number_format("$price",0,",",".");;
                            $img= '../'.$GLOBALS['path_img'].$image;
                        ?>
                        <tr class="">
                            <td><input class="form-check-input" name="products_id[]" value="<?= $product_id ?>" type="checkbox"></td>
                            <td><?= $product_id?></td>
                            <td> <?= $name?></td>
                            <td> <?= $price?> </td>
                            <td> <img src="<?=$img ?>" class="img-thumbnail" width="60px" alt="..."> </td>
                            <td> <?= $sale?> %</td>
                            <td> <?= $product_quantity?> </td>
                            <td> <?= $create_at?> </td>
                            
                            <td>
                                <a href="index.php?act=edit_product&product_id=<?= $product_id ?>" class="btn btn-primary fw-medium"><i class="far fa-edit"></i></a>
                                <a href="index.php?act=delete_product&product_id=<?= $product_id ?>" class="btn btn-outline-danger fw-medium" onclick="return confirm('Xác nhận xóa')"><i class="fas fa-trash"></i></a>
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
                        <a class="page-link " href="?act=list_product&page=<?= $prev_page ?>" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                        <?php }?>
                        </li>
                        <?php if(isset($total_pages)): ?>
                            <?php for($i=1 ;  $i <= $total_pages; $i++) : ?>
                            <li class="page-item"><a class="page-link <?= $page == $i ? 'active' : ''  ?>" href="?act=list_product&page=<?= $i ?>"><?= $i?></a></li>
                            <!-- <li class="page-item"><a class="page-link" href="index.php?act=list_brand&page=2">2</a></li>
                            <li class="page-item"><a class="page-link" href="index.php?act=list_brand&page=3">3</a></li> -->
                            
                            <?php endfor ?>
                        <?php endif ?>
                        <li>
                        <?php 
                            if(isset($page)  && isset($total_pages) && $total_pages > $page ){
                                if($page <  $total_pages){
                                    $next_page = $page + 1;
                                } 
                                            
                        ?> 
                            <a class="page-link" href="?act=list_product&page=<?= $next_page ?>" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            </a>
                        <?php }?>
                        </li>
                    </ul>
                </div>
               
                <div class="form-group">
                    <button name="" id="btnclick" class="btn btn-outline-primary fw-medium">Chọn tất cả</button>
                    <button type="reset"  class="btn btn-outline-info fw-medium">Bỏ chọn tất cả</button>
                    <input type="submit" name="delete_btn"  class="btn btn-outline-danger fw-medium" value="Xóa mục đã chọn">
                    <a href="index.php?act=add_product"  class="btn btn-outline-success fw-medium">Nhập thêm</a>
                </div>
                </form>
              
        </main>
        <script>
          
          document.getElementById('btnclick').addEventListener('click',  function(event) {
              event.preventDefault();
              
              console.log("đã check");
              var checkboxes = document.querySelectorAll('.form-check-input');
              console.log(checkboxes)
              for (var i = 0; i < checkboxes.length; i++) {
                  checkboxes[i].checked = true;
                
              }
          });        
      </script>
