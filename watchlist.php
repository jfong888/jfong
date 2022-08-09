<?php
   session_start();
   $_SESSION['watchanimepage'] = array(
     'anime' => $_POST['anime'],
     'episode' => $_POST['episode'],
     'episodename' => $_POST['episodename']
   );
   class Session extends Controller{
    public function StoreSession($session = null, $table='watchanimepage'){
    if($this->con != null){
        if($session != null){
            $columns = implode(',',array_keys($session));
            $values = " ' ".implode("','".array_values($session))." ' ";
            $query_sql = "INSERT INTO  watchanimepage VALUES ('anime', 'episode', 'episodename')";
            $results = $this->con->query($query_sql);
            if ($results){
                echo "Sesssion Data inserted Sucessfully";
            }
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Carter+One">
    <title>Watchlist - Gojo Anime</title>
</head>
<body>
    <header>
        <ul class="nav nav-pills nav-fill gap-2 p-1 small bg-gray border rounded-5 shadow-sm" id="pillNav2" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link rounded-5 active" id="watchlist-btn" data-bs-toggle="tab" type="button" role="tab" aria-selected="true">Watchlist</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link rounded-5" id="about-btn" data-bs-toggle="tab" type="button" role="tab" aria-selected="false" tabindex="-1">About</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link rounded-5" id="contact-btn" data-bs-toggle="tab" type="button" role="tab" aria-selected="false" tabindex="-1">Contact</button>
            </li>
        </ul>
    </header>

    <main>
        <div id="watchlist">
           
            <div id="searchbar">
                 <select id="newanime" onclick="populateanime()">
                    <option selected="selected">Choose One</option>
                    <?php
                       require "Anime_Array.php";
                    ?>
                </select>
            </div>

            <div class="card">
                <img src="favicon.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title" id="Anime">Show Title</h5>
                    <p class="card-text" id="Episode">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <p class="card-text" id="Episode Name">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>

        <!--about us page-->
        <section id="about">
            <div id="about-1">
                <h1>About Us</h1>
                <p>At Gojo Anime, we aspire to create a anime database and community for the world to use.   </p>
            </div>
            <!--text box content-->
            <div id="about-2">
                <div class="content-box-lg">
                    <div class="container-us">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="about-item text-center">
                                    <h3>Our Mission</h3>
                                    <hr>
                                    <p>We help everyone belong. That's our mission. What have you watched? Create your personalized list from thousands of animes on your favourite anime database.
                                        Stay up to date? Use your list to organize and track what animes you have completed, your progress, what you plan to watch and much more.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="about-item text-center">
                                    <h3>Our Story</h3>
                                    <hr>
                                    <p>Uniting through anime. As anime enthusiasts, we created this database to allow other anime fans who devote their time to have an ideal place to store their data.
                                        This idea was born after the inconvenience of shared streaming sites that are incapable of maintaing various users current episodes watched.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="about-item text-center">
                                    <h3>Our Vission</h3>
                                    <hr>
                                    <p>Our Vission reflects our commitment to diversity & inclusion. By creating an account with Gojo Anime we aspire to give anime watchers the convience and security to store their data with the ability
                                        without having to worry about missing out on your current episode/anime you are on. We have a growth mindset commited to constant forward progress.  </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--contact us page-->
        <div id="contact">
            <div class="contact-us">
                <div class="title">
                    <h1>Contact us</h1>
                </div>
                <div class="form">
                    <div class="form-items">
                    <input type="text" class="input" placeholder="Your Username">
                    <i class="fas fa-user"></i>
                    </div>
                    <div class="form-items">
                    <input type="text" class="input" placeholder="Your Email">
                    <i class="fas fa-envelope"></i>
                    </div>
                    <div class="form-items">
                    <textarea class="input message" cols="30" rows="10" placeholder="Enter Message..."></textarea>
                    </div>
                </div>
                
                <div class="btn">Submit
                    <i class="fas fa-arrow-right"></i>
                </div>
            </div>
        </div>
    </main>

    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <img id="footer-logo" src="favicon.jpg" width="8%" alt="Logo of the website.">
                <span class="mb-3 mb-md-0 text-muted">&copy; 2022 Gojo Anime, Inc</span>
            </div>

            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><a class="footer-links" href="#">Watchlist</a></li>
                <li class="ms-3"><a class="footer-links" href="#">About</a></li>
                <li class="ms-3"><a class="footer-links" href="#">Contact</a></li>
            </ul>
        </footer>
    </div>

    <canvas class="background"></canvas>

    <!--scripts-->
    <script src="watchlist.js"></script>
    <script src="populate_anime.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="particles.min.js"></script>
</body>
</html>
