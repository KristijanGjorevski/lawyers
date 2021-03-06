<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="assets/fonts/fonts.css">
    <link rel="stylesheet" type="text/css" href="assets/css/index.css">
    <link rel="stylesheet" type="text/css" href="assets/css/contact.css">
    <link rel="stylesheet" type="text/css" href="assets/css/index.css">
    <link rel="stylesheet" type="text/css" href="assets/css/media.css">
    <title>Document</title>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</head>

<body>
    <header>
        <nav id="nav-list_mobile">
            <a class="icon_drop">
                <div id="mobile_icon">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
            </a>
            <ul id="mobile-menu">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="#">About us</a>
                </li>
                <li>
                    <a href="#">Attorneys</a>
                </li>
                <li>
                    <a href="blog.php">Blog</a>
                </li>
                <li>
                    <a href="#">Practice Areas</a>
                </li>
                <li>
                    <a href="gallery.php">Gallery</a>
                </li>
                <li>
                    <a href="contact.php" class="focus">Contact</a>
                </li>
            </ul>
        </nav>
        <div id="logo">
            <a href="index.php">
                <span class="logo_text">Lawyer</span>
                <figure>
                    <img src="logo1.png" alt="logo">
                </figure>
                <span class="caption">Personal injury attorney</span>
                <span class="logo_text">Attorney</span>
            </a>
        </div>
        <nav class="nav-meni">
            <ul class="nav-list">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="#">About us</a>
                </li>
                <li>
                    <a href="#">Attorneys</a>
                </li>
                <li>
                    <a href="blog.php">Blog</a>
                </li>
                <li>
                    <a href="#">Practice Areas</a>
                </li>
                <li>
                    <a href="gallery.php">Gallery</a>
                </li>
                <li>
                    <a href="contact.php" class="focus">Contact</a>
                </li>
            </ul>
        </nav>

        <div class="call-action">
            <span>call us: <a href="contact.php" class="contact_numb">+389-71-308-148</a></span>
            <button class="call_to_button_1-2">Request a free consultation</button>
        </div>
    </header>
    <!-- empty underlay header -->
    <div class="underlay_header">
        <p style="font-size: 45px;text-align: center; padding: 20px;">Welcome
        </p>
    </div>
    <main>
        <!--                                                   TUKA KUCAJ                                                                                     -->
        <div id="map">

        </div>
        <ul class="contact_area">
            <li id="NY"><span>in</span>NY</li>
            <li id="CA"><span>in</span>CA</li>
            <li id="FL"><span>in</span>FL</li>
            <li id="KY"><span>in</span>KY</li>
        </ul>
        <h5 class="page_header headings" title="Contact">Contact</h5>
        <form name="message" method="post">
            <section>
                <div>
                    <label for="name">Name</label>
                    <input id="name" type="text" value="" name="name">
                </div>
                <div>
                    <label for="email">Email</label>
                    <input id="email" type="text" value="" name="email">
                </div>
                <div>
                    <label for="phone">Phone</label>
                    <input id="phone" type="text" value="" name="phone">
                </div>
            </section>
            <section>
                <div>
                    <label for="subject">Subject</label>
                    <input id="subject" type="text" value="" name="subject">
                </div>
                <div>
                    <label for="message">Say Hello</label>
                    <textarea cols="30" rows="10" id="message" type="text" value="" name="message"></textarea>
                </div>
            </section>
            <button class="call_to_button_1-2" type="submit">SEND US</button>
        </form>
    </main>
    <footer>
        <span>Copyright © 2018 <a href="#">Lawyers & Attorneys</a> all rights owned. Page by Kristijan</span>
        <div id="logo">
            <a href="index.php">
                <span class="logo_text">Lawyer</span>
                <figure>
                    <img src="logo1.png" alt="logo">
                </figure>
                <span class="caption">Personal injury attorney</span>
                <span class="logo_text">Attorney</span>
            </a>
        </div>
        <div class="social_media">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter-square"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </footer>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCv4w615oncniHp-SKpVLeWp0pItXW6KEo&callback=initMap">
    </script>
    <script type="text/javascript" src="assets/javascript/contact.js"></script>
    <script src="assets/javascript/mobile.js"></script>
</body>

</html>