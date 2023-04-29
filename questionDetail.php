<?php
session_start();
$ans_by = $_SESSION['userID'];
$question_id = $_GET['question_id'];
include('components/dbConnect.php');
//post details
$sql = "SELECT `id`, `question_title`, `question_details`, `question_by`, `date`, `question_file` FROM `questionbanklist` WHERE id = '$question_id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

//comment section
if (isset($_POST['post'])) {
    $answer_details = $_POST['answer_details'];
    $answer_file = $_FILES['answer_file']['name'];

    $sql2 = "INSERT INTO `questionans`( `quesAns`, `ansBy`, `question_id`, `ansFile`) VALUES ('$answer_details','$ans_by','$question_id','$answer_file');";
    $result2 = mysqli_query($conn, $sql2);
    if ($result2) {
        move_uploaded_file($_FILES['answer_file']['tmp_name'], __DIR__ . "/questions/" . $_FILES['answer_file']['name']);
    }
}
?>
<?php
$title = "Question details";
include "components/header.php";
?>


<div class="container">
    <div class="row">
        <div class="col-md-8 my-2">
            <h3>Question</h1>
                <hr>
                <div class="Container">
                    <h5 class="card-title"><?php echo $row['question_title']; ?></h5>
                    <p class="card-text"><?php echo $row['question_details']; ?></p>
                    <label for=""><b>File: </b> </label>
                    <a href="questions/<?php echo $row['question_file']; ?>" target="_blank"><?php echo $row['question_file']; ?></a>
                </div>
                <hr>
                <br>
                <br>
                <h3>Answers</h3>
                <hr>
                <div class="container">
                    <?php
                    include('components/dbConnect.php');
                    $sql3 = "SELECT * FROM `questionans` INNER JOIN accounts on accounts.userid = questionans.ansBy WHERE `question_id` = '$question_id'";
                    $result3 = mysqli_query($conn, $sql3);
                    while ($row = mysqli_fetch_assoc($result3)) {
                    ?>
                        <div class="card mt-2">
                            <div class="card-header" style="display:inline-flex; height:55px">
                                <img src="https://t3.ftcdn.net/jpg/05/34/22/36/360_F_534223627_0JFVJDBwNku7LyLazrtN6YBTJ2agUfP5.jpg" alt="" style="width:30px; height:30px; border-radius:50%; margin-top:2px">
                                <p style="padding: 8px 10px; font-size:16px"><b><?php echo $row['name']; ?></b></p>
                            </div>
                            <div class="card-body">
                                    <p><?php echo $row['quesAns'];?></p>
                                    <label for="">Solution File:</label>
                                    <a href="questions/<?php echo $row['ansFile']; ?>" target="_blank"> <?php echo $row['ansFile']; ?></a>
                            </div>
                        </div>
                    <?php } ?>
                </div>

        </div>
        <div class="col-md-4">
            <div class="container">
                <form action="questionDetail.php?question_id=<?php echo $question_id; ?>" method="post" enctype="multipart/form-data">
                    <div class=" justify-content-center m-3">
                        <h4>Answer the Question</h4>
                        <hr>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="answer_details" rows="5" cols="50"></textarea>
                        <label for="question_file" class="form-label">Upload an answer file</label>
                        <input class="form-control" type="file" id="answer_file" name="answer_file">
                        <input type="submit" value="post" name="post" class="btn my-2" style="width:130px; height:40px; background-color: #15252B; border-radius: 15px; color:white;">

                    </div>
                </form>

            </div>
        </div>
    </div>
</div>


<?php
include('components/footer.php');
?>