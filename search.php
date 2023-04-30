<?php

if(isset($_GET['search'])){
    $key = $_GET['search_key'];
    $type = $_GET['select_type'];
    $search_flag = true;
}
if($type == 'community'){
    header('Location: community.php?search_key=' .$key .'&search=');
}
else if($type == 'course'){
    header('Location: courses.php?search_key=' .$key .'&search=');
}
else{

}
// echo $key;
?>