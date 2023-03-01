<?php
$title = "Community";
include "components/header.php";
?>
<div class="container">
    <div class="row justify-content-md-end">
        <button type="button" class="btn my-3 p-0" style="width:130px; height:40px; background-color: #15252B; border-radius: 15px; color:white;"><b>Post</b></button>
    </div>
</div>
<hr>
<div class="container">
    <div class="card w-75 m-auto">
        <div class="card-header" style="display:inline-flex">
            <img src="https://t3.ftcdn.net/jpg/05/34/22/36/360_F_534223627_0JFVJDBwNku7LyLazrtN6YBTJ2agUfP5.jpg" alt="" style="width:50px; height:50px; border-radius:50%; margin-top:2px">
            <p style="padding: 8px 10px; font-size:20px"><b>User Name</b></p>
        </div>
        <div class="card-body">
            <h5 class="card-title"><a href="post_details.php">Post Title</a></h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae debitis aliquid nemo nobis expedita sapiente nostrum iusto libero quae quia officiis accusantium aperiam dicta illo unde, aspernatur molestiae? Tempora, itaque.</p>
        </div>
    </div>
</div>

<?php
include "components/footer.php";
?>