<main class="container_">
        
    <h3 class="alert alert-primary text-primary">Thống kê : <?=$title ?> </h3>
    <table class="table table-hover text-center">
        <thead  class="table-secondary" >
            <tr>
                
                <th>Mã Sản Phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Ảnh sản phẩm</th>
                <th>Đơn giá</th>
                <th>Số lượng bill</th>
                <th>Số lượng mua </th>
                <th>Thành tiền</th>
            </tr>
        </thead>
        <tbody>
            <?php  foreach($list_selling_products as $item) : 
                    $img= '../'.$GLOBALS['path_img'].$item['image'];
            ?>
            <tr>
                <td><?= $item['id_product'] ?></td>
                <td><?= $item['name'] ?></td>
                <td> <img src="<?=$img ?>" class="img-thumbnail" width="60px" alt="..."> </td>
                <td><?= number_format($item['dongia']) ?></td>
                <td><?= $item['luotmua'] ?></td>
                <td><?= $item['soluongmua'] ?></td>
                <td><?= number_format($item['tonggia']) ?></td>
            </tr>    
            <?php endforeach ?>    
        </tbody>
        
    </table>
</main>