 <div class="BT _BT4">
    <h1 class="_BT-stital">Tính Diện Tích</h1>
    <form action="" method="post" class="form-Bt">
        <div class="form-input">
        
            <label for="num1" class="_BT-label-number">Nhập r bán kính</label>
            <input type="text" name="num1" id="num1" ><br>

            <label for="num2" class="_BT-label-number">Nhập cd:</label>
            <input type="text" name="num2" id="num2" ><br>

            <label for="num3" class="_BT-label-number">Nhập cr:</label>
            <input type="text" name="num3" id="num3" ><br>
        </div>
        <div class="_BT-form-label">
            <label class="_BT-label-number-lb1"><p>r: (S=R^{2} .\pi)</p></label>
            <label class="_BT-label-number-lb2"><p>cd,cr: (S=cd*cr)</p></label>
            <label class="_BT-label-number-lb3"><p>cr: (S=cr*cr)</p></label>
        </div>
        <div class="_BT-button-setup">
            <input type="submit" name="hinhtron" value="hình tròn" class="btn btn-outline-secondary _BT-button-setup">
            <input type="submit" name="hinhvuong" value="hình vuông" class="btn btn-outline-secondary _BT-button-setup">
            <input type="submit" name="hinhchunhat" value="hình chữ nhật" class="btn btn-outline-secondary _BT-button-setup">
        </div>  
    </form>
 </div>   

<?php
    $hung ="";
    if (isset($_POST['hinhtron'])) {
        $hung=performOperation('hinhtron');
    } elseif (isset($_POST['hinhvuong'])) {
        $hung=performOperation('hinhvuong');
    } elseif (isset($_POST['hinhchunhat'])) {
        $hung=performOperation('hinhchunhat');
    } 
    // Hàm tính diện tích hình tròn
    function calculateCircleArea() {
        $r = $_POST['num1'];

        $resust = '';
        if (is_numeric($r)){
            $pi = 3.14159265359;
            // Tính diện tích
            $area = $pi * $r * $r;
            $resust = "Dien tích của bán kính R($r) là $area";
        }
        return $resust;
    }
    // Hàm tính diện tích hình chữ nhật
    function calculateRectangleArea() {
        $cd = $_POST['num2'];
        $cr = $_POST['num3'];
        
        $resust = '';
        if (is_numeric($cd) && is_numeric($cr)){
            $area = $cd * $cr;
            $resust = "Dien tích hình chữ nhật là $area";
        }
        return $resust;
    }
    // Hàm tính diện tích hình vuông
    function calculateSquareArea() {
        $width = $_POST['num2'];
        $resust = '';
        if (is_numeric($width)){
            $area = $width * $width;
            $resust = "Dien tích hình vuông là $area";
        } 
        return $area;
    }
    function performOperation($operator) {
        $resust = '';
        switch ($operator) {
            case 'hinhtron':
                $resust = calculateCircleArea();
                break;
            case 'hinhvuong':
                $resust = calculateSquareArea() ;
                break;
            case 'hinhchunhat':
                $resust = calculateRectangleArea();
                break;
        }
        return $resust;        
    }
?>
<div class="BT-result">
    <label class="BT-result-tital"><h4>Kết quả</h4></label>
    <label class="BT-result-label"><?php echo $hung; ?></label>
</div>