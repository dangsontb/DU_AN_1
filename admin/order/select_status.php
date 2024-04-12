<div class="luachon w-25 mb-2">           
    <select class="form-select  align-self-end select-filter" id="select-filter" aria-label="Default select example"
    onchange="statusFilter()">
        <option value="0">---Lọc theo---</option>
        <option value="1" <?= (isset($_GET['status_id']) && $_GET['status_id']=='1') ? 'selected':''?>>1 Sao</option>
        <option value="2" <?= (isset($_GET['status_id']) && $_GET['status_id']=='2') ? 'selected':''?>>2 Sao</option>
        <option value="3" <?= (isset($_GET['status_id']) && $_GET['status_id']=='3') ? 'selected':''?>>3 Sao</option>
        <option value="4" <?= (isset($_GET['status_id']) && $_GET['status_id']=='2') ? 'selected':''?>>4 Sao</option>
        <option value="5" <?= (isset($_GET['status_id']) && $_GET['status_id']=='3') ? 'selected':''?>>5 Sao</option>
    </select>
</div>