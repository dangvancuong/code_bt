<?php

setcookie("cookie[name]", "cuong",time()+10);
setcookie("cookie[diaChi]", "hn",time()+10);
setcookie("cookie[sdt]", "01672624165",time()+10); 
if (isset($_COOKIE['cookie'])) {
    foreach ($_COOKIE['cookie'] as $key=> $value) {
        $key = htmlspecialchars($key);
        $value = htmlspecialchars($value);
        echo "$key : $value <br />\n";
    }
}
?>