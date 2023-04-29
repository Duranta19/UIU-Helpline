<?php
$title = "Question Bank";
include "components/header.php";
?>
<?php
session_start();
$question_by = $_SESSION['userID'];
$search_flag = false;
if (isset($_POST['post'])) {
    include('components/dbConnect.php');
    $question_title1 = $_POST['question_title1'];
    $question_file1 = $_FILES['question_file1']['name'];

    $sql = "INSERT INTO `questionBank1`(`question_title1`,`question_by`,`question_file1`) VALUES ('$question_title1', '$question_by','$question_file1');";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        move_uploaded_file($_FILES['question_file1']['tmp_name'], __DIR__ . "/questions/" . $_FILES['question_file1']['name']);
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
<header>
    <style>
        .box {
            border-radius: 10px;
            padding: 30px;
            position: relative;
            background-color: rgb(226, 227, 229);
            transition: 0.3s;
            border-radius: 20px;
            margin-top: 20px;
            margin: 50px;
            display: flex;
        }

        .button {
            display: flex;
            margin-left: 700px;
            align-items: center;
            justify-content: center;
        }

        .card-button {
            width: 150px;
            height: 40px;
            align-items: center;
            justify-content: center;
            background-color: rgb(7, 52, 43);
            color: white;
            size: 40px;
            border-radius: 20px;
        }


        .Course-info h1 {
            font-size: 30px;
        }

        .pagination {
            margin-top: 300px;
            margin: 50px;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover:not(.active) {
            background-color: #121f19;
        }

        .active {
            background-color: rgb(27, 24, 24)
        }
    </style>
</header>



<body>

    <div class="container mt-3" align="center">
        <!-- Button trigger modal -->
        <h3></h3>
        <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Upload Questions
        </button>
        <h6 class="mt-2">Upload Mid/Final or CT questions</h6>
    </div>

    <hr>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Upload Questions</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="questionBank1.php" method="post" enctype="multipart/form-data">

                        <label for="exampleFormControlInput1" class="form-label">Question title</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="question_title1" placeholder="CT/Mid/Final Course Title">
                        <label for="question_file" class="form-label">Upload Question</label>
                        <input class="form-control" type="file" id="question_file" name="question_file1">
                        <input type="submit" value="Post" name="post" class="btn my-2" style="width:130px; height:40px; background-color: #15252B; border-radius: 15px; color:white;">

                    </form>
                </div>
            </div>
        </div>
    </div>





    <div class="container">
        <?php
        if ($search_flag == false) {
            include('components/dbConnect.php');
            $sql2 = "SELECT * FROM `questionBank1` INNER JOIN accounts on accounts.userid = questionBank1.question_by WHERE 1 ORDER by date DESC;";
            $result2 = mysqli_query($conn, $sql2);
            while ($row = mysqli_fetch_assoc($result2)) { ?>


                <div class="box">
                    <div class="Course-info">
                        <h1><?php echo $row['question_title1']; ?></h1>
                        <p><a href="questions/<?php echo $row['question_file1']; ?>" target="_blank"><?php echo $row['question_file1']; ?></a></p>
                        <p>By: <?php echo $row['name']; ?></p>
                    </div>
                    <div class="button">
                        <button class="card-button"><a href="questions/<?php echo $row['question_file1']; ?>" style="text-decoration: none; color:white;" target="_blank"> View</a></button>
                    </div>
                </div>
            <?php }
        } else {
            include('components/dbConnect.php');
            $sql2 = "SELECT * FROM `questionBank1` INNER JOIN accounts on accounts.userid = questionBank1.question_by where questionBank1.question_title1 like '%$key%' or questionBank1.question_file1 like '%$key%';";
            $result2 = mysqli_query($conn, $sql2);
            while ($row = mysqli_fetch_assoc($result2)) { ?>
               <div class="box">
                    <div class="Course-info">
                        <h1><?php echo $row['question_title1']; ?></h1>
                        <p><a href="questions/<?php echo $row['question_file1']; ?>" target="_blank"><?php echo $row['question_file1']; ?></a></p>
                        <p>By: <?php echo $row['name']; ?></p>
                    </div>
                    <div class="button">
                        <button class="card-button"><a href="questions/<?php echo $row['question_file1']; ?>" style="text-decoration: none; color:white;" target="_blank"> View</a></button>
                    </div>
                </div>
        <?php }
        } ?>
    </div>



</body>

<?php
include "components/footer.php";
?>