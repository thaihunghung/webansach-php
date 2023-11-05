 <div class="BT _BT">
    <h1 class="_BT-stital">Tìm kiếm số nguyên tố</h1>
    <form action="" method="post" class="form-Bt">
        <div class="_BT-button-setup" style="margin-top: 20px;">
            <input type="submit" name="ngayhientai" value="ngày tháng hiện tại" class="btn btn-outline-secondary _BT-button-setup">
        </div>  
    </form>
 </div>   

<?php
    $hung ="";
    if (isset($_POST['ngayhientai'])) {
        $hung= Today();
    } 
    function Today() {
        $resust ="";
        $ngayHienTai = date("d"); // Lấy ngày hiện tại
        $thangHienTai = date("m"); // Lấy tháng hiện tại
        $resust = "Hôm nay là ngày $ngayHienTai tháng $thangHienTai";
        return $resust;
    }
?>
<div class="BT-result">
    <label class="BT-result-tital"><h4>Kết quả</h4></label>
    <label class="BT-result-label"><?php echo $hung; ?></label>
</div>