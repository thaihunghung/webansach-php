 <div class="BT _BT">
    <h1 class="_BT-stital">Giải Chương trình bậc II</h1>
    <form action="" method="post" class="form-Bt">
        <div class="form-input">
            <label for="num1" class="_BT-label-number">Nhập a:</label>
            <input type="text" name="num1" id="num1" required><br>

            <label for="num2" class="_BT-label-number">Nhập b:</label>
            <input type="text" name="num2" id="num2" required><br>

            <label for="num3" class="_BT-label-number">Nhập c:</label>
            <input type="text" name="num3" id="num2" required><br>
        </div>
        <div class="_BT-form-label">
            <label class="_BT-label-number"><p> ax^2+bx+c=0</p></label>
        </div>
        <div class="_BT-button-setup">
            <input type="submit" name="result" value="giải phương trình" class="btn btn-outline-secondary _BT-button-setup">
        </div>  
    </form>
 </div>   

<?php
    $hung ="";
    if (isset($_POST['result'])) {
        $hung= calculate();
    } 
    function calculate() {
        $a = $_POST['num1'];
        $b = $_POST['num2'];
        $c = $_POST['num3'];
        $resust = '';
        if (is_numeric($a) && is_numeric($b) && is_numeric($c)) {
            if ($a == 0) {
                if ($b == 0) {
                    $resust= ("Phương trình vô nghiệm!");
                } else {
                    $resust= ("Phương trình có một nghiệm: " . "x = " . (- $c / $b));
                }
                return;
            }
            $delta = $b * $b - 4 * $a * $c;
            $x1 = "";
            $x2 = "";
            if ($delta > 0) {
                $x1 = (- $b + sqrt ( $delta )) / (2 * $a);
                $x2 = (- $b - sqrt ( $delta )) / (2 * $a);
                $resust= ("Phương trình có 2 nghiệm là: " . "x1 = " . $x1 . " và x2 = " . $x2);
            } else if ($delta == 0) {
                $x1 = (- $b / (2 * $a));
                $resust= ("Phương trình có nghiệm kép: x1 = x2 = " . $x1);
            } else {
                $resust= ("Phương trình vô nghiệm!");
            }    
        }
        return $resust;
    }
?>
<div class="BT-result">
    <label class="BT-result-tital"><h4>Kết quả</h4></label>
    <label class="BT-result-label"><?php echo $hung; ?></label>
</div>