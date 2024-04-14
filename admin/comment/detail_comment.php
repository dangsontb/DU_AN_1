<?php

?>
<main class="container_">
    <h3 class="alert alert-primary text-primary text-center"> Chi tiết bình luận   </h3>  
    
    <h4 class="text-info">Sản phẩm : <?=$product['name'] ?></h4>

    <form action="index.php?act=delete_comment_by_checkbox" method="post">
        <table class="table table-hover">
            <thead  class="table-secondary" >
                <tr>
                    <th></th>
                    <th>Khách hàng</th>
                    <th>Đánh giá</th>                                                                                                      </th>
                    <th>Nội dung</th>                                                                                                      </th>
                    <th>Ngày bình luận</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>         
                <?php
                    foreach($list_comment as $comment) :
                        // echo "<pre>";
                        // var_dump($comment); 
                ?> 
                    <tr>
                        <td> <input class="form-check-input" name="comments_id[]" type="checkbox" value="<?= $comment['comment_id'] ?>" ></td>
                        <td><?= $comment['user_name']?></td>
                        <td><?= $comment['rating']?> sao</td>
                        <td><?= $comment['content']?></td>
                        <td><?= $comment['date']?></td>
            
                        
                        <td>
                            <a href="index.php?act=delete_comment&comment_id=<?= $comment['comment_id'] ?>" class="btn btn-outline-danger fw-medium" onclick="return confirm('Xác nhận xóa')"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>    
                <?php endforeach?>  
            </tbody>   
        </table>
        <div aria-label="Page navigation example" class="chuyentrang">
            <ul class="pagination justify-content-center" >
                <li class="page-item">
                    <?php 
                    if(isset($page) && $page > 1){
                        $prev_page = $page - 1;
                    ?>
                    <a class="page-link " href="?act=comment_detail&product_id=<?=$product['product_id'] ?>&page=<?= $prev_page ?>" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    </a>
                    <?php }?>
                </li>
                
                <?php
                for ($i = 1; $i <= $total_pages; $i++) {
                    // Thiết lập trang mặc định nếu không có tham số trang được truyền hoặc tham số trang trống
                    $page = isset($page) && !empty($page) ? $page : 1;
                ?>

                    <li class="page-item">
                    <a class="page-link <?= $page == $i ? 'active' : '' ?>" href="?act=comment_detail&product_id=<?=$product['product_id'] ?>&page=<?= $i ?>"><?= $i ?></a>
                    </li>
                <?php } ?>

                <li class="page-item">
                    <?php 
                    if(isset($page)  && isset($total_pages) && $total_pages > $page  ){
                        if($page <  $total_pages){
                            $next_page = $page + 1;
                        } 
                                    
                    ?> 
                        <a class="page-link" href="?act=comment_detail&product_id=<?=$product['product_id'] ?>&page=<?= $next_page ?>" aria-label="Next">
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



