

        <!-- main -->
        <main class="container_">
        
                <h3 class="alert alert-primary text-primary"> Danh sách thương hiệu</h3>
                <form action="index.php?act=delete_brand_checkbox" method="post">
                <table class="table table-hover">
                    <thead  class="table-secondary" >
                        <tr>
                            <th></th>
                            <th>Mã Brand</th>
                            <th>Tên Brand</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($list_brand as $brand) : extract($brand); ?>
                        <tr>
                            <td><input name="brands_id[]" value="<?= $brand_id ?>" class="form-check-input" type="checkbox"></td>
                            <td><?= $brand_id ?></td>
                            <td><?= $brand_name?> </td>
                            <td>
                                <a href="index.php?act=edit_brand&id=<?=$brand_id?>" class="btn btn-outline-primary fw-medium "><i class="far fa-edit"></i></a>
                                <a href="index.php?act=delete_brand&id=<?=$brand_id?>" class="btn btn-outline-danger fw-medium" onclick="return confirm('Xác nhận xóa')"><i class="fas fa-trash"></i></a>
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
                            <a class="page-link" href="index.php?act=list_brand&page=<?= $prev_page ?>" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                            <?php }?>
                            </li>
                            <?php if(isset($show_number_pages)): ?>
                                <?php for($i=1 ;  $i <= $show_number_pages; $i++) : ?>
                                <li class="page-item"><a class="page-link <?= $page == $i ? 'active' : ''  ?>" href="index.php?act=list_brand&page=<?= $i ?>"><?= $i?></a></li>
                                <!-- <li class="page-item"><a class="page-link" href="index.php?act=list_brand&page=2">2</a></li>
                                <li class="page-item"><a class="page-link" href="index.php?act=list_brand&page=3">3</a></li> -->
                               
                                <?php endfor ?>
                            <?php endif ?>
                            <li>
                            <?php 
                                if(isset($page)  && isset($show_number_pages) && $show_number_pages > $page ){
                                    if($page <  $show_number_pages){
                                        $next_page = $page + 1;
                                    }
                                             
                            ?> 
                                <a class="page-link" href="index.php?act=list_brand&page=<?= $next_page ?>" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                </a>
                            <?php }?>
                            </li>
                        </ul>
                    </div>
              
                    <div class="form-group">
                        <button name="" id="btnclick"   class="btn btn-outline-primary fw-medium">Chọn tất cả</button>
                        <button type="reset"  class="btn btn-outline-info fw-medium">Bỏ chọn tất cả</button>
                        <input type="submit" name="delete_btn"  class="btn btn-outline-danger fw-medium" value="Xóa mục đã chọn">
                        <a href="index.php?act=add_brand"  class="btn btn-outline-success fw-medium">Nhập thêm</a>
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
                    if (checkboxes[i].checked) {
                        console.log("đã check: " + checkboxes[i].value);
                        
                    } else {
                        console.log("fail check");
                    }
                }
            });        
</script>
