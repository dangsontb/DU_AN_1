<main class="container_">
        
    <h3 class="text-primary">Thống kê : <?=$title ?> </h3>
    <table class="table table-hover text-center">
        <thead  class="table-secondary" >
            <tr>
                
                <th>Mã Brand</th>
                <th>Tên Brand</th> 
               <!-- <th>Ảnh sản phẩm</th> -->
                <!-- <th>Đơn giá</th> -->
                <th>Số lượng bill</th>
                <th>Số lượng mua </th>
                <th>Thành tiền</th>
            </tr>
        </thead>
        <tbody>
            <?php  foreach($list as $item) : 
                    // $img= '../'.$GLOBALS['path_img'].$item['image'];
            ?>
            <tr>
                <td><?= $item['brand_id'] ?></td>
                <td><?= $item['brand_name'] ?></td>
                <!-- <td> <img src="<?=$img ?>" class="img-thumbnail" width="60px" alt="..."> </td> -->
                <!-- <td><?= number_format($item['luotmua']) ?></td> -->
                <td><?= $item['luotmua'] ?></td>
                <td><?= $item['soluongmua'] ?></td>
                <td><?= number_format($item['tonggia']) ?></td>
            </tr>    
            <?php endforeach ?>    
        </tbody>
        
    </table>
    <a href="?act=bieudo_brand" class="btn btn-success">Biểu đồ</a>
    
</main>