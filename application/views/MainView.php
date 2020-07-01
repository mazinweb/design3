<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>My 3rd Design</title>
    <link rel='stylesheet' href="<?= base_url() ?>sass/css/all.css"/>
    <link rel='stylesheet' href="<?= base_url() ?>sass/css/normalize.css"/>
    <link rel='stylesheet' href="<?= base_url() ?>sass/css/style.css"/>
    <link rel='stylesheet'
          href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@1,200;1,300;1,700;1,800&display=swap">
    <link rel='stylesheet' href="https://fonts.googleapis.com/css2?family=Kreon:wght@300;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,800&display=swap">
</head>
<body>

<!-- start header -->
<div class="header">
    <div class="overlay">
        <div class="container table">
            <div class="navbar">
                <span class="logo">Mazin <span class="main-color">Portfolio</span></span>
                <span class="links">
                    Menu
                    <svg class="fa fa-bars fa-lg"></svg>
                </span>
            </div>
            <div class="table-row">
                <div class="intro text-center">
                    <h1 class="upper"> I Design <span class="main-color">Web Sites</span></h1>
                    <hr>
                    <p>
                        Web Designer . WordPress Master . Developer
                    </p>
                    <div class="buttons">
                        <button class="hire upper">contact me</button>
                        <button class="port upper">See Portfolio</button>
                    </div>
                </div>
            </div>
        </div>
        <span class="arrow">
                <svg class="fa fa-chevron-down"></svg>
        </span>
    </div>
</div>
<!-- end header -->

<!-- start features -->

<div class="features text-center-gl">
    <div class="container">
        <div class="box">
            <svg class="fa fa-desktop fa-4x"></svg>
            <h3>Web Designer</h3>
            <p>I Design Web Sites using HTML5 . CSS3 . BootStrap 4 . JavaScript and more !!</p>
        </div>
        <div class="box">
            <svg class="fab fa-wordpress fa-4x"></svg>
            <h3>WordPress Master</h3>
            <p>I use WordPress CMS to run my web site it is very powerful tool to run web site .</p>
        </div>
        <div class="box">
            <svg class="fa fa-cogs fa-4x"></svg>
            <h3>Developer</h3>
            <p>I had over 5 years experience in developing projects , web sites . </p>
        </div>
        <div class="box">
            <svg class="fa fa-code fa-4x"></svg>
            <h3>Programmer</h3>
            <p>I had over 5 years experience in PHP programming language , I used frameworks such as Codeigniter . </p>
        </div>
    </div>
</div>

<!-- end  features -->

<!-- start  subscribe -->

<div class="subscribe">
    <div class="overlay">
        <div class="container">
            <form>
                <input type="email" name="mail" placeholder="enter your email address to subscribe">
                <button class="upper">Subscribe</button>
            </form>
        </div>
    </div>
</div>

<!-- end  subscribe -->

<!-- start my work -->
<div class="my-work text-center-gl">
    <div class="container">
        <h1 class="upper">my <span class="main-color">Work</span></h1>
        <p>This are some picture of my work as example .</p>
        <div class="items-box">
            <div class="item">
                <img src="<?= base_url() ?>sass/img/work1.jpg" alt=""/>
                <div class="over text-center-gl">
                    <h3 class="upper">html5 . css3 project</h3>
                    <p>I design this web site using <br> HTML5 and CSS3 .</p>
                    <button class="upper">Show Project</button>
                </div>
            </div>
            <div class="item">
                <img src="<?= base_url() ?>sass/img/work2.jpg" alt=""/>
                <div class="over text-center-gl">
                    <h3 class="upper">html5 . css3 project</h3>
                    <p>I design this web site using <br> HTML5 and CSS3 .</p>
                    <button class="upper">Show Project</button>
                </div>
            </div>
            <div class="item">
                <img src="<?= base_url() ?>sass/img/work3.jpg" alt=""/>
                <div class="over text-center-gl">
                    <h3 class="upper">html5 . css3 project</h3>
                    <p>I design this web site using <br> HTML5 and CSS3 .</p>
                    <button class="upper">Show Project</button>
                </div>
            </div>
            <div class="item">
                <img src="<?= base_url() ?>sass/img/work4.jpg" alt=""/>
                <div class="over text-center-gl">
                    <h3 class="upper">html5 . css3 project</h3>
                    <p>I design this web site using <br> HTML5 and CSS3 .</p>
                    <button class="upper">Show Project</button>
                </div>
            </div>
            <div class="item">
                <img src="<?= base_url() ?>sass/img/work5.jpg" alt=""/>
                <div class="over text-center-gl">
                    <h3 class="upper">html5 . css3 project</h3>
                    <p>I design this web site using <br> HTML5 and CSS3 .</p>
                    <button class="upper">Show Project</button>
                </div>
            </div>
            <div class="item">
                <img src="<?= base_url() ?>sass/img/work6.jpg" alt=""/>
                <div class="over text-center-gl">
                    <h3 class="upper">html5 . css3 project</h3>
                    <p>I design this web site using <br> HTML5 and CSS3 .</p>
                    <button class="upper">Show Project</button>
                </div>
            </div>
            <div class="item hidden">
                <img src="<?= base_url() ?>sass/img/work7.jpeg" alt=""/>
                <div class="over text-center-gl">
                    <h3 class="upper">html5 . css3 project</h3>
                    <p>I design this web site using <br> HTML5 and CSS3 .</p>
                    <button class="upper">Show Project</button>
                </div>
            </div>
            <div class="item hidden">
                <img src="<?= base_url() ?>sass/img/work8.jpg" alt=""/>
                <div class="over text-center-gl">
                    <h3 class="upper">html5 . css3 project</h3>
                    <p>I design this web site using <br> HTML5 and CSS3 .</p>
                    <button class="upper">Show Project</button>
                </div>
            </div>
            <div class="item hidden">
                <img src="<?= base_url() ?>sass/img/work9.jpg" alt=""/>
                <div class="over text-center-gl">
                    <h3 class="upper">html5 . css3 project</h3>
                    <p>I design this web site using <br> HTML5 and CSS3 .</p>
                    <button class="upper">Show Project</button>
                </div>
            </div>
        </div>
        <button class="show-more upper">Show more</button>
    </div>
</div>

<!-- end my work -->

<!-- start testimonials -->

<div class="testimo text-center-gl">
    <div class="overlay">
        <div class="container">
            <div class="client active">
                <img src="<?= base_url() ?>sass/img/testpic1.jpg" alt=""/>
                <p>Mazin has helped us the best with redesigning our website.<br>
                    I recommend Mazin to everyone looking for app development.</p>
                <span>John Smith</span>
            </div>
            <div class="client hidden">
                <img src="<?= base_url() ?>sass/img/testpic2.jpg" alt=""/>
                <p>I assigned Mazin to a redesigning job of my existing site.<br>
                    He left no loophole exposed in his redesigning work and created a fresh, eye-tempting design for my
                    site.</p>
                <span>Mark Paul</span>
            </div>
            <div class="client hidden">
                <img src="<?= base_url() ?>sass/img/testpic3.jpg" alt=""/>
                <p>Mazin is a highly skilled person with an eye for details.<br>
                    I got exactly what i wanted and more.</p>
                <span>Ali Mohammed</span>
            </div>
            <div class="client hidden">
                <img src="<?= base_url() ?>sass/img/testpic4.jpg" alt=""/>
                <p>These person is absolutely the best in designing and development.<br>
                    I hired him for building my website from the scratch and told him all my requirements and
                    preferences.</p>
                <span>Abdallah Ahmed</span>
            </div>
            <svg class="fa fa-chevron-left fa-2x"></svg>
            <svg class="fa fa-chevron-right fa-2x"></svg>
        </div>
    </div>
</div>


<!-- end testimonials -->

<!-- start my team -->
<div class="my-team text-center-gl">
    <div class="container">
        <h1 class="upper">my <span class="main-color">Team</span></h1>
        <p class="main">This are My Team Members that I work with them.</p>
        <div class="the-team">
            <div class="person">
                <img src="<?= base_url() ?>sass/img/team1.jpg" alt=""/>
                <h2>Ali Abass</h2>
                <div class="social-icons">
                    <svg class="fab fa-facebook fa-lg"></svg>
                    <svg class="fab fa-twitter fa-lg"></svg>
                    <svg class="fab fa-google-plus fa-lg"></svg>
                </div>
                <p>PHP Codeigniter Developer , Develop web sites using Codeigniter php framework .</p>
            </div>
            <div class="person">
                <img src="<?= base_url() ?>sass/img/team2.jpg" alt=""/>
                <h2>Ahmed Ali</h2>
                <div class="social-icons">
                    <svg class="fab fa-facebook fa-lg"></svg>
                    <svg class="fab fa-twitter fa-lg"></svg>
                    <svg class="fab fa-google-plus fa-lg"></svg>
                </div>
                <p>Web Designer , Desgin many websites using HTML5 . CSS3 . BootStrap 4 and more !! .</p>
            </div>
            <div class="person">
                <img src="<?= base_url() ?>sass/img/team3.jpg" alt=""/>
                <h2>Abdallah Khalid</h2>
                <div class="social-icons">
                    <svg class="fab fa-facebook fa-lg"></svg>
                    <svg class="fab fa-twitter fa-lg"></svg>
                    <svg class="fab fa-google-plus fa-lg"></svg>
                </div>
                <p>PHP Laravel Developer , Develop web sites using Laravel php framework .</p>
            </div>
            <div class="person">
                <img src="<?= base_url() ?>sass/img/team4.jpg" alt=""/>
                <h2>Logman Ali</h2>
                <div class="social-icons">
                    <svg class="fab fa-facebook fa-lg"></svg>
                    <svg class="fab fa-twitter fa-lg"></svg>
                    <svg class="fab fa-google-plus fa-lg"></svg>
                </div>
                <p>Developer , He build systems using Java , Framework such as Spring . </p>
            </div>
        </div>
    </div>
</div>

<!-- end my team -->


<!-- start contact form -->

<div class="contact text-center-gl">
    <div class="overlay">
        <div class="container">
            <h1 class="upper">Say <span class="main-color">Hello</span></h1>
            <p class="main">Feel free to contact me at any time !! </p>
            <form>
                <input type="email" name="mail" placeholder="your email"/>
                <input type="text" name="subject" placeholder="Subject"/>
                <textarea placeholder="Message"></textarea>
                <div class="info">
                    <button class="upper">Hire Me</button>
                    <span class="form-icon">
                        <svg class="fab fa-facebook fa-lg"></svg>
                        <svg class="fab fa-twitter fa-lg"></svg>
                        <svg class="fab fa-google-plus fa-lg"></svg>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- end contact form -->

<!-- start footer -->

<div class="footer">
    <div class="container">
        <span class="copyright">&copy; 2020 COPYRIGHT Mazin Mohammed</span>
        <span class="design">DESIGNED BY Mazin</span>
    </div>
</div>


<!-- end footer -->

<script src="<?= base_url() ?>sass/js/jquery-3.4.1.min.js"></script>
<script src="<?= base_url() ?>sass/js/jquery.nicescroll.min.js"></script>
<script src="<?= base_url() ?>sass/js/all.js"></script>
<script src="<?= base_url() ?>sass/js/fontawesome.js"></script>
<script src="<?= base_url() ?>sass/js/custom.js"></script>

</body>
</html>