<?php
$title = "Solve Problem";
include "components/header.php";
?>
<?php
session_start();
$question_by = $_SESSION['userID'];
$search_flag = false;
if (isset($_POST['post'])) {
    include('components/dbConnect.php');
    $question_title = $_POST['question_title'];
    $question_details =  $_POST['question_details'];
    $question_file = $_FILES['question_file']['name'];

    $sql = "INSERT INTO `questionbanklist`(`question_title`, `question_details`,`question_by`,`question_file`) VALUES ('$question_title','$question_details', '$question_by','$question_file');";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        move_uploaded_file($_FILES['question_file']['tmp_name'], __DIR__ . "/questions/" . $_FILES['question_file']['name']);
        // move_uploaded_file($_FILES['question_file']['temp_name'],"questions/$question_file");

    }
}

// search
if (isset($_GET['search'])) {
    $key = $_GET['search_key'];
    // echo $key;
    $search_flag = true;
}
?>
<h3 class="m-4" style="text-align: center;">Solve your problems</h3>
<hr>

<div class="row">
    <div class="col-md-8">
        <div class="container">
            <?php
            if ($search_flag == false) {
                include('components/dbConnect.php');
                $sql2 = "SELECT * FROM `questionbanklist` INNER JOIN accounts on accounts.userid = questionbanklist.question_by WHERE 1 ORDER by date DESC;";
                $result2 = mysqli_query($conn, $sql2);
                while ($row = mysqli_fetch_assoc($result2)) {
                    $pid = $row['question_by'];
                    $sql3 = "SELECT `photo_loc` FROM `accounts` WHERE userid = '$pid';";
                    $result3 = mysqli_query($conn, $sql3);
                    $img = mysqli_fetch_assoc($result3);
            ?>
                    <div class="card w-75 m-auto my-3">
                        <div class="card-header" style="display:inline-flex">
                        <img src="img/<?php echo $img['photo_loc']?>" alt="" onerror="this.src='img/altimg.jpg';" style="width:50px; height:50px; border-radius:50%; margin-top:2px">
                            <p style="padding: 8px 10px; font-size:20px"><b><?php echo $row['name']; ?></b></p>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a style="text-decoration:none; color:#15252B" href="questionDetail.php?question_id=<?php echo $row['id']; ?>"><?php echo $row['question_title']; ?></a></h5>
                            <p class="card-text" style="text-overflow: ellipsis; overflow: hidden;"><?php echo $row['question_details']; ?></p>
                        </div>
                        <div class="card-bottom">
                            <a class="btn btn-outline-dark m-2" href="questionDetail.php?question_id=<?php echo $row['id']; ?>">View Problem</a>
                            <a href="questionDetail.php?question_id=<?php echo $row['id']; ?>"><?php echo $row['question_file']; ?></a>
                        </div>
                    </div>
                <?php }
            } else {
                include('components/dbConnect.php');
                $sql2 = "SELECT * FROM `questionbanklist` INNER JOIN accounts on accounts.userid = questionbanklist.question_by where questionbanklist.question_title like '%$key%' or questionbanklist.question_details like '%$key%';";
                $result2 = mysqli_query($conn, $sql2);
                while ($row = mysqli_fetch_assoc($result2)) {
                    $pid = $row['question_by'];
                    $sql3 = "SELECT `photo_loc` FROM `accounts` WHERE userid = '$pid';";
                    $result3 = mysqli_query($conn, $sql3);
                    $img = mysqli_fetch_assoc($result3);
                    ?>
                    <div class="card w-75 m-auto my-3">
                        <div class="card-header" style="display:inline-flex">
                        <img src="img/<?php echo $img['photo_loc']?>" alt="" onerror="this.src='img/altimg.jpg';" style="width:50px; height:50px; border-radius:50%; margin-top:2px">
                            <p style="padding: 8px 10px; font-size:20px"><b><?php echo $row['name']; ?></b></p>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a style="text-decoration:none; color:#15252B" href="questionDetail.php?question_id=<?php echo $row['id']; ?>"><?php echo $row['question_title']; ?></a></h5>
                            <p class="card-text"><?php echo $row['question_details']; ?></p>
                        </div>
                        <div class="card-bottom">
                            <a class="btn btn-outline-dark m-2" href="questionDetail.php?question_id=<?php echo $row['id']; ?>">View Question</a>
                            <a href="questionDetail.php?question_id=<?php echo $row['id']; ?>"><?php echo $row['question_file']; ?></a>
                        </div>
                    </div>
            <?php }
            } ?>
        </div>
    </div>
    <div class="col-md-4">
        <div class="container">
            <form action="questionBankList.php" method="post" enctype="multipart/form-data">
                <div class=" justify-content-center m-3">
                    <h4>Post a Problem</h4>
                    <hr>
                    <label for="exampleFormControlInput1" class="form-label"> Problem title</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="question_title" placeholder="">
                    <label for="exampleFormControlTextarea1" class="form-label">Describe Problem</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="question_details" rows="5" cols="50"></textarea>
                    <br> <label for="question_file" class="form-label">Upload problem file </label>
                    <input class="form-control" type="file" id="question_file" name="question_file">
                    <input type="submit" value="Post" name="post" class="btn my-2" style="width:130px; height:40px; background-color: #15252B; border-radius: 15px; color:white;">

                </div>
            </form>

        </div>
    </div>
</div>

<?php
include "components/footer.php";
?>