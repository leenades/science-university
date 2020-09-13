<?php
require_once '../database/database.php';

$sql = "SELECT config.config_name, config.config_value, config.is_active FROM db_science_university_config config";
$result = $conn->query($sql);
$result->setFetchMode(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Science University</title>
        <meta charser="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../bootstrap-4.5.0\dist\css\bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../themes/css/GLOBAL.css">
        <link rel="stylesheet" href="../themes/css/navbar.css">
        <link rel="stylesheet" href="../themes/css/header.css">
        <link rel="stylesheet" href="../themes/css/news-courses.css">
        <link rel="stylesheet" href="../themes/css/ticker.css">
        <link rel="stylesheet" href="../themes/css/events.css">
        <link rel="stylesheet" href="../themes/css/admission.css">
        <link rel="stylesheet" href="../themes/css/form.css">
        <link rel="stylesheet" href="../themes/css/footer.css">
        <link rel="stylesheet" href="../themes/css/animation.css">
        <link rel="stylesheet" href="../themes/css/fonts.css">


    </head>
    <body>
        <script
        src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" 
        crossorigin="anonymous"></script>
        <script src="../bootstrap-4.5.0/dist/js/bootstrap.min.js"></script>
        
        <div class="search-box-transition">
            <span class="close-search-box" id="close-search-box">
                <i class="fa fa-slash first-child"></i>
                <i class="fa fa-slash second-child"></i>
            </span>
            <div class="input-border-style">
                <input type="search" class="search-box-field" id="searchBox" placeholder="Search...">
            </div>
        </div>
        <!-- NAVBAR Section START -->
        <nav class="navbar navbar-expand-xl navbar-styles">
            <div class="navbar-brand-container">
            <?php
                $row = $result->fetch();
                if($row['config_name'] === "Logo" && $row['is_active'] == "1"){
                    echo "<a class='navbar-brand' href='../Pages/index.php'>";
                    echo "<img src=../Assets/Images/$row[config_value] alt=science-university-logo>";
                    echo "</a>";
                }
            ?>
            </div>
            <button 
            id="btn-menu"
            class="navbar-toggler btn-menu-burger" 
            type="button" 
            data-toggle="collapse" 
            data-target="#navBarCollapse" 
            aria-controls="navBarCollapse" 
            aria-expanded="false" 
            aria-label="Toggle navigation">
            <span class="dark-blue-text">
                <i class="fa fa-align-right"></i>
            </span>
            </button>
            <div class="search-social-container d-flex">
                <div class="logo-socials-row">
                    <div class="col social-media-icons-col">
                        <div class="social-media-container">
                        <?php 
                        $socialMediaMenuSQL = "SELECT menu.title, menu.text, menu.url, menu.icon, menu.type_ FROM db_science_university_menu menu WHERE menu.icon=''";
                        $smMenuResult = $conn->query($socialMediaMenuSQL);
                        $smMenuResult->execute();
                        $result = $smMenuResult->fetchAll();
                        foreach($result as $row){
                            echo "<a class='social-media-icon mr-1' href='$row[url]' aria-label='$row[text]'>";
                            echo "<i class='$row[title]'>";
                            echo "</i>";
                            echo "</a>";
                        }
                        
                        ?>
                            
                        </div>
                    </div>
                </div>
                <div class="search-box-container">
                    <a class="social-media-icon-search" id="searchIcon">
                    <i class="fa fa-search"></i></a>
                </div>
            </div>
            <div class="navbar-container collapse navbar-collapse" id="navBarCollapse">
                <div class="container-fluid container-nav-links">
                    <div class="row navbar-links">
                        <ul class="navbar-nav">
                        <?php
                        $navSQL = "SELECT nav.nav_title, nav.nav_link, nav.is_active 
                        FROM db_science_university_navbar nav
                        WHERE is_active='1'";
                        $navbarResult = $conn->query($navSQL);
                        $navbarResult->execute();
                        $navResult = $navbarResult->fetchAll();
                        foreach($navResult as $row){

                            // var_dump($row['nav_link']);
                            echo "<li class='nav-item'>";
                            echo "<a class='nav-link' href='../Pages/$row[nav_link]'>";
                            echo $row['nav_title'];
                            echo "</a>";
                            echo "</li>";
                        }
                        ?>
                            <div class="logo-socials-row-mobile d-xl-none">
                                <div class="social-media-icons-col">
                                
                                    <div class="social-media-container">
                                    <?php 
                                        $socialMediaMenuSQL = "SELECT menu.title, menu.text, menu.url, menu.icon, menu.type_ FROM db_science_university_menu menu WHERE menu.icon=''";
                                        $smMenuResult = $conn->query($socialMediaMenuSQL);
                                        $smMenuResult->execute();
                                        $result = $smMenuResult->fetchAll();
                                        foreach($result as $row){
                                            echo "<a class='social-media-icon mr-1' href='$row[url]' aria-label='$row[text]'>";
                                            echo "<i class='$row[title]'>";
                                            echo "</i>";
                                            echo "</a>";
                                        }
                                    ?>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- NAVBAR Section END -->
