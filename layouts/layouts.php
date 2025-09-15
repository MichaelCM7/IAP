<?php
  //include "./conf.php";
  class layouts {
    public function header($conf) {?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?php echo $conf['site_name']?></title>
            <link rel="stylesheet" href="/IAP/css/global.css">
        </head>
        <body>
            <header class="header">
                <nav class="nav container">
                    <a href="index.php" class="logo"><?php echo "<p>".$conf['site_name']."</p>"; ?></a>
                    <ul class="nav-links" id="navLinks">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="courses.php">Courses</a></li>
                        <li><a href="about.php">About</a></li>
                    </ul>
                    <div class="auth-buttons" id="authButtons">
                        <a href="login.php" class="btn btn-secondary" id="loginBtn">Login</a>
                        <a href="signup.php" class="btn btn-primary" id="signupBtn">Sign Up</a>
                    </div>
                </nav>
            </header>
    <?php
    }
    public function formHeader($conf){?>
      <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?php echo $conf['site_name']?></title>
            <link rel="stylesheet" href="/IAP/css/global.css">
        </head>
        <body>
            <header class="header">
                <nav class="nav container">
                    <a href="index.php" class="logo"><?php echo "<p>".$conf['site_name']."</p>"; ?></a>
                    <ul class="nav-links" id="navLinks">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="courses.php">Courses</a></li>
                        <li><a href="about.php">About</a></li>
                    </ul>
                    <div class="auth-buttons" id="authButtons">
                        
                    </div>
                </nav>
            </header>
    <?php
    }

    public function banner() {?>
      <section class="hero">
            <div class="container">
                <h1>Learn the Impossible</h1>
                <p>Unlock your potential with our cutting-edge courses designed to challenge and inspire you.</p>
                <a href="courses.html" class="btn btn-accent">Explore Courses</a>
            </div>
        </section>
    
    <?php
    }

    public function content(){?>
      <main>
        <section class="container">
            <h2 class="text-center mb-4">Featured Courses</h2>
            <div class="courses-grid">
                <div class="course-card">
                    <h3>Advanced JavaScript</h3>
                    <p>Master modern JavaScript concepts including ES6+, async programming, and advanced patterns.</p>
                    <a href="" class="btn btn-primary">Learn More</a>
                </div>
                <div class="course-card">
                    <h3>Machine Learning Fundamentals</h3>
                    <p>Dive into the world of AI and machine learning with hands-on projects and real-world applications.</p>
                    <a href="" class="btn btn-primary">Learn More</a>
                </div>
                <div class="course-card">
                    <h3>Full-Stack Development</h3>
                    <p>Build complete web applications from frontend to backend using modern technologies.</p>
                    <a href="" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </section>

        <section class="container text-center mb-4">
            <h2>Why Choose Project Impossible?</h2>
            <div class="courses-grid">
                <div class="course-card">
                    <h3>🎯 Expert Instructors</h3>
                    <p>Learn from industry professionals with years of real-world experience.</p>
                </div>
                <div class="course-card">
                    <h3>🚀 Hands-on Projects</h3>
                    <p>Build your portfolio with practical projects that showcase your skills.</p>
                </div>
                <div class="course-card">
                    <h3>🏆 Certification</h3>
                    <p>Earn recognized certificates to boost your career prospects.</p>
                </div>
            </div>
        </section>
    </main>

    <?php
    }
    public function publicCourses(){?>
        <main class="container">
            <section class="dashboard">
                <div class="dashboard-header">
                    <h1>All Courses</h1>
                    <p>Discover our comprehensive collection of courses designed to help you achieve the impossible.</p>
                </div>

                <div class="courses-grid">
                    <div class="course-card">
                        <h3>Advanced JavaScript</h3>
                        <p>Master modern JavaScript concepts including ES6+, async programming, and advanced patterns. Perfect for developers looking to level up their skills.</p>
                        <div class="course-meta mb-2">
                            <span>⏱️ 8 weeks</span> | <span>📚 Intermediate</span>
                        </div>
                        <button class="btn btn-primary" onclick="enrollCourse('javascript')">Enroll Now</button>
                    </div>

                    <div class="course-card">
                        <h3>Machine Learning Fundamentals</h3>
                        <p>Dive into the world of AI and machine learning with hands-on projects and real-world applications using Python and popular ML libraries.</p>
                        <div class="course-meta mb-2">
                            <span>⏱️ 12 weeks</span> | <span>📚 Beginner</span>
                        </div>
                        <button class="btn btn-primary" onclick="enrollCourse('ml')">Enroll Now</button>
                    </div>

                    <div class="course-card">
                        <h3>Full-Stack Development</h3>
                        <p>Build complete web applications from frontend to backend using modern technologies like React, Node.js, and databases.</p>
                        <div class="course-meta mb-2">
                            <span>⏱️ 16 weeks</span> | <span>📚 Intermediate</span>
                        </div>
                        <button class="btn btn-primary" onclick="enrollCourse('fullstack')">Enroll Now</button>
                    </div>

                    <div class="course-card">
                        <h3>Data Science with Python</h3>
                        <p>Learn to analyze and visualize data using Python, pandas, matplotlib, and other essential data science tools.</p>
                        <div class="course-meta mb-2">
                            <span>⏱️ 10 weeks</span> | <span>📚 Beginner</span>
                        </div>
                        <button class="btn btn-primary" onclick="enrollCourse('datascience')">Enroll Now</button>
                    </div>

                    <div class="course-card">
                        <h3>Mobile App Development</h3>
                        <p>Create native mobile applications for iOS and Android using React Native and modern development practices.</p>
                        <div class="course-meta mb-2">
                            <span>⏱️ 14 weeks</span> | <span>📚 Advanced</span>
                        </div>
                        <button class="btn btn-primary" onclick="enrollCourse('mobile')">Enroll Now</button>
                    </div>

                    <div class="course-card">
                        <h3>Cybersecurity Essentials</h3>
                        <p>Protect digital assets and learn ethical hacking techniques, network security, and risk assessment methodologies.</p>
                        <div class="course-meta mb-2">
                            <span>⏱️ 6 weeks</span> | <span>📚 Intermediate</span>
                        </div>
                        <button class="btn btn-primary" onclick="enrollCourse('cybersecurity')">Enroll Now</button>
                    </div>
                </div>
            </section>
        </main>
    <?php
    }

    public function aboutContent(){?>
        <main class="container">
            <section class="dashboard">
                <div class="dashboard-header text-center">
                    <h1>About Project Impossible</h1>
                    <p>Empowering learners to achieve what once seemed impossible.</p>
                </div>

                <div class="course-card mb-4">
                    <h2>Our Mission</h2>
                    <p>At Project Impossible, we believe that with the right guidance, tools, and determination, anyone can master complex skills and achieve their goals. Our mission is to make high-quality education accessible to everyone, breaking down barriers and making the impossible possible.</p>
                </div>

                <div class="courses-grid">
                    <div class="course-card">
                        <h3>🎓 Expert-Led Learning</h3>
                        <p>Our courses are designed and taught by industry experts with years of practical experience. Learn from the best and gain insights that you won't find anywhere else.</p>
                    </div>

                    <div class="course-card">
                        <h3>🛠️ Hands-On Approach</h3>
                        <p>We believe in learning by doing. Every course includes practical projects, real-world scenarios, and hands-on exercises that prepare you for actual challenges.</p>
                    </div>

                    <div class="course-card">
                        <h3>🌟 Personalized Journey</h3>
                        <p>Your learning path is unique to you. Our platform adapts to your pace, tracks your progress, and provides personalized recommendations to help you succeed.</p>
                    </div>

                    <div class="course-card">
                        <h3>🤝 Community Support</h3>
                        <p>Join a vibrant community of learners and mentors. Get help when you need it, share your achievements, and collaborate on exciting projects.</p>
                    </div>

                    <div class="course-card">
                        <h3>📈 Career Growth</h3>
                        <p>Our courses are designed with career advancement in mind. Gain skills that are in high demand and earn certificates that employers recognize and value.</p>
                    </div>

                    <div class="course-card">
                        <h3>🔄 Continuous Updates</h3>
                        <p>Technology evolves rapidly, and so do our courses. We continuously update our content to ensure you're learning the latest tools, techniques, and best practices.</p>
                    </div>
                </div>

                <div class="course-card text-center">
                    <h2>Ready to Start Your Journey?</h2>
                    <p>Join thousands of learners who have already transformed their careers with Project Impossible. Your impossible is waiting to become possible.</p>
                    <a href="courses.php" class="btn btn-accent">Explore Courses</a>
                </div>
            </section>
        </main>
    <?php
    }

    public function footer($conf) {?>
        <footer class="footer">
          <div class="container">
              <p>&copy; 2024 Project Impossible. All rights reserved.</p>
          </div>
        </footer>
    <?php
    }
  }
?>
