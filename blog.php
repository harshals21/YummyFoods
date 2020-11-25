<?php

    session_start();

?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/utils.css">
    <link rel="stylesheet" href="css/blog.css">
    <link rel="stylesheet" href="css/mobile.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>YummyFoods | Blog</title>
</head>

<body>

    <nav class="navbar navbar-light" style="background-color: rgb(247, 235, 221)">
        <a class="navbar-brand">Hello! <h1> <?php echo $_SESSION['Uname']; ?></h1></a>
        <!-- <form class="form-inline"> -->
          <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
          <button onclick="location.href='logout.php'" class="btn btn-danger" type="submit">Log Out</button>
        <!-- </form> -->
    </nav>

    <div class="m-auto content max-width-1 my-2">
        <div class="content-left">
            <h1>The heaven for food bloggers</h1>
            <p>YummyFoods is a website which shows you amazing blogs on food and you
                can get a good amount of knowledge from here!</p>
            <p>We wish that you get inspire and motivated reading our blogs and share your thoughts about it. It's our attempt to contribute to the food blogging community and reach out to the millions of foodies out there.Don't miss this great opportunity reading this amazing blogs on varities of food by world-class bloggers. So, signup and start your blogging journey with us as we would help you in documenting your journey wonderfully..😃 So, what are you waiting for? Get started with us on journey of food blogging.</p>
        </div>
        <div class="content-right">
            <img src="assests/img/logo.png" alt="YummyFoods">
        </div>
    </div>

    <div class="max-width-1 m-auto">
        <hr>
    </div>
    <div class="home-articles max-width-1 m-auto font2">
        <h2>Featured Blogs</h2>
    
        <div class="home-article">
            <div class="home-article-img">
                <img src="assests/img/1.png" alt="article">
            </div>
            <div class="home-article-content font1">
                <a href="./blogpost.html">
                    <h3>Classic Sage and Sausage Stuffing.</h3>
                </a>

                <div>Vivek Vadhiya</div>
                <span>07 November | 10 min read</span>
            </div>
        </div>
        <div class="home-article">
            <div class="home-article-img">
                <img src="assests/img/2.jpg" alt="article">
            </div>
            <div class="home-article-content font1">
                <a href="./blogpost.html">
                    <h3>The Ultimate Green Bean Casserole.</h3>
                </a>

                <div>Harshal Shirke</div>
                <span>21 October | 8 min read</span>
            </div>
        </div>
        <div class="home-article">
            <div class="home-article-img">
                <img src="assests/img/3.jpg" alt="article">
            </div>
            <div class="home-article-content font1">
                <a href="./blogpost.html">
                    <h3>Festive Holiday Dish in 1 hour.</h3>
                </a>

                <div>Saumya Thakkar</div>
                <span>03 October | 10 min read</span>
            </div>
        </div>
        <div class="home-article">
            <div class="home-article-img">
                <img src="assests/img/4.jpg" alt="article">
            </div>
            <div class="home-article-content font1">
                <a href="./blogpost.html">
                    <h3>Pie Crust- Buttery and Flaky!</h3>
                </a>

                <div>Vivek Vadhiya</div>
                <span>14 September | 15 min read</span>
            </div>
        </div>
        <div class="home-article">
            <div class="home-article-img">
                <img src="assests/img/5.jpg" alt="article">
            </div>
            <div class="home-article-content font1">
                <a href="./blogpost.html">
                    <h3>Mac and Cheese Bread Bites.</h3>
                </a>

                <div>Harshal Shirke</div>
                <span>16 August | 5 min read</span>
            </div>
        </div>
        <div class="home-article">
            <div class="home-article-img">
                <img src="assests/img/6.jpg" alt="article">
            </div>
            <div class="home-article-content font1">
                <a href="./blogpost.html">
                    <h3>4 Ways to think Big, but Cook Small.</h3>
                </a>

                <div>Saumya Thakkar</div>
                <span>03 June | 6 min read</span>
            </div>
        </div>
        

    </div>

    <div class="footer">
        <p>Copyright &copy; YummyFoods </p>
    </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>