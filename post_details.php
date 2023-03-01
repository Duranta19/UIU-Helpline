<?php
$title = "Post details";
include "components/header.php";
?>
<!-- post section -->
<div class="container-fluid">
    <div class="card w-100">
        <div class="card-header" style="display:inline-flex">
            <img src="https://t3.ftcdn.net/jpg/05/34/22/36/360_F_534223627_0JFVJDBwNku7LyLazrtN6YBTJ2agUfP5.jpg" alt="" style="width:50px; height:50px; border-radius:50%; margin-top:2px">
            <p style="padding: 8px 10px; font-size:20px"><b>User Name</b></p>
        </div>
        <div class="card-body">
            <h5 class="card-title"><a href="">Post Title</a></h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis nostrum ratione, aliquam ducimus explicabo at commodi, atque quos temporibus non perspiciatis quidem tempore sed ad corporis obcaecati sint animi. Quae suscipit quaerat esse eligendi dicta beatae facere ullam minima, veritatis dolore perferendis labore harum! Corrupti odio mollitia magni voluptatum commodi.</p>
        </div>
    </div>
</div>
<br>
<br>
<h5>Comments</h5>
<hr>

<!-- post a comment -->
<div class="container">
    <form action="" method="post">
        <div class="row">
            <div class="col">
                <label for="exampleFormControlTextarea1" class="form-label">Write a comment</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
            </div>
            <div class="col">
                <input type="submit" value="Post" class="btn mt-5" style="background-color: #15252B; color :white">
            </div>

        </div>
    </form>
</div>

<!-- comment section -->
<div class="container">
    <div class="row">
        <div class="card mt-2">
            <div class="card-header" style="display:inline-flex; height:55px">
                <img src="https://t3.ftcdn.net/jpg/05/34/22/36/360_F_534223627_0JFVJDBwNku7LyLazrtN6YBTJ2agUfP5.jpg" alt="" style="width:30px; height:30px; border-radius:50%; margin-top:2px">
                <p style="padding: 8px 10px; font-size:16px"><b>User Name</b></p>
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit, sapiente.
                    </p>
                </blockquote>
            </div>
        </div>

        <div class="card mt-2">
            <div class="card-header" style="display:inline-flex; height:55px">
                <img src="https://t3.ftcdn.net/jpg/05/34/22/36/360_F_534223627_0JFVJDBwNku7LyLazrtN6YBTJ2agUfP5.jpg" alt="" style="width:30px; height:30px; border-radius:50%; margin-top:2px">
                <p style="padding: 8px 10px; font-size:16px"><b>User Name</b></p>
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit, sapiente.
                    </p>
                </blockquote>
            </div>
        </div>

        <div class="card mt-2">
            <div class="card-header" style="display:inline-flex; height:55px">
                <img src="https://t3.ftcdn.net/jpg/05/34/22/36/360_F_534223627_0JFVJDBwNku7LyLazrtN6YBTJ2agUfP5.jpg" alt="" style="width:30px; height:30px; border-radius:50%; margin-top:2px">
                <p style="padding: 8px 10px; font-size:16px"><b>User Name</b></p>
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit, sapiente.
                    </p>
                </blockquote>
            </div>
        </div>
    </div>
</div>




<br>
<?php
include('components/footer.php');
?>