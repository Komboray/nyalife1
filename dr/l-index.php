<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<style>


.table-box{
    margin: 50px auto;
}

.table-row{
    display: table;
    width:80%;
    margin: 10px auto;
    font-family: sans-serif;
    background: transparent;
    padding: 12px 0;
    color: #555;
    font-size: 13px;
    box-shadow: 0 1px 4px 0 rgba(0,0,50,0.3);
}

.table-cell{
    display: table-cell;
    width: 30%;
    text-align: center;
    padding: 4px 0;
    border-right: 1px solid #d6d4d4;
    vertical-align: middle;
    font-family: sans-serif;
}
.table-head{
    background: #8665f7;
    box-shadow: none;
    color: #fff;
    font-weight: 600;
    font-family: sans-serif;
}

.table-total{
    background: #555;
    color: #fff;
    font-weight: 600;
}
.hero-btn{
    display: inline;
    text-decoration: none;
    color: #0000;
    border: 1px solid #0000;
    padding: 12px 34px;
    font-size: 13px;
    background: transparent;
    position: relative;
    cursor: pointer;
}
 /* hover effecr of the button */
 .hero-btn:hover{
    border: 1px solid #8665f7;
    background: #8665f7;
    transition: 1s;
 }

 .contact-col input, .contact-col textarea{
    width: 100%;
    padding: 15px;
    margin-bottom: 17px;
    outline: none;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

.table-cell input{
    background-color: #8665f7;
 }

.buttons{
    align-items: center;
 }
 /* this is the index.php page */

 /* this is the tag */
nav{
    display: flex;
    padding: 2% 6%;
    justify-content: space-between;
    align-items: center;
 }
 /* //size of the logo */
nav img{
     width: 150px;
  }
 
.nav-links{
     flex: 1;
     text-align: right;
  }
 
 /* this is the css for the menu */
.nav-links ul li{
     list-style: none;
     display: inline-block;
     padding: 8px 12px;
     position: relative;
  }
 
 /* for the undertag */
.nav-links ul li a{
     color: #8665f7;
     text-decoration: none;
     font-size: 13px;
  }
 
  /* adding the hover effect */
.nav-links ul li::after{
     content: '';
     /* width is 0 so that it can be hidden */
     width: 0%;
     height: 2px;
     background: #8665f7;
     display: block;
     margin: auto;
     transition: 0.5s;
  }
 
.nav-links ul li:hover::after{
     width: 100%;
     transition: 0.5s;
  }

nav .fa{
    display: none;
}
.text-box{
     width: 90%;
     color: #fff;
     position: absolute;
     top: 50%;
     left: 50%;
     transform: translate(-50%, -50%);
     text-align: center;
  }
 /* the h1 is the title */
.text-box h1{
     font-size: 62px;
  }
 
  /* p for the paragrapgh */
.text-box p{
     margin: 10px 0 40px;
     font-size: 14px;
     color: #fff;
  }
  /* design of the button with a link */
.hero-btn-bal{
     display: inline;
     text-decoration: none;
     color: #fff;
     border: 1px solid #fff;
     padding: 12px 34px;
     font-size: 13px;
     background: #f44336;
     position: relative;
     cursor: pointer;
 }
  /* hover effecr of the button */
.hero-btn-bal:hover{
     border: 1px solid #8665f7;
     background: #8665f7;
     transition: 1s;
  }

  .hero-btn{
    display: inline;
    text-decoration: none;
    color: #fff;
    border: 1px solid #fff;
    padding: 12px 34px;
    font-size: 13px;
    background: #f44336;
    position: relative;
    cursor: pointer;
}
 /* hover effecr of the button */
.hero-btn:hover{
    border: 1px solid #8665f7;
    background: transparent;
    transition: 1s;
 }
nav .fa{
     display: none;
 }
 
  /* to make the page responsive to smaller phones */
@media (max-width: 700px) {
     .text-box h1{
         font-size: 20px;
      }
      .nav-links ul li{
         display: block;
      }
      .nav-links{
         position: fixed;
         background: #f0f0f3;
         height: 100vh;
         width: 200px;
         top: 0;
         /* to hide the menu */
         right: -200;
         /* text-align: left; */
         z-index: 2;
         transition: 1s;
      }
 
      /* for the menu icons to be seen in small screen */
      nav .fa{
         display: block;
         color: #8665f7;
         margin: 10px;
         font-size: 22px;
         cursor: pointer;
      }
      .nav-links ul{
         padding: 30px;
      }
 }

 .hero-btn-bal{
     display: inline;
     text-decoration: none;
     color: #fff;
     border: 1px solid #fff;
     padding: 12px 34px;
     font-size: 13px;
     background: #f44336;
     position: relative;
     cursor: pointer;
 }
  /* hover effecr of the button */
.hero-btn-bal:hover{
     border: 1px solid #8665f7;
     background: #8665f7;
     transition: 1s;
  }


</style>

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
        <img src="nya-logo.jpg" height="70" width="290">
            <ul>
                <!-- <li>
                    <a href="http://">
                        <span class="material-symbols-outlined">emergency</span>
                        <span class="title">Lab's dashboard</span>
                    </a>
                </li> -->

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
        <!-- CARDS CARDS CARDS CARDS CARDS CARDS -->

        <div class="cardBox" id = "myImg">
            <button type="button" id = "myButton">
                <div class="card">
                    <div>
                        <div class="numbers">11</div>
                        <div class="cardName">Appointments</div>
                    </div>

                    <div class="iconBx">
                        <span class="material-symbols-outlined">book_online</span>
                    
                    </div>
                </div>
            </button>

            <button type="button">
                <div class="card">
                    <div>
                        <div class="numbers">15</div>
                        <div class="cardName">Patient Profiles</div>
                    </div>

                    <div class="iconBx">
                        <span class="material-symbols-outlined">groups</span>
                    
                    </div>
                </div>
            </button>

            <button>
                <div class="card">
                    <div>
                        <div class="numbers">15401</div>
                        <div class="cardName">Telemedicine</div>
                    </div>

                    <div class="iconBx">
                        <span class="material-symbols-outlined">wifi_calling</span>
                    
                    </div>
                </div>
            </button>

            <!-- <div class="card">
                <div>
                    <div class="numbers">15401</div>
                    <div class="cardName">Daily News</div>
                </div>

                <div class="iconBx">
                    <span class="material-symbols-outlined">menu</span>
                
                </div>
            </div> -->

        </div>

        <div class="table-box">

        <div class="table-row">
            <div class="table-cell">
                <label for="name"><h4>Name</h4></label>   
            </div>

            <div class="table-cell">
                <input type="text" name = "name" id = "name" required>
            </div>

            <div class="table-cell">
                <label for="sample-r"><h4>Sample Received</h4></label>
            </div>

            <div class="table-cell">
                <input type="text" name = "sample-r" id = "sample-r" required>
            </div>

        </div>

        <div class="table-row">
            <div class="table-cell">
                <label for="age"><h4>Age</h4></label>
                
            </div>

            <div class="table-cell">
                <input type="number" name = "age" id = "age" required>
            </div>

            <div class="table-cell">
                <label for="sample-report"><h4>Sample Reported</h4></label>
            </div>

            <div class="table-cell">
                <input type="text" name = "sample-report" id = "sample-report" required>
            </div>


        </div>

        <div class="table-row">
            <div class="table-cell">
                <label for="age"><h4>Gender</h4></label>
                
            </div>

            <div class="table-cell">
                <label for="male">Male</label>
                <input type="radio" name = "gender" id = "male" value = "male"required>
                <label for="female">Female</label>
                <input type="radio" name = "gender" id = "female" value = "female" required>
            </div>

            <div class="table-cell">
                <label for="dr"><h4>Requesting Doctor</h4></label>
            </div>

            <div class="table-cell">
                <input type="text" name = "dr" id = "dr" required>
            </div>


        </div>


        
        <hr>

        <div class="table-row">
            <div class="table-cell">
            <label for="acc-pay"><h4>FULL BLOOD COUNT</h4></label>
            </div>

        </div>
        <p>Sample: Whole blood</p>



        <div class="table-box">

        <div class="table-row table-head">
           <div class="table-cell">
             <p>Test Name</p>
           </div>
           
           <div class="table-cell">
             <p>Results</p>
           </div>

           <div class="table-cell">
             <p>Ref. Range</p>
           </div>

           <div class="table-cell">
             <p>Interpretation</p>
           </div>

        </div>

        <div class="table-row">
            <div class="table-cell">
                <label for="age"><h4>WBC</h4></label>
                
            </div>

            <div class="table-cell">
                <input type="text" name = "wbc" id = "wbc" required>
            </div>

            <div class="table-cell">
                <label for="ref-wbc"><h4>4.0 - 10 10^3/uL</h4></label>
            </div>

            <div class="table-cell">
                <input type="text" name = "ref-wbc" id = "ref-wbc" required>
            </div>


        </div>

        <div class="table-row">
            <div class="table-cell">
                <label for="age"><h4>LYM</h4></label>
                
            </div>

            <div class="table-cell">
                <input type="text" name = "LYM" id = "LYM" required>
            </div>

            <div class="table-cell">
                <label for="ref-LYM"><h4>0.6-4.1 10^3/uL</h4></label>
            </div>

            <div class="table-cell">
                <input type="text" name = "ref-LYM" id = "ref-LYM" required>
            </div>


        </div>
        <hr>

        <div class="table-row">
            <div class="table-cell">
                <label for="age"><h4>LYM%</h4></label>
                
            </div>

            <div class="table-cell">
                <input type="text" name = "LYM%" id = "LYM%" required>
            </div>

            <div class="table-cell">
                <label for="ref-LYM%"><h4>20 - 50%</h4></label>
            </div>

            <div class="table-cell">
                <input type="text" name = "ref-LYM%" id = "ref-LYM%" required>
            </div>


        </div>
        <div class="table-row">
            <div class="table-cell">
                <label for="age"><h4>MID</h4></label>
                
            </div>

            <div class="table-cell">
                <input type="text" name = "MID" id = "MID" required>
            </div>

            <div class="table-cell">
                <label for="ref-MID"><h4>0.1-0.9 10^3/uL</h4></label>
            </div>

            <div class="table-cell">
                <input type="text" name = "ref-MID" id = "ref-MID" required>
            </div>


        </div>

        <div class="table-row">
            <div class="table-cell">
                <label for="age"><h4>MID%</h4></label>
                
            </div>

            <div class="table-cell">
                <input type="text" name = "MID%" id = "MID%" required>
            </div>

            <div class="table-cell">
                <label for="ref-MID%"><h4>3 - 10%</h4></label>
            </div>

            <div class="table-cell">
                <input type="text" name = "ref-MID%" id = "ref-MID%" required>
            </div>


        </div>

        <div class="table-row">
            <div class="table-cell">
                <label for="GRA"><h4>GRA</h4></label>
                
            </div>

            <div class="table-cell">
                <input type="text" name = "GRA" id = "GRA" required>
            </div>

            <div class="table-cell">
                <label for="ref-GRA"><h4>2.0-7.8 10^3/uL</h4></label>
            </div>

            <div class="table-cell">
                <input type="text" name = "ref-GRA" id = "ref-GRA" required>
            </div>


        </div>

        <div class="table-row">
            <div class="table-cell">
                <label for="age"><h4>GRA%</h4></label>
                
            </div>

            <div class="table-cell">
                <input type="text" name = "GRA%" id = "GRA%" required>
            </div>

            <div class="table-cell">
                <label for="ref-GRA%"><h4>40 - 70%</h4></label>
            </div>

            <div class="table-cell">
                <input type="text" name = "ref-GRA%" id = "ref-GRA%" required>
            </div>


        </div>

        <div class="table-row">
            <div class="table-cell">
                <label for="age"><h4>HGB</h4></label>
                
            </div>

            <div class="table-cell">
                <input type="text" name = "HGB" id = "HGB" required>
            </div>

            <div class="table-cell">
                <label for="sample-HGB"><h4>11.0 - 16.5g/dl</h4></label>
            </div>

            <div class="table-cell">
                <input type="text" name = "ref-HGB" id = "ref-HGB" required>
            </div>


        </div>
        <div class="table-row">
            <div class="table-cell">
                <label for="age"><h4>MCH</h4></label>
                
            </div>

            <div class="table-cell">
                <input type="text" name = "MCH" id = "MCH" required>
            </div>

            <div class="table-cell">
                <label for="ref-MCH"><h4>26.5 - 33.5 pg</h4></label>
            </div>

            <div class="table-cell">
                <input type="text" name = "ref-MCH" id = "ref-MCH" required>
            </div>


        </div>
        <div class="table-row">
            <div class="table-cell">
                <label for="age"><h4>MCHC</h4></label>
                
            </div>

            <div class="table-cell">
                <input type="text" name = "MCHC" id = "MCHC" required>
            </div>

            <div class="table-cell">
                <label for="ref-MCHC"><h4>320 -360 g/l</h4></label>
            </div>

            <div class="table-cell">
                <input type="text" name = "ref-MCHC" id = "ref-MCHC" required>
            </div>


        </div>
        <div class="table-row">
            <div class="table-cell">
                <label for="age"><h4>RBC</h4></label>
                
            </div>

            <div class="table-cell">
                <input type="text" name = "RBC" id = "RBC" required>
            </div>

            <div class="table-cell">
                <label for="ref-RBC"><h4>3.8-5.8 10^6/uL</h4></label>
            </div>

            <div class="table-cell">
                <input type="text" name = "ref-RBC" id = "ref-RBC" required>
            </div>


        </div>
        <div class="table-row">
            <div class="table-cell">
                <label for="MCV"><h4>MCV</h4></label>
                
            </div>

            <div class="table-cell">
                <input type="text" name = "MCV" id = "MCV" required>
            </div>

            <div class="table-cell">
                <label for="ref-MCV"><h4>80 - 99 fl</h4></label>
            </div>

            <div class="table-cell">
                <input type="text" name = "ref-MCV" id = "ref-MCV" required>
            </div>


        </div>
        <div class="table-row">
            <div class="table-cell">
                <label for="HCT"><h4>HCT</h4></label>
                
            </div>

            <div class="table-cell">
                <input type="text" name = "HCT" id = "HCT" required>
            </div>

            <div class="table-cell">
                <label for="ref-HCT"><h4>35 - 50%</h4></label>
            </div>

            <div class="table-cell">
                <input type="text" name = "ref-HCT" id = "ref-HCT" required>
            </div>


        </div>

        <div class="table-row">
            <div class="table-cell">
                <label for="RDW%"><h4>RDW%</h4></label>
                
            </div>

            <div class="table-cell">
                <input type="text" name = "RDW%" id = "RDW%" required>
            </div>

            <div class="table-cell">
                <label for="ref-RDW%"><h4>10 - 15%</h4></label>
            </div>

            <div class="table-cell">
                <input type="text" name = "ref-RDW%" id = "ref-RDW%" required>
            </div>


        </div>

        <div class="table-row">
            <div class="table-cell">
                <label for="PLT"><h4>PLT</h4></label>
                
            </div>

            <div class="table-cell">
                <input type="text" name = "PLT" id = "PLT" required>
            </div>

            <div class="table-cell">
                <label for="ref-PLT"><h4>150-450 10^6/uL</h4></label>
            </div>

            <div class="table-cell">
                <input type="text" name = "ref-PLT" id = "ref-PLT" required>
            </div>


        </div>

        <div class="table-row">
            <div class="table-cell">
                <label for="MPV"><h4>MPV</h4></label>
                
            </div>

            <div class="table-cell">
                <input type="text" name = "MPV" id = "MPV" required>
            </div>

            <div class="table-cell">
                <label for="ref-MPV"><h4>7.0 - 11 fl</h4></label>
            </div>

            <div class="table-cell">
                <input type="text" name = "ref-MPV" id = "ref-MPV" required>
            </div>


        </div>
        
          
            <div><br>

            <div class = "main-skills">
                <input type="button" value="submit report" id = "assets" class="hero-btn-bal">
                
            </div>
            
            

        </div>
        
    </div> <!-- i am searching to see if this has any parent -->
    


        
    
        </div>

        
    </div>
</body>
<!-- THE DIFF SCRITS --> <!-- THE DIFF SCRITS --> <!-- THE DIFF SCRITS -->

<script src="js/main.js"></script>
</html>