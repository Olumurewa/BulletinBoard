<?php
error_reporting (E_ALL ^ E_NOTICE);
session_start();

 if(isset($_GET['name'])){
    $name = $_GET['name'];
      } else{
      $name = "Fathia28";
      }
                    

?>


<!DOCTYPE html>
<html>
    <head>
        <title >Your Board | Babcock BBS </title>
        
        <link rel="shortcut icon" type="image/png" href="chrome.jpg">
        <link rel="stylesheet" type="text/css" href="board.css">
        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
      <link
        href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet"
      />
      <script src="https://kit.fontawesome.com/d866b766ae.js" crossorigin="anonymous"></script>
     </head>
    <body>
        <nav id="ota">
          <div class="seat">
             
            <input type="search" placeholder="Search" class="earch">
            <img src="mag.png" alt="">
            <div class="seat">
            <ul>
                <li></li> 
               <li><a href="homepage.html"><i class="fa-solid fa-house" style="margin: 5px;"></i>Home</a></li>
                <li><a href="project.html"><i class="fa-solid fa-graduation-cap" style="margin: 5px;"></i>Students</a></li>
                <li><a href="leclogin.html"><i class="fa-solid fa-school" style="margin: 5px;"></i>Staff</a></li>
                <li><a href="news.html"><i class="fa-solid fa-newspaper"style="margin: 5px;"></i>News</a></li>
                <li><a href="messages.html"><i class="fa-solid fa-envelope" style="margin-right: 5px; margin-top: 2px;"></i>Messages</a></li>
            </ul>

           </div>
           </div>

        </nav>
        <nav id="one">
          <div class="bu">
              <img src="bu.jpg" alt="">
          </div>
              <div class="visit">
                 <img src="visit.png"  style="width: 30px; position: absolute; margin-top: 0px; margin-left: -35px;"><b><h6 style="color: rgb(0,66,130); font-size: 18.8px;">VISIT US:</h6></b>  
                 <P>From 9am - 5pm</P>
                 <P>Fridays from 9am - 1pm</P>
                
              </div>
              <div class="contact">
             <img src="phone.png" style="width: 30px; position: absolute; margin-top: 0px; margin-left: -30px;"><b><h6 style="color: rgb(185,141,59); font-size: 18.8px;">CONTACT US:</h6></b> 
              <P>+234-7032049418 | +234-7035556536</P>
              <p>+234-8023432186 | +234-8038522333</p>
          </div>
          </nav>
        <nav id="two">
            
            <ul class="ev">
              <a href="https://codel.babcock.edu.ng/"><li>BuCODel</li></a>
                <a href="https://umis.babcock.edu.ng/babcock/"><li>Babcock UMIS</li></a>
                <a href="https://bimun.org.ng/"><LI>BIMUN</LI></a>
                <a href="https://www.babcock.edu.ng/buth"><li>BUTH</li></a>
                <a href="https://library.babcock.edu.ng/"><li>Library</li></a>
                <a href="https://www.babcock.edu.ng/oer/bu_oer_intro.php"><li>OER</li></a>
                <a href="https://www.babcock.edu.ng/Virtual_tour/Babcock.html"><li>Virtual Tour</li></a>
                <a href="https://www.babcock.edu.ng/sitemap"><li>SiteMap</li></a>
                <a href="https://publication.babcock.edu.ng/"><li>Publications</li></a>  
            </ul>


        </nav>

        <div class="background">
            
              <div class="left">
                <div class="details">
                   <div class="fer">
                    <img src="user.png" alt="" class="gett"><p><?php echo $name;?></p>
                   

                  </div>
                     <hr> 
                     <ul>
                    <li><a href="messages.html"><img src="bulletin.png" alt="" class="get"> Your Board </a></li>
                    <hr>
                    <li><a href="#" onclick="todoxToggle()" ><img src="todo.png" alt="" class="get">To do List</a> </li>
                    <hr>
                    <li><a href="#" onclick="goalsxToggle()"><img src="aim.png" alt="" class="get"> Goals for the Semester</a></li>
                    <hr>
                    <li><a href="lecturerscard.html" > <img src="school.png" alt="" class="get">Meet your Lecturers</a></li>
                   </ul>
                </div>
              </div>
                <div class="ben">
              <div class="todo">
                <b><div class="d">TO DO LIST</div></b>
                <p>Meet my Project Supervisor</p>
                <p>Sumbit Modelling Assignment</p>
                <p>Finish chapter 4</p>
                <p>Buy a New Note</p>

              </div>
              </div> 

               <div class="und">
              <div class="goals">
                <b><DIV class= "s">GOALS FOR THE SEMESTER</DIV></b>
                <p>Graduate with a First Class</p>
                <p>Develop Soft Skills</p>
                <p>Take a course on UX design</p>
                <p>Save money before graduation</p>

              </div>
               </div>


                
           

            
            


            <div class="container">
                <div class="calendar">
                  <div class="month">
                    <i class="fas fa-angle-left prev"></i>
                    <div class="date">
                      <h1></h1>
                      <p></p>
                    </div>
                    <i class="fas fa-angle-right next"></i>
                  </div>
                  <div class="weekdays">
                    <div>Sun</div>
                    <div>Mon</div>
                    <div>Tue</div>
                    <div>Wed</div>
                    <div>Thu</div>
                    <div>Fri</div>
                    <div>Sat</div>
                  </div>
                  <div class="days"></div>
                </div>
              </div>
          
              

        </div>

        <script src="script.js"></script>
        <script>
          var todox = document.querySelector(".todo");


        function todoxToggle(){
          todox.classList.toggle("todo-height");
         }

         var goalsx = document.querySelector(".goals");


         function goalsxToggle(){
          goalsx.classList.toggle("goals-height");
         }
        </script>
    </body>
    <footer>Copyright © Group 46 2022</footer>
</html>