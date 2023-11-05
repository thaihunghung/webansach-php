
 <div class="BT _BT">
    <h1 class="_BT-stital">Giải Chương trình bậc I</h1>
    <form action="" method="post" class="form-Bt">
        <div class="form-input">
            <label for="num1" class="_BT-label-number">Nhập a:</label>
            <input type="text" name="num1" id="num1" required><br>

            <label for="num2" class="_BT-label-number">Nhập b:</label>
            <input type="text" name="num2" id="num2" required><br>
        </div>
        <div class="_BT-form-label">
            <label class="_BT-label-number"><p>ax + b = 0</p></label>
        </div>
        <div class="_BT-button-setup">
            <input type="submit" name="result" value="giải phương trình" class="btn btn-outline-secondary _BT-button-setup">
        </div>  
    </form>

</div> 
    

    <?php
    $hung = '';

    if (isset($_POST['result'])) {
       $hung= calculate();
    } 
    function calculate() {
        $num1 = isset($_POST['num1'] ) ? $_POST['num1'] : ' ';
        $num2 = isset($_POST['num2'] ) ? $_POST['num2'] : ' ';
        $output ="";
        if (is_numeric($num1) && is_numeric($num2)) {
            if ($num1 == 0) {
                if ($num2 == 0) {
                    $output ="Phương trình vô số nghiệm";
                } else {
                    $output ="Phương trình vô nghiệm";
                }
            } else {
                $x = -($num2 / $num1);
                $output ="Nghiệm của phương trình là x = $x";
            }
            } else {
                echo "<p>Vui lòng nhập hai số hợp lệ.</p>";
        }
        return $output;
    }
?>

<div class="BT-result">
    <label class="BT-result-tital"><h4>Kết quả</h4></label>
    <label class="BT-result-label"><?php echo $hung; ?></label>
</div>

