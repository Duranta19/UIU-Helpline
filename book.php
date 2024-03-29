
<?php
$title = "Books";
include "components/header.php";
?>

<?php
include('components/dbConnect.php');
$query = "SELECT * FROM `book_details`";
$result = mysqli_query($conn, $query);

$s_flag = false;
// echo htmlspecialchars($_SERVER['PHP_SELF']);
if (isset($_GET['search_key'])) {
    $s_flag = true;
    $key = $_GET['search_key'];
    // echo $key;

    $sql3 = "SELECT * FROM `book_details` WHERE b_title LIKE '%$key%'";
    $result3  = mysqli_query($conn,$sql3);
}
?>

<header>
<link rel="stylesheet" href="book.css" />

</header>

<body>
    <div class="cover">
        <img src="img/oldbooks (1).jpg" alt="" class="img1">
        <h1>Book Library</h1>
    </div>
    <div align="center">
    <a class="btn btn-outline-dark m-3" href="uploadbook.php" role="button" style="text-decoration: none;"><img src="img/upload1.png" alt="" class="uploadimg" /><b>Upload Book</b> </a>

    </div>
 
    <br>
<div class="container">

<div class="row">
        <?php
        if($s_flag == false){
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <div class="col-md m-2">
                <div class="card " style="height: 350px;">
                    <img src="<?php echo "img/" . $row['b_img'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="img/<?php echo $row['b_pdf']; ?>" target="_blank"> <b><?php echo $row['b_title'] ?> </b></a>
                    </div>
                </div>
            </div>
        <?php
        }}
        else{
            while ($row = mysqli_fetch_assoc($result3)) {
                ?>
                    <div class="col-md m-2">
                        <div class="card ">
                            <img src="<?php echo "img/" . $row['b_img'] ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="img/<?php echo $row['b_pdf']; ?>" target="_blank"> <b><?php echo $row['b_title'] ?> </b></a>
                            </div>
                        </div>
                    </div>
        
            <?php }} ?>


    </div>
</div>
</body>


<?php
include "components/footer.php";
?>