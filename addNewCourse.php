<?php
include('components/dbConnect.php');
if(isset($_POST['add_course'])){
    $c_title = $_POST['course_title'];
    $c_code = $_POST['course_code'];
    $c_credit = $_POST['credit'];
    $c_des = $_POST['course_des'];
    $c_pqu = $_POST['prerequisite'];
    $c_offer = $_POST['offer'];

    $img_name = $_FILES['cover_pic']['name'];
    $img_loc = $_FILES['cover_pic']['tmp_name'];

    $upload_loc = 'img/' . $img_name;

    $sql = "INSERT INTO `course_details`(`course_title`, `course_code`, `course_des`, `prerequisite`, `offered_trimester`, `img`, `credit_hour`) 
            VALUES ('$c_title','$c_code','$c_des','$c_pqu','$c_offer','$img_name','$c_credit');";
    $result = mysqli_query($conn,$sql);
    if($result){
        move_uploaded_file($img_loc,$upload_loc);
        header("Location: courses.php");
    }
}
?>
<?php
$title = "Add New Course";
include('components/header.php')
?>
<div class="container w-50 mx-auti my-5">
    <form action="addNewCourse.php" method="post" enctype="multipart/form-data">
        <div class="row mb-3">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Course Title</label>
                <input type="text" name="course_title" class="form-control" id="formGroupExampleInput" placeholder="Title">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="course_code" class="form-control" placeholder="Course Code" aria-label="Course Code" require>
            </div>
            <div class="col">
                <input type="text" name="credit" class="form-control" placeholder="Credit Hour" aria-label="Credit Hour">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="prerequisite" class="form-control" placeholder="Prerequisite" aria-label="Prerequisite">
            </div>
            <div class="col">
                <input type="text" name="offer" class="form-control" placeholder="Offered Trimester" aria-label="Offered Trimester">
            </div>
        </div>
        <div class="row mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Course details</label>
            <textarea class="form-control" name="course_des" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="row mb-3">
            <label for="formFile" class="form-label">Upload Cover Photo</label>
            <input class="form-control" name="cover_pic" type="file" id="formFile" accept="image/png, image/jpeg">
        </div>
        <div class="row mb-3">
            <button class="btn" type="submit" name="add_course" style="background-color: #15252B; color:white; border-radius:25px; width:100px; height:auto; margin:auto;">Submit</button>
        </div>
    </form>
</div>

<?php
include('components/footer.php');
?>