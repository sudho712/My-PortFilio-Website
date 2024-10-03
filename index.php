
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sudhi kumar portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            color: #fff;
            background-color: #000;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #161b22;
            padding: 1rem 0;
            position: relative;
        }
        header h1 {
            color: #00bcd4;
            text-align: center;
        }
        header ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            text-align: center;
        }
        header ul li {
            display: inline;
            margin: 0 15px;
        }
        header ul li a {
            color: #fff;
            text-decoration: none;
        }
        header ul li a:hover {
            text-decoration: underline;
        }
        .menu-toggle {
            display: none;
            background: #00bcd4;
            color: #fff;
            border: none;
            padding: 10px;
            font-size: 18px;
            cursor: pointer;
            position: absolute;
            top: 10px;
            right: 10px;
        }
        .menu-toggle:focus {
            outline: none;
        }
        .hero {
            background: url('portfolio/hero-bg.jpg') no-repeat center center;
            background-size: cover;
            padding: 4rem 0;
        }
        .hero-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            color: #fff;
        }
        .hero-text {
            margin-bottom: 2rem;
        }
        .hero-text h2, .hero-text h1, .hero-text h3 {
            margin: 0.5rem 0;
        }
        .hero-image img {
            border-radius: 50%;
            max-width: 200px;
            width: 100%;
            height: auto;
        }
        .btn {
            background-color: #00bcd4;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn:hover {
            background-color: #00a1b6;
        }
        /* Projects Section */
        .projects {
            padding: 3rem 0;
        }
        .projects h2 {
            text-align: center;
            margin-bottom: 2rem;
        }
        .project-item {
            background: #161b22;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            color: #fff;
            margin-bottom: 1.5rem;
        }
        .project-item h3 {
            margin-bottom: 1rem;
        }
        .project-item img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            margin-bottom: 1rem;
        }
        .project-item a {
            color: #00bcd4;
            text-decoration: none;
        }
        .project-item a:hover {
            text-decoration: underline;
        }
        /* Skills Section */
        .skills {
            padding: 3rem 0;
        }
        .skill-list {
            background-color: #000;
            padding: 20px;
            border-radius: 8px;
        }
        .skill-list p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 10px;
            color: #fff;
        }
        .skill-list span {
            color: #00bfff;
            font-weight: bold;
            font-size: 14px;
            padding: 2px 8px;
            border: 1px solid #00bfff;
            border-radius: 4px;
            background-color: #1a1a1a;
            margin-left: 10px;
            display: inline-block;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
            transition: background-color 0.3s, color 0.3s;
        }
        .skill-list span:hover {
            background-color: #00bfff;
            color: #000;
        }
        /* Footer */
        footer {
            background-color: #161b22;
            padding: 1rem 0;
            text-align: center;
            color: #fff;
        }
        
        
        /* Responsive Navigation */
        @media (max-width: 768px) {
            header ul {
                display: none;
                flex-direction: column;
                align-items: center;
            }
            header ul.active {
                display: flex;
            }
            header ul li {
                margin: 10px 0;
            }
            .menu-toggle {
                display: block;
            }
            .hero-content {
                padding: 0 1rem;
            }
            .hero-image {
                display: none; /* Hide image on small screens */
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <button class="menu-toggle">☰</button>
            <nav>
                <h1>SUDHIR KUMAR</h1>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="hero">
        <div class="container">
            <div class="hero-content d-flex flex-column flex-md-row align-items-center text-center text-md-left">
                <div class="hero-text mb-4 mb-md-0">
                    <h2>Hello, It's Me</h2>
                    <h1>Sudhir Kumar</h1>
                    <h3>And I'm a <span class="highlight">Web Developer</span></h3>
                    <p>I’m a passionate Web Developer specializing in creating dynamic</p>
                    <p>user-friendly websites and web applications that bring ideas to life."

</p>
                    <div class="social-icons mb-3">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://github.com/sudho712" target="_blank"><i class="fab fa-github"></i></a>

                    </div>
                    <a href="portfolio/resume.pdf" class="btn">Download CV</a>
                </div>
            </div>
        </div>
    </section>
    <section id="projects" class="projects">
        <div class="container">
            <h2>Projects</h2>
            <div class="row">
                <div class="col-md-6">
    <div class="project-item">
        <h3>Rightway Chemistry</h3>
        <a href="https://rightwaychemistry.com" target="_blank">Visit Project</a>
        <img src="portfolio/rightway.png" alt="Rightway Chemistry" class="img-fluid">
        <p>Rightway Chemistry offers expert coaching in Chemistry, helping students excel academically and prepare for competitive exams with a focus on in-depth learning.</p>
    </div>
</div>

                <div class="col-md-6">
                    <div class="project-item">
                        <h3>Dezy Computer Classes</h3>
                        <a href="https://dezycomputer.com" target="_blank">Visit Project</a>
                        <img src="portfolio/dezy.png" alt="Dezy Computer Classes" class="img-fluid">
                                <p>Dezy Computer Classes offers comprehensive computer education, from basic skills to advanced software development. Our hands-on courses prepare students for successful careers in the IT industry.</p>
                                

                    </div>
                </div>
               
                <div class="col-md-6">
                    <div class="project-item">
                        <h3>Personal Assistant</h3>
                        <a href="#" target="_blank">Visit Project</a>
                        <img src="portfolio/ai.png" alt="Another Project" class="img-fluid">
                        <p>Personal Assistant like chatboat.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="project-item">
                        <h3>E-Commerce Data Anylysis</h3>
                        <a href="https://github.com/sudho712/Ecommerce-Sell-Dashboard-PowerBI" target="_blank">Visit Project</a>
                        <img src="portfolio/dashboard.png" alt="Yet Another Project" class="img-fluid">
                        <p>E-Commerce sell Dashboard.</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="project-item">
                        <h3>Event Managemtnt (Axciom Cons).</h3>
                        <a href="https://github.com/sudho712/Axciom-Consulting-Test-Event-Mangement-Project-" target="_blank">Visit Project</a>
                        <img src="portfolio/event.png" alt="Another Project" class="img-fluid">
                        <p>Event management involves the planning, coordination, and execution of events such as conferences, weddings, concerts, and corporate gatherings.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="project-item">
                        <h3>Weather Application JAVASCRIPT</h3>
                        <a href="https://github.com/sudho712/JS-Project-30/tree/main/Weather" target="_blank">Visit Project</a>
                        <img src="portfolio/weather.png" alt="Yet Another Project" class="img-fluid">
                        <p> weather application provides real-time updates on current weather conditions and forecasts, allowing users to check temperature, humidity, and other climate-related data for their location or any specified region.</p>
                    </div>
                </div>
               


            </div>
        </div>
    </section>
    <section id="skills" class="skills">
        <div class="container">
            <h2 style="textaligns:center">Skills</h2>
            <div class="skill-list">
                <p>Web Development <span>HTML</span></p>
                <p>Web Development <span>CSS</span></p>
                <p>Web Development <span>JavaScript</span></p>
                <p>Backend Development <span>PHP</span></p>
                <p>Database Management <span>MySQL</span></p>
                
            </div>
        </div>
    </section>
   <section id="portfolio" style="padding: 3rem 0;">
    <div class="container">
        <h2 style="text-align: left; margin-bottom: 2rem; color: white; font-size: 2rem; font-weight: bold;">
            Experiences
        </h2>
        <div style="background-color: #000; padding: 20px; border-radius: 8px;">
            <div style="background: #1a1a1a; padding: 1.5rem; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); margin-bottom: 1.5rem; color: #fff;">
<a href="https://www.bytecomputerbgs.in/" target="_blank" style="text-decoration: none;">
    <h3 style="color: #00bfff; font-size: 1.5rem; font-weight: bold; margin-bottom: 0.5rem;">
        Byte Computer Training Center (Begusarai, Bihar)
    </h3>
</a>

                <p style="font-weight: bold; font-size: 1.1rem;">Lab Assistant</p>
                <p style="font-style: italic; font-size: 0.9rem;">Duration: 2 years</p>
                <p style="font-size: 1rem; line-height: 1.6;">
                    Assisted in the daily operations of the computer lab, providing technical support and instruction to students.
                </p>
            </div>
            <div style="background: #1a1a1a; padding: 1.5rem; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); margin-bottom: 1.5rem; color: #fff;">
                <h3 style="color: #00bfff; font-size: 1.5rem; font-weight: bold; margin-bottom: 0.5rem;">
                    Aadarsh Parikalpana Computer Center (Begusarai, Bihar)
                </h3>
                <p style="font-weight: bold; font-size: 1.1rem;">Guest Teacher</p>
                <p style="font-style: italic; font-size: 0.9rem;">Duration: 1 years</p>
                <p style="font-size: 1rem; line-height: 1.6;">
                    Taught computer science courses and managed classroom activities. Worked on curriculum development for both NIELIT and NCPUL certification programs.
                </p>
            </div>
        </div>
    </div>
</section>



    <section id="contact" class="contact">
    <div class="container">
        <h2>Contact</h2>
        <form action="portfolio/contact_form.php" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="mobile">Mobile Number</label>
                <input type="tel" id="mobile" name="mobile" class="form-control">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" class="form-control" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn">Send Message</button>
        </form>
    </div>
</section>

    <footer>
        <p>&copy; 2024 Sudhir Kumar. All Rights Reserved.</p>
    </footer>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Custom JS for menu toggle -->
    <script>
        document.querySelector('.menu-toggle').addEventListener('click', function() {
            document.querySelector('header ul').classList.toggle('active');
        });
    </script>
</body>
</html>
