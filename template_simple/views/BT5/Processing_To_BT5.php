 <div class="BT _BT4">
    <h1 class="_BT-stital">Tính Diện Tích</h1>
    <form action="" method="post" class="form-Bt">
        <div class="form-input">
        
            <label for="num1" class="_BT-label-number">Nhập a:</label>
            <input type="text" name="num1" id="num1" required><br>

            <label for="num2" class="_BT-label-number">Nhập b:</label>
            <input type="text" name="num2" id="num2" required><br>

            <label for="num3" class="_BT-label-number">Nhập c:</label>
            <input type="text" name="num3" id="num3" required><br>
        </div>
        <div class="_BT-form-label">
            <label class="_BT-label-number-lb1"><p>Tam giác cạnh a, b, c</p></label>
        </div>
        <div class="_BT-button-setup">
            <input type="submit" name="kiemtra" value="Kiểm tra" class="btn btn-outline-secondary _BT-button-setup">
        </div>  
    </form>
 </div>   

<?php
    $hung ="";
    if (isset($_POST['kiemtra'])) {
        $hung= checkTriangleType();
    } 
    // Hàm kiểm tra loại tam giác
    function checkTriangleType() {
        $a = $_POST['num1'];
        $b = $_POST['num2'];
        $c = $_POST['num3'];
        $resust ="";
        $kt = "";
        if ($a <= 0 || $b <= 0 || $c <= 0) {
            $kt = "Không phải tam giác";
        }
        if ($a + $b <= $c || $a + $c <= $b || $b + $c <= $a) {
            $kt = "Không phải tam giác";
        }
    
        if ($a == $b && $b == $c) {
            $resust = "Tam giác đều";
        } elseif ($a == $b || $b == $c || $c == $a) {
            $resust = "Tam giác cân";
        } elseif ($a * $a + $b * $b == $c * $c || $b * $b + $c * $c == $a * $a || $c * $c + $a * $a == $b * $b) {
            $resust = "Tam giác vuông";
        } else {
            $resust = "Tam giác nhọn hoặc tù";
        }
        if ($kt =="Không phải tam giác") {
            $resust = $kt;
            return $resust;
        } else {
            return $resust;
        } 
    }
?>
<div class="BT-result">
    <label class="BT-result-tital"><h4>Kết quả</h4></label>
    <label class="BT-result-label"><?php echo $hung; ?></label>
</div>