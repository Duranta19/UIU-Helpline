<?php
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
                            <h5 class="card-title"><a style="text-decoration:none; color:#15252B" href="questionDetail.php?question_id=<?php echo $row['id']; ?>"><?php echo $row['question_title']; ?></a></h5>
                            <p class="card-text" style="text-overflow: ellipsis; overflow: hidden;"><?php echo $row['question_details']; ?></p>
                        </div>
                        <div class="card-bottom">
                            <a class="btn btn-dark m-2" style=" color:aliceblue" href="questionDetail.php?question_id=<?php echo $row['id']; ?>">View Question</a>
                            <a href="questionDetail.php?question_id=<?php echo $row['id']; ?>"><?php echo $row['question_file']; ?></a>
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
                            <h5 class="card-title"><a style="text-decoration:none; color:#15252B" href="questionDetail.php?question_id=<?php echo $row['id']; ?>"><?php echo $row['question_title']; ?></a></h5>
                            <p class="card-text"><?php echo $row['question_details']; ?></p>
                        </div>
                        <div class="card-bottom">
                            <a class="btn btn-dark m-2" style=" color:aliceblue" href="questionDetail.php?question_id=<?php echo $row['id']; ?>">View Question</a>
                            <a href="questionDetail.php?question_id=<?php echo $row['id']; ?>"><?php echo $row['question_file']; ?></a>
                        </div>
                    </div>
            <?php }
            } ?>
        </div>
    </div>