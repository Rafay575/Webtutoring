<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="./Style/contact.css" />
        <link rel="stylesheet" href="./Style/index.css" />
        <link rel="stylesheet" href="./Style/pricing-card.css" />
        <link rel="stylesheet" href="./Style/footer.css" />
        <link rel="stylesheet" href="./Style/review.css" />
        <link rel="stylesheet" href="./Style/sidenav.css" />
        <link rel="stylesheet" href="./Style/modal.css" />
        <script src='./sidenav.js' ></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <title>HSC Year 12 Tutoring</title>
        <link
            href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400..700;1,400..700&display=swap"
            rel="stylesheet"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        />
        <link
            href="https://unpkg.com/aos@2.3.1/dist/aos.css"
            rel="stylesheet"
        />
        <script src="https://apis.google.com/js/api.js"></script>
    </head>

    <!-- C:\xampp\htdocs\Webtutoring\index.css -->
    <body>
        <!-- side Bar -->
        <div id="mySidenav" class="sidenav">
            <div class="sidenavs sidenav-div-1"></div>
            <div class="sidenavs sidenav-div-2">
                <a
                    href="javascript:void(0)"
                    class="closebtn"
                    onclick="closeNav()"
                    >&times;</a
                >
                
                <ul>
                <li><a href="#Subjects"> Subjects </a></li>
                <li><a href="#Qualification"> Qualifications </a></li>
                <li><a href="#Reviews"> Reviews </a></li>
                <li><a href="#pricing"> Pricing </a></li>
                <li><a href="#contact"> Contact Us</a></li>
               
                    <!-- <li style="border-bottom: 1px solid blanchedalmond">
                        <a href="#news"> News</a>
                    </li> -->
                </ul>
                <div class="contact-info">
                    <div style="margin-bottom: 20px">
                        <a href="#">Contact info</a>
                    </div>
                    <div class="sidebar-icons">
                        <i class="fa-brands fa-facebook-f fa-xl"></i>
                        <i class="fa-brands fa-instagram fa-xl"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navigation Bar -->
        <div class="topnav">
            <div class="burger-menu">
                </div>
                <div
                class="burger burger-menu"
                onclick="openNav()"
                >
                <i class="fa-solid fa-bars fa-2xl"></i>
                
            </div>
            <ul>
                <li><a href="#Subjects"> Subjects </a></li>
                <li><a href="#Qualification"> Qualifications </a></li>
                <li><a href="#Reviews"> Reviews </a></li>
                <li><a href="#pricing"> Pricing </a></li>
                <li><a href="#contact"> Contact Us</a></li>
                <li class="book-now" id="openModal1">
                    <a href="#"> Book now </a>
                </li>
            </ul>
        </div>

        <!-- Hero Section -->
        <section class="hero">
            <div class="hero-content">
                <div
                    class="hero-text"
                    data-aos="fade-up"
                    data-aos-anchor-placement="center-bottom"
                >
                    <h1>HSC Year 12 Tutoring</h1>
                    <p>
                        Our tailored private tutoring service offers exceptional
                        one-on-one lessons across a diverse array of subjects,
                        ensuring personalized support and guidance for each
                        student's unique needs and learning goals. Whether it's
                        mastering mathematics, delving into the intricacies of
                        literature, or honing scientific inquiry, our expert
                        tutors provide a nurturing environment where students
                        can thrive academically. With a focus on quality
                        instruction and individualized attention, our tutoring
                        sessions empower students to build confidence, deepen
                        understanding, and achieve their fullest potential. From
                        elementary school through university level, our
                        comprehensive approach to education fosters academic
                        excellence and cultivates a lifelong love of learning.
                    </p>
                    <button class="book-now" id="openModal">Book Now</button>
                </div>
                <div
                    data-aos="fade-left"
                    data-aos-anchor="#example-anchor"
                    data-aos-offset="500"
                    data-aos-duration="500"
                >
                    <img src="./images/picture1.png" alt="" width="500px" />
                </div>
            </div>
        </section>
        <!-- Modal -->
        <div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2 style="margin-bottom: 30px">Book Now</h2>
        <form id="bookingForm" method="post" action="submit_booking.php">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required />
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required />
            </div>
            <div class="form-group">
                <label for="subject">Subject:</label>
                <select id="subject" name="subject" required>
                    <option value="">Select Subject</option>
                    <option value="Math">Math</option>
                    <option value="Economics">Economics</option>
                    <option value="Physics">Physics</option>
                </select>
            </div>
            <div class="form-group">
                <label for="package">Duration</label>
                <select id="package" name="package" required>
                    <option value="">Select Duration</option>
                    <option value="Weekly">Week</option>
                    <option value="Monthly">Monthly</option>
                    <option value="3 Months">3 Months</option>
                </select>
            </div>
            <div class="form-group">
                <label for="timing">Timing</label>
                <select id="timing" name="timing" required>
                    <option value="">Select Timings</option>
                    <option value="5_6">5 to 6</option>
                    <option value="7_8">7 to 8</option>
                    <option value="9_10">9 to 10</option>
                </select>
            </div>
            <div class="form-group">
                <label for="date">Start Date:</label>
                <input
                    type="date"
                    id="date"
                    name="date"
                    min="<?php echo date('Y-m-d', strtotime('+1 day')); ?>"
                    required
                />
            </div>
            <button type="submit" class="submit">Submit</button>
        </form>
    </div>
</div>


        <!-- Subjects Section -->
        <section id="Qualification">
            <h1
                class='section-heading'
            >
                Qualification
            </h1>
            <div id="about" class="profile-section">
                <div class="image-container">
                    <img
                        src="./images/Picture2.jpg"
                        alt="Lara Teaching"
                        class="image1"
                    />
                    <img
                        src="./images/picture1.png"
                        alt="Lara Teaching"
                        class="image2"
                    />

                </div>
                <div class="info">
                    <h1>HI, I’M ANAS ALI</h1>
                    <h2>WITH MY HELP, YOU’LL BE ABLE TO</h2>
                    <ul>
                        <li class='li-ele' >✓ Strong subject knowledge in math, physics, economics.</li>
                        <li class='li-ele' >✓ Bachelor's degree in education or related field.</li>
                        <li class='li-ele' >✓ Previous teaching experience with diverse learners.</li>
                        <li class='li-ele' >✓ Effective communication and interpersonal skills.</li>
                        <li class='li-ele' >✓ Adaptability and creativity in lesson planning.</li>
                        <li class='li-ele' >✓ Comfortable with educational technology and tools.</li>
                        <li class='li-ele' >✓ Commitment to continuous professional development.</li>
                    </ul>
                   
                </div>
            </div>
        </section>

        <!-- Qualifications Section -->
        <section id="Subjects">
            <h1
            class='section-heading'            >
                Subjects
            </h1>

            <div class="row">
                <div class="card card-1">
                    <h2>Mathematics</h2>
                    <p>
                        Covering the whole HSC Mathematics Advanced syllabus,
                        one-on-one tutoring via zoom tailored for your needs. I
                        placed first at my school for Maths Advanced in 2023 and
                        achieved an exam and hsc mark of 97. I reached this
                        position after getting a rank of 24/41 at the end of
                        year 11, through which I learnt how to achieve academic
                        success from a moderate starting base. I will commit my
                        efforts to my students providing the best teaching and
                        mentoring possible to achieve your academic goals, no
                        matter where you are starting from.
                    </p>
                </div>
                <div class="card card-2">
                    <h2>Economics</h2>
                    <p>
                        Covering the whole HSC Economics syllabus, one-on-one
                        tutoring via zoom tailored for your needs. I placed
                        fourth in my school for economics achieving a hsc exam
                        mark of 94% and a hsc mark of 89. I reached this
                        position after getting a rank of 13/27 at the end of
                        year 11, through which I learnt how to achieve academic
                        success from a moderate starting base. I will commit my
                        efforts to my students providing the best guidence,
                        teaching and mentoring possible to achieve your academic
                        goals, no matter where you can learn
                    </p>
                </div>
                <div class="card card-3">
                    <h2>Physices</h2>
                    <p>
                        Covering the whole HSC Physics syllabus, one-on-one
                        tutoring via zoom tailored for your needs. I placed
                        first at my school for Physics in 2023 achieved an exam
                        and hsc mark of 90. I reached this position after
                        getting a rank of 25/30 at the end of year 11, through
                        which I learnt how to achieve academic success from a
                        low starting base. I will commit my efforts to my
                        students providing the best guidence, teaching and
                        mentoring possible to achieve your academic goals, no
                        matter where you are starting from.
                    </p>
                </div>
            </div>
        </section>

        <!-- Reviews Section -->
        <section id="pricing">
            <h1 class='section-heading ' style='margin-bottom:0' >Pricing</h1>
            <div class="pricing_1">
            <div class="responsive-container-block big-container">
                <div class="responsive-container-block container">
                   
                    <div class="responsive-container-block swiping-box">
                        <div class="text-center witch switch-text">
                            <span> One-off </span>
                            <div class="switch">
                                <input type="checkbox" />
                                <span class="slider round"> </span>
                            </div>
                            <span> Weekly </span>
                        </div>
                    </div>
                    <div class="responsive-container-block pcard-container">
                        <div
                            class="responsive-cell-block wk-desk-4 wk-ipadp-4 wk-tab-6 wk-mobile-12"
                        >
                            <div class="pcard pcard-selected">
                                <p class="text-blk">Maths</p>
                                <h1 class="One-off-price">$60/hr</h1>
                                <h1 class="d-nones Weekly-price">$50/hr</h1>
                                <div class="pcard-description">
                                    <span class="One-off-plan">
                                        <p class="text-blk pcard-points">
                                            In enim etiam aliquet.
                                        </p>
                                        <p class="text-blk pcard-points">
                                            Ultricies diam arcu.
                                        </p>
                                        <p class="text-blk pcard-points">
                                            Pellentesque elementum.
                                        </p>
                                        <p class="text-blk pcard-points">
                                            Leo adipiscing adipiscing.
                                        </p>
                                        <p class="text-blk pcard-points">
                                            Mattis diam amet.
                                        </p>
                                    </span>
                                    <span class="Weekly-plan d-nones">
                                        <p class="text-blk pcard-points">
                                            Risus donec magna turpis.
                                        </p>
                                        <p class="text-blk pcard-points">
                                            Lorem nibh odio montes.
                                        </p>
                                        <p class="text-blk pcard-points">
                                            Lacus volutpat nunc leo at.
                                        </p>
                                        <p class="text-blk pcard-points">
                                            Arcu in augue nunc risus.
                                        </p>
                                        <p class="text-blk pcard-points">
                                            Ornare vestibulum.
                                        </p>
                                    </span>
                                </div>
                                <span class="buy-button">
                                    <button class="btns" type="button">
                                        Buy
                                    </button>
                                </span>
                            </div>
                        </div>
                        <div
                            class="responsive-cell-block wk-desk-4 wk-ipadp-4 wk-tab-6 wk-mobile-12"
                        >
                            <div class="pcard">
                                <p class="text-blk">Physices</p>
                                <h1 class="One-off-price">$60/hr</h1>
                                <h1 class="d-nones Weekly-price">$50/hr</h1>
                                <div class="pcard-description">
                                    <span class="One-off-plan">
                                        <p class="text-blk pcard-points">
                                            Risus donec magna turpis.
                                        </p>
                                        <p class="text-blk pcard-points">
                                            Lorem nibh odio montes.
                                        </p>
                                        <p class="text-blk pcard-points">
                                            Lacus volutpat nunc leo at.
                                        </p>
                                        <p class="text-blk pcard-points">
                                            Arcu in augue nunc risus.
                                        </p>
                                        <p class="text-blk pcard-points">
                                            Ornare vestibulum.
                                        </p>
                                    </span>
                                    <span class="Weekly-plan d-nones">
                                        <p class="text-blk pcard-points">
                                            Vulputate sem venenatis.
                                        </p>
                                        <p class="text-blk pcard-points">
                                            Vulputate sem venenatis.
                                        </p>
                                        <p class="text-blk pcard-points">
                                            Aliquam enim habitant.
                                        </p>
                                        <p class="text-blk pcard-points">
                                            Nunc eu eu dolor ac arcu.
                                        </p>
                                        <p class="text-blk pcard-points">
                                            Id viverra hac sed semper.
                                        </p>
                                    </span>
                                </div>
                                <span class="buy-button">
                                    <button class="btns" type="button">
                                        Buy
                                    </button>
                                </span>
                            </div>
                        </div>
                        <div
                            class="responsive-cell-block wk-desk-4 wk-ipadp-4 wk-tab-6 wk-mobile-12"
                        >
                            <div class="pcard">
                                <p class="text-blk">Economics</p>
                                <h1 class="One-off-price">$60/hr</h1>
                                <h1 class="d-nones Weekly-price">$50/hr</h1>
                                <div class="pcard-description">
                                    <span class="One-off-plan">
                                        <p class="text-blk pcard-points">
                                            In enim etiam aliquet.
                                        </p>
                                        <p class="text-blk pcard-points">
                                            Ultricies diam arcu.
                                        </p>
                                        <p class="text-blk pcard-points">
                                            Pellentesque elementum.
                                        </p>
                                        <p class="text-blk pcard-points">
                                            Leo adipiscing adipiscing.
                                        </p>
                                        <p class="text-blk pcard-points">
                                            Mattis diam amet.
                                        </p>
                                    </span>
                                    <span class="Weekly-plan d-nones">
                                        <p class="text-blk pcard-points">
                                            Risus donec magna turpis.
                                        </p>
                                        <p class="text-blk pcard-points">
                                            Lorem nibh odio montes.
                                        </p>
                                        <p class="text-blk pcard-points">
                                            Lacus volutpat nunc leo at.
                                        </p>
                                        <p class="text-blk pcard-points">
                                            Arcu in augue nunc risus.
                                        </p>
                                        <p class="text-blk pcard-points">
                                            Ornare vestibulum.
                                        </p>
                                    </span>
                                </div>
                                <span class="buy-button">
                                    <button class="btns" type="button">
                                        Buy
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </section>
        <section style='background-color:#eeee;padding:20px 0' id='Reviews'>
            <h1
            class='section-heading' >
                Review
            </h1>
            <div class="responsive-container-block big-container">
            <div class="responsive-container-block bg">
              
                <div class="responsive-container-block blocks">
                    <div
                        class="responsive-cell-block wk-desk-1 wk-tab-1 wk-mobile-1 wk-ipadp-1 content"
                    >
                        <p class="text-blkr info-block">
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Cursus elementum magna ut duis pulvinar
                            tincidunt vivamus adipiscing quam. Eget dui quis
                            etiam sed eget sed est.
                        </p>
                        <div class="responsive-container-block person">
                            <div
                                class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12 icon-block"
                            >
                                <img
                                    class="profile-img"
                                    src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/eourInstructors1.svg"
                                />
                            </div>
                            <div
                                class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12 text-block"
                            >
                                <p class="text-blkr name">Jane Doe</p>
                                <p class="text-blkr desig">CEO</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="responsive-cell-block wk-desk-1 wk-tab-1 wk-mobile-1 wk-ipadp-1 content"
                    >
                        <p class="text-blkr info-block">
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Cursus elementum magna ut duis pulvinar
                            tincidunt vivamus adipiscing quam. Eget dui quis
                            etiam sed eget sed est.
                        </p>
                        <div class="responsive-container-block person">
                            <div
                                class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12 icon-block"
                            >
                                <img
                                    class="profile-img"
                                    src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/eourInstructors1.svg"
                                />
                            </div>
                            <div
                                class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12 text-block"
                            >
                                <p class="text-blkr name">Jane Doe</p>
                                <p class="text-blkr desig">CEO</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="responsive-cell-block wk-desk-1 wk-tab-1 wk-mobile-1 wk-ipadp-1 content bottom"
                    >
                        <p class="text-blkr info-block">
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Cursus elementum magna ut duis pulvinar
                            tincidunt vivamus adipiscing quam. Eget dui quis
                            etiam sed eget sed est.
                        </p>
                        <div class="responsive-container-block person">
                            <div
                                class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12 icon-block"
                            >
                                <img
                                    class="profile-img"
                                    src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/eourInstructors1.svg"
                                />
                            </div>
                            <div
                                class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12 text-block"
                            >
                                <p class="text-blkr name">Jane Doe</p>
                                <p class="text-blkr desig">CEO</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        </section>
        <section id="contact">
            <h1
            class='section-heading'            >
                Contact Us
            </h1>
            <section id="contact" class="contact">
                <div class="c-container">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                        frameborder="0"
                        allowfullscreen
                    ></iframe>
                    <div class="contact-content">
                        <div class="contact-info">
                            <div class="c-info">
                                <div class="address">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <h4>Location:</h4>
                                    <p>A108 Adam Street, New York, NY 535022</p>
                                </div>

                                <div class="email">
                                    <i class="fa-solid fa-envelope"></i>
                                    <h4>Email:</h4>
                                    <p>info@example.com</p>
                                </div>

                                <div class="phone">
                                    <i class="fa-solid fa-phone"></i>
                                    <h4>Call:</h4>
                                    <p>+1 5589 55488 55s</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <form
                                action="submit_contact.php"
                                method="post"
                                class="contact-form"
                                id="myForm"
                            >
                                <div class="inputs">
                                    <input
                                        type="text"
                                        name="name"
                                        placeholder="Your Name"
                                        required
                                    />
                                    <input
                                        type="email"
                                        name="email"
                                        placeholder="Your Email"
                                        required
                                    />
                                </div>
                                <input
                                    type="text"
                                    name="subject"
                                    placeholder="Subject"
                                    required
                                />
                                <textarea
                                    name="message"
                                    rows="5"
                                    placeholder="Message"
                                    required
                                ></textarea>
                                <button type="submit">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </section>

        <!-- Booking Section -->
        <section id="booking">
            <footer class="footer">
                <div class="f-container">
                    <div class="f-row">
                        <div class="footer-col">
                            <h4>company</h4>
                            <ul>
                                <li><a href="#">about us</a></li>
                                <li><a href="#">our services</a></li>
                                <li><a href="#">privacy policy</a></li>
                                <li><a href="#">affiliate program</a></li>
                            </ul>
                        </div>
                        <div class="footer-col">
                            <h4>get help</h4>
                            <ul>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">shipping</a></li>
                                <li><a href="#">returns</a></li>
                                <li><a href="#">order status</a></li>
                                <li><a href="#">payment options</a></li>
                            </ul>
                        </div>
                        <div class="footer-col">
                           
                        </div>
                        
                        <div class="footer-col">
                            <h4>follow us</h4>
                            <div class="social-links">
                                <a href="#"
                                    ><i class="fab fa-facebook-f"></i
                                ></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"
                                    ><i class="fab fa-linkedin-in"></i
                                ></a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
          
        </section>
       

        <script src="https://apis.google.com/js/api.js"></script>
        <script>
            // Client ID from the Google Cloud Console
           
            // Array of API discovery doc URLs for APIs used by the application
            var DISCOVERY_DOCS = ["https://www.googleapis.com/discovery/v1/apis/calendar/v3/rest"];
            
            // Authorization scopes required by the API
            var SCOPES = "https://www.googleapis.com/auth/calendar.events";
            var CLIENT_ID = '1055014848208-b0j10hnhf55jf26v8up1gqq1curh07qc.apps.googleusercontent.com';
            var API_KEY = 'AIzaSyBuODHbMqQCeceZhzBTwzxe0pA14iykmOs';
            
            function handleClientLoad() {
                gapi.load('client:auth2', initClient);
            }

            function initClient() {
                gapi.client.init({
                    apiKey: API_KEY,
                    clientId: CLIENT_ID,
                    discoveryDocs: DISCOVERY_DOCS,
                    scope: SCOPES
                }).then(function () {
                    // Listen for sign-in state changes.
                    gapi.auth2.getAuthInstance().isSignedIn.listen(updateSigninStatus);

                    // Handle the initial sign-in state.
                    updateSigninStatus(gapi.auth2.getAuthInstance().isSignedIn.get());
                });
            }

            function updateSigninStatus(isSignedIn) {
                if (isSignedIn) {
                    addEventToCalendar();
                } else {
                    gapi.auth2.getAuthInstance().signIn();
                }
            }

            function addEventToCalendar() {
                var event = {
                    'summary': 'Sample Event',
                    'description': 'This is a sample event added via JavaScript.',
                    'start': {
                        'dateTime': '2024-04-20T10:00:00',
                        'timeZone': 'America/New_York'
                    },
                    'end': {
                        'dateTime': '2024-04-20T11:00:00',
                        'timeZone': 'America/New_York'
                    }
                };
            
                var request = gapi.client.calendar.events.insert({
                    'calendarId': 'primary',
                    'resource': event
                });
            
                request.execute(function(event) {
                    console.log('Event created: ' + event.htmlLink);
                });
            }
        </script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
            AOS.init({
                debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
                throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
                delay: 100, // values from 0 to 3000, with step 50ms
                duration: 1000, // values from 0 to 3000, with step 50ms
                easing: "ease-in-out",
                // default easing for AOS animations
            });
            // Get the modal
            var modal = document.getElementById("myModal");
            var btn = document.getElementById("openModal");
            var btn1 = document.getElementById("openModal1");
            var span = document.getElementsByClassName("close")[0];
            btn.onclick = function () {
                modal.style.display = "block";
            };
            btn1.onclick = function () {
                modal.style.display = "block";
            };

            span.onclick = function () {
                modal.style.display = "none";
            };

            window.onclick = function (event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            };
        
            $(document).ready(function () {
                $(' input[type="checkbox"]').change(function () {
                    if ($(`input[type="checkbox"]`).is(":checked")) {
                        $(`.One-off-price`).addClass("d-nones");
                        $(`.Weekly-price`).removeClass("d-nones");
                        $(`.One-off-plan`).addClass("d-nones");
                        $(`.Weekly-plan`).removeClass("d-nones");
                    } else {
                        $(`.One-off-price`).removeClass("d-nones");
                        $(`.Weekly-price`).addClass("d-nones");
                        $(`.One-off-plan`).removeClass("d-nones");
                        $(`.Weekly-plan`).addClass("d-nones");
                    }
                });
                $(`.pcard`).mouseenter(function (item) {
                    $(`.pcard`).removeClass("pcard-selected");
                    item.currentTarget.classList.add("pcard-selected");
                });
            });
        </script>
    </body>
</html>
