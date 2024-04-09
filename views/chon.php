<div class="luachon">           
    <select class="form-select  align-self-end select-filter" id="select-filter" aria-label="Default select example"
    onchange="changeFilter()">
        <option value="0">---Lọc theo---</option>
        <option value="productOld" <?= (isset($_GET['act']) && $_GET['act']=='productOld') ? 'selected':''?>>Sản phẩm cũ</option>
        <option value="priceAsc" <?= (isset($_GET['act']) && $_GET['act']=='priceAsc') ? 'selected':''?>>Giá tăng dần</option>
        <option value="priceDesc" <?= (isset($_GET['act']) && $_GET['act']=='priceDesc') ? 'selected':''?>>Giá giảm dần</option>
    </select>
</div>
