<?php
setcookie('кука', 'готова');
if ($_COOKIE['кука'] != '') {
    echo $_COOKIE['кука'];
}
?>