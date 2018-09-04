<?php
if ($_GET['randomId'] != "qCD54mCSheUDaOu0YKkTBbgfElANCYNzW_EhgTR6dT1Lx1SVzGoPoYwlQ2nrZ5CX") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
