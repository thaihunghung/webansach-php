 <div class="BT _BT4">
    <h1 class="_BT-stital">Days In Month</h1>
    <form action="" method="post" class="form-Bt">
        <div class="form-input">
        
            <label for="num1" class="_BT-label-number">Nhập tháng:</label>
            <input type="text" name="num1" id="num1" required><br>

            <label for="num2" class="_BT-label-number">Nhập năm:</label>
            <input type="text" name="num2" id="num2" required><br>

        </div>
        <div class="_BT-form-label">
            <label class="_BT-label-number-lb1"><p>Số ngày trong một tháng</p></label>
        </div>
        <div class="_BT-button-setup">
            <input type="submit" name="demsongay" value="Kiểm tra" class="btn btn-outline-secondary _BT-button-setup">
        </div>  
    </form>
 </div>   

<?php
    $hung ="";
    if (isset($_POST['demsongay'])) {
        $hung= getDaysInMonth();
    } 
    // Hàm kiểm tra loại tam giác
    function getDaysInMonth() {
        $a = $_POST['num1'];
        $b = $_POST['num2'];
        $resust ="";
        $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $a, $b);
        $resust ="Tháng $a năm $b có $daysInMonth ngày.";
        return $resust;
    }
?>
<div class="BT-result">
    <label class="BT-result-tital"><h4>Kết quả</h4></label>
    <label class="BT-result-label"><?php echo $hung; ?></label>
</div>