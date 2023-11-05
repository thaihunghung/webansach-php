<?php
    include("template_simple/layouts/header.php");
?>
<?php
    if (isset($_GET['bt']) && $_GET['bt'] === 'bt') {
        //  trả rỗng như reset 
    } else if (isset($_GET["bt"]) && $_GET["bt"] === "bt1") {
        include(__DIR__ . "/template_simple/views/BT1/BT1.php");
    } else if (isset($_GET["bt"]) && $_GET["bt"] === "bt2") {
        include(__DIR__ . "/template_simple/views/BT2/BT2.php");
    } else if (isset($_GET["bt"]) && $_GET["bt"] === "bt3") {
        include(__DIR__ . "/template_simple/views/BT3/BT3.php");
    } else if (isset($_GET["bt"]) && $_GET["bt"] === "bt4") {
        include(__DIR__ . "/template_simple/views/BT4/BT4.php");
    } else if (isset($_GET["bt"]) && $_GET["bt"] === "bt5") {
        include(__DIR__ . "/template_simple/views/BT5/BT.php");
    } else if (isset($_GET["bt"]) && $_GET["bt"] === "bt6") {
        include(__DIR__ . "/template_simple/views/BT6/BT6.php");
    } else if (isset($_GET["bt"]) && $_GET["bt"] === "bt7") {
        include(__DIR__ . "/template_simple/views/BT7/BT7.php");
    } else if (isset($_GET["bt"]) && $_GET["bt"] === "bt8") {
        include(__DIR__ . "/template_simple/views/BT8/BT8.php");
    } else if (isset($_GET["bt"]) && $_GET["bt"] === "bt9") {
        include(__DIR__ . "/template_simple/views/BT9/BT9.php");
    } else if (isset($_GET["bt"]) && $_GET["bt"] === "bt10") {
        include(__DIR__ . "/template_simple/views/BT10/BT10.php");
    }

    // MYSQL
                  else if (isset($_GET["bt"]) && $_GET["bt"] === "bt2") {
                include(__DIR__ . "/template_simple/views/BT2/BT2.php");
            } else if (isset($_GET["bt"]) && $_GET["bt"] === "bt2") {
                include(__DIR__ . "/template_simple/views/BT2/BT2.php");
            } else if (isset($_GET["bt"]) && $_GET["bt"] === "bt2") {
                include(__DIR__ . "/template_simple/views/BT2/BT2.php");
            } 
    
    


?>
<?php
    include("template_simple/layouts/footer.php");
?>


