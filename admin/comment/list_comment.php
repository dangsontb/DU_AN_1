<main class="container_">
    <h3 class="alert alert-primary text-primary"> Danh sách bình luận</h3>  
    <table class="table table-hover">
        <thead  class="table-secondary" >
            <tr>
                <th></th>
                <th>Sản phẩm</th>
                <th>Số bình luận</th>
                <th>Mới nhất </th>
                <th>Cũ nhất</th>
                <th></th>
            </tr>
        </thead>
        <tbody>         
            <?php
                foreach($list_comment as $comment):
            ?> 
                <tr>
                    <td></td>
                    <td><?= $comment['name'] ?></td>
                    <td><?= $comment['comment_count'] ?></td>
                    <td><?= $comment['earliest_comment_date'] ?></td>
                    <td><?= $comment['lastest_comment_date'] ?></td>
           
                    <td>
                        <a href="?act=comment_detail&product_id=<?= $comment['product_id'] ?>" class="btn btn-primary fw-medium">Chi tiết  <i class="fas fa-info-circle"></i></a> 
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
                    <a class="page-link " href="?act=list_comment&page=<?= $prev_page ?>" aria-label="Previous">
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
                    <a class="page-link <?= $page == $i ? 'active' : '' ?>" href="?act=list_comment&page=<?= $i ?>"><?= $i ?></a>
                    </li>
                <?php } ?>

                <li class="page-item">
                    <?php 
                    if(isset($page)  && isset($total_pages) && $total_pages > $page  ){
                        if($page <  $total_pages){
                            $next_page = $page + 1;
                        } 
                                    
                    ?> 
                        <a class="page-link" href="?act=list_comment&page=<?= $next_page ?>" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        </a>
                    <?php }?>
                </li>
            </ul>
        </div>
</main>


