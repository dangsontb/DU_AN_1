<div class="luachon w-25 mb-2">           
    <select class="form-select  align-self-end select-filter" id="select-filter" aria-label="Default select example"
    onchange="commentFilter()">
    <option value="0">---Lọc theo---</option>
        <option value="<?=$product['product_id']?>&start=1" <?= (isset($_GET['start']) && $_GET['start']=='1') ? 'selected':''?>>1 Sao</option>
        <option value="<?=$product['product_id']?>&start=2" <?= (isset($_GET['start']) && $_GET['start']=='2') ? 'selected':''?>>2 Sao</option>
        <option value="<?=$product['product_id']?>&start=3" <?= (isset($_GET['start']) && $_GET['start']=='3') ? 'selected':''?>>3 Sao</option>
        <option value="<?=$product['product_id']?>&start=4" <?= (isset($_GET['start']) && $_GET['start']=='2') ? 'selected':''?>>4 Sao</option>
        <option value="<?=$product['product_id']?>&start=5" <?= (isset($_GET['start']) && $_GET['start']=='3') ? 'selected':''?>>5 Sao</option>
    </select>
</div>