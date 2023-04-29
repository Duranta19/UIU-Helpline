<?php
include('components/dbConnect.php');
$query = "SELECT * FROM `book_details`";
$result = mysqli_query($conn, $query);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link rel="stylesheet" href="book.css" />
</head>
<body>
    <div class="cover">
        <img src="img/oldbooks (1).jpg" alt="" class="img1">
        <h1>Book Library</h1>

    </div>
    <a class="btn" href="uploadbook.php" role="button"><img src="img/upload1.png" alt="" class="uploadimg" /></a>

    <div class="row row-cols-md-0 g-0">
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <div class="col-md-2 py-2">
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



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>

</html>