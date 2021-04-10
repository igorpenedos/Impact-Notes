<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="recipe.css" /> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
    <link rel="stylesheet" href="Development.css" />
    <meta charset="UTF-8" />
    <title>Recipe</title>
        <!-- Nav Scripts -->
    <script
    src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"
    ></script>
    <script
    src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"
    ></script>
</head>
<body>
    <?php
        $servername = "sql307.epizy.com";
        $username = "epiz_27401685";
        $password = "cfT7nXzEVh";
        $database = "epiz_27401685_recipes";
        $conn = mysqli_connect($servername, $username, $password, $database);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    ?>
    <div class="container-fluid">
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
        <div class="row" id="content">
            <div class="col text-center" id="title">Recipes</div>
            <div class="w-100"></div>
            <?php
            $sql="SELECT name, stars, bonus, ingredients FROM recipe";
            $result=$conn->query($sql);
            if ($result) {
                $trackNum = 1;
                while($row = $result->fetch_assoc()) {
                    $name = $row['name'];
                    $stars = $row['stars'];
                    $bonus =  $row['bonus'];
                    $array = explode( " / ", $row['ingredients']);
                    echo "<div class='col-xl-6 col-sm-12 pb-5 boxC'>
                            <div class='container-fluid cB'>
                                <div class='row'>
                                    <div class='col-3'>
                                        <img src='". $name.".png' width='100%' alt='food'></img>
                                    </div>
                                    <div class='col-9'>
                                        <h1>". $name."</h1>";
                                        for ($x = 0; $x < $row['stars']; $x++){
                                            echo '<img id="star" src="star.png" class="imgS" />';
                                        }
                                        echo "<p>BONUS:</p>
                                        <p>". $bonus. "</p>
                                        <p>Ingredients:</p>";
                                        for ($x = 0; $x < count($array); $x++){
                                            $n = explode(" ", $array[$x]);
                                            echo "<p class='nF'>". $n[0]."</p>";
                                            echo '<img src="'. $n[1].'.png" class="food">';
                                        }
                                        
                                    echo "</div>
                                </div>
                            </div>
                        </div>";
                    if (($trackNum%2) == 0){
                        echo '<div class="w-100"></div>';
                    }
                    $trackNum++;
                }
            }
            ?>
        </div>
    </div>
</body>
</html>            