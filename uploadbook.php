<?php

include('components/dbConnect.php');
if (isset($_POST['submit'])) {
    $book_title = $_POST['booktitle'];
    $udate = $_POST['upDate'];

    $book_pdf = $_FILES['bpdf']['name'];
    $pdf_type = $_FILES['bpdf']['type'];
    $pdf_size = $_FILES['bpdf']['size'];
    $pdf_loc_tem = $_FILES['bpdf']['tmp_name'];
    $pdf_store = 'img/' . $book_pdf;

    $bimg = $_FILES['bimg']['name'];
    $pic_loc = $_FILES['bimg']['tmp_name'];
    $upload_loc = 'img/' . $bimg;

    if ($book_title != "" && $book_pdf != "" && $bimg != "") {
        $sql = "INSERT INTO `book_details` (`b_title`, `b_pdf`, `b_img`) VALUES ('$book_title', '$book_pdf', '$bimg')";
        $result = mysqli_query($conn, $sql);
        move_uploaded_file($_FILES['bimg']['tmp_name'],"img/$bimg");
        move_uploaded_file($_FILES['bpdf']['tmp_name'], __DIR__ . "/img/" . $_FILES['bpdf']['name']);
    }

    header('Location: book.php');

   
}

?>

<?php
$title = "Community";
include "components/header.php";
?>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link rel="stylesheet" href="uploadbook.css" />
</head>

<body>
    <div class="container">
        <h3 align="center"><b>Upload Book</b> </h3> <hr>
        <form action="uploadbook.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Book Title</label>
                <input type="text" class="form-control" id="booktitle" name="booktitle" placeholder="Book Title" />
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Book PDF</label>
                <input class="form-control" type="file" id="formFile" name="bpdf" accept="PDF" />
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Image</label>
                <input class="form-control" type="file" id="formFile" name="bimg" />
            </div>
            <div class="d-grid gap-2 col-6 mx-auto" style="margin-bottom: 90px; margin-top:30px;">
                <button class="btn btn-outline-dark" type="submit" name="submit">Submit</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>

</html>
<?php
include "components/footer.php";
?>