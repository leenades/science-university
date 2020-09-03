<?php
require_once '../database/database.php';
 
include_once '../includes/navbar.php';
include_once '../includes/indexPageScript.php';

$sql = "SELECT header.image_path_file, header.header_title, header.order_ 
FROM db_science_university_header header";
?>
        <!-- Section header Start -->
        <section class="image-slider">
            <div id="myCarousel" class="carousel slide carousel-slider" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <picture class="header-picture-responsive">
                            <source media="(min-width:992px)" srcset="../Assets/Images/group_8.jpg">
                            <source media="(min-width:650px)" srcset="../Assets/Images/headersun1.jpg">
                            <img src="../Assets/Images/group_8.jpg" alt="First image">
                        </picture>
                        <div class="header-title-container">
                            <h2 class="header-title">One of the Top 10 Universities in Design</h2>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <picture class="header-picture-responsive">
                            <source media="(min-width:992px)" srcset="../Assets/Images/group_8.jpg">
                            <source media="(min-width:650px)" srcset="../Assets/Images/headersun1.jpg">
                            <img src="../Assets/Images/group_8.jpg" alt="Second image">
                        </picture>
                        <div class="header-title-container">
                            <h2 class="header-title">One of the Top 10 Universities in Design</h2>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <picture class="header-picture-responsive">
                            <source media="(min-width:992px)" srcset="../Assets/Images/group_8.jpg">
                            <source media="(min-width:650px)" srcset="../Assets/Images/headersun1.jpg">
                            <img src="../Assets/Images/group_8.jpg" alt="Fourth image">
                        </picture>
                        <div class="header-title-container">
                            <h2 class="header-title">One of the Top 10 Universities in Design</h2>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <picture class="header-picture-responsive">
                            <source media="(min-width:992px)" srcset="../Assets/Images/group_8.jpg">
                            <source media="(min-width:650px)" srcset="../Assets/Images/headersun1.jpg">
                            <img src="../Assets/Images/group_8.jpg" alt="Fifth image">
                        </picture>
                        <div class="header-title-container">
                            <h2 class="header-title">One of the Top 10 Universities in Design</h2>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <picture class="header-picture-responsive">
                            <source media="(min-width:992px)" srcset="../Assets/Images/group_8.jpg">
                            <source media="(min-width:650px)" srcset="../Assets/Images/headersun1.jpg">
                            <img src="../Assets/Images/group_8.jpg" alt="Sixth image">
                        </picture>
                        <div class="header-title-container">
                            <h2 class="header-title">One of the Top 10 Universities in Design</h2>
                        </div>
                    </div>
                </div>
                <!-- <div class="header-title-container">
                    <h2 class="header-title">One of the Top 10 Universities in Design</h2>
                </div> -->
            </div>
        </section>
        <!-- Section header End -->

        <!-- Section news and programmes Start -->
        <section class="section-two">
            <div class="container news-programmes-container">
               
                <!-- Courses and programmes column START -->
                <div class="row courses-div">
                    <div class="col col-first">
                        <div class="row courses-row-first">
                            <div class="col-6">
                                <div class="blurb ug-courses">
                                    <a href="#">
                                        <img 
                                        src="../Assets/Images/undergraduate/undergraduate.jpg" 
                                        alt="Undergraduate Courses" 
                                        class="section-news-images">
                                        <h4 class="section-news-images-title">Undergraduate Courses</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="blurb grad-courses">
                                    <a href="#">
                                        <img 
                                        src="../Assets/Images/graduation/graduatestudents.jpg" 
                                        alt="Graduate Courses" 
                                        class="section-news-images">
                                        <h4 class="section-news-images-title">Graduate Courses</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="row courses-row-second">
                            <div class="col-6">
                                <div class="blurb inter-studies">
                                    <a href="#">
                                        <img 
                                        src="../Assets/Images/student-photo/student_photo.jpg" 
                                        alt="International Students" 
                                        class="section-news-images">
                                        <h4 class="section-news-images-title">International Students</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="blurb scholarships">
                                    <a href="#">
                                        <img 
                                        src="../Assets/Images/student-applying/student_applying.jpg" 
                                        alt="International Students" 
                                        class="section-news-images">
                                        <h4 class="section-news-images-title">scholarships</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> 
                        <!-- Courses and programmes column END  -->
                        
                        <!-- News Column -->
                    <div class="col news-div col-second">
                        <div class="background-color-news-container">
                            <div class="blurb-news">
                                <h4 class="title-style">News</h4>    
                            </div>
                            <div class="news">
                                <h6 class="news-date">January 06, 2017</h6>
                                <a 
                                href="#" 
                                aria-label="Smart Exhibition Upends Classical Style"><h5 class="news-title">Smart Exhibition Upends Classical Style</h5></a>
                                <p class="news-content">Even the most casual observer is probably acquainted with the Classical style, that aesthetic anchored in the ancient…</p>
                                <button class="news-btn">READ MORE</button>
                            </div>
                            <hr>
                            <div class="news">
                                <h6 class="news-date">December 13, 2016</h6>
                                <a 
                                href="#" 
                                aria-label="Sciences University To Offer Now Undergraduate Major In Creative Writing"><h5 class="news-title">Sciences University To Offer Now Undergraduate Major In Creative Writing</h5></a>
                                <p class="news-content">The Department of English Language and Literature will offer a new undergraduate major in creative writing, beginning…</p>
                                <button class="news-btn">READ MORE</button>
                            </div>
                            <hr>
                            <div class="news">
                                <h6 class="news-date">November 13, 2016</h6>
                                <a 
                                href="#" 
                                aria-label="New Method Uses Heat Flow To Levitate Variety Of Objects"><h5 class="news-title">New Method Uses Heat Flow To Levitate Variety Of Objects</h5></a>
                                <p class="news-content">Even the most casual observer is probably acquainted with the Classical style, that aesthetic anchored in the ancient…</p>
                                <button class="news-btn">READ MORE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <!-- Section news and programmes End -->

        <!-- Section ticker Start -->
        <section class="section-ticker">
            <div class="container">
                <div class="row div-ticker">
                    <div class="col-sm ticker-col">
                        <img 
                        src="../Assets/Images/icon-man/icon-man.png" 
                        alt="icon of man"
                        width="69px"
                        height="70px">
                        <div class="ticker-header-title">
                        <h3 class="counterInc" data-target="90">90</h3><h3>+</h3>
                        </div>
                        <h4>Profession-ready degree programs</h4>
                    </div>
                    <div class="col-sm ticker-col">
                        <img 
                        src="../Assets/Images/letter-icon/lettericon.png"
                        alt="icon of opened letter"
                        width="93px"
                        height="70px">
                        <div class="ticker-header-title">
                        <h3>#</h3>
                        <h3 class="counterDecr" data-target="1">1</h3>
                        </div>
                        <h4>Our MBA for salary-to-debt ratio</h4>
                    </div>
                    <div class="col-sm ticker-col">
                        <img
                        src="../Assets/Images/grad-cap/gradcap.png"
                        alt="icon of a graduation cap"
                        width="86px"
                        height="70px">
                        <div class="ticker-header-title">
                        <h3 class="counterInc" data-target="100000">100000</h3>
                        </div>
                        <h4>Sciences University alumni worldwide</h4>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section counter End -->

        <!-- Section events/blogs Start -->
        <section class="events-section">
            <div class="container">
                <div class="row  blurb-news"><h4 class="title-style">Events</h4></div>
                <div class="row blogs-styles">
                    <div class="col-sm blurb-column-events">
                        <div class="events-container-bg">
                            <div class="blurb blurb-container">
                                <div class="img-icon-container">
                                    <img 
                                    src="../Assets/Images/postgrad-events/postgrad_event.jpg"
                                    alt="postgraduate drop-in evening">
                                    <span class="icon-container">
                                        <span class="icon-text"><h5>18</h5><h6>March</h6></span>
                                        <img 
                                        src="../Assets/Images/icon-calendar/icon-calendar.png" 
                                        alt="icon calendar">
                                    </span>
                                </div>
                                <div class="events-blurbs-description">
                                    <h6 class="events-blurb-description-time">2:00 P.M - 4:00 P.M.</h6>
                                    <div class="v1"></div>
                                    <h6 class="events-blurb-description-location">Irbed Campus</h6>
                                    <a href="#" aria-label="Postgraduate Drop-in Evening"><span class="events-description-title "><h5>Postgraduate Drop-in Evening</h5></span></a>
                                    <span><p class="events-description-paragraph">Our Postgraduate Drop-in Evenings are an excellent opportunity for you to meet our staff and talk to current students…</p></span>
                                </div>
                            </div>
                            <button class="events-blurb-description-btn">Learn More</button>
                        </div>
                    </div>
                    <div class="col-sm blurb-column-events">
                        <div class="events-container-bg">
                            <div class="blurb blurb-container">
                                <div class="img-icon-container">
                                    <img 
                                    src="../Assets/Images/events-music-open-day/events_music_openday.jpg"
                                    alt="undergraduate music open day"
                                    >
                                    <span class="icon-container">
                                        <span class="icon-text"><h5>07</h5><h6>May</h6></span>
                                        <!-- <i class="fa fa-calendar-o fa-4x" aria-hidden="true"></i> -->
                                        <img 
                                        src="../Assets/Images/icon-calendar/icon-calendar.png" 
                                        alt="icon calendar">
                                    </span>
                                </div>
                                <div class="events-blurbs-description">
                                    <h6 class="events-blurb-description-time">4:00 P.M - 6:00 P.M.</h6>
                                    <div class="v1"></div>
                                    <h6 class="events-blurb-description-location">Amman Campus</h6>
                                    <a href="#" aria-label="Undergraduate Music Open Day"><span class="events-description-title "><h5>Undergraduate Music Open Day</h5></span></a>
                                    <span><p class="events-description-paragraph">Music open days are aimed at candidates who have made Kingston University one of their university choices…</p></span>
                                </div>
                            </div>
                            <button class="events-blurb-description-btn">Learn More</button>
                        </div>
                    </div>
                    <div class="col-sm blurb-column-events">
                        <div class="events-container-bg">
                            <div class="blurb blurb-container">
                                <div class="img-icon-container">
                                    <img 
                                    src="../Assets/Images/making-nature-event/making_nature_event.jpg"
                                    alt="making nature' exhibition at welcome collection"
                                    >
                                    <span class="icon-container">
                                        <span class="icon-text"><h5>20</h5><h6>August</h6></span>
                                        <!-- <i class="fa fa-calendar-o fa-4x" aria-hidden="true"></i> -->
                                        <img 
                                        src="../Assets/Images/icon-calendar/icon-calendar.png" 
                                        alt="icon calendar">
                                    </span>
                                </div>
                                <div class="events-blurbs-description">
                                    <h6 class="events-blurb-description-time">2:00 P.M - 4:00 P.M.</h6>
                                    <div class="v1"></div>
                                    <h6 class="events-blurb-description-location">Ajlun Campus</h6>
                                    <a href="#" aria-label="Making Nature’ Exhibition At Wellcome Collection"><span class="events-description-title"><h5>Making Nature’ Exhibition At Wellcome Collection</h5></span></a>
                                    <span><p class="events-description-paragraph">The question of how humans relate to other animals has captivated, scientists, ethicists and artists for centuries...</p></span>
                                </div>
                            </div>
                            <button class="events-blurb-description-btn">Learn More</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section events End -->

        <!-- Section Admission Start -->
        <section class="admission-section">
            <div class="container">
                <div class="row addmission-row-title">
                    <div class="col addmission-title">  
                        <h2>ADMISSIONS ARE NOW OPEN FOR 2017/2018 INTAKE</h2>
                    </div>
                </div>
                <div class="row admission-row-btn">
                    <div class="col admission-btn">
                        <button class="button-animation">apply now</button>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section Admission End -->

        <!-- Section Form Start -->
        <section class="form-section">
            <div class="container">
                <div class="row form-row-contain">
                    <div class="col form-col-container">
                        <div class="form-bg-container">
                            <div class="row blurb-news text-center">
                                <div class="col col-lg-12">
                                    <h4 class="title-style">get in touch</h4>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col col-lg-8 col-md-8 col-sm-4">
                                    <form class="form-style">
                                        <div class="full-name-phone-number">
                                            <div class="form-group form-name">
                                                <input 
                                                type="text"
                                                for="fullName" 
                                                placeholder="Full Name" required>
                                            </div>
                                            <div class="form-group form-phone">
                                                <input
                                                type="tel" 
                                                id="phone"
                                                name="phone"
                                                pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                                                for="phoneNumber" 
                                                placeholder="Phone Number"
                                                title="Format: 123-456-7890"
                                                required>
                                            </div>
                                        </div>
                                        <div class="form-group email">
                                            <input
                                            type="email"
                                            for="email"
                                            placeholder="Email" required>
                                        </div>
                                        <div class="form-group txtarea">
                                            <textarea 
                                            rows="5" 
                                            cols="80" 
                                            placeholder="Message" required></textarea>
                                        </div>
                                        <div class="form-group form-btn">
                                            <button class="button-animation">
                                                submit
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section Form End -->
<?php
include_once '../includes/footer.php';
?>