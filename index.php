<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkillWill Blog</title>
    <link rel="stylesheet" href="style.css">

    <?php require "variables.php"; ?>

</head>
<body>

    <!-- header -->
    <header>
        <div class="container">
        <img src="./Assets/Logo.png" alt="">
         <nav class="navigation">
             <ul>
                 <li>
                     <a href="#">Blog</a>
                 </li>
 
                 <li>
                     <a href="#">Newsletter</a>
                 </li>
                 
                 <li>
                     <a href="#">Twitter</a>
                 </li>
             </ul>
         </nav>
        </div>
 </header>

    <!-- recent projects -->
    <section class="recent-projects" id="projects">
        <div class="container-small"> 
        <h2>
            Recent <span>Projects</span>
        </h2>
    <div class="cards">

        <div class="card">
            <div class="image">
                <img src="./Assets/Post1.png" alt="">
            </div>
            <div class="project1">
                <h3>
                    Project1
                </h3>
                <div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse bibendum.
                    </p>
                    <p>
                        Nunc non posuere consectetur, justo erat semper enim, non hendrerit dui odio id enim.
                    </p>
                </div>
            </div>
        </div>

        <?php
            for ($i = 0; $i < sizeof($projects); $i++) {
                echo '<div class="card">
                <img src="' . $projects[$i]['image'] . '" alt="">
                <div class="project1"><h3>' . $projects[$i]['title'] . '</h3><div>
                ' . $projects[$i]['body'] . '
                    </div>
                </div>
            </div>';
            }
        ?>

    </div>
        </div>
    </section>

    <!-- footer -->
<div class="footer">
    <div class="container-footer">
        <p>
            © Copyright 2022  All rights reserved
        </p>
        <div class="social">
            <img src="./Assets/Facebook.png" alt="">
            <img src="./Assets/Twitter.png" alt="">
            <img src="./Assets/LinkedIn.png" alt="">
        </div>
    </div>

</div>

</body>
</html>