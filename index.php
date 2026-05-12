<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>VA Photographs</title>

    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

<!-- ================= NAVBAR ================= -->

<nav>

    <div class="logo">
        VA Photographs
    </div>

    <ul>

        <li><a href="#home">Home</a></li>

        <li><a href="#about">About</a></li>

        <li><a href="#gallery">Gallery</a></li>

        <li><a href="booking.php">Book Session</a></li>

        <li><a href="#contact">Contact</a></li>

    </ul>

</nav>

<!-- ================= HERO SECTION ================= -->

<section id="home">

    <div class="home-content">

        <h1>Capture Your Best Moments</h1>

        <p>
            Photography Portfolio & Booking Portal
        </p>

        <a href="booking.php">

            <button>
                Book a Session
            </button>

        </a>

    </div>

    <div class="home-image">

        <img src="assets/images/profile.jpg">

    </div>

</section>

<!-- ================= ABOUT SECTION ================= -->

<section id="about">

    <h2>About Me</h2>

    <p>
        Hi, I'm Vignesh Alle. Photography is my creative way of expressing stories and emotions.
        Alongside photography, I also enjoy web development and building useful digital experiences.
    </p>

</section>

<!-- ================= GALLERY SECTION ================= -->

<!-- ================= PORTFOLIO ================= -->

<section id="gallery">

    <h2>My Portfolio</h2>

    <!-- Tabs -->

    <div class="portfolio-tabs">

        <button onclick="showSection('photos')">
            Photos
        </button>

        <button onclick="showSection('videos')">
            Videos
        </button>

    </div>

    <!-- Photos Section -->

    <div id="photos" class="portfolio-content">

        <div class="gallery-container">

            <img src="assets/images/photo1.jpg">

            <img src="assets/images/photo2.jpg">

            <img src="assets/images/photo3.jpg">

            <img src="assets/images/photo4.jpg">

            <img src="assets/images/photo5.jpg">

            <img src="assets/images/photo6.jpg">

            <img src="assets/images/photo7.jpg">

            <img src="assets/images/photo8.jpg">

            <img src="assets/images/photo9.jpg">

            <img src="assets/images/photo10.jpg">

        </div>

    </div>

    <!-- Videos Section -->

    <div id="videos"
         class="portfolio-content"
         style="display:none;">

        <div class="video-container">

            <video controls width="300">

                <source src="assets/videos/video1.mp4"
                        type="video/mp4">

            </video>

            <video controls width="300">

                <source src="assets/videos/video2.mp4"
                        type="video/mp4">

            </video>

        </div>

    </div>

</section>
   
<!-- ================= SERVICES SECTION ================= -->

<section id="services">

    <h2>Services</h2>

    <div class="services-container">

        <div class="service-box">

            <h3>Portrait Photography</h3>

            <p>
                Personal and professional portrait sessions.
            </p>

        </div>

        <div class="service-box">

            <h3>Automotive Photography</h3>

            <p>
                Creative photography for bikes and cars.
            </p>

        </div>

        <div class="service-box">

            <h3>Event Photography</h3>

            <p>
                Capturing events and memorable moments.
            </p>

        </div>

    </div>

</section>

<!-- ================= CONTACT SECTION ================= -->

<section id="contact">

    <h2>Contact Me</h2>

    <form>

        <input type="text" placeholder="Your Name">

        <input type="email" placeholder="Your Email">

        <textarea placeholder="Message"></textarea>

        <button type="submit">
            Send Message
        </button>

    </form>

</section>
<!-- ================= SOCIAL MEDIA ================= -->

<section id="social-media">

    <h2>
        Follow Me
    </h2>

    <div class="social-icons">

        <a href="https://www.facebook.com/"
           target="_blank">

            <img src="assets/images/fb.png">

        </a>
    
        <a href="https://www.instagram.com/vignesh_alle/"
       target="_blank">

        <img src="assets/images/ig.png" alt="Instagram">

    </a>

    <a href="https://wa.me/14379934826"
       target="_blank">

        <img src="assets/images/wa.png" alt="WhatsApp">

    </a>


    </div>

</section>
<!-- ================= FOOTER ================= -->

<footer>

    <p>
        © 2026 VA Photographs 
    </p>

</footer>
<script src="assets/js/script.js"></script>
</body>
</html>