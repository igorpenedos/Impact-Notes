<!DOCTYPE html>
<html lang="en" id="top">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
    <link rel="stylesheet" href="./domain.css" />
    <link rel="stylesheet" href="./Development.css" />
    <script src="./domain.js"></script>
    <title>Domain</title>
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
    <div class="container-fluid">
        <div class="row" id="content">
            <div class="col text-center" id="title">Domains</div>
            <div class="w-100"></div>
            <?php
            $servername = "sql307.epizy.com";
            $username = "epiz_27401685";
            $password = "cfT7nXzEVh";
            $database = "epiz_27401685_domains";
            $conn = mysqli_connect($servername, $username, $password, $database);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            $sql="SELECT `name`, `location`, `unlock`, `elements`, `finish` FROM `domain` WHERE 1";
            $result=$conn->query($sql);
            if ($result) {
                while($row = $result->fetch_assoc()) {
                    $name = $row['name'];
                    $location = $row['location'];
                    $unlock = $row['unlock'];
                    $elements = $row['elements'];
                    $finish = $row['finish'];
                    $smlName = str_replace(' ', '', $name);
                    $array = explode( " / ", $finish);
                    echo '<div class="col p-0 m-0 text-center">
                            <div class="dropDown" onclick="showC('."'". $smlName."'".')">
                                <h1 class="bTitle">'. $name.'</h1>
                            </div>
                            <div class="contentDrop" id="'. $smlName.'">
                                <hr>
                                <p class="sTitle">Location</p>'
                                . $location.
                                '<p class="sTitle">How to Unlock</p>
                                <p>Reach Adventure Rank '. $unlock.'</p>
                                <p class="sTitle">Best Element to Use</p>
                                <p>'. $elements.'</p>
                                <p class="sTitle">'. $array[0].'</p>';
                                for ($x = 1; $x < count($array); $x++){
                                    echo $array[$x];
                                    echo "<br>";
                                }
                                echo '<hr>
                            </div>
                        </div>
                        <div class="w-100"></div>';
                }
            }
            ?>
            <div class="Nav-Buttons text-center" id="collapse" onclick="closeA()">Collapse</div>
            <div class="Nav-Buttons text-center" id="GoToTop"><a href="#top">Go To Top</a></div>
        </div>
    </div>
</body>
</html>