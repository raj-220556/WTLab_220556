<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" href = "./assets/css/main-style.css">
    <link rel = "stylesheet" href = "contentstyle.css">
    <script src="https://kit.fontawesome.com/677403275e.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- header -->
    <?php include "./include/header.php" ?>
    <!-- Main Content -->
    <div id="container">


        <div id="t1container">
            <div id="t1left">
               <h1 style="font-size: 100px;margin: 0;font-weight: bold;top:0;"> HTML </h1>
               <p style="margin: 10px;">The Language for building web pages</p>
               <a id="lhtml" href="/#">Learn HTML</a>
               <a id="vhtml" href="/#">Video Tutorial</a>
               <a id="htref" href="/#">HTML Reference</a>
               <a id="hcref" href="/#">Get Certified</a>
            </div>
            <div id="t1right">
                <h3 style="font-size: 20px;">HTML Example: </h3>
                <div>

                </div>
                <a href="/#">Try it Yourself</a>
            </div>
        </div>

        <div id="csscontainer">
            <div id="cssleft">
                <h3 style="font-size: 7rem;margin: 0;">CSS</h3>
                <p>The Language for Styling Web Pages</p>
                <a id="lcss" href="/#">Learn CSS</a>
                <a id="cssref" href="/#">CSS Reference</a>
                <a id="csscref" href="/#">Get Certified</a>
            </div>
            <div id="cssright">
                <h3 style="font-size: 20px;">CSS Example: </h3>
                <div>

                </div>
                <a href="/#">Try it Yourself</a>
            </div>

        </div>


        <div id="courses">
            <div id="php">
                <h1>PHP</h1>
                <h4>A web server programming language</h4>
                <a href="#">Learn PHP</a>
            </div>
            <div id="jquery">
                <h1>jQuery</h1>
                <h4>A JS library for developing web pages</h4>
                <a href="#">Learn jQuery</a>
            </div>
            <div id="java">
                <h1>Java</h1>
                <h4>A programming language</h4>
                <a href="#">Learn Java</a>
            </div>           
            <div id="c2">
                <h1>C++</h1>
                <h4>A programming language</h4>
                <a href="#">Learn C++</a>
            </div>
            <div id="bootstrap">
                <h1>Bootstrap</h1>
                <h4>A CSS framework for designing better web pages</h4>
                <a href="#">Learn Bootstrap</a>
            </div>
            <div id="python">
                <h1>Python</h1>
                <h4>A popular programming language</h4>
                <a href="#">Learn Python</a>
            </div>

            
        </div>
        <div id="teachers">
            Teachers
        </div>
        <div id="contact">
            Contact us
        </div>
    </div>
    <!-- Main content End -->


    <?php include "./include/footer.php" ?>
</body>
</html>