<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
    <link rel="icon" type="image/x-icon" href="nya-logo.jpg">
    <script src="js/links.js"></script>
    <style>
            
 /* //////////////////////////////////THIS IS THE CSS FOR THE MOVEABLE DIVS IN LAB RESULTS */
 .subtitle{
    font-size: 60px;
    font-weight: 600;
    color: black;
  }
  
  .tab-titles{
    display: flex;
    margin: 20px 0 40px;
    font-weight: 300;
  }
  
  .tab-links{
    margin-right: 50px;
    font-size: 18px;
    font-weight: 500;
    cursor: pointer;
    position: relative;
    color: #111;
  }
  
  .tab-links::after{
    content: '';
    width: 0;
    height: 3px;
    background: #ff004f;
    position: absolute;
    left: 0;
    bottom: -8px;
    transition: 0.5s;
  }
  
  .tab-links.active-link::after{
    width: 50%;
  }
  
  .tab-contents ul li{
    list-style: none;
    margin: 10px 0;
  }
  
  .tab-contents ul li span{
    color: #b54769;
    font-size: 14px;
  }
  .tab-contents{
    display: none;
    font-weight: 300;
    color: #111;
  }
  
  .tab-contents.active-tab{
    display: block;
  
  }
  
  .textt{
    font-weight: 300;
    color: #111;
  }
  .texttt{
    font-weight: 300;
    color: #111;
  }
  
    </style>
</head>

<!-- MATERIAL ICONS FROM GOOGLE --> <!-- MATERIAL ICONS FROM GOOGLE -->

<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">


<!-- the css link --><!-- the css link --><!-- the css link --><!-- the css link --><!-- the css link -->

<link rel="stylesheet" href="css/style.css">

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

<body>

    <!-- NAVIGATION NAVIGATION NAVIGATION NAVIGATION NAVIGATION NAVIGATION -->
    <div class="container">
        <div class="navigation">
        
            <ul>
                <!-- <li>
                    <a href="http://">
                        <span class="material-symbols-outlined">emergency</span>
                        <span class="title">Lab's dashboard</span>
                    </a>
                </li> -->
                <img src="nya-logo.jpg" height="100" width="290">

                <li>
                    <a href="l-index.php">
                        <span class="material-symbols-outlined">dashboard</span>
                        <span class="title">Lab's Dashboard</span>
                    </a>
                </li>

                

                <li>
                    <a href="l-results.php">
                        <span class="material-symbols-outlined">glucose</span>
                        <span class="title">Results</span>
                    </a>
                </li>

                

                <li>
                    <a href="l-chat.php">
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
        <!-- CARDS CARDS CARDS CARDS CARDS CARDS

        <div class="cardBox">
            <div class="card">
                <div>
                    <div class="numbers">15401</div>
                    <div class="cardName">Daily News</div>
                </div>

                <div class="iconBx">
                    <span class="material-symbols-outlined">menu</span>
                
                </div>
            </div>

            <div class="card">
                <div>
                    <div class="numbers">15401</div>
                    <div class="cardName">Daily News</div>
                </div>

                <div class="iconBx">
                    <span class="material-symbols-outlined">menu</span>
                
                </div>
            </div>

            <div class="card">
                <div>
                    <div class="numbers">15401</div>
                    <div class="cardName">Daily News</div>
                </div>

                <div class="iconBx">
                    <span class="material-symbols-outlined">menu</span>
                
                </div>
            </div>

            <div class="card">
                <div>
                    <div class="numbers">15401</div>
                    <div class="cardName">Daily News</div>
                </div>

                <div class="iconBx">
                    <span class="material-symbols-outlined">menu</span>
                
                </div>
            </div>

        </div> -->
        <!-- THIS IS THE LINK THAT WILL DIVERT TO THE ONCLICKED DIVS -->
                    <div class="tab-titles">
                        <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
                        <p class="tab-links" onclick="opentab('experience')">Experience</p>
                        <p class="tab-links" onclick="opentab('education')">Education</p>
<!--                         <p class="tab-links" onclick="opentab('github')">Education</p> -->

                    </div>
                    <!-- BELOW ARE THE SELECTED LINKS THAT ARE USED -->
                    <div>
                        <div class="tab-contents active-tab" id="skills">
                            <ul>
                                <li class="texttt"><span>UI/UX</span><br>Designing Web/App interfaces</li>
                                <li class="texttt"><span>Languages</span><br>Java, Dart, JavaScript, HTML, CSS</li>
                                <li class="texttt"><span>Mobile App Development</span><br>Building Android & ios apps with Flutter</li>
                                <li class="texttt"><span>Web Development</span><br>Designing Web interfaces using Flutter <br>Web development with JavaScript, HTML & CSS</li>
                                <li class="texttt"><span>Backend development</span><br>I have extensive knowledge  of both relational i.e MySQL and php myAdmin and non-relational i.e MongoDb & Firebase databases.
                                <br class="texttt">Some of the frameworks that I have extensive knowledge on for this backend development include Laravel. </li>
                            </ul>
                        </div>
                        <div class="tab-contents" id="experience">
                            <ul>
                                <li><span>July, 2021 - 2022</span><br>Intern in I.T Support at Lukenya Getaway</li>
                                <li><span>2023 June - 2023 August</span><br>Attachee at Poa Internet within Athi River, Lukenya region</li>
                                <li><span>2023 October - Current</span><br>I.T Technician/Software Engineer at NAS Holdings Limited</li>

                            </ul>
                        </div>
                        <div class="tab-contents" id="education">
                            <ul>
                                <li><span>2018-2023</span><br><h2>Daystar University</h2> <br>Studying for bachelor of B.COM in Management Information Systems</li>
                                <li><span>2013-2017</span><br><h2>Njiiri School</h2><br>K.C.S.E</li>
                                <li><span>2016 & below</span><br><h2>Acacia Crest Academy</h2><br>Primary School</li>
                            </ul>
                        </div>
<!--                         THE EXTRACTED PART THAT I NEED -->
                    </div>

        <!-- ORDER DETAILS LIST -->
        <div class="details">

            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>Recent Lab Results</h2>
                    <button type="button" class="btn"><a href="http://" style="text-decoration: none;">View all</a></button>
                </div>
    
                <table>
                    <thead>
                        <tr>
                            <td>Name</td>
                            <td>Price</td>
                            <td>Payment</td>
                            <td>Status</td>
                        </tr>
                    </thead>
        
                    <tbody>
                        <tr>
                            <td>Star Ref</td>
                            <td>$1200</td>
                            <td>Paid</td>
                            <td><span class="status delivered">delivered</span></td>
                        </tr>
        
                        <tr>
                            <td>Star Ref</td>
                            <td>$1200</td>
                            <td>Paid</td>
                            <td><span class="status pending">Pending</span></td>
                        </tr>
        
                        <tr>
                            <td>Star Ref</td>
                            <td>$1200</td>
                            <td>Paid</td>
                            <td><span class="status return">Return</span></td>
                        </tr>

                        <tr>
                            <td>Star Ref</td>
                            <td>$1200</td>
                            <td>Paid</td>
                            <td><span class="status inProgress">In progress</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- NEW CUSTOMERS -->
            <div class="recentCustomers">
                <div class="cardHeader">
                    <h2>Recent Medicines</h2>
                </div>

                <table>
                    <tr>
                        <td width="60px">
                            <div class="imgBx"><img src="" alt="" srcset=""></div>
                        </td>

                        <td>
                            <h4>David <br> <span>Italy</span></h4>
                        </td>
                    </tr>

                    <tr>
                        <td width="60px">
                            <div class="imgBx"><img src="" alt="" srcset=""></div>
                        </td>

                        <td>
                            <h4>David <br> <span>Italy</span></h4>
                        </td>
                    </tr>

                    <tr>
                        <td width="60px">
                            <div class="imgBx"><img src="" alt="" srcset=""></div>
                        </td>

                        <td>
                            <h4>David <br> <span>Italy</span></h4>
                        </td>
                    </tr>

                    <tr>
                        <td width="60px">
                            <div class="imgBx"><img src="" alt="" srcset=""></div>
                        </td>

                        <td>
                            <h4>David <br> <span>Italy</span></h4>
                        </td>
                    </tr>
                </table>
            </div>

    
        </div>

        
    </div>
</body>
<!-- THE DIFF SCRITS --> <!-- THE DIFF SCRITS --> <!-- THE DIFF SCRITS -->

<script src="js/main.js"></script>
</html>