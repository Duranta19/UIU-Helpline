<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <div class="cover">
        <a href="dashboard.php"><img src="https://upload.wikimedia.org/wikipedia/en/thumb/6/6b/United_International_University_Monogram.svg/1200px-United_International_University_Monogram.svg.png" alt=""></a>
        <div class="logoutBtn">
            <!-- <input type="text" placeholder="Search"> -->
            <a class="btn btn-outline-danger" href="logout.php" style="color:white;">Logout</a>
        </div>
        <h1>UIU Helpline</h1> <br>
        <p>A solution center where students of UIU will find proper <br>
            guidelines, resources and help</p>


        <!-- search -->
        <div class="container">
            <form class="" method="GET" action="search.php">
                <div class="row">
                    <div class="col-10">
                        <input class="form-control me-2" type="search" name="search_key" placeholder="Search" aria-label="Search" style="background: transparent; color:white; margin-top: 20px; width: 45%; margin-left: 35%; border-radius:20px">
                    </div>
                    <div class="col-2">
                        <button class="btn btn-info" name="search" type="submit" style="margin-top: 20px; margin-left:-500px">Search</button>
                    </div>
                </div>


                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="select_type" id="inlineRadio1" value="community" required>
                    <label class="form-check-label" for="inlineRadio1">Community</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="select_type" id="inlineRadio2" value="course" required>
                    <label class="form-check-label" for="inlineRadio2">Course</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="select_type" id="inlineRadio3" value="book" required>
                    <label class="form-check-label" for="inlineRadio3">Books</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="select_type" id="inlineRadio3" value="questions" required>
                    <label class="form-check-label" for="inlineRadio3">Questions</label>
                </div>



            </form>
        </div>
    </div>
    <div class="features">
        <div class="feature1">
            <img src="https://library.uiu.ac.bd//assets/images/about/5.jpg " />
            <div class="item">
                <h1>Books</h1> <br>
                <p>Find all the hard copy and <br>
                    soft copy of academic books.</p> <br>
                <a href="book.php">View</a>
            </div>
        </div>
        <div class="feature2">
            <div class="item">
                <h1>Solve Problems </h1> <br>
                <p>If you are stuck into your assignment or any <br>
                    other problems visit here.</p> <br>
                <a href="questionBankList.php">View</a>
            </div>
            <img src="https://dam.athabascau.ca/GF7L4P38/as/3wqgpg2464kmsmxtmgnwbh/write-site-hero-banner-1080259016-retina?auto=webp" />
        </div>
        <div class="feature1">
            <img src="https://cdn.pixabay.com/photo/2015/01/08/18/26/man-593333__480.jpg" />
            <div class="item">
                <h1>Question Bank</h1> <br>
                <p> Find all the questions and solve <br>
                    of previous semester</p> <br>
                <a href="questionBank1.php">View</a>
            </div>
        </div>
        <div class="feature2">
            <div class="item">
                <h1>Course Review</h1> <br>
                <p>Find reviews of different courses and <br>
                    teaching method of faculties </p> <br>
                <a href="courses.php">View</a>
            </div>
            <img src="https://img.freepik.com/premium-photo/stack-books-with-magnifying-glass-highlighted-beige-background-world-book-day_616126-545.jpg" />
        </div>
        <div class="feature1">
            <img src="https://constructor.university/sites/default/files/styles/header_image/public/2022-11/header_international_business_administration.jpg?itok=IbhD2cYk" alt="">
            <div class="item">
                <h1>Community</h1> <br>
                <p>Build up a community with all the students. <br>
                    Post if you have any quarry and get the answer </p> <br>
                <a href="community.php">View</a>
            </div>
        </div>

    </div>


    <footer style="
            text-align: center;
            padding: 5px;
            background-color: #15252B;
            color: white;
        ">
        <p style="text-align: center; color: white;"><b>UIU Helpline</b></p>
        <p style="text-align: center; color: white;">www.uiuhelpline.com</p>
        <p style="text-align: center; color: white;">© ALL RIGHTS RESERVE BY TEAM VOID</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>