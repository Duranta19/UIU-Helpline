<?php
include('components/dbConnect.php');
$c_id = $_GET['course_id'];
$userId = "1";

$sql = "SELECT * FROM `course_details` WHERE id = '$c_id';";
$result = mysqli_query($conn, $sql);

$data = mysqli_fetch_assoc($result);

if (isset($_POST['review_submit'])) {
    $level = $_POST['level'];
    $review = $_POST['review'];

    $sql2 = "INSERT INTO `course_review`(`course_id`, `user_id`, `review`, `difficulty_level`) 
            VALUES ('$c_id','$userId','$review','$level')";
    $result2 = mysqli_query($conn, $sql2);
}
?>
<?php
$title = "Course Details";
include('components/header.php');
?>
<!-- Course Details -->
<div class="containeer">
    <div class="row">
        <div class="col-md-4 p-4">
            <h4><?php echo $data['course_title'] ?></h4>
            course code: <?php echo $data['course_code'] ?> <br>
            Credit Hour: <?php echo $data['credit_hour'] ?> <br>
            Prerequisite : <?php echo $data['prerequisite'] ?> <br>
            Offered Trimester: <?php echo $data['offered_trimester'] ?> <br>
            </p>
            <label for="progress-bar">Difficulty Level</label>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-label="Basic example" style="width: 25%; background-color:#15252B" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <form action="course_des.php?course_id=<?php echo $c_id;?>" method="post">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: #15252B; color: white;">
                    Write a review
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="--bs-modal-width: 700px;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Write a Review</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <h4>Set Difficulty Level</h4>
                                <div class="row">
                                    <div class="col" style="display:flex">
                                        <input class="form-check-input" type="radio" name="level" id="level" value="1">
                                        <label class="form-check-label" for="flexRadioDisabled">Very Easy</label>
                                    </div>
                                    <div class="col" style="display:flex">
                                        <input class="form-check-input" type="radio" name="level" id="level" value="12">
                                        <label class="form-check-label" for="flexRadioDisabled">Easy</label>
                                    </div>
                                    <div class="col" style="display:flex">
                                        <input class="form-check-input" type="radio" name="level" id="level" value="3">
                                        <label class="form-check-label" for="flexRadioDisabled">Medium</label>
                                    </div>
                                    <div class="col" style="display:flex">
                                        <input class="form-check-input" type="radio" name="level" id="level" value="4">
                                        <label class="form-check-label" for="flexRadioDisabled">Hard</label>
                                    </div>
                                    <div class="col" style="display:flex">
                                        <input class="form-check-input" type="radio" name="level" id="level" value="5">
                                        <label class="form-check-label" for="flexRadioDisabled">Very Hard</label>
                                    </div>
                                </div>
                                <div class="row p-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">
                                        <h4>Write Review</h4>
                                    </label>
                                    <textarea class="form-control" name="review" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <!-- <div class="row">
                                    <input type="submit" name="review_submit" class="btn btn-primary" value="Save">
                                </div> -->

                            </div>
                            <div class="modal-footer">

                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <input type="submit" name="review_submit" class="btn btn-primary" value="Save">

                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-8 p-4">
            <h4>Despription</h4>
            <p><?php echo $data['course_des'] ?></p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card  shadow p-3 mb-5 bg-body rounded">
                <div class="card-title" style="display:inline-flex">
                    <img src="https://png.pngtree.com/png-vector/20220709/ourmid/pngtree-businessman-user-avatar-wearing-suit-with-red-tie-png-image_5809521.png" alt="" style="height: 50px; width:50px; border-radius:50%">
                    <h3>User name</h3>
                </div>
                <div class="card-body">
                    <h5>Date</h5>
                    <label for="progress-bar">Difficulty Level</label>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-label="Basic example" style="width: 25%; background-color:#15252B" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h5 class="card-title">Review</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero nostrum cum recusandae iusto aliquid unde culpa optio voluptatibus dolorum at illo, quaerat vitae amet, nulla laborum. Beatae sed et, porro pariatur facilis quis laudantium nemo quaerat! Animi eum nemo ipsum voluptatibus cum consectetur obcaecati dignissimos, placeat illo ex voluptatum repellendus!</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card  shadow p-3 mb-5 bg-body rounded">
                <div class="card-title" style="display:inline-flex">
                    <img src="https://png.pngtree.com/png-vector/20220709/ourmid/pngtree-businessman-user-avatar-wearing-suit-with-red-tie-png-image_5809521.png" alt="" style="height: 50px; width:50px; border-radius:50%">
                    <h3>User name</h3>
                </div>
                <div class="card-body">
                    <h5>Date</h5>
                    <label for="progress-bar">Difficulty Level</label>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-label="Basic example" style="width: 25%; background-color:#15252B" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h5 class="card-title">Review</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero nostrum cum recusandae iusto aliquid unde culpa optio voluptatibus dolorum at illo, quaerat vitae amet, nulla laborum. Beatae sed et, porro pariatur facilis quis laudantium nemo quaerat! Animi eum nemo ipsum voluptatibus cum consectetur obcaecati dignissimos, placeat illo ex voluptatum repellendus!</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card  shadow p-3 mb-5 bg-body rounded">
                <div class="card-title" style="display:inline-flex">
                    <img src="https://png.pngtree.com/png-vector/20220709/ourmid/pngtree-businessman-user-avatar-wearing-suit-with-red-tie-png-image_5809521.png" alt="" style="height: 50px; width:50px; border-radius:50%">
                    <h3>User name</h3>
                </div>
                <div class="card-body">
                    <h5>Date</h5>
                    <label for="progress-bar">Difficulty Level</label>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-label="Basic example" style="width: 25%; background-color:#15252B" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h5 class="card-title">Review</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero nostrum cum recusandae iusto aliquid unde culpa optio voluptatibus dolorum at illo, quaerat vitae amet, nulla laborum. Beatae sed et, porro pariatur facilis quis laudantium nemo quaerat! Animi eum nemo ipsum voluptatibus cum consectetur obcaecati dignissimos, placeat illo ex voluptatum repellendus!</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item"><a class="page-link" href="#" style="color:#15252B;">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#" style="color:#15252B;">1</a></li>
            <li class="page-item"><a class="page-link" href="#" style="color:#15252B;">2</a></li>
            <li class="page-item"><a class="page-link" href="#" style="color:#15252B;">3</a></li>
            <li class="page-item"><a class="page-link" href="#" style="color:#15252B;">Next</a></li>
        </ul>
    </nav>
</div>
<?php
include('components/footer.php');
?>