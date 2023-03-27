<?php
    $conn = mysqli_connect('localhost', 'team4errors', 'team4errors', 'uiu_helpline');
    if(!$conn){
        echo "Connection error" . mysqli_connect_error();
    }
?>