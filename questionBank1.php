<?php
$title = "Question Bank";
include "components/header.php";
?>
<header>
    <style>
        .box {
    border-radius: 10px;
    padding: 30px;
    position: relative;
    background-color: rgb(226, 227, 229);
    transition: 0.3s;
    border-radius: 20px;
    margin-top: 20px;
    margin: 50px;
    display: flex;
}

.button {
    display: flex;
    margin-left: 700px;
    align-items: center;
    justify-content: center;
}

.card-button {
    width: 150px;
    height: 40px;
    align-items: center;
    justify-content: center;
    background-color: rgb(7, 52, 43);
    color: white;
    size: 40px;
    border-radius: 20px;
}


.Course-info h1{
    font-size: 30px;
}

.pagination {
    margin-top: 300px;
    margin: 50px;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }

li a:hover:not(.active) {
    background-color: #121f19;
  }

  .active{
    background-color: rgb(27, 24, 24)
}
    </style>
</header>
<body>
    <div>
        <div class="box">
            <div class="Course-info">
                <h1>Basic Python MCQ(CSE 213)</h1>
                <p>10 Basic question about Python each of the question carries 1 marks.</p>
                <p>Total Marks: 10</p>
            </div>
            <div class="button">
                <button class="card-button">View</button>
            </div>
        </div>

        <div class="box">
            <div class="Course-info">
                <h1>Basic Python MCQ(CSE 213)</h1>
                <p>10 Basic question about Python each of the question carries 1 marks.</p>
                <p>Total Marks: 10</p>
            </div>
            <div class="button">
                <button class="card-button">View</button>
            </div>
        </div>
        
        <div class="box">
            <div class="Course-info">
                <h1>Basic Python MCQ(CSE 213)</h1>
                <p>10 Basic question about Python each of the question carries 1 marks.</p>
                <p>Total Marks: 10</p>
            </div>
            <div class="button">
                <button class="card-button">View</button>
            </div>
        </div>
        <div class="box">
            <div class="Course-info">
                <h1>Basic Python MCQ(CSE 213)</h1>
                <p>10 Basic question about Python each of the question carries 1 marks.</p>
                <p>Total Marks: 10</p>
            </div>
            <div class="button">
                <button class="card-button">View</button>
            </div>
        </div>
    </div>

    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#prev">Prev</a></li>
            <li class="page-item"><a class="page-link" class="active" href="#1">1</a></li>
            <li class="page-item"><a class="page-link" href="#2">2</a></li>
            <li class="page-item"><a class="page-link" href="#3">3</a></li>
            <li class="page-item"><a class="page-link" href="#4">4</a></li>
            <li class="page-item"><a class="page-link" href="#5">5</a></li>
            <li class="page-item"><a class="page-link" href="#6">6</a></li>
            <li class="page-item"><a class="page-link" href="#7">7</a></li>
            <li class="page-item"><a class="page-link" href="#8">8</a></li>
            <li class="page-item"><a class="page-link" href="#9">9</a></li>
            <li class="page-item"><a class="page-link" href="#Next">Next</a></li>
        </ul>
    </nav>
</body>

<?php
include "components/footer.php";
?>