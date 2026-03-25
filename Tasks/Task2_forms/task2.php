<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="task2.css">
</head>
<body>
    <!-- header -->
    <?php include "./include/header.php" ?>
     
<!-- Main Content -->
    <!-- use typeform,fillout,jot form websites -->

    <div id="content">
        <div id="form-container">
            <div id="form-box">
                <div id="1" class="form-div" style="margin-top: 0;">
                    <form action="#2">
                        <h2>1. Which type of course do you want?</h2>
                        <section>
                            <div class="from-option">
                                <input id="1a" type="checkbox" placeholder="A" style="width: 20px; height: 20px;">
                                <label for="1a">Programming</label>
                            </div>
                            <div class="from-option">
                                <input id="1a" type="checkbox" placeholder="A" style="width: 20px; height: 20px;">
                                <label for="1a">Designing</label>
                            </div>
                            <div class="from-option">
                                <input id="1a" type="checkbox" placeholder="A" style="width: 20px; height: 20px;">
                                <label for="1a">Business</label>
                            </div>
                        </section>
                        <button>ok</button>
                    </form>
                </div>
                <div id="2" class="form-div">
                        <form action="#3">
                        <h2>2. What are your interests?</h2>
                            <section>
                                <div class="from-option">
                                    <input id="2a" type="checkbox" placeholder="A" style="width: 20px; height: 20px;">
                                    <label for="2a">Science</label>
                                </div>
                                <div class="from-option">
                                    <input id="2b" type="checkbox" placeholder="A" style="width: 20px; height: 20px;">
                                    <label for="2b">Arts</label>
                                </div>
                                <div class="from-option">
                                    <input id="2c" type="checkbox" placeholder="A" style="width: 20px; height: 20px;">
                                    <label for="2c">Sports</label>
                                </div>
                            </section>
                            <button>ok</button>
                        </form>
                </div>
                <div id="3" class="form-div">
                        <form action="#4">
                            <h2>3. What hobbies do you have?</h2>
                            <section>
                                <div class="from-option">
                                    <input id="3a" type="checkbox" placeholder="A" style="width: 20px; height: 20px;">
                                    <label for="3a">Reading</label>
                                </div>
                                <div class="from-option">
                                    <input id="3b" type="checkbox" placeholder="A" style="width: 20px; height: 20px;">
                                    <label for="3b">Traveling</label>
                                </div>
                                <div class="from-option">
                                    <input id="3c" type="checkbox" placeholder="A" style="width: 20px; height: 20px;">
                                    <label for="3c">Gaming</label>
                                </div>
                            </section>
                            <button>ok</button>
                        </form>
                </div>
                <div id="4" class="form-div">
                        <form action="#5">
                            <h2>4. What is your favourite thing in technology?</h2>
                            <section>
                                <div class="from-option">
                                    <input id="4a" type="checkbox" placeholder="A" style="width: 20px; height: 20px;">
                                    <label for="4a">AI</label>
                                </div>
                                <div class="from-option">
                                    <input id="4b" type="checkbox" placeholder="A" style="width: 20px; height: 20px;">
                                    <label for="4b">Robotics</label>
                                </div>
                                <div class="from-option">
                                    <input id="4c" type="checkbox" placeholder="A" style="width: 20px; height: 20px;">
                                    <label for="4c">Smartphones</label>
                                </div>
                            </section>
                            <button>ok</button>
                        </form>
                </div>
                <div id="5" class="form-div">
                        <form action="#">
                            <h2>5. Which place do you want to be in after four years?</h2>
                            <section>
                                <div class="from-option" id="extra-width">
                                    <input id="5a" type="checkbox" placeholder="A" style="width: 20px; height: 20px;">
                                    <label for="1a">Working at a tech company</label>
                                </div>
                                <div class="from-option" id="extra-width">
                                    <input id="5b" type="checkbox" placeholder="A" style="width: 20px; height: 20px;">
                                    <label for="5b">Starting your own business</label>
                                </div>
                                <div class="from-option" id="extra-width">
                                    <input id="5c" type="checkbox" placeholder="A" style="width: 20px; height: 20px;">
                                    <label for="5c">Pursuing higher education</label>
                                </div>
                            </section>

                            <button>submit</button>
                        </form>
                </div>
            </div>
            <p id="adv">Make Fun</p>
        </div>
        
    </div>


    <?php include "./include/footer.php" ?>
</body>
</html>