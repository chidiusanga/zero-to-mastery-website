<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy"
        crossorigin="anonymous">
    <link href="assets/css/style.css" type="text/css" rel="stylesheet">
    <link rel="icon" type="image/png" href="assets/favicon.png" />
    <title>Zero to Mastery</title>
</head>

<body>

    <?php include_once('./navbar.php') ?>

    <header class="masthead text-center text-white d-flex">
        <div class="container my-auto">
            <div class="row">
                <hr>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                    <h2>
                        <strong>Zero to</strong>
                    </h2>
                    <h1 class="cover-title" class="text-uppercase">
                        <strong>Mastery Test</strong>
                    </h1>
                    <p class="DescriptionBG">The best and most complete course on Udemy to become a Web Developer today!</p>
                    <a id="enroll-button" class="btn btn-primary btn-xl js-scroll-trigger enroll-button" href="https://www.udemy.com/the-complete-web-developer-in-2018/?couponCode=SSACDWA">
                        <strong>ENROLL NOW!</strong>
                    </a>
                </div>
            </div>
        </div>
    </header>
 
    <!-- Intro Section with a video -->
    <section id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7">
                    <div class="p-5">
                        <div class="desktop-wrapper">
                            <div onclick="play();" class="playicon " id="vidwrap"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="p-5">
                        <div class="red-text text-center">
                            <h3>Become a Web Developer</h3>
                            <h2 class="display-4">Start Today!</h2>
                        </div>
                        <p>
                            <em>"The Complete Web Developer in 2018: Zero to Mastery"</em> is a complete full-stack web development
                            course, with the latest and most in-demand technologies, for anyone trying to learn web development
                            in 2018.
                            <br>
                            <br> Learn to code with us, join the community and practice the skills you gained from the course,
                            build up your portfolio by contributing to projects, and become a job ready web developer this
                            year.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="discordheader text-center text-white d-flex paral">
        <!-- Header Image -->
    </section>

    <!-- Intro Section with a widget -->
    <section id="about-discord">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="p-4">
                        <iframe class="embed-responsive-item" src="https://discordapp.com/widget?id=423464391791476747&theme=dark" width="350" height="500"
                            allowtransparency="true" frameborder="0"></iframe>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="p-5">
                        <div class="red-text text-center">
                            <h3>Join Our</h3>
                            <h2 class="display-4">Discord Community!</h2>
                        </div>
                        <div class="bg-light p-4 m-3">
                            We have created a Discord server for all the students of The Complete Web Developer in 2018, where you can:
                            <ul>
                                <li>Introduce yourself</li>
                                <li>Ask the community questions </li>
                                <li>Get help with exercises </li>
                                <li>Meet other students around the world </li>
                                <li>Learn how to answer questions </li>
                                <li>Learn from each other</li>
                            </ul>
                            I am very excited about this but it will only work if everybody helps each other out. I know it isn't for everybody, but
                            being able to ask questions and help others when they have questions is the best way to learn.
                            The Q&A section in the course will still be available and I will still answer every question.
                            However, the Discord server should give you faster replies from the community.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 text-center">
            <button type="button" class="btn btn-primary m-4" data-toggle="modal" data-target="#joinDiscord">Join Discord</button>
            <button type="button" class="btn btn-danger m-4" data-toggle="modal" data-target="#installingDiscord">Installing Discord</button>
            <button type="button" class="btn btn-primary m-4" data-toggle="modal" data-target="#usingDiscord">Using Discord</button>
        </div>
    </section>

    <!-- Modal - Join Discord -->
    <div class="modal fade" id="joinDiscord" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Join Discord</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-sm-12">
                        To be added
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal - Installing Discord -->
    <div class="modal fade" id="installingDiscord" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Installing Discord</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xl-7">
                            <ul class="list-unstyled dislist">
                                <li>
                                    <span>Step 1</span> - Head over to
                                    <strong>discordapp.com</strong> and download the version for your OS.</li>
                                <li>
                                    <span class="alt">Step 2</span> - Run the download, either create a new account or login.</li>
                                <li>
                                    <span>Step 3</span> - Select 'Join Server' and enter 'https:discord.io/zerotomastery</li>
                            </ul>
                        </div>
                        <div class="col-xl-5">
                            <img class="img-fluid pull-right" src="./assets/img/discord1.gif" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal - Installing Discord -->
    <div class="modal fade" id="usingDiscord" tabindex="-1" role="dialog" aria-labelledby="usingDiscord" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Using Discord</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xl-7">
                            <h3>Using Discord</h3>
                            Click the screen on the right to check out a video details just some of the awesome features Discord has to offer.
                        </div>
                        <div class="col-xl-5">
                            <div class="desktop-wrapper">
                                <div onclick="playDiscord();" class="discordplayicon " id="vidwrap"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--    Opens source project-->
    <section>
        <div id="container">

            <div id="open-source" class="row blue">
                <div class="pl-4 pt-3">
                    <p class="m-0">Become part of our</p>
                    <p>
                        <span> Open source Projects!</span>
                    </p>
                </div>
                <div class="col-md-12 ">
                    <img class="img-fluid mx-auto" src="./assets/img/contribute-open-source-community.png" alt="contribute-open-source-community">
                </div>
                <div class="col-sm-12 text-center mb-4">
                    <a id="enroll-button" class="btn btn-primary btn-xl js-scroll-trigger enroll-button" href="#">
                        <strong>More Projects</strong>
                    </a>
                </div>
            </div>

        </div>
    </section>
    <!--    END Open Source project-->
    <!-- Testimonial section. Improve when necessary  -->

    <div class="container-fluid mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 col-xs-12 testimonial">
                <img class="testimonial-image" src="./assets/img/martin.png">
                <br>
                <br>
                <span class="headertest">Martin Comito
                </span>
                <br>
                <p class="text-center">The content is great, but the best thing of all is the way Andrei explains it. His explanations are clear,
                    concise and no longer extensive, preventing it from becoming too long and difficult to assimilate. This
                    course is different from all the others, I recommend it totally.</p>

                <a id="enroll-button" class="btn btn-primary btn-xl js-scroll-trigger enroll-button " href="https://github.com/martincomito"
                    target="_blank">
                    <strong>Martin's Github</strong>
                </a>

            </div>

            <div class="col-md-3 col-xs-12 testimonial">
                <img class="testimonial-image" src="./assets/img/andy.png">
                <br>
                <br>
                <span class="headertest">Andy Polcaster</span>
                <br>
                <p class="text-center"> Andrei's course has been by far the most consise and helpful Udemy course I've taken thus far. It definitely
                    jump-started my interest in open-source!</p>
                <a id="enroll-button" class="btn btn-primary btn-xl js-scroll-trigger enroll-button " href="https://github.com/Polcat000"
                    target="_blank">
                    <strong>Andy's Github</strong>
                </a>
            </div>

            <div class="col-md-3 col-xs-12  testimonial">
                <img class="testimonial-image" src="./assets/img/dimitris.jpg">
                <br>
                <br>
                <span class="headertest">Dimitris Tsaknakis</span>
                <br>
                <p class="text-center">Andrei has an excellent way of explaining things, and covers the whole spectrum of web developing (from front
                    end to back end). He's there for any questions that rise, responding to all (and very polite as well),
                    and so are many of people enrolled in the course. It really makes learning fun, and for quality learning
                    (like the instructor offers for this course) it makes it even more enjoyable. Definitely a recommended
                    course to take!</p>
                <a id="enroll-button" class="btn btn-primary btn-xl js-scroll-trigger enroll-button " href="https://github.com/dimitristsaknakis"
                    target="_blank">
                    <strong>Dimitris' Github</strong>
                </a>
            </div>

        </div>
    </div>
    <!-- group projects showcase  -->


<div class="container">
    <div class="group-project-wrapper" id="project">
        <h1>Our Open Source Projects </h1>

        <div id="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 project">
                    <span class="project-header ">Travel Guide</span>
                    <img class="img-fluid mx-auto rounded mt-3" src="./assets/img/travelguide.png" alt="">
                    <p class="text-center">A travel guide to suggest activities you can do once you arrive to a certain destination. Or you can
                        just browse destinations and check out the different available activities..</p>
                    <p class="mt-auto">
                        <a class="btn btn-primary btn-xl js-scroll-trigger enroll-button d-block" href="https://github.com/zero-to-mastery/travel-guide">
                            <strong>CONTRIBUTE NOW</strong>
                        </a>
                    </p>
                </div>

                <div class="col-md-4 col-sm-12 project">
                    <span class="project-header">Ztm Job Board</span>
                    <img class="img-fluid mx-auto rounded mt-3" src="./assets/img/jobboard.png" alt="">
                    <p class="text-center">A place for developers to show recruiters they are available for hire</p>
                    <p class="mt-auto">
                        <a class="btn btn-primary btn-xl js-scroll-trigger enroll-button d-block" href="https://github.com/zero-to-mastery/ZtM-Job-Board">
                            <strong>CONTRIBUTE NOW</strong>
                        </a>
                    </p>
                </div>
                <div class="col-md-4 col-sm-12 project">
                    <span class="project-header">Litter Finder</span>
                    <img class="img-fluid mx-auto rounded mt-3" src="./assets/img/litter.png" alt="">
                    <p class="text-center">An app to find litter using community submitted geotagged images. The submitted areas are then tracked
                        as to whether they have been cleaned up or not. There should be a leaderboard of submissions and
                        the overall number of submitted images displayed.</p>
                    <p class="mt-auto">
                        <a class="btn btn-primary btn-xl js-scroll-trigger enroll-button d-block" href="https://github.com/zero-to-mastery/litter-finder">
                            <strong>CONTRIBUTE NOW</strong>
                        </a>
                    </p>
                </div>

            </div>
            <div class="row">
                <div class="col-md-4 col-sm-12 project">
                    <span class="project-header ">House Organiser</span>
                    <img class="img-fluid mx-auto rounded mt-3" src="./assets/img/houseorg.png" alt="">
                    <p class="text-center">Registers the amount and type of items that you have and helps you reach your goal of reaching a certain
                        number of items of your choice.</p>
                    <p class="mt-auto">
                        <a class="btn btn-primary btn-xl js-scroll-trigger enroll-button d-block" href="https://github.com/zero-to-mastery/house-organiser">
                            <strong>CONTRIBUTE NOW</strong>
                        </a>
                    </p>
                </div>

                <div class="col-md-4 col-sm-12 project">
                    <span class="project-header">StarWars Spaceships</span>
                    <img class="img-fluid mx-auto rounded mt-3" src="./assets/img/starwars.png" alt="">
                    <p class="text-center">This is an experimental ReactJS project intiated by all the students from Zero to Mastery Course.</p>
                    <p class="mt-auto">
                        <a class="btn btn-primary btn-xl js-scroll-trigger enroll-button d-block" href="https://github.com/zero-to-mastery/starwars-spaceships">
                            <strong>CONTRIBUTE NOW</strong>
                        </a>
                    </p>
                </div>
                <div class="col-md-4 col-sm-12 project">
                    <span class="project-header">Recycling Tracker</span>
                    <img class="img-fluid mx-auto rounded mt-3" src="./assets/img/recyclingtracker.png" alt="">
                    <p class="text-center">A game style app that tracks the amount of waste that you have recycled and where, then calculates the
                        amount of landfill that you prevented overall. Giving you bragging rights on your favorite social
                        media platform.</p>
                    <p class="mt-auto">
                        <a class="btn btn-primary btn-xl js-scroll-trigger enroll-button d-block" href="https://github.com/zero-to-mastery/recycling-tracker">
                            <strong>CONTRIBUTE NOW</strong>
                        </a>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-12 project">
                    <span class="project-header ">Resources</span>
                    <img class="img-fluid mx-auto rounded mt-3" src="./assets/img/resources.png" alt="">
                    <p class="text-center">Here is a list of best resources for the developers (mostly web). Feel free to add your resources as
                        well because sharing is caring</p>
                    <p class="mt-auto">
                        <a class="btn btn-primary btn-xl js-scroll-trigger enroll-button d-block" href="https://github.com/zero-to-mastery/resources">
                            <strong>CONTRIBUTE NOW</strong>
                        </a>
                    </p>
                </div>
                <div class="col-md-4 col-sm-12 project">
                    <span class="project-header">Book Tracker</span>
                    <img class="img-fluid mx-auto rounded mt-3" src="./assets/img/booktracker.png" alt="">
                    <p class="text-center">Tracks the amount of books that you've read, the ones you want to read and the progress on the ones you're
                        reading.</p>
                    <p class="mt-auto">
                        <a class="btn btn-primary btn-xl js-scroll-trigger enroll-button d-block" href="https://github.com/zero-to-mastery/book-tracker">
                            <strong>CONTRIBUTE NOW</strong>
                        </a>
                    </p>
                </div>
                <div class="col-md-4 col-sm-12 project">
                    <span class="project-header">Time Collector</span>
                    <img class="img-fluid mx-auto rounded mt-3" src="./assets/img/timecollector.png" alt="">
                    <p class="text-center">This projects counts the time needed on each project we do as freelancers or hobbyists, so we better know
                        in the future how to estimate time for projects.</p>
                    <p class="mt-auto">
                        <a class="btn btn-primary btn-xl js-scroll-trigger enroll-button d-block" href="https://github.com/zero-to-mastery/time-collector">
                            <strong>CONTRIBUTE NOW</strong>
                        </a>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-12 project">
                    <span class="project-header ">Trello Clone</span>
                    <img class="img-fluid mx-auto rounded mt-3" src="./assets/img/trello.png" alt="">
                    <p class="text-center">A clone of trello, mimicking its basic functionality.</p>
                    <p class="mt-auto">
                        <a class="btn btn-primary btn-xl js-scroll-trigger enroll-button d-block" href="https://github.com/zero-to-mastery/Trello-Clone">
                            <strong>CONTRIBUTE NOW</strong>
                        </a>
                    </p>
                </div>
                <div class="col-md-4 col-sm-12 project">
                    <span class="project-header">CSS Grid LearnGame</span>
                    <img class="img-fluid mx-auto rounded mt-3" src="./assets/img/cssgame.png" alt="">
                    <p class="text-center">A fun game to help you learn CSS Grid!</p>
                    <p class="mt-auto">
                        <a class="btn btn-primary btn-xl js-scroll-trigger enroll-button d-block" href="https://github.com/zero-to-mastery/CSS_Grid_LearnGame">
                            <strong>CONTRIBUTE NOW</strong>
                        </a>
                    </p>
                </div>
                <div class="col-md-4 col-sm-12 project">
                    <span class="project-header">ZtM Website</span>
                    <img class="img-fluid mx-auto rounded mt-3" src="./assets/img/website.png" alt="">
                    <p class="text-center">The Website you're visiting now! The site is constantly updated and improved by members of the Zero to
                        Mastery community.</p>
                    <p class="mt-auto">
                        <a class="btn btn-primary btn-xl js-scroll-trigger enroll-button d-block" href="https://github.com/zero-to-mastery/zero-to-mastery-website">
                            <strong>CONTRIBUTE NOW</strong>
                        </a>
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>


    <!-- END group projects showcase  with bootstrap -->





    <div class="row">
        <div class="col-sm-12">
            <div class="jumbotron paral paralsec">

                <h1 class="display ">See the progress of our projects</h1>
                <p class="lead">
                    <a class="btn btn-info btn-lg btn-md enroll-button" href="https://zero-to-mastery.github.io/zero-to-mastery-website/status.html"
                        role="button">PROGRESS</a>
                </p>

            </div>

        </div>
    </div>


    <footer class="col-sm-12">
        &copy 2018 Zero To Mastery Community
        <br> Special thanks to Andrei Neagoie and to the loyal members of the community.
    </footer>
    </div>
    </div>

    <!-- bootstrap java and jquery  -->
    <script src="assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4"
        crossorigin="anonymous"></script>
</body>

</html>