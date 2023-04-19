<?php
    // $comment_by = "1";
    $question_id = $_GET['question_id'];
    include('components/dbConnect.php');
    //post details
    $sql = "SELECT `id`, `question_title`, `question_details`, `question_by`, `date`, `question_file` FROM `questionbanklist` WHERE id = '$question_id'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    //comment section
    if(isset($_POST['post_comment'])){
        $comment = $_POST['comment'];

        $sql2 = "INSERT INTO `post_comment`(`comment`, `comment_by`, `post_id`) VALUES ('$comment','$comment_by','$post_id');";
        $result2 = mysqli_query($conn, $sql2); 
    }
?>
<?php
$title = "Question details";
include "components/header.php";
?>
<!-- post section -->
<div class="container">
    <div class="card w-100">
        <div class="card-header" style="display:inline-flex">
            <img src="https://t3.ftcdn.net/jpg/05/34/22/36/360_F_534223627_0JFVJDBwNku7LyLazrtN6YBTJ2agUfP5.jpg" alt="" style="width:50px; height:50px; border-radius:50%; margin-top:2px">
            <p style="padding: 8px 10px; font-size:20px"><b>User Name</b></p>
        </div>
        <div class="card-body">
            <h5 class="card-title"><?php echo $row['post_title']; ?></h5>
            <p class="card-text"><?php echo $row['post_details']; ?></p>
        </div>
    </div>
</div>
<br>
<br>


<!-- post a comment -->
<div class="container">
<h5>Comments</h5>
<hr>
    <form action="post_details.php?post_id=<?php echo $post_id; ?>" method="post">
        <div class="row">
            <div class="col">
                <label for="exampleFormControlTextarea1" class="form-label">Write a comment</label>
                <textarea class="form-control" name="comment" id="exampleFormControlTextarea1" rows="2"></textarea>
            </div>
            <div class="col">
                <input type="submit" name="post_comment" value="Post" class="btn mt-5" style="background-color: #15252B; color :white">
            </div>

        </div>
    </form>
</div>

<!-- comment section -->
<div class="container">
    <div class="row">
        <?php
            include('components/dbConnect.php');
            $sql3 = "SELECT `id`,`name`, `comment`, `comment_by`, `post_id`, `date` FROM `post_comment` INNER JOIN accounts on accounts.userid = post_comment.comment_by WHERE `post_id` = '$post_id'";
            $result3 = mysqli_query($conn,$sql3);
            while($row = mysqli_fetch_assoc($result3)){
        ?>
        <div class="card mt-2">
            <div class="card-header" style="display:inline-flex; height:55px">
                <img src="https://t3.ftcdn.net/jpg/05/34/22/36/360_F_534223627_0JFVJDBwNku7LyLazrtN6YBTJ2agUfP5.jpg" alt="" style="width:30px; height:30px; border-radius:50%; margin-top:2px">
                <p style="padding: 8px 10px; font-size:16px"><b><?php echo $row['name']; ?></b></p>
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <p><?php echo $row['comment']; ?>
                    </p>
                </blockquote>
            </div>
        </div>
        <?php } ?>
    </div>
</div>



<br>
<br>
<?php
include('components/footer.php');
?>