
<?php
$title = "Books";
include "components/header.php";
?>

<?php
include('components/dbConnect.php');
$query = "SELECT * FROM `book_details`";
$result = mysqli_query($conn, $query);
?>




<head>
    <link rel="stylesheet" href="book.css" />
</head>
<body>
    <div class="cover">
        <img src="img/oldbooks (1).jpg" alt="" class="img1">
        <h1>Book Library</h1>

    </div>
    <a class="btn" href="uploadbook.php" role="button"><img src="img/upload1.png" alt="" class="uploadimg" /></a>
<div class="container">

<div class="row">
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <div class="col-md m-2">
                <div class="card ">
                    <img src="<?php echo "img/" . $row['b_img'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="img/<?php echo $row['b_pdf']; ?>" target="_blank"><?php echo $row['b_title'] ?></a>
                    </div>
                </div>
            </div>
        <?php
        }

        ?>
    </div>
</div>
</body>


<?php
include "components/footer.php";
?>