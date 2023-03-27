<?php
session_start();
$post_by = $_SESSION['userID'] ;
$search_flag = false;
if(isset($_POST['post'])){
    include('components/dbConnect.php');
    $post_title = $_POST['post_title'];
    $post_des =  $_POST['post_details'];

    // echo $post_title . " " . $post_des; 

    $sql = "INSERT INTO `community_post`(`post_title`, `post_details`,`post_by`) VALUES ('$post_title','$post_des', $post_by);";
    $result = mysqli_query($conn,$sql);
}

// search
if(isset($_GET['search'])){
    $key = $_GET['search_key'];
    // echo $key;
    $search_flag = true;
}
?>
<?php
$title = "Community";
include "components/header.php";
?>

<!-- submit post -->
<div class="container">

        <form action="community.php" method="post">
            <div class="row justify-content-center m-3">
                <div class="col-auto my-3">
                    <label for="exampleFormControlInput1" class="form-label">Post title</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="post_title"placeholder="">
                </div>
                <div class="col-auto">
                    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="post_details" rows="3" cols="50"></textarea>
                </div>
                <div class="col-auto">
                    <input type="submit" value="Post" name="post" class="btn my-5 p-0" style="width:130px; height:40px; background-color: #15252B; border-radius: 15px; color:white;">
                </div>
            </div>
        </form>

</div>
<hr>

<!-- view post -->
<div class="container">
    <?php
    if($search_flag == false){
    include('components/dbConnect.php');
    $sql2 = "SELECT * FROM `community_post` WHERE 1 ORDER by date DESC;";
    $result2 = mysqli_query($conn, $sql2);
    while($row = mysqli_fetch_assoc($result2)) { ?>
    <div class="card w-75 m-auto my-3">
        <div class="card-header" style="display:inline-flex">
            <img src="https://t3.ftcdn.net/jpg/05/34/22/36/360_F_534223627_0JFVJDBwNku7LyLazrtN6YBTJ2agUfP5.jpg" alt="" style="width:50px; height:50px; border-radius:50%; margin-top:2px">
            <p style="padding: 8px 10px; font-size:20px"><b>User Name</b></p>
        </div>
        <div class="card-body">
            <h5 class="card-title"><a href="post_details.php?post_id=<?php echo $row['id'];?>"><?php echo $row['post_title'];?></a></h5>
            <p class="card-text"><?php echo $row['post_details'];?></p>
        </div>
    </div>
    <?php }}
    else{
        include('components/dbConnect.php');
        $sql2 = "SELECT * FROM `community_post` WHERE community_post.post_title like '%$key%' or community_post.post_details like '%$key%';";
        $result2 = mysqli_query($conn, $sql2);
        while($row = mysqli_fetch_assoc($result2)) { ?>
        <div class="card w-75 m-auto my-3">
            <div class="card-header" style="display:inline-flex">
                <img src="https://t3.ftcdn.net/jpg/05/34/22/36/360_F_534223627_0JFVJDBwNku7LyLazrtN6YBTJ2agUfP5.jpg" alt="" style="width:50px; height:50px; border-radius:50%; margin-top:2px">
                <p style="padding: 8px 10px; font-size:20px"><b>User Name</b></p>
            </div>
            <div class="card-body">
                <h5 class="card-title"><a href="post_details.php?post_id=<?php echo $row['id'];?>"><?php echo $row['post_title'];?></a></h5>
                <p class="card-text"><?php echo $row['post_details'];?></p>
            </div>
        </div>
        <?php }} ?>
</div>

<?php
include "components/footer.php";
?>