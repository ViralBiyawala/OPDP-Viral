<?php
session_start();
$_SESSION["pain"] = "Shoulder Pain"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Shoulder Pain</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
        integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Shoulder Pain</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="../Main_files/techInfection.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#foot">About</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Picture and Blog Section -->
    <div class="container">
        <h2 class="text-primary mt-5 text-center">Shoulder Pain Due to Technology
        </h2>
        <div class="row mt-5">
            <div id="carouselExampleIndicators" class="carousel slide col-md-5" data-ride="carousel"
                data-interval="5000">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../images/shoulder_1.png" class="d-block mx-auto border-c"
                            style="height:50vh;width:88vh;" alt="image1">
                    </div>
                    <div class="carousel-item">
                        <img src="../images/shoulder_2.jpeg" class="d-block mx-auto border-c"
                            style="height:50vh;width:88vh;" alt="image2">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <!-- Blog -->
            <div class="col-md-6">
                <div class="col-md-50   ">
                    <p>
                        
                        Shoulder pain is a common and growing problem due to the increasing use of technology in our daily lives.
                    </p>
                    <p>

                        The strain that we put on our shoulders while using laptops, tablets and cell phones can lead to pain and discomfort.
                    </p>
                    <p>

                        This type of strain on the muscles, tendons and ligaments can lead to chronic shoulder pain if not treated properly
                    </p>
                    </div>
                </div>
                </div>
        <details>
            <summary style="margin-top: 10px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:24px;"><u>Symptoms</u></summary>
            <ul>
                <li>Pain in the shoulder and neck area</li>
                <li>Stiffness in the shoulder and neck</li>
                <li>Headaches</li>
                <li>Numbness or tingling in the arms or hands</li>
                <li>Difficulty sleeping due to pain</li>
            </ul>
        </details>
        
        <div>
                <details>
                    <summary style="margin-top: 10px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:24px;"><u>Causes</u></summary>
                <!-- <h4 style="margin-top: 10px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"> <u> Causes</u></h4> -->
                <ul>
                    <li>
                        <b>Poor Posture:</b>
                        When we use electronic devices, we often slouch or hunch over, putting a lot of strain on our shoulders, neck, and back. This poor posture can cause pain in the shoulders and neck.
                    </li>
                    <li>
                        <b>Overuse:</b>Prolonged use of electronic devices can cause overuse of the muscles in the shoulders, leading to pain and discomfort.
                    </li>
                    <li>
                        <b>Lack of Movement:</b> When we use electronic devices, we often remain stationary for long periods, causing the muscles to become stiff and sore.
                        
                    </li>
                    <li>
                        <b>Strain on the Neck:</b>Looking down at a screen for extended periods of time can cause strain on the neck, leading to shoulder pain.
                    </li>
                </ul>
            </details>

                <details>
                    <summary style="margin-top: 10px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:24px;"><u>Precautions</u></summary>
                    <ul>
                        <li><b> Maintain Good Posture:</b>Sit up straight, keep your shoulders back, and make sure your screen is at eye level.</li>
                        <li><b> Take Breaks:</b>Take frequent breaks to stretch and move around to prevent stiffness in the muscles.</li>
                        <li><b> Exercise Regularly:</b> Regular exercise can help to strengthen the muscles in the shoulders and neck, reducing the risk of pain and discomfort.</li>
                        <li><b> Ergonomic Devices:</b>Use ergonomic devices such as a standing desk or an ergonomic keyboard and mouse to reduce strain on the muscles.</li>
                        <li><b> Adjust Your Device:</b>Adjust the brightness and font size of your device to reduce strain on your eyes, which can also help to reduce neck and shoulder pain</li>
                        
            </ul>
        </details>
           
        </div>
    </div>

    <!-- Optional Interactivity -->
    <div class="container my-5">
        <div class="row">
            <!-- Comment -->
            <div class="col-md-12">
                <div class="card bg-light">
                    <div class="card-header">
                        <h3>FeedBack</h3>
                    </div>
                    <div class="card-body">
                    <form method="post" action="dataentry.php">
                            <div class="form-group">
                                <label for="commentInput">Give a FeedBack:</label>
                                <textarea class="form-control" name="inp"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional Footer -->
    <footer class="bg-dark py-3" id="foot">
        <p class="text-center text-white">
            &copy; Picture and Blog Page 2023
        </p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>