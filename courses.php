<?php
include('components/dbConnect.php');
session_start();
$userId = $_SESSION['userID'] ;
$s_flag = false;
// echo htmlspecialchars($_SERVER['PHP_SELF']);
if (isset($_GET['search_key'])) {
    $s_flag = true;
    $key = $_GET['search_key'];
    // echo $key;

    $sql3 = "SELECT * FROM `course_details` WHERE course_code LIKE '%$key%' or course_title like '%$key%' or course_des like '%$key%' ORDER BY course_code DESC";
    $result3  = mysqli_query($conn,$sql3);
}
?>
<?php
$title = "Course List";
include('components/header.php');
?>
<br>
<div class="container text-center">
    <h4>Course Review</h4>
    <!-- <h5> 43 Courses 1053 Reviews</h5> -->
    <a href="addNewCourse.php" class="btn" style="background-color: #15252B; color:white; border-radius:25px;">Add Course</a>
</div>
<hr>
<!-- pagination -->
<!-- <nav aria-label="Page navigation example mx-3">
    <ul class="pagination mx-3">
        <li class="page-item"><a class="page-link" href="#" style="color:#15252B;">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#" style="color:#15252B;">1</a></li>
        <li class="page-item"><a class="page-link" href="#" style="color:#15252B;">2</a></li>
        <li class="page-item"><a class="page-link" href="#" style="color:#15252B;">3</a></li>
        <li class="page-item"><a class="page-link" href="#" style="color:#15252B;">Next</a></li>
    </ul>
</nav> -->

<!-- course card -->

<div class="container">
    <div class="row">
        <?php
        include('components/dbConnect.php');
        if($s_flag == false){
        $sql2 = "SELECT * FROM `course_details` WHERE 1 ORDER BY course_code DESC;";
        $result2 = mysqli_query($conn, $sql2);
        while ($row = mysqli_fetch_assoc($result2)) {
            $t = $row['id'];
            $sql5 = "SELECT AVG(difficulty_level) as dl FROM `course_review` WHERE course_id = '$t';";
            $result5 = mysqli_query($conn, $sql5);
            $dl = mysqli_fetch_assoc($result5);
        ?>
            <div class="col-md-3">
                <div class="card my-1">
                    <img src="img/<?php echo $row['img']; ?>" style="height: 150px;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['course_title']; ?></h5>
                        <label for="progress-bar">Difficulty Level</label>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-label="Basic example" style="width: <?php $l1 = ceil($dl['dl'])*20; echo $l1; ?>%; background-color:#15252B" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="card-text"><?php echo substr($row['course_des'], 0, 50) . '...'; ?></p>
                        <a href="course_des.php?course_id=<?php echo $row['id']; ?>& page= 1" class="btn" style="background-color:#15252B; color:white">Details</a>
                        <p class="card-text"><small class="text-muted"><?php echo $row['prerequisite']; ?></small></p>
                    </div>
                </div>
            </div>
        <?php }}
        else{
            while ($row = mysqli_fetch_assoc($result3)) {
                $t = $row['id'];
                $sql5 = "SELECT AVG(difficulty_level) as dl FROM `course_review` WHERE course_id = '$t';";
                $result5 = mysqli_query($conn, $sql5);
                $dl = mysqli_fetch_assoc($result5);
            ?>
                <div class="col-md-3">
                    <div class="card">
                        <img src="img/<?php echo $row['img']; ?>" style="height: 100px;" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['course_title']; ?></h5>
                            <label for="progress-bar">Difficulty Level</label>
    
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-label="Basic example" style="width: <?php $l1 = ceil($dl['dl'])*20; echo $l1; ?>%; background-color:#15252B" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="card-text"><?php echo substr($row['course_des'], 0, 50) . '...'; ?></p>
                            <a href="course_des.php?course_id=<?php echo $row['id']; ?>& page= 1" class="btn" style="background-color:#15252B; color:white">Details</a>
                            <p class="card-text"><small class="text-muted"><?php echo $row['prerequisite']; ?></small></p>
                        </div>
                    </div>
                </div>
             <?php }}?>
    </div>

</div>
<?php
include('components/footer.php');
?>