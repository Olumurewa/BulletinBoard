<?php

session_start();
$conn = mysqli_connect('localhost', 'root', '', 'project') or die('error');




?>
<!DOCTYPE html>
<html>
    <head>
        <title >SignUp | Babcock BBS </title>
        
        <link rel="shortcut icon" type="image/png" href="chrome.jpg"/>
        <link rel="stylesheet" type="text/css" href="styl.css">
        <script src="https://kit.fontawesome.com/d866b766ae.js" crossorigin="anonymous"></script>
     </head>
     <nav id="ota">
        <div class="seat">
            <input type="search" placeholder="Search" class="earch">
            <img src="mag.png" alt="">
            <div class="ex">
              <ul>
                  <li></li> 
                  <li><a href="homepage.html"><i class="fa-solid fa-house" style="margin: 5px;"></i>Home</a></li>
                  <li> <a href="project.html"><i class="fa-solid fa-graduation-cap" style="margin: 5px;"></i>Students</a></li>
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
                <img src="visit.png"  style="width: 30px; position: absolute; margin-top: 0px; margin-left: -35px;"><b><h3 style="color: rgb(0,66,130);;">VISIT US:</h3></b>  
                <P> Mon-Thurs from 9am - 5pm</P>
                <P>Fridays from 9am - 1pm</P>
               
             </div>
             <div class="contact">
            <img src="phone.png" style="width: 30px; position: absolute; margin-top: 0px; margin-left: -30px;"><b><h3 style="color: rgb(185,141,59);;">CONTACT US:</h3></b> 
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
<body>
            
        
        <div class= background>
            <div class= container>
                <h4>Sign Up</h4>
                <p> SignUp to your Student account</p>
                <form action="in.php" name="myform" method="post" onsubmit="return validate()">
                    
                    <div class="name">
                
                       <input type="text" class="box"    placeholder="Name" required id="user" name="name">
    
                       <br>
                    </div>
    
                       <hr>
                       <p id="erro"></p>
                       <div class="name">
                       
                        <input type="email" class="box"    placeholder="Email" required id="em" name="email">
     
                        <br>
                     </div>
                     
                       <hr>
                       <p id="erre"></p>
                       <div class="name">
                       
                        <input type="password" class="box"    placeholder="Password" required id="pass" name="password">
     
                        <br>
                     </div>
                     
                       <hr>
                       <p id="err"></p>
                       <div class="ger">
                        <a href="bbsloguin.html"><p>Don't have an account?</p></a>
                       </div>
                       <div class="name">
                       
                        <input type="submit" class="button" name="btn" value="Login">
     
                        <br>
                     </div>
    
                       
                      
                      
                   </form>
            </div>
            
               
        </div>

        
              
       
    </div>
    <?php
    if(isset($POST['Login'])){
        $name= $_POST['name'];
        $email= $_POST['email'];
        $password= $_POST['password'];
    }
    $select = mysqli_query ($conn, "SELECT * FROM test2 WHERE name= '$name', email =$email AND password = '$password' ");
    $row = mysqli_fetch_array($select)
    if(is_array($row)){
        $_SESSION["name"] =$row["name"];
        $_SESSION["email"] =$row["email"];
        $_SESSION["password"] =$row["password"];
        else
        echo'Null';

    }
    }if(isset($_SESSION['name'])){
        header('Location:board.php');
    }
    
    
    
    ?>
        
</body>
    
    <footer>Copyright © Group 46 2022</footer>
    
    <script>
        function validate(){
            if(user.value == 0 || user.value.length < 6){
                document.getElementById('erro').innerHTML = 'PLease fill required fields';
                return false;

               
                
            }else if(!em.match(/^[A-Za-z]\._\-[0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)){
                document.getElementById('err').innerHTML = 'PLease fill required fields';
                return false;

 
            


            }else if(pass.value == 0|| pass.value.length < 6){
                document.getElementById('err').innerHTML = 'PLease fill required fields';
                return false;

 
            }else{
                alert('Success!');
            }
        }
    
    </script> 
</html>