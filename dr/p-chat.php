<?php
include("database/connect.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
</head>

<!-- MATERIAL ICONS FROM GOOGLE --> <!-- MATERIAL ICONS FROM GOOGLE -->

<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">


<!-- the css link --><!-- the css link --><!-- the css link --><!-- the css link --><!-- the css link -->

<link rel="stylesheet" href="css/chat.css">

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

<body>

    <!-- NAVIGATION NAVIGATION NAVIGATION NAVIGATION NAVIGATION NAVIGATION -->
    <div class="container">
        <div class="navigation">
        <img src="nya-logo.jpg" height="100" width="290">
            <ul>
                <!-- <li>
                    <a href="http://">
                        <span class="material-symbols-outlined">emergency</span>
                        <span class="title">Dr's dashboard</span>
                    </a>
                </li> -->

                <li>
                    <a href="index.php">
                        <span class="material-symbols-outlined">dashboard</span>
                        <span class="title">Pharmacist's Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="appointments.php">
                        <span class="material-symbols-outlined">bookmark</span>
                        <span class="title">Medicine</span>
                    </a>
                </li>

                <li>
                    <a href="results.php">
                        <span class="material-symbols-outlined">glucose</span>
                        <span class="title">Results</span>
                    </a>
                </li>

                

                <li>
                    <a href="chat.php">
                        <span class="material-symbols-outlined">forum</span>
                        <span class="title">Chat</span>
                    </a>
                </li>

                <li>
                    <a href="database/logout.php">
                        <span class="material-symbols-outlined">logout</span>
                        <span class="title">Log out</span>
                    </a>
                </li>

                
            </ul>
        </div>
    </div>

    <!---------------------------------MAIN--------------------------------------------------->

    <div class="main">
        <div class="topbar">
            <div class="toggle">
                <span class="material-symbols-outlined">menu</span>
                        
            </div>

            <div class="search">
                <label for="search">
                    
                    <input type="search" name="search" id="search" value="Search here">
                </label>
            </div>
            
            <!-- <div class="user">
                <img src="" alt="" >
            </div> -->

        </div>

        <!-- NEW PROG BEGINS HERE -->

        <section class ="timeline-section">

        <!-- this wasnt There --><!-- this wasnt There --><!-- this wasnt There --><!-- this wasnt There --><!-- this wasnt There -->
        <nav>
            <!-- this is the logo -->
            
            
            
            <!-- below is the menu icon -->
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <div>
            <!-- TESTIMONIALS -->

        <section class="testimonials">
            
            
            <?php
            include('database/connect.php');

            $sql = "SELECT * 
                    FROM `group_messo`";

            $response = mysqli_query($conn, $sql);

            if($response){
                $num = mysqli_num_rows($response);

                if($num > 0){
                    while($row = mysqli_fetch_assoc($response)){
                        // echo $row["name"] . "<br>";
                        // echo $row["email"] . "<br>";
                        // echo $row["comment"] . "<br>";
                        echo"
                            <div class='row'>
                            <div class='testimonial-col'>
                            
                            <div>
                            <p>
                            {$row['message']}
                            </p>
                        // <h3> {$row['name']}</h3>
                        </div>

                        </div>

                        
                        </div>";
                    }
                }else{
                    echo "<h1>You Do not have any messages</h1>";
                }
            }

            
            ?>

        </section>

        
            
            

        <?php

          
                    
                
                          echo "<h1 style='color:red;text-align:center;'>Send To individual</h1>
        

                                <div class='contain'>
                                <div class='head'>
                                <h2 style='color:blue;text-align:center;'></h2>
                                </div>
                            
                                      <div class='comment-box'>
                                        <h3>Start a chat</h3>
                                        <form action='single_mess.php' class='comment-form' method = 'POST'>
                                            
                                            <textarea name='comment' id='comment' rows='5' placeholder='Your comment' required></textarea>
                                            <button type='submit' class='hero-btn red-btn'>POST COMMENT</button>
                                        </form>         
                                        </div>

                                        
                                </div>
                                
                                <h1 style='color:red;text-align:center;'>Group Chat</h1>
        

                                <div class='contain'>
                                <div class='head'>
                                <h2 style='color:blue;text-align:center;'></h2>
                                </div>
                            
                                      <div class='comment-box'>
                                        <h3>Start a chat</h3>
                                        <form action='group_mess.php' class='comment-form' method = 'POST'>
                                            
                                            <textarea name='comment' id='comment' rows='5' placeholder='Your comment' required></textarea>
                                            <button type='submit' class='hero-btn red-btn'>POST COMMENT</button>
                                        </form>         
                                        </div>

                                        
                                </div>
                                ";


                                

                            
                     



                     ?>
        <!-- this wasnt there --><!-- this wasnt There --><!-- this wasnt There --><!-- this wasnt There --><!-- this wasnt There -->
     


            <!-- <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-date">2015</div>
                <div class="timeline-content">
                    <h3>Timeline item title</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam consequatur, ipsum, in quo autem voluptate mollitia illum nemo atque, eveniet sint? Ex similique esse sed, repellat necessitatibus reprehenderit voluptatum illo!</p>
                    
                </div>
            </div> -->


            <!-- <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-date">2015</div>
                <div class="timeline-content">
                    <h3>Timeline item title</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam consequatur, ipsum, in quo autem voluptate mollitia illum nemo atque, eveniet sint? Ex similique esse sed, repellat necessitatibus reprehenderit voluptatum illo!</p>
                    
                </div>
            </div> -->

            <!-- <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-date">2015</div>
                <div class="timeline-content">
                    <h3>Timeline item title</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam consequatur, ipsum, in quo autem voluptate mollitia illum nemo atque, eveniet sint? Ex similique esse sed, repellat necessitatibus reprehenderit voluptatum illo!</p>
                    
                </div>
            </div> -->

        </div>
    </section>
        <!-- ORDER DETAILS LIST -->
        <div class="details">

            <!-- NEW CUSTOMERS -->
            <div class="recentCustomers">
                
            </div>

    
        </div>

        
    </div>
<script>
    
    // Menu toggle
    let toggle = document.querySelector(".toggle");
    let nav = document.querySelector(".navigation");
    let main = document.querySelector(".main");
    
    toggle.onclick = function(){
        nav.classList.toggle("active");
        main.classList.toggle("active");
    }
</script>
</body>
<!-- THE DIFF SCRITS --> <!-- THE DIFF SCRITS --> <!-- THE DIFF SCRITS -->

<script src="js/main.js"></script>
</html>


<!-- TESTIMONIALS

<section class="testimonials">
    <h1>What our Business owners say</h1>
    <p>There is no better place than where we are right now, we wouldnt change it for the world</p>

    <?php

    include("connect.php");

    $sql = "SELECT * 
            FROM `comments`";

    $response = mysqli_query($conn, $sql);

    if($response){
        $num = mysqli_num_rows($response);

        if($num > 0){
            while($row = mysqli_fetch_assoc($response)){
                // echo $row["name"] . "<br>";
                // echo $row["email"] . "<br>";
                // echo $row["comment"] . "<br>";
                echo"
                     <div class='row'>
                       <div class='testimonial-col'>
                       
                    <div>
                    <p>
                    {$row['comment']}
                    </p>
                   <h3> {$row['name']}</h3>
                </div>

                </div>

                
                </div>";
            }
        }
    }

    
    ?> -->

</section>
