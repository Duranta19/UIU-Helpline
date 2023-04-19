<?php
$title = "Community";
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
    if($result){
        move_uploaded_file($_FILES['question_file']['tmp_name'], __DIR__."/questions/".$_FILES['question_file']['name']);
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question Bank</title>
    <link rel="stylesheet" href="questionBankList.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <h3 class="m-4" style="text-align: center;">Question Bank</h3>
    
    <div class="row">
        <div class="col-md-8">
            <div class="container">
                <?php
                if ($search_flag == false) {
                    include('components/dbConnect.php');
                    $sql2 = "SELECT * FROM `questionbanklist` INNER JOIN accounts on accounts.userid = questionbanklist.question_by WHERE 1 ORDER by date DESC;";
                    $result2 = mysqli_query($conn, $sql2);
                    while ($row = mysqli_fetch_assoc($result2)) { ?>
                        <div class="card w-75 m-auto my-3">
                            <div class="card-header" style="display:inline-flex">
                                <img src="https://t3.ftcdn.net/jpg/05/34/22/36/360_F_534223627_0JFVJDBwNku7LyLazrtN6YBTJ2agUfP5.jpg" alt="" style="width:50px; height:50px; border-radius:50%; margin-top:2px">
                                <p style="padding: 8px 10px; font-size:20px"><b><?php echo $row['name']; ?></b></p>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><a style=" color:#15252B" href="questionBankList.php?question_id=<?php echo $row['id'];?>"><?php echo $row['question_title']; ?></a></h5>
                                <p class="card-text" style="text-overflow: ellipsis; overflow: hidden;" ><?php echo $row['question_details']; ?></p>
                            </div>
                            <div class="card-bottom">
                            <a  class="btn btn-dark m-2" style=" color:aliceblue" href="questionBankList.php?question_id=<?php echo $row['id'];?>">View Question</a>
                            </div>
                        </div>
                    <?php }
                } else {
                    include('components/dbConnect.php');
                    $sql2 = "SELECT * FROM `questionbanklist` INNER JOIN accounts on accounts.userid = questionbanklist.question_by where questionbanklist.question_title like '%$key%' or questionbanklist.question_details like '%$key%';";
                    $result2 = mysqli_query($conn, $sql2);
                    while ($row = mysqli_fetch_assoc($result2)) { ?>
                        <div class="card w-75 m-auto my-3">
                            <div class="card-header" style="display:inline-flex">
                                <img src="https://t3.ftcdn.net/jpg/05/34/22/36/360_F_534223627_0JFVJDBwNku7LyLazrtN6YBTJ2agUfP5.jpg" alt="" style="width:50px; height:50px; border-radius:50%; margin-top:2px">
                                <p style="padding: 8px 10px; font-size:20px"><b><?php echo $row['name']; ?></b></p>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><a href="questionBankList.php"><?php echo $row['question_title']; ?></a></h5>
                                <p class="card-text"><?php echo $row['question_details']; ?></p>
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
                        <h4>Post a Question</h4>
                        <hr>
                        <label for="exampleFormControlInput1" class="form-label">Question title</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="question_title" placeholder="">
                        <label for="exampleFormControlTextarea1" class="form-label">Describe Question</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="question_details" rows="5" cols="50"></textarea>
                         <br> <label for="question_file" class="form-label">Upload a Question</label>
                        <input class="form-control" type="file" id="question_file" name="question_file">
                        <input type="submit" value="Post" name="post" class="btn my-2" style="width:130px; height:40px; background-color: #15252B; border-radius: 15px; color:white;">

                    </div>
                </form>

            </div>
        </div>
    </div>

    <hr>




</body>

</html>

<?php
include "components/footer.php";
?>