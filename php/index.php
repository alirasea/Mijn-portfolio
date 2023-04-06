 <?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/indexx.css">
    <title>Portfolio</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="../js/index.js" ></script>
    <script src="https://kit.fontawesome.com/75c5cd27cf.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">


</head>
<body>


<div class="scroll">
    <nav> <ul>
        <h1><a class= "link" href="#head"><i class="fa-solid fa-house-user"></i></a></h1>

        <h1><a class= "link" href="http://localhost:8282/portfolio/php/cv.php">CV</a></h1>
        
        <h1><a class= "link" href="#about">About</a></h1>
        
        <h1><a class= "link" href="#contact">Contact</a></h1>
    </ul>
    </nav>
</div>

    <div class="head" id="head">
        <h2>I'm Ali Rasea.</h2>
        <h2>Software developer.</h2>
    </div>

    <div class="img" id="img">
        <img src="../img/prof.jpg" alt="Ali" width="40%" height="50%">
        <div class="overlay"></div>
    </div>


    <div class="about">
        <h3 id="about">ABOUT ME</h3>
        <div class="me">
            I'm Ali Rasea, I am a student software developer. I already did 
            a couple of projects. Some of them were in groups and some 
            alone. I like teamwork in groups but this does not mean that I 
            cannot work alone. I love design and photography. <br>
            Do you want to know more about me?
            <br>
            Call or send an e-mail, I like talking to others.                              
            <br>
            <i class="fa-solid fa-envelope"></i> mail: <a href="https://mail.google.com/mail/u/0/#inbox">alirasea12@gmail.com.</a>
            <br>
            <i class="fa-solid fa-phone"></i> tel: +31 6 85077125.
            </div>

            <br>
            <br>

            <div class="skill">
                <p>My Skills</p>
                <br>
<p >HTML</p>
<div class="container">
    <div class="skills html">90%</div>
</div>

<p>CSS</p>
<div class="container">
    <div class="skills css">80%</div>
</div>

<p>JavaScript</p>
    <div class="container">
    <div class="skills js">65%</div>
</div>

<p>PHP</p>
    <div class="container">
    <div class="skills php">60%</div>
</div>
            </div>
    </div>
    <br>
    <br>
   
    <div id="container">
        <div id="container2">
            <p style = "font-size:15px; color:white;">Klik op de fotos van mijn projecten</p>
            <a href="http://localhost:8282/portfolio/php/fotos.php"><img src="../img/mijnfoto2.jpg" alt=""></a></div>

        <div id="container2">
        <p style = "font-size:15px; color:white;">Klik op de foto narr mijn Linked-in </p>
            <a href="https://www.linkedin.com/in/ali-rasea-0246b2219/"><img src="../img/mijnfoto.JPG" alt=""></a></div>

        <div id="container2">
        <p style = "font-size:15px; color:white;">Klik op de foto narr mijn github </p>
            <a href="https://github.com/alirasea"><img src="../img/cod.JPG" alt=""></a></div>
    </div>


    <div class="contact">
        <h3 id="contact">CONTACT ME</h3>
        <div class="cont">
            <i class="fa-solid fa-phone"></i>tel: +31 6 85077125.
            <br>
            <i class="fa-solid fa-envelope"></i>mail: <a href="https://mail.google.com/mail/u/0/#inbox">alirasea12@gmail.com.</a>

            <br>
            <br>

            Let's get in touch,Send me a message
        </div>
    </div>
    <br>
    <br>
    <form class="form" action="" method="POST">
        <div class = "mb-3">
        <input class="inp"  type="text" Name="name" placeholder="Name"/>
        <br>
            <input class="inp" type="text" Name="email" placeholder="Email"/>
                <textarea name="comment" rows="5" cols="40" placeholder="Message"></textarea>
                    <input class="subm" style="" type="submit" Name="submit" value="send message" />
</div>
    </form> 

    <br>
    <div class="print">
    <?php
    include("insert.php");
       // $conn = contact();
        $query = "SELECT * FROM comments";
        $com = $conn->prepare($query);
        try {
            $com->execute(array());
            $com->setFetchMode(PDO::FETCH_ASSOC);
            foreach($com as $comment) {
            echo "<div class='comment'>" . $comment["name"] . "<br>" . $comment["email"] . "<br>" . $comment["comment"] . "<br><br>" . $comment["Date"]."</div>";
            }
            
        }
        catch(PDOException $e) {
            echo "<script>alert('Geen comments gevonden.');</script>";} 
            ?>
            </div>
    <hr>
    <br>

    
    <footer>
        <div class="icon">
    <a href="https://github.com/alirasea"><i class="fa-brands fa-square-github" style="font-size:64px;color: aliceblue;"></i></a>
    <a href="https://www.linkedin.com/in/ali-rasea-0246b2219/"><i class="fa-brands fa-linkedin" style="font-size:64px;color: aliceblue;"></i></a>
    <a href="https://www.instagram.com/ali_rasea_/"><i class="fa-brands fa-square-instagram" style="font-size:64px; color: aliceblue;"></i></a>
</div>
    </footer>
</body>
</html>


