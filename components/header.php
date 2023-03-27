<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title><?php echo $title ?></title>
    <style>
        .hov:hover {
            font-weight: 200;
            background-color: rgb(28, 56, 56);
        }


        a {
            color: #141619;
            text-decoration: underline;
        }

        footer {
            text-align: center;
            padding: 3px;
            background-color: #15252B;
            color: white;
        }
    </style>
</head>

<body>

    <div class="header">
        <nav class="navbar navbar-expand-lg" style="background-color: #15252B;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="https://upload.wikimedia.org/wikipedia/en/thumb/6/6b/United_International_University_Monogram.svg/1200px-United_International_University_Monogram.svg.png" alt="" width="35" height="30">
                </a>
                <a class="navbar-brand" href="dashboard.php" style="color: white;"><b>UIU Helpline</b></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <img src="https://www.svgrepo.com/show/51813/menu.svg" alt="" height="30" width="20">
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active hov" aria-current="page" href="dashboard.php" style="color: white;">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link hov" href="community.php" style="color: white;">Community</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link hov" href="#" style="color: white;">Course Review</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link hov" href="#" style="color: white;">Question Bank</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link hov" href="#" style="color: white;">Books</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link hov" href="#" style="color: white;">Q/A</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search" method="GET" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                        <input class="form-control me-2" type="search" name="search_key" placeholder="Search" aria-label="Search" style="background: transparent; color: white;">
                        <button  class="btn btn-outline-success" name="search" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>