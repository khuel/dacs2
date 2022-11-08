<?php
$connect = mysqli_connect("localhost", "root", "");
mysqli_select_db($connect, "dacs2");
mysqli_query($connect, "SET names 'utf8'");
if(!$connect){
    echo "Không thể kết nối database".mysqli_connect_error($connect);
}
?>