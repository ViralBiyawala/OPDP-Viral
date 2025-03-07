<?php
session_start();
$_SESSION["pain"] = "Headache"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Headache</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
        integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Headache</a>
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
                    <a class="nav-link" href="about.html">About</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Picture and Blog Section -->
    <div class="container">
        <h2 class="text-primary mt-5 text-center">The Headache of Today's Technology</h2>
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
                        <img src="../images/headache1.jpg" class="d-block mx-auto border-c"
                            style="height:50vh;width:88vh;" alt="image1">
                    </div>
                    <div class="carousel-item">
                        <img src="../images/headache3.jpg" class="d-block mx-auto border-c"
                            style="height:50vh;width:88vh;" alt="image2">
                    </div>
                    <div class="carousel-item">
                        <img src="../images/headache2.jpg" class="d-block mx-auto border-c"
                            style="height:50vh;width:88vh;" alt="image3">
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
                        <b> <span style="font-family: Verdana, Geneva, Tahoma, sans-serif;font-size: larger;">H</span>eadaches
                            </b> caused by technology, also known as "<b>Tech-neck</b>" or "<b>Computer vision syndrome</b>"
                    </p>
                    <p>
                        Today's technology has brought about numerous advancements and
                        convenience in our daily lives. However, it has also come with its
                        own set of problems, one of which is the headache.
                      </p>
                    <p>
                        The constant use of electronic devices, such as smartphones and
                      laptops, emit blue light which disrupts our natural sleep patterns
                      and causes eye strain. This can lead to headaches, fatigue, and even
                      migraines.
                    </p>
                </div>
            </div>
            <div class="m-3 my-0">
            <p>
                Additionally, the constant stimulation and information overload from
                social media and the internet can cause stress and anxiety, leading
                to headaches.
            </p></div>
                </div>
        <details>
            <summary style="margin-top: 10px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:24px;"><u>Symptoms</u></summary>
            <ul>
                <li> Eye strain and fatigue </li>
                <li> Blurred or double vision </li>
                <li> Dry, irritated, or red eyes </li>
                <li> Neck, shoulder, and back pain </li>
                <li> Headache or migraine </li>
                <li> Light sensitivity or glare intolerance </li>
                <li> Decreased focus or concentration </li>
            </ul>
        </details>
        
        <div>
                <details>
                    <summary style="margin-top: 10px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:24px;"><u>Causes</u></summary>
                <ul>
                    <li>
                        <b>Eyestrain:</b>
                             Prolonged use of computers, smartphones, and other digital devices can cause eye strain, which can lead to headaches. This is because the eyes are forced to focus on a small, bright screen for long periods of time, which can cause the muscles in the eyes to become fatigued.
                        </li>
                        <li>
                            <b>Bluelight:</b>: The blue light emitted by digital screens can disrupt the body's natural sleep-wake cycle and cause headaches. This is because blue light suppresses the production of melatonin, a hormone that regulates sleep.
                        </li>
                        <li>
                            <b>Poorposture:</b>
                              Prolonged use of technology, such as sitting in front of a computer for extended periods of time, can cause poor posture and muscle tension, which can lead to headaches.
                        </li>
                        <li>
                            <b>Noise pollution:</b>
                             Noise pollution from technology such as smartphones, laptops, and other electronic devices can cause headaches.
                        </li>
                        <li>
                            <b>Stress:</b>
                            Stress: Technology can also cause stress and anxiety, which can lead to headaches. Social media and the constant need to check for notifications and updates can create a sense of pressure, leading to headaches.
                        </li>
                        <li>
                            <b>Lack of physical activity:</b>
                             Spending too much time in front of screens can make people inactive, which can contribute to headaches.
                        </li>
                </ul>
            </details>

                <details>
                    <summary style="margin-top: 10px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:24px;"><u>Precautions</u></summary>
                    <ul>
                        <li>
                            <b>Take frequent breaks:</b>
                            Spending long hours in front of screens can strain your eyes and cause headaches. It's recommended to take a break every 20-30 minutes and look away from the screen for a few minutes.
                            </li>
                            <li>
                                <b>Adjust your screen:</b> Make sure your screen is positioned correctly and the brightness is adjusted to a comfortable level. This can help reduce eye strain and minimize headaches.
                            </li>
                            <li>
                                <b>Exercise regularly:</b>
                                Regular physical activity can help prevent headaches caused by technology. Exercise improves blood flow and reduces stress, which are both factors that can contribute to headaches.
                            </li>
                            <li>
                                <b>Noise pollution:</b>
                                 Noise pollution from technology such as smartphones, laptops, and other electronic devices can cause headaches.
                            </li>
                            <li>
                                <b>Good posture:</b>
                                Maintaining good posture while using technology can help reduce strain on the neck, back, and shoulders, which can lead to headaches.                </li>
                            <li>
                                <b>Limit screen time: </b>
                                Reducing the amount of time you spend on technology can help prevent headaches. Consider setting limits for yourself or engaging in other activities that do not involve screens.
                            </li>
                            <li>
                                <b>Hydrate regularly: </b>
                                Reducing the amount of time you spend on technology can help prevent headaches. Consider setting limits for yourself or engaging in other activities that do not involve screens.
                            </li>
                            <li>
                                <b>Get enough sleep:</b>
                                Sleep deprivation can also cause headaches, so make sure to get enough sleep each night.
                            </li>
                            <li>
                                <b> Seek medical attention: </b>
                               If you are experiencing frequent headaches, it's important to seek medical attention. A doctor can help determine the underlying cause and provide appropriate treatment
                            </li>
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