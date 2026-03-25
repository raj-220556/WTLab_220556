  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="task1.css">
</head>
<body>
    <!-- header -->
    <?php include "../include/header.php" ?>

    <div id="content">
        <h1>Task 1: Course overview</h1>
        <p style="text-align: center; margin: 30px;">Explore our course overview</p>

        <div id="table">
            <p>Details of our couses:</p>
            <table>
                <tr>
                    <th>Course</th>
                    <th>Duration</th>
                    <th>Price</th>
                </tr>
                <tr>
                    <td>HTML</td>
                    <td>3 months</td>
                    <td>100/-</td>
                </tr>
                <tr>
                    <td>CSS</td>
                    <td>2 months</td>
                    <td>80/-</td>
                </tr>
                <tr>
                    <td>JavaScript</td>
                    <td>4 months</td>
                    <td>120/-</td>
                </tr>
            </table>
        </div>

        <div id="v_a">
            <div id="video">
                <h2> Demo of video</h2>
                <video id = "video" controls muted>
                    <source src="/Tasks/Task1_html/resources/videoplayback.mp4">
                </video>
            </div>
            <div id="audio">
                <h2> Demo Audio</h2>
                <audio controls muted>
                    <source src = "/Tasks/Task1_html/resources/iphone-remix-68028.mp3">
                </audio>
            </div>
        </div>

        
        <div id="pdf">
            <h2>Course content</h2>
            <iframe class="frames" src="/Tasks/Task1_html/resources/WT Lab Task 1.pdf"></iframe>
        </div>
       
        <h2 style="margin: auto; width: 80%; font-size: 2rem;">Websites of our Fellow Learners</h2>
        <div id="websites">
            
            <iframe id="wiki" src="https://www.wikipedia.org/"></iframe>
            <iframe id="shopi" src="https://bfcm.shopify.com/"></iframe>
        </div>
        

    </div>

    <?php include "./include/footer.php" ?>
    
</body>
</html>