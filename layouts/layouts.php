<?php
  class layouts {
    public function header($conf) {?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Project Impossible - Learn the Impossible</title>
            <link rel="stylesheet" href="/IAP/css/global.css">
        </head>
        <body>
            <header class="header">
                <nav class="nav container">
                    <a href="index.php" class="logo"><?php echo "<p>".$conf['site_name']."</p>"; ?></a>
                    <ul class="nav-links" id="navLinks">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">Courses</a></li>
                        <li><a href="#">About</a></li>
                    </ul>
                    <div class="auth-buttons" id="authButtons">
                        <a href="#" class="btn btn-secondary" id="loginBtn">Login</a>
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
            <title>Project Impossible - Learn the Impossible</title>
            <link rel="stylesheet" href="/IAP/css/global.css">
        </head>
        <body>
            <header class="header">
                <nav class="nav container">
                    <a href="index.php" class="logo"><?php echo "<p>".$conf['site_name']."</p>"; ?></a>
                    <ul class="nav-links" id="navLinks">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">Courses</a></li>
                        <li><a href="#">About</a></li>
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
