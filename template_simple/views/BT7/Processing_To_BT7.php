 <div class="BT _BT4">
    <h1 class="_BT-stital">Bảng cửu chương</h1>
    <form action="" method="post" class="form-Bt">
        <div class="form-input">
        
            <label for="num1" class="_BT-label-number">Nhập 1 số</label>
            <input type="text" name="num1" id="num1" required><br>

        </div>
        <div class="_BT-form-label">
            <label class="_BT-label-number-lb1"><p>Bảng cửu chương</p></label>
        </div>
        <div class="_BT-button-setup">
            <input type="submit" name="cuuchuong" value="Cửu chương" class="btn btn-outline-secondary _BT-button-setup">
        </div>  
    </form>
 </div>   

<?php
    $hung ="";
    $additionalClass="";
    $Up_height = "";
    if (isset($_POST['cuuchuong'])) {
        $hung= createMultiplicationTable();
        $additionalClass= "modify-BT7-hidden";
        $Up_height = "modify-BT7-Up-height";
    } 
    // Hàm kiểm tra loại tam giác
    function createMultiplicationTable() {
        $a = $_POST['num1'];
        $css = "BT7-result-td";
        $css_table="BT7-result-table";
        $css_tital="BT7-result-tital";
        $table = "<p class=\"$css_tital\">Bảng cửu chương $a</p>";
        $table .= "<table border='1' class=\"$css_table\">";
        for ($i = 1; $i <= 10; $i++) {
            $table .= "<tr>";
            $table .= "<td class=\"$css\">$a</td>";
            $table .= "<td class=\"$css\">x</td>";
            $table .= "<td class=\"$css\">$i</td>";
            $table .= "<td class=\"$css\">=</td>";
            $table .= "<td class=\"$css\">" . ($a * $i) . "</td>";
            $table .= "</tr>";
        }
        $table .= "</table>";
    return $table;
    }
?>
<div class="BT-result <?php echo $Up_height; ?>">
    <label class="BT-result-tital <?php echo $additionalClass; ?>"><h4>Kết quả</h4></label>
    <label class="BT-result-label BT7-result-label"><?php echo $hung; ?></label>
</div>