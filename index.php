<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/style.css">
    
</head>

<body>
    <header>
        <img src="<?php echo base_url()?>assets/images/maulilogo.png">
    </header>
    <video autoplay muted loop id="bgVideo">
        <source src="<?php echo base_url()?>assets/videos/busbg.mp4" type="video/mp4">
    </video>

    <div class="mb-4">
        <h1>WE ARE HIRING DRIVERS</h1>
    </div>
    <div class="mb-3">
        <h2>"Join Our Journey - We're Hiring Skilled Drivers Today!!"</h2>
    </div>

    <div class="sizeofbox">
        <div class="counter">
            <div class="time-box" id="hours-box">
                <span id="hours">00</span>
                <p class="label">Hours</p>
            </div>
            <div class="time-box" id="minutes-box">
                <span id="minutes">00</span>
                <p class="label">Minutes</p>
            </div>
            <div class="time-box" id="seconds-box">
                <span id="seconds">00</span>
                <p class="label">Seconds</p>
            </div>

        </div>
    </div>

    <div class="button">
        <button class="register-btn">Register Now</button>
    </div>
    <div class="modal" id="formModal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <form class="form" id="registrationForm" enctype="multipart/form-data">

                <div class="input-box">
                    <label>Full Name</label>
                    <input type="text" name="name" placeholder="Enter name" required>
                </div>
                <div class="input-box">
                    <label>Email Address</label>
                    <input type="email" name="email" placeholder="Enter email" required>
                </div>
                <div class="column">
                    <div class="input-box">
                        <label>Phone Number</label>
                        <input type="number" name="phone" placeholder="Enter phone number" required />
                    </div>
                    <div class="input-box">
                        <label>Birth Date</label>
                        <input type="date" name="birth" placeholder="Enter birth date" required />
                    </div>
                </div>
                <div class="input-box">
                    <label>Expereince</label>
                    <input type="number" name="exp" placeholder="Number of Years" required />
                </div>
                <div class="input-box">
                    <label>Resume Upload</label>
                    <input type="file" name="file" required />
                </div>
                <button type="button" id="form_submit">Submit</button>
            </form>
        </div>
    </div>

    <div class="modal" id="thankYouModal">
        <div class="modal-content">
            <span class="close-thankyou-btn">&times;</span>
            <h2>Thank you!</h2>
            <p>Your registration has been submitted successfully.</p>
        </div>
    </div>



    </section>
    <footer>
        <div class="social-media">
            <ul>
                <li>
                    <a href="https://www.facebook.com/" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
                <li>
                    <a href="https://x.com/" target="_blank">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
            </ul>
        </div>
    </footer>

    <script>
        var base_url="<?php echo base_url();?>";
    </script>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/tsparticles@3/tsparticles.bundle.min.js"></script>
    <script src="<?php echo base_url()?>assets/main.js"></script>

</body>
</html>