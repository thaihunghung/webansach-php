 <div class="BT _BT4">
    <h1 class="_BT-stital">Bảng cửu chương NC</h1>
    <form action="" method="post" class="form-Bt">
        <div class="form-input">
        
            <label for="num1" class="_BT-label-number">Nhập 1 số</label>
            <input type="text" name="num1" id="num1" required><br>

        </div>
        <div class="_BT-form-label">
            <label class="_BT-label-number-lb1"><p>Bảng cửu chương CN</p></label>
        </div>
        <div class="_BT-button-setup">
            <input type="submit" name="cuuchuong" value="Cửu chương" class="btn btn-outline-secondary _BT-button-setup">
        </div>  
    </form>
 </div>   

<?php
    $resust_multiplication ="";
    $resust_Division ="";
    $hidden="";
    $Up_height = "";
    $Setup_layout = "";
    $result;
    $css_tital= "";
    $temp ="";
    if (isset($_POST['cuuchuong'])) {
        $result =createMultiplicationTable() ;
        $resust_multiplication = $result['table'];
        $temp = isset($_POST['num1'] ) ? $_POST['num1'] : ' ';
        $resust_Division = createDivisionTable($result['multipliedValues']);
        $hidden = "modify-BT8-hidden";
        $Up_height = "modify-BT8-Up-height";
        $css_tital = "modify-BT8-show";
        $Setup_layout ="BT8-result-result";

    } 
    function createMultiplicationTable() {
        $a = $_POST['num1'];
        $css = "BT8-result-td";
        $css_table="BT8-result-table";
        // $css_tital="modify-BT8-show";
        // $table = "<p class=\"$css_tital\">Cửu chương nhân $a</p>";
        $table = ''; 
        $table .= "<table border='1' class=\"$css_table\">";
        for ($i = 1; $i <= 10; $i++) {
            $table .= "<tr>";
            $table .= "<td class=\"$css\">$a</td>";
            $table .= "<td class=\"$css\">x</td>";
            $table .= "<td class=\"$css\">$i</td>";
            $table .= "<td class=\"$css\">=</td>";
            $result = ($a * $i);
            $multipliedValues[] = $result; // Thêm giá trị vào mảng
            $table .= "<td class=\"$css\">" . $result . "</td>";
            $table .= "</tr>";
        }
        $table .= "</table>";
        return array(
            'table' => $table,
            'multipliedValues' => $multipliedValues
        );
    }
    function createDivisionTable($multipliedValues) {
        $a = $multipliedValues[0];
        $index = 0;
        $css = "BT8-result-td";
        $css_table="BT8-result-table";
        // $css_tital="BT8-result-tital";
        // $table = "<p class=\"$css_tital\">Cưu chương chia $a</p>";
        $table = ''; 
        $table .= "<table border='1' class=\"$css_table\">";
        for ($i = 1; $i <= 10; $i++) {
            $table .= "<tr>";
            $table .= "<td class=\"$css\">$multipliedValues[$index]</td>";
            $table .= "<td class=\"$css\">/</td>";
            $table .= "<td class=\"$css\">$multipliedValues[0]</td>";
            $table .= "<td class=\"$css\">=</td>";
            $divisionResult = $multipliedValues[$index] / $multipliedValues[0];
            $table .= "<td class=\"$css\">" . $divisionResult . "</td>";
            $index++;
        }
        $table .= "</table>";
        return $table;
    }
?>

<div class="BT-result BT8-result <?php echo $Up_height; ?> ">
    <label class="BT-result-tital _BT8-result-margin-top <?php echo $hidden; ?> "><h4>Kết quả</h4></label>
    <label class="BT8-result-tital <?php echo $css_tital; ?>" ><h4>Bảng cửu chương NC của <?php echo $temp; ?></h4></label>
    <div class="<?php echo $Setup_layout; ?>">
        <label class="BT-result-label BT8-result-label"><?php echo $resust_multiplication; ?></label>
        <label class="BT-result-label BT8-result-label"><?php echo $resust_Division; ?></label>
    </div>
</div>