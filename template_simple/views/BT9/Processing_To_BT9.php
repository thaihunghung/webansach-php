 <div class="BT _BT">
    <h1 class="_BT-stital">Tìm kiếm số nguyên tố</h1>
    <form action="" method="post" class="form-Bt">
        <div class="form-input">
            <label for="num1" class="_BT-label-number">Nhập vào 1 số:</label>
            <input type="text" name="num1" id="num1" required><br>
        </div>
        <div class="_BT-form-label">
            <label class="_BT-label-number"><p> Số nguyên tố</p></label>
        </div>
        <div class="_BT-button-setup">
            <input type="submit" name="songuyento" value="Tìm kiếm số nguyên tố" class="btn btn-outline-secondary _BT-button-setup">
        </div>  
    </form>
 </div>   

<?php
    $hung ="";
    if (isset($_POST['songuyento'])) {
        $hung= search();
    } 
    function isPrime($number) {
        if ($number <= 1) {
            return false;
        }
        for ($i = 2; $i * $i <= $number; $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }
        return true;
    }
    function search() {
        $a = $_POST['num1'];
        
        $resust = '';
        if (is_numeric($a)){
            if (isPrime($a)) {
                $resust = "$a là số nguyên tố.";
            } else {
                $resust = "$a không là số nguyên tố.";
            }
        }
        return $resust;
    }
?>
<div class="BT-result">
    <label class="BT-result-tital"><h4>Kết quả</h4></label>
    <label class="BT-result-label"><?php echo $hung; ?></label>
</div>