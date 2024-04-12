<div class="luachon w-25 mb-2">           
    <select class="form-select  align-self-end select-filter" id="select-filter" aria-label="Default select example"
    onchange="statusFilter()">
        <option value="0">---Lọc theo---</option>
        <option value="1" <?= (isset($_GET['status_id']) && $_GET['status_id']=='1') ? 'selected':''?>>Chưa giao</option>
        <option value="2" <?= (isset($_GET['status_id']) && $_GET['status_id']=='2') ? 'selected':''?>>Đang giao</option>
        <option value="3" <?= (isset($_GET['status_id']) && $_GET['status_id']=='3') ? 'selected':''?>>Giao thành công</option>
    </select>
</div>