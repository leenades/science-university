<?php
require_once '../database/database.php';
?>
        <!-- Footer Section Start -->
        <footer class="footer-section">
            <div class="container footer-container">
                <div class="row footer-row">
                    <div class="v-line-divider"></div>
                    <div class="col explore">
                    <?php 
                    $sql = "SELECT footer.parent_title, footer.item_list, footer.item_link, footer.item_icon, footer.image_, footer.is_active
                    FROM db_science_university_footer as footer
                    WHERE parent_title='Explore' and is_active=1";

                    $sqlResult = $conn->query($sql);
                    $sqlResult->execute();
                    $result = $sqlResult->fetchAll();
                    $COUNTER = 1; 
                    foreach($result as $row){
                        if($COUNTER == 1){
                            echo "<div class='footer-title-caret-container'>";
                            echo "<h6 class='footer-subtitles demo' data-toggle='collapse' data-target='#demo' aria-expanded='true'>";
                            echo $row['parent_title'];
                            echo "</h6>";
                            echo "<span class='caret caret-explore'><i class='fa fa-angle-up'></i></span>";
                            echo "</div>";
                            $COUNTER++;
                        }
                        echo "<ul class='footer-list' id='demo'>";
                        echo "<li><a href='$row[item_link]' aria-label='$row[item_list]'>";
                        echo $row['item_list'];
                        echo "</a></li>";
                        echo "</ul>";
                            
                        }
                    ?>
                    </div>
                        
                    <div class="v-line-divider"></div>

                    <div class="col quick-links-using-our-site">

                    <?php 
                    $sql = "SELECT footer.parent_title, footer.item_list, footer.item_link, footer.item_icon, footer.image_, footer.is_active
                    FROM db_science_university_footer as footer
                    WHERE parent_title='QUICK LINKS' and is_active=1";

                    $sqlResult = $conn->query($sql);
                    $sqlResult->execute();
                    $result = $sqlResult->fetchAll();
                    $COUNTER = 1; 
                    foreach($result as $row){
                        if($COUNTER == 1){
                            echo "<div class='footer-title-caret-container'>";
                            echo "<h6 class='footer-subtitles demoOne' data-toggle='collapse' data-target='#demoOne' aria-expanded='true'>";
                            echo $row['parent_title'];
                            echo "</h6>";
                            echo "<span class='caret caret-quick-links'><i class='fa fa-angle-up'></i></span>";
                            echo "</div>";
                            $COUNTER++;
                        }
                        echo "<ul class='footer-list' id='demoOne'>";
                        echo "<li><a href='$row[item_link]' aria-label='$row[item_list]'>";
                        echo $row['item_list'];
                        echo "</a></li>";
                        echo "</ul>";
                            
                        }
                    ?>
                    <?php 
                    $sql = "SELECT footer.parent_title, footer.item_list, footer.item_link, footer.item_icon, footer.image_, footer.is_active
                    FROM db_science_university_footer as footer
                    WHERE parent_title='USING OUR SITE' and is_active=1";

                    $sqlResult = $conn->query($sql);
                    $sqlResult->execute();
                    $result = $sqlResult->fetchAll();
                    $COUNTER = 1; 
                    foreach($result as $row){
                        if($COUNTER == 1){
                            echo "<div class='footer-title-caret-container'>";
                            echo "<h6 class='footer-subtitles demoTwo' data-toggle='collapse' data-target='#demoTwo' aria-expanded='true'>";
                            echo $row['parent_title'];
                            echo "</h6>";
                            echo "<span class='caret caret-using-our-site'><i class='fa fa-angle-up'></i></span>";
                            echo "</div>";
                            $COUNTER++;
                        }
                        echo "<ul class='footer-list' id='demoTwo'>";
                        echo "<li><a href='$row[item_link]'class='hover-over-style' aria-label='$row[item_list]'>";
                        echo $row['item_list'];
                        echo "</a></li>";
                        echo "</ul>";
                            
                        }
                    ?>
                    </div>
               
                    <div class="v-line-divider"></div>

                    <div class="col how-to-find-us">
                    <?php 
                    $sql = "SELECT footer.parent_title, footer.item_list, footer.item_link, footer.item_icon, footer.image_, footer.is_active
                    FROM db_science_university_footer as footer
                    WHERE parent_title='HOW TO FIND US' and is_active=1";

                    $sqlResult = $conn->query($sql);
                    $sqlResult->execute();
                    $result = $sqlResult->fetchAll();
                    $COUNTER = 1; 
                    foreach($result as $row){
                        if($COUNTER == 1){
                            echo "<div class='footer-title-caret-container'>";
                            echo "<h6 class='footer-subtitles demoThree' data-toggle='collapse' data-target='#demoThree' aria-expanded='true'>";
                            echo $row['parent_title'];
                            echo "</h6>";
                            echo "<span class='caret caret-how-to-find-us'><i class='fa fa-angle-up'></i></span>";
                            echo "</div>";
                            $COUNTER++;
                        }
                        echo "<ul class='footer-list' id='demoThree'>";
                        echo "<li>";
                        if($row['item_icon'] == 'fa fa-phone'){
                            echo "<span><i class='$row[item_icon]'></i></span>";
                            echo "<a href='tel:$row[item_list]' aria-label='$row[item_list]'>";
                        }
                        if($row['item_icon'] == 'fa fa-envelope'){
                            echo "<span><i class='$row[item_icon]'></i></span>";
                            echo "<a href='mailto:$row[item_list]' aria-label='$row[item_list]'>";

                        }
                        if($row['item_icon'] == 'fa fa-map-marker'){
                            echo "<span><i class='$row[item_icon] fa-lg'></i></span>";
                            echo "<a href='$row[item_list]' aria-label='$row[item_list]'>";

                        }
                        echo $row['item_list'];
                        echo "</a>";
                        echo "</li>";
                        echo "</ul>";
                        }
                    ?>
                    </div>

                    <div class="v-line-divider"></div>

                    <div class="col follow-us">
                    <?php
                    $sql = "SELECT config.config_name, config.config_value
                    FROM db_science_university_config as config
                    WHERE config_name='footer icon' and is_active=1";

                    $sqlResult = $conn->query($sql);
                    $sqlResult->execute();
                    $result = $sqlResult->fetchAll();
                    foreach($result as $row){
                        echo "<div class='row follow-us-row'>";
                        echo "<img 
                        src='../Assets/Images/$row[config_value]'
                        alt='$row[config_name]'
                        >"; 
                        echo "</div>";
                    }

                    ?>
                        <div class="row follow-us-row">
                        <?php
                        $sql = "SELECT footer.parent_title, footer.item_list, footer.item_link, footer.item_icon, footer.image_, footer.is_active
                        FROM db_science_university_footer as footer
                        WHERE parent_title='FOLLOW US' and is_active=1";
    
                        $sqlResult = $conn->query($sql);
                        $sqlResult->execute();
                        $result = $sqlResult->fetchAll();
                        $COUNTER = 1; 
                        foreach($result as $row){
                            if($COUNTER == 1){
                                echo "<h6 class='d-inline-block w-100 footer-subtitles'>";
                                echo $row['parent_title'];
                                echo "</h6>";
                                $COUNTER++;
                            }
                            echo "<div class='social-media-follow-us'>";
                            echo "<a href='$row[item_link]' class='social-media-icon hover-over-style' aria-label='$row[item_list]'><i class='$row[item_icon]'></i></a>";
                            echo "</div>";
                            }
                        ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Secondary Footer Section Start -->
            <section class="secondary-footer">
                <div class="container">
                    <div class="row justify-content-center">
                        <span><i class="fa fa-copyright" aria-hidden="true"></i></span>
                        <h6 class="hover-over-style"><?php echo date('Y');?> Sciences University. All Rights Reserved.</h6>
                    </div>
                </div>
            </section>
            <!-- Secondary Footer Section End -->
        </footer>
        <!-- Footer Section End -->

      
    </body>
</html>