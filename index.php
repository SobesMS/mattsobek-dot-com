<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/reset.css">
    <link rel="stylesheet" href="./styles/style.css">
    <title>mattsobek.com</title>
</head>
<body>
    <nav>
        <ul class="inline-links">
            <li><a href="#">Home</a></li>
            <li><a href="#about-me">About Me</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        
        <div class="ham-menu">
            <input type="checkbox" name="" id="">
            <div class="ham-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>
            <ul class="ham-links">
                <li><a href="#">Home</a></li>
                <li><a href="#about-me">About Me</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>

        <div class="social">
            <a href="https://github.com/sobesms" target="_blank" id="github">
                <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>GitHub</title><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
            </a>
            <a href="https://www.linkedin.com/in/msobek/" target="_blank" id="linkedin">
                <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>LinkedIn</title><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
            </a>
        </div>
    </nav>

    <header class="site-hero">
        <div id="hdr-img">
            <img src="./images/hero-polaroids.png" alt="Picture of Matt">
        </div>
        <div id="hdr-txt">
            <h1 class="site-title">Welcome to <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MattSobek.com</h1>
            <p>A Software Developer living near Cleveland, Ohio.</p>
        </div>
    </header>

    <section class="about-me">
        <div class="wrapper" id="about-me">
            <h2 class="section-title">About Me</h2>
            <p>Thirty minutes west of Cleveland, Ohio lies the suburb of North Ridgeville. That is where you'll find my wife Jill and I enjoying life with our cat Cooper, and our two dachshunds Maisy and Max. We built a new house here in 2021 and we couldn't be happier! Both of us have great home offices that make working from home a real joy when we are able to. We own a boat and spend most of the summer cruising around on Lake Erie.</p>
            <p>I'm a huge tech junkie. I love getting my hands on a new piece and discovering the possibilities. Computers, cameras, drones, video games, virtual reality, and the list goes on and on. My wife is very tolerant of my gadget habits.</p>
            <p>I love learning new things, which is a pretty important trait as a Developer because things are constantly changing. And just as much as I enjoy learning, I'm also passionate about sharing ideas with others.</p>
            <p>Thanks for stopping by to take a look at some of the stuff that I've been up to.</p>
        </div>
    </section>

    <section class="skills">
        <div class="wrapper" id="skills">
            <h2 class="section-title">Skills</h2>
            <p>Learning about software development has become a huge interest of mine, not just as a path to a career, but as a personal hobby. Completing my Bachelor of Science in Software Development was only the start of the journey. I spend a lot of my free time learning new things and also doing refreshers on the stuff that I already know. There are so many interesting technologies and techniques to learn and I am constantly searching for new skills to add to my development toolbox.</p>
            <h3>My development toolbox includes:</h3>
            <div class="badges">
                <img src="https://img.shields.io/badge/-HTML5-E34F26?logo=html5&logoColor=white&style=flat" alt="HTML5 badge">
                <img src="https://img.shields.io/badge/-CSS3-1572B6?logo=css3&logoColor=white&style=flat" alt="CSS3 badge">
                <img src="https://img.shields.io/badge/-JavaScript-F7DF1E?logo=javascript&logoColor=white&style=flat" alt="JavaScript badge">
                <img src="https://img.shields.io/badge/-PHP-777BB4?logo=php&logoColor=white&style=flat" alt="PHP badge">
                <img src="https://img.shields.io/badge/-React-61DAFB?logo=react&logoColor=white&style=flat" alt="React badge">
                <img src="https://img.shields.io/badge/-Node.js-339933?logo=node.js&logoColor=white&style=flat" alt="Node.js badge">
                <img src="https://img.shields.io/badge/-Mocha-8D6748?logo=mocha&logoColor=white&style=flat" alt="Mocha badge">
                <img src="https://img.shields.io/badge/-Java-F80000?style=flat" alt="Java badge">
                <img src="https://img.shields.io/badge/-SQLite-003B57?logo=sqlite&logoColor=white&style=flat" alt="SQLite badge">
                <img src="https://img.shields.io/badge/-MySQL-4479A1?logo=mysql&logoColor=white&style=flat" alt="MySQL badge">
                <img src="https://img.shields.io/badge/-Git-F05032?logo=git&logoColor=white&style=flat" alt="Git badge">
                <img src="https://img.shields.io/badge/-GitHub-181717?logo=github&logoColor=white&style=flat" alt="GitHub badge">
            </div>
        </div>
    </section>

    <section class="portfolio">
        <div class="wrapper" id="portfolio">
            <h2 class="section-title">Portfolio</h2>
            <p>A sample of some of the projects that I have worked on. I will be updating this section frequently so please check back on occasion for new entries.</p>
            <div class="portfolio-cards">
                <div class="portfolio-item">
                    <div>
                        <h3>WGU Course Commander</h3>
                        <img class="item-screenshot" src="./images/wgu_course_commander.png" alt="WGU Course Commander">
                        <p>This Android app was developed for use in the completion of my BS of Software Development at WGU. I received an Award of Excellence for this project. The app was developed in Java and stores data in a local SQLite database.</p>
                    </div>
                    <div class="portfolio-links">
                        <a href="https://github.com/SobesMS/wgu-course-commander" target="_blank"><img src="https://img.shields.io/badge/-View%20Source%20Code-181717?logo=github&logoColor=white&style=flat" alt="View Source Code"></a>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div>
                        <h3>Minty Fresh</h3>
                        <img class="item-screenshot" src="./images/minty_fresh.png" alt="Minty Fresh screenshot">
                        <p>"Company Home Page with Flexbox" challenge from the Front-End Engineer career path on Codecademy. Concept was to create a company and build a home page from scratch using flexbox.</p>
                    </div>
                    <div class="portfolio-links">
                        <a href="https://sobesms.github.io/flexbox-homepage/" target="_blank"><img src="https://img.shields.io/badge/-View%20Website-181717?&logoColor=white&style=flat" alt="View Website"></a>
                        <a href="https://github.com/SobesMS/flexbox-homepage" target="_blank"><img src="https://img.shields.io/badge/-View%20Source%20Code-181717?logo=github&logoColor=white&style=flat" alt="View Source Code"></a>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div>
                        <h3>Rock Paper Scissors</h3>
                        <img class="item-screenshot" src="./images/rock_paper_scissors.png" alt="Rock Paper Scissors">
                        <p>This was one of my web development projects built while earning my BS of Software Development at WGU. The project started as a very basic terminal based rock-paper-scissors game built in JavaScript. After completion of the project, I developed a clean graphic interface using HTML and CSS.</p>
                    </div>
                    <div class="portfolio-links">
                        <a href="https://sobesms.github.io/rock-paper-scissors/" target="_blank"><img src="https://img.shields.io/badge/-Play%20Game-181717?&logoColor=white&style=flat" alt="Play Game"></a>
                        <a href="https://github.com/SobesMS/rock-paper-scissors" target="_blank"><img src="https://img.shields.io/badge/-View%20Source%20Code-181717?logo=github&logoColor=white&style=flat" alt="View Source Code"></a>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div>
                        <h3>The Summit</h3>
                        <img class="item-screenshot" src="./images/the_summit.png" alt="The Summit">
                        <p>"The Summit" project from the Front-End Engineer career path on Codecademy. Focus is on clickability, affordance, and signifiers. Tasked with building a clean home page that is easy to navigate.</p>
                    </div>
                    <div class="portfolio-links">
                        <a href="https://sobesms.github.io/the-summit/" target="_blank"><img src="https://img.shields.io/badge/-View%20Website-181717?&logoColor=white&style=flat" alt="View Website"></a>
                        <a href="https://github.com/SobesMS/the-summit" target="_blank"><img src="https://img.shields.io/badge/-View%20Source%20Code-181717?logo=github&logoColor=white&style=flat" alt="View Source Code"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="temp-contact">
    <div class="wrapper" id="contact">
            <h2 class="section-title">Contact</h2>
            <p>Please reach out with inquiries, to provide feedback on any of my projects, if you'd like to see my resume, or if you just want to say hi. Use the handy form below. I'd love to hear from you!</p>
            <form class="email-form" id='email-form' method="POST">
                <label class="fname1" for="fname">First Name:</label>
                <input class="fname2" type="text" name="fname" required>
                <label class="lname1" for="lname">Last Name:</label>
                <input class="lname2" type="text" name="lname" required>
                <label class="email1" for="email">Email Address:</label>
                <input class="email2" type="email" name="email" required>
                <label class="message1" for="message">Message:</label>
                <textarea class="message2" name="message"></textarea>
                <div class="php-output">
                <?php
                    require('./php/send-email.php');

                    if(!empty($_POST['submit'])) {
                        if(SendEmail()) {
                            echo "<p>Thank you for your message.</p>";
                        } else {
                            echo "<p>An error occurred. Please try again.</p>";
                        }
                    }
                ?>
                </div>
                <input class="submit" type="submit" name="submit" value="Submit">
            </form>
        </div>
    </section>

    <!-- <section class="contact">
        <div class="wrapper" id="contact">
            <h2 class="section-title">Contact</h2>
            <p>Please reach out with any inquiries, to provide feedback on any of my projects, if you'd like to see my resume, or if you just want to say hi. Use the handy form below. I'd love to hear from you!</p>
            <form class="email-form" id='email-form' method="POST" action="./send-email.php">
                <label class="fname1" for="fname">First Name:</label>
                <input class="fname2" type="text" name="fname" required>
                <label class="lname1" for="lname">Last Name:</label>
                <input class="lname2" type="text" name="lname" required>
                <label class="email1" for="email">Email Address:</label>
                <input class="email2" type="email" name="email" required>
                <label class="message1" for="message">Message:</label>
                <textarea class="message2" name="message"></textarea>
                <input class="submit" type="submit" name="submit" value="Submit" required>
            </form>
        </div>
    </section> -->

    <footer>
        <p>&copy;2023 - Matt Sobek</p>
    </footer>
</body>
</html>