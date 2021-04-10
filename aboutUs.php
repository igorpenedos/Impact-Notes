<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="Development.css">
    <link rel="stylesheet" href="aboutUs.css">
    <title>About Us</title>
    <!-- Nav Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</head>

<body>
    <?php
    $servername = "sql307.epizy.com";
    $username = "epiz_27401685";
    $password = "cfT7nXzEVh";
    $database = "epiz_27401685_reviews";
    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    if(isset($_POST['submit'])) {
            $sql = "INSERT INTO `review`(`name`, `rating`, `comment`) VALUES ('". $_POST["name"]."','". $_POST["rating"]."','". $_POST["comment"]."')";
            $conn->query($sql);
        }
    ?>
    <!-- Nav-bar -->
    <nav class="navbar navbar-expand-lg" role="navigation">
        <a class="nav-item navbar-brand" href="index.html">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDropMenu"
            aria-controls="navbarDropMenu" aria-expanded="false" aria-label="Toggle navigation">
            |||
        </button>
        <div class="collapse navbar-collapse" id="navbarDropMenu">
            <ul class="navbar-nav">
                <li class="nav-item active mx-2">
                    <a class="nav-link" href="aboutUs.php">About Us
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="map.html">Map</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="elements.html">Elements</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="characters.php">Characters</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="recipe.php">Recipes</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="domain.php">Domains</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="eventPage.html">Events</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="weak.html">Monsters</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid p-5">
        <div class="row">
            <div class="col-12">
                <h1>About Us</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-12">
                <h4>Abdullah Aftab</h4>
                <p>Student #: 500948702</p>
                <p>GitHub: <a href="https://github.com/KiwiMonkey">https://github.com/KiwiMonkey</a></p>
            </div>
            <div class="col-xl-4 col-12">
                <h4>Samee Chowdhury</h4>
                <p>Student #: 500965772</p>
                <p>GitHub: <a href="https://github.com/oceansam">https://github.com/oceansam</a></p>
            </div>
            <div class="col-xl-4 col-12">
                <h4>Igor Goncalves Penedos</h4>
                <p>Student #: 500898291</p>
                <p>GitHub: <a href="https://github.com/igorpenedos">https://github.com/igorpenedos</a></p>
            </div>
        </div>
        <hr></hr>
        <h4>Let Us Know About Your Visit</h4>
        <div class="row">
            <div class="col">
                <div class="form-group">
                <form action="aboutUs.php" method="post">
                    Name: <input type="text" name="name" required><br><br>
                    Rating: <input type="text" name="rating" required><br><br>
                    Comment:<br><br>
                    <textarea rows="5" class="md-textarea form-control w-50" name="comment"></textarea><br><br>
                    <input type="submit" name="submit">
                </form>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col comment">
                <h3>Reviews</h3>
                <?php
                    $sql="SELECT `name`, `rating`, `comment` FROM `review` WHERE 1";
                    $result=$conn->query($sql);
                    if ($result) {
                        while($row = $result->fetch_assoc()) {
                            echo "<hr>";
                            echo "<h4 class='mt-3 p-1'>". $row['name']. " ". $row['rating']."</h4>";
                            echo "<p class='p-1'>".$row['comment'] ."</p>";
                            echo "<hr>";
                        }
                    }else{
                        echo "0 results";
                    }
                ?>
                    
            </div>
        </div>
    </div>
</body>

</html>