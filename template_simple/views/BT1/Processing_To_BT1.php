 <div class="BT _BT">
    <h1 class="_BT-stital">Máy Tính Đơn Giản</h1>
    <form action="" method="post" class="form-Bt">
        <div class="form-input">
            <label for="num1" class="_BT-label-number">Nhập số thứ nhất:</label>
            <input type="text" name="num1" id="num1" required><br>

            <label for="num2" class="_BT-label-number">Nhập số thứ hai:</label>
            <input type="text" name="num2" id="num2" required><br>
        </div>
        
        <div class="_BT-button-setup">
            <input type="submit" name="add" value="Cộng" class="btn btn-outline-secondary _BT-button-setup">
            <input type="submit" name="subtract" value="Trừ" class="btn btn-outline-secondary _BT-button-setup">
            <input type="submit" name="multiply" value="Nhân" class="btn btn-outline-secondary _BT-button-setup"> 
            <input type="submit" name="divide" value="Chia" class="btn btn-outline-secondary _BT-button-setup">
        </div>  
    </form>
 </div>   

    <?php
    $hung ='';
    if (isset($_POST['add'])) {
        $hung=performOperation('+');
    } elseif (isset($_POST['subtract'])) {
        $hung=performOperation('-');
    } elseif (isset($_POST['multiply'])) {
        $hung=performOperation('*');
    } elseif (isset($_POST['divide'])) {
        $hung=performOperation('/');
    }

    function performOperation($operator) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $output ="";
        if (is_numeric($num1) && is_numeric($num2)) {
            switch ($operator) {
                case '+':
                    $result = $num1 + $num2;
                    $output= "Tổng của $num1 và $num2 là: $result";
                    break;
                case '-':
                    $result = $num1 - $num2;
                    $output= "Hiệu của $num1 và $num2 là: $result";
                    break;
                case '*':
                    $result = $num1 * $num2;
                    $output= "Tích của $num1 và $num2 là: $result";
                    break;
                case '/':
                    if ($num2 != 0) {
                        $result = $num1 / $num2;
                        $output= "Thương của $num1 và $num2 là: $result";
                    } else {
                        $output= "Không thể chia cho 0.";
                    }
                    break;
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