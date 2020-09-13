<?php
session_start();
require_once '../database/database.php';
 
include_once '../includes/navbar.php';
include_once '../includes/indexPageScript.php';

$sql = "SELECT header.image_path_file, header.header_title, header.order_ 
FROM db_science_university_header header";
?>

        <!-- Section header Start -->
        <section class="image-slider">
            <div id="myCarousel" class="carousel slide carousel-slider" data-ride="carousel">
                <?php
                echo "<ol class='carousel-indicators'>";
                $headerSQL = "SELECT header.image_path_file, header.header_title, header.header_text, header.order_, header.is_active 
                FROM db_science_university_header header WHERE is_active='1'
                ORDER BY order_ ASC";
                $headerResult = $conn->query($headerSQL);
                $headerResult->execute();
                $results = $headerResult->fetchAll();
                foreach($results as $row){
                    echo "<li data-target='#myCarousel' data-slide-to='$row[order_]' class='active'>";
                    echo "</li>";
                }
                echo "</ol>";
                echo "<div class='carousel-inner'>";
                ?>
                <?php 
                $count = 1;    
                foreach($results as $key => $row){
                ?>
                <div class='carousel-item <?php 
                if($count == 1){
                    echo 'active';
                } else {
                    echo '';
                } ?> data-interval="2000"'>
                <?php 
                        echo "<picture class='header-picture-responsive'>";
                        echo "<source media='(min-width:992px)' srcset=../Assets/Images/$row[image_path_file]>";
                        echo "<source media='(min-width:650px)' srcset='../Assets/Images/headersun1.jpg'>";
                        echo "<img src='../Assets/Images/group_8.jpg' alt='$row[header_title]'>";
                        echo "</picture>";
                        echo "<div class='header-title-container'>";
                        echo "<h2 class='header-title'>";
                        echo $row['header_text'];
                        echo "</h2>";
                        echo "</div>";
                        echo "</div>";
                        $count++;
                    }
                ?>
                    
            </div>
        </section>
        <!-- Section header End -->
        
<?php if(isset($_SESSION['message_form'])): ?>
    <div class="alert alert-<?=$_SESSION['msg_type']?> mr-4 ml-4 mt-5">
        <?php
        echo $_SESSION['message_form'];
        unset($_SESSION['message_form']);
        ?>
    </div>
<?php endif ?>

        <!-- Section news and programmes Start -->
        <section class="section-two">
            <div class="container news-programmes-container">
               
                <!-- Courses and programmes column START -->
                <div class="row courses-div">
                    <div class="col col-first">
                        <div class="row courses-row-first">
                        <?php
                        $firstRowCoursesSQL = "SELECT course.category_title, course.course_image, course.course_link, course.is_active
                        FROM db_science_university_courses course
                        WHERE is_active='1'";
                        $firstRowCourses = $conn->query($firstRowCoursesSQL);
                        $firstRowCourses->execute();
                        $result = $firstRowCourses->fetchAll();
                        $COUNTER = 1;
                        $evenNumCounter = 0;
                        foreach($result as $row ){
                            if($COUNTER<=4){
                                echo "<div class='col-6 mb-4'>";
                                echo "<div class=blurb ug-courses>";
                                echo "<a href='$row[course_link]'>";
                                echo "<img 
                                src='../Assets/Images/undergraduate/$row[course_image]'; 
                                alt='$row[category_title]' 
                                class='section-news-images'>";
                                echo "<h4 class='section-news-images-title'>";
                                echo $row['category_title'];
                                echo "</h4>";
                                echo "</a>";
                                echo "</div>";
                                echo "</div>";
                            }
                            $COUNTER++;
                        }
                        ?>
                        </div>
                    </div> 
                        <!-- Courses and programmes column END  -->
                        
                        <!-- News Column -->
                    <div class="col news-div col-second">
                        <div class="background-color-news-container">
                            <div class="blurb-news">
                            <a href="news/"><h4 class="title-style">News</h4></a>    
                            </div>
                            <?php
                            $SQL = "SELECT news.news_title, news.news_description, MONTHNAME(news.news_date), YEAR(news.news_date), DAY(news.news_date), news.news_link, news.is_active 
                            FROM db_science_university_news news
                            WHERE is_active='1'";
                            $resultSQL = $conn->query($SQL);
                            $resultSQL->execute();
                            $result = $resultSQL->fetchAll();
                            $COUNTER = 1;
                            foreach($result as $row){
                                if($COUNTER <= 3){
                                    echo "<div class='news'>";
                                    echo "<h6 class='news-date'>";
                                    echo $row["MONTHNAME(news.news_date)"]. " ";
                                    echo $row["DAY(news.news_date)"]. ", ";
                                    echo $row["YEAR(news.news_date)"];
                                    echo "</h6>";
                                    echo "<a href='$row[news_link]' aria-label='$row[news_title]'>";
                                    echo "<h5 class='news-title'>";
                                    echo $row['news_title'];
                                    echo "</h5>";
                                    echo "</a>";
                                    echo "<p class='news-content'>";
                                    echo $row['news_description'];
                                    echo "</p>";
                                    echo  "<button class='news-btn'>READ MORE</button>";
                                    echo "</div>";
                                    if($COUNTER <=2){
                                        echo "<hr>";
                                    }
                                }
                                $COUNTER++;
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </section>
        <!-- Section news and programmes End -->

        <!-- Section ticker Start -->
        <section class="section-ticker">
            <div class="container">
                <div class="row div-ticker">
                <?php
                $SQL = "SELECT icon_image, number_, inc_or_decr, description_, data_target, character_, character_before_number, is_active
                FROM db_science_university_ticker
                WHERE is_active='1'";
                $resultSQL = $conn->query($SQL);
                $resultSQL->execute();
                $result = $resultSQL->fetchAll();
                $COUNTER = 1;
                foreach($result as $row){
                    if($COUNTER <= 3){
                        echo "<div class='col-sm ticker-col'>";
                        echo "<img 
                                src='../Assets/Images/icon-man/$row[icon_image]' 
                                alt='icon of man'
                                width='69px'
                                height='70px'>";
                        echo "<div class='ticker-header-title'>";
                        if($row['character_before_number'] == "on"){
                            echo "<h3>$row[character_]</h3>";
                        }
                        if($row['inc_or_decr'] == "Increment"){
                            echo "<h3 class='counterInc' data-target='$row[data_target]'>";
                        }
                        if($row['inc_or_decr'] == "Decrement"){
                            echo "<h3 class='counterDecr' data-target='$row[data_target]'>";
                        }
                        echo $row['number_'];
                        echo "</h3>";
                        if($row['character_before_number'] == ""){
                            echo "<h3>$row[character_]</h3>";
                        }
                        echo "</div>";
                        echo "<h4>";
                        echo $row['description_'];
                        echo "</h4>";
                        echo "</div>";
                    }
                    $COUNTER++;
                }
                ?>
                </div>
            </div>
        </section>
        <!-- Section counter End -->

        <!-- Section events/blogs Start -->
        <section class="events-section">
            <div class="container">
                <div class="row  blurb-news"><h4 class="title-style">Events</h4></div>
                <div class="row blogs-styles">
                <?php
                $SQL = "SELECT event_title, event_description, event_image, DAY(event_date), MONTHNAME(event_date), event_start_time, event_end_time, event_location, event_category_category_id, is_active 
                FROM db_science_university_events
                WHERE is_active='1'";
                $resultSQL = $conn->query($SQL);
                $resultSQL->execute();
                $result = $resultSQL->fetchAll();
                $COUNTER = 1;
                foreach($result as $row){
                    if($COUNTER <= 3){
                        echo "<div class='col-sm blurb-column-events'>";
                        echo "<div class='events-container-bg'>";
                        echo "<div class='blurb blurb-container'>";
                        echo "<div class='img-icon-container'>";
                         echo "<img 
                            src='../Assets/Images/postgrad-events/$row[event_image]'
                            alt=''>";
                        echo "<span class='icon-container'>";
                        echo "<span class='icon-text'>";
                        echo "<h5>";
                        echo $row['DAY(event_date)'];
                        echo "</h5>";
                        echo "<h6>";
                        echo $row['MONTHNAME(event_date)'];
                        echo "</h6>";
                        echo "</span>";
                        echo "<img 
                                src='../Assets/Images/icon-calendar/icon-calendar.png' 
                                alt='icon calendar'>";
                        echo "</span>";
                        echo "</div>";
                        echo "<div class='events-blurbs-description'>";
                        echo "<h6 class='events-blurb-description-time'>";
                        echo date('h:i A', strtotime($row['event_start_time']));
                        echo " - ";
                        echo date('h:i A', strtotime($row['event_end_time']));
                        echo "</h6>";
                        echo "<div class='v1'></div>";
                        echo "<h6 class='events-blurb-description-location'>";
                        echo $row['event_location'];
                        echo "</h6>";
                        echo "<a href='' aria-label='Postgraduate Drop-in Evening'>";
                        echo "<span class='events-description-title'>";
                        echo "<h5>";
                        echo $row['event_title'];
                        echo "</h5>";
                        echo "</span>";
                        echo "</a>";
                        echo "<span><p class='events-description-paragraph'>";
                        echo $row['event_description'];
                        echo "</p></span>";
                        echo "</div>";
                        echo "</div>";
                        echo "<button class='events-blurb-description-btn'>Learn More</button>";
                        echo "</div>";
                        echo "</div>";
                    }
                    $COUNTER++;
                }
                ?>
                   
                </div>
            </div>
        </section>
        <!-- Section events End -->

        <!-- Section Admission Start -->
        <section class="admission-section">
            <div class="container">
            <?php
            $sql = "SELECT admission.admission_id, admission.admission_text, admission.admission_button, admission.button_link, admission.is_active
            FROM db_science_university_admission as admission
            WHERE is_active=1";
            $resultSQL = $conn->query($sql);
            $resultSQL->execute();
            $result = $resultSQL->fetchAll();
            $COUNTER = 1;
            foreach($result as $row){
                if($COUNTER == 1){
                    echo "<div class='row addmission-row-title'>";
                    echo "<div class='col addmission-title'>";  
                    echo "<h2>$row[admission_text]</h2>";
                    echo "</div>";
                    echo "</div>";
                    echo "<div class='row admission-row-btn'>";
                    echo "<div class='col admission-btn'>";
                    echo "<button class='button-animation' onclick='relocate_home($row[button_link]);'>";
                    echo $row['admission_button'];
                    echo "</button>";
                    echo "</div>";
                    echo "</div>";
                    
                    
                }
            }
            ?>
            <script>
            function relocate_home(this_site)
            {
                 location.href = this_site;
            } 
            </script>
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
                                    <form class="form-style" method="POST" action="../form/form.php">
                                        <div class="full-name-phone-number">
                                            <div class="form-group form-name">
                                                <input 
                                                type="text"
                                                for="fullName" 
                                                name="fullName"
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
                                            name="email"
                                            placeholder="Email" required>
                                        </div>
                                        <div class="form-group txtarea">
                                            <textarea 
                                            rows="5" 
                                            cols="80" 
                                            name="message"
                                            placeholder="Message" required></textarea>
                                        </div>
                                        <div class="form-group form-btn">
                                            <button class="button-animation" id="submitForm" name="submitForm">
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