<?php
include 'openSpaceDatabase.php';

// First query
$sql1 = "SELECT title, text, picture FROM courses2 WHERE id = 1";
$result1 = $connection->query($sql1);

// Second query
$sql2 = "SELECT title, text, picture FROM courses2 WHERE id = 2";
$result2 = $connection->query($sql2);

// Third query
$sql3 = "SELECT title, text, picture FROM courses2 WHERE id = 3";
$result3 = $connection->query($sql3);

// 4th query
$sql4 = "SELECT title, text, picture FROM courses2 WHERE id = 4";
$result4 = $connection->query($sql4);

// 5th query
$sql5 = "SELECT title, text, picture FROM courses2 WHERE id = 5";
$result5 = $connection->query($sql5);

// 6th query
$sql6 = "SELECT title, text, picture FROM courses2 WHERE id = 6";
$result6 = $connection->query($sql6);

// 1st testimonials query
$sql7 = "SELECT name, profession, text, picture FROM testimonials WHERE id = 1";
$result7 = $connection->query($sql7);

// 2nd testimonials query
$sql8 = "SELECT name, profession, text, picture FROM testimonials WHERE id = 2";
$result8 = $connection->query($sql8);

// 3rd testimonials query
$sql9 = "SELECT name, profession, text, picture FROM testimonials WHERE id = 3";
$result9 = $connection->query($sql9);

// 4th testimonials query
$sql10 = "SELECT name, profession, text, picture FROM testimonials WHERE id = 4";
$result10 = $connection->query($sql10);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OpenSpace Academy</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="media.css"> 

    <!-- Font Awesome Icons setup link -->
    <script src="https://kit.fontawesome.com/83e9f019dd.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="header">
        <div class="container-fluid gx-0">
            
            <!--Navbar code start-->

            <nav class="navbar navbar-expand-lg">
                <div class="container">
                  <a class="navbar-brand logo text-uppercase" href="#">OpenSpace Academy</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                      <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#aboutUs">About Us</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#courses">Courses</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#contactUs">Contact</a>
                      </li>
                      <li class="nav-item">
                        <a class="btn-navbar" href="#">Enroll Now!</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>

            <!--Navbar code end-->

            <!-- start of header -->

            <div class="container">
              <div class="content-home">
                <div class="row content-home2">
                  <div class="col-lg-7 col-md-5">
                    <div class="box-container">
                      <?php 
                      if ($result1->num_rows > 0) {
                        $row = $result1->fetch_assoc();
                        echo '<img src="' . htmlspecialchars($row["picture"]) . '" class="img-home" alt="banner img">';
                      } else {
                        echo '<p>No results found</p>';
                      }
                      ?>
                    </div>
                  </div>
                  <div class="col-lg-5 col-md-7">
                    <div class="box-container2">
                      <h1 class="home-heading">Visibility for safety in <span class="home-span">multi-use spaces</span> </h1>
                      <?php 
                        if ($result1->num_rows > 0) {
                          echo '<p class="para-home">' . htmlspecialchars($row["text"]) . '</p>';
                        } else {
                          echo '<p>No results found</p>';
                        }
                      ?>
                      <div class="btn-home">
                        <a href="#" class="home-links">Enroll Now!</a>
                        <a href="#" class="home-links btn2">Explore</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

        </div>
    </div>

    <!-- Header finished -->

    <!-- start of About us -->

    <div class="container" id="aboutUs">
      <div class="about-us-container">
        <div class="about-us">
          <div class="row">
            <div class="col-lg-6">
              <div class="content-about">
                <h3 class="heading-about">About Us</h3>
                <p class="para-about">OpenSpace Academy is a free online resource for anyone interested in creating and working in safe multi-use spaces. Supported by industry experts, our website offers resources and short modules to help people feel safe in various environments.</p>
                <p class="para-about">Initially designed for public-facing multi-use spaces, our content now also supports space owners, activity facilitators, and co-working space users, providing valuable insights for enhancing safety and comfort in shared spaces.</p>
                <a href="#" class="link-about"> <span class="span-about"></span> Read More
                <span class="icon-arrow"><i class="fa-solid fa-arrow-right"></i></span></a>
              </div>
            </div>
            <div class="col-lg-6">
              <img src=".//img/house.png" class="img-about" alt="img">
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- End of About us -->

    <!-- Start of products -->

    <section class="product-category" id="courses">
      <h2 class="heading-product">Courses</h2>
      <div class="container-fluid">
        <!-- Bootstrap slider carousel -->
        <div id="carouselExample" class="carousel slide">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container">
                <div class="row">
                  <div class="col-lg-4 col-md-6">

                    <div class="card card-product">
                      <?php 
                      if ($result1->num_rows > 0) {
                        echo '<img src="' . htmlspecialchars($row["picture"]) . '" class="card-img-top img-card" alt="img">';
                      } else {
                        echo '<p>No results found</p>';
                      }
                      ?>
                      <div class="card-body">
                        <?php 
                        if ($result1->num_rows > 0) {
                          echo '<h5 class="card-title">' . htmlspecialchars($row["title"]) . '</h5>';
                          echo '<p class="card-text">' . htmlspecialchars($row["text"]) . '</p>';
                        } else {
                          echo '<p>No results found</p>';
                        }
                        ?>
                        <a href="#" class="btn-product-ctg">Read More <span class="icon-arrow"><i class="fa-solid fa-arrow-right"></i></span></a>
                      </div>
                    </div>

                  </div>

                  <div class="col-lg-4 col-md-6">

                    <div class="card card-product">
                      <?php 
                      if ($result2->num_rows > 0) {
                        $row = $result2->fetch_assoc();
                        echo '<img src="' . htmlspecialchars($row["picture"]) . '" class="card-img-top img-card" alt="img">';
                      } else {
                        echo '<p>No results found</p>';
                      }
                      ?>
                      <div class="card-body">
                        <?php 
                        if ($result2->num_rows > 0) {
                          echo '<h5 class="card-title">' . htmlspecialchars($row["title"]) . '</h5>';
                          echo '<p class="card-text">' . htmlspecialchars($row["text"]) . '</p>';
                        } else {
                          echo '<p>No results found</p>';
                        }
                        ?>
                        <a href="#" class="btn-product-ctg">Read More <span class="icon-arrow"><i class="fa-solid fa-arrow-right"></i></span></a>
                      </div>
                    </div>

                  </div>

                  <div class="col-lg-4 col-md-6">

                    <div class="card card-product">
                      <?php 
                      if ($result3->num_rows > 0) {
                        $row = $result3->fetch_assoc();
                        echo '<img src="' . htmlspecialchars($row["picture"]) . '" class="card-img-top img-card" alt="img">';
                      } else {
                        echo '<p>No results found</p>';
                      }
                      ?>
                      <div class="card-body">
                        <?php 
                        if ($result3->num_rows > 0) {
                          echo '<h5 class="card-title">' . htmlspecialchars($row["title"]) . '</h5>';
                          echo '<p class="card-text">' . htmlspecialchars($row["text"]) . '</p>';
                        } else {
                          echo '<p>No results found</p>';
                        }
                        ?>
                        <a href="#" class="btn-product-ctg">Read More <span class="icon-arrow"><i class="fa-solid fa-arrow-right"></i></span></a>
                      </div>
                    </div>

                  </div>
                  
                </div>
              </div>
            </div>
            <div class="carousel-item">

              <div class="container">
                <div class="row">
                  <div class="col-lg-4 col-md-6">

                    <div class="card card-product">
                      <?php 
                      if ($result4->num_rows > 0) {
                        $row = $result4->fetch_assoc();
                        echo '<img src="' . htmlspecialchars($row["picture"]) . '" class="card-img-top img-card" alt="img">';
                      } else {
                        echo '<p>No results found</p>';
                      }
                      ?>
                      <div class="card-body">
                        <?php 
                        if ($result4->num_rows > 0) {
                          echo '<h5 class="card-title">' . htmlspecialchars($row["title"]) . '</h5>';
                          echo '<p class="card-text">' . htmlspecialchars($row["text"]) . '</p>';
                        } else {
                          echo '<p>No results found</p>';
                        }
                        ?>
                        <a href="#" class="btn-product-ctg">Read More <span class="icon-arrow"><i class="fa-solid fa-arrow-right"></i></span></a>
                      </div>
                    </div>

                  </div>

                  <div class="col-lg-4 col-md-6">

                    <div class="card card-product">
                      <?php 
                      if ($result5->num_rows > 0) {
                        $row = $result5->fetch_assoc();
                        echo '<img src="' . htmlspecialchars($row["picture"]) . '" class="card-img-top img-card" alt="img">';
                      } else {
                        echo '<p>No results found</p>';
                      }
                      ?>
                      <div class="card-body">
                        <?php 
                        if ($result5->num_rows > 0) {
                          echo '<h5 class="card-title">' . htmlspecialchars($row["title"]) . '</h5>';
                          echo '<p class="card-text">' . htmlspecialchars($row["text"]) . '</p>';
                        } else {
                          echo '<p>No results found</p>';
                        }
                        ?>
                        <a href="#" class="btn-product-ctg">Read More <span class="icon-arrow"><i class="fa-solid fa-arrow-right"></i></span></a>
                      </div>
                    </div>

                  </div>

                  <div class="col-lg-4 col-md-6">

                    <div class="card card-product">
                      <?php 
                      if ($result6->num_rows > 0) {
                        $row = $result6->fetch_assoc();
                        echo '<img src="' . htmlspecialchars($row["picture"]) . '" class="card-img-top img-card" alt="img">';
                      } else {
                        echo '<p>No results found</p>';
                      }
                      ?>
                      <div class="card-body">
                        <?php 
                        if ($result6->num_rows > 0) {
                          echo '<h5 class="card-title">' . htmlspecialchars($row["title"]) . '</h5>';
                          echo '<p class="card-text">' . htmlspecialchars($row["text"]) . '</p>';
                        } else {
                          echo '<p>No results found</p>';
                        }
                        ?>
                        <a href="#" class="btn-product-ctg">Read More <span class="icon-arrow"><i class="fa-solid fa-arrow-right"></i></span></a>
                      </div>
                    </div>

                  </div>
                  
                </div>
              </div>
              
            </div>
          </div>
          <button class="carousel-control-prev btn-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span><i class="fa-solid fa-arrow-left btn-scroll button-left"></i></span>
          </button>
          <button class="carousel-control-next btn-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span><i class="fa-solid fa-arrow-right btn-scroll button-right"></i></span>
          </button>
        </div>
      </div>
    </section>

    <!-- End of products -->

    <!-- Start of testimonials -->

    <section class="testimonial">

      <h2 class="heading-testimonial">
        What People Think <span class="styling">About Us</span>
      </h2>
      <p class="para-testimonial">These firsthand accounts, from professionals in interior design, community management, architecture, and beyond, illustrate the practical impact of OpenSpace Academy and provide valuable inspiration for implementing effective safety measures.</p>
      <div class="container-fluid">

        <!-- Slider bootstrap -->

        <div class="container-fluid mikhail">

          <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 1"></button>
              <!-- <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="container container-clients">
                  <div class="row">
                    <div class="col-lg-6 col-md-12 my-2">
                      <div class="container-content">

                        <div class="img-client">
                          <?php 
                          if ($result7->num_rows > 0) {
                            $row = $result7->fetch_assoc();
                            echo '<img src="' . htmlspecialchars($row["picture"]) . '" class="image-clients" alt="img">';
                          } else {
                            echo '<p>No results found</p>';
                          }
                          ?>
                        </div>

                        <div class="icons-stars">
                          <ul class="rating">
                            <li class="stars"><i class="fa-solid fa-star"></i></li>
                            <li class="stars"><i class="fa-solid fa-star"></i></li>
                            <li class="stars"><i class="fa-solid fa-star"></i></li>
                            <li class="stars"><i class="fa-solid fa-star"></i></li>
                            <li class="stars"><i class="fa-solid fa-star"></i></li>
                          </ul>

                          <?php 
                          if ($result7->num_rows > 0) {
                            echo '<h3 class="client-name">' . htmlspecialchars($row["name"]) . '</h3>';
                            echo '<p class="para-client">' . htmlspecialchars($row["text"]) . '</p>';
                            echo '<h5 class="profession">' . htmlspecialchars($row["profession"]) . '</h5>';
                          } else {
                            echo '<p>No results found</p>';
                          }
                          ?>
                        </div>

                      </div>
                    </div>

                    <div class="col-lg-6 col-md-12 my-2">
                      <div class="container-content">

                        <div class="img-client">
                          <?php 
                          if ($result8->num_rows > 0) {
                            $row = $result8->fetch_assoc();
                            echo '<img src="' . htmlspecialchars($row["picture"]) . '" class="image-clients" alt="img">';
                          } else {
                            echo '<p>No results found</p>';
                          }
                          ?>
                        </div>

                        <div class="icons-stars">
                          <ul class="rating">
                            <li class="stars"><i class="fa-solid fa-star"></i></li>
                            <li class="stars"><i class="fa-solid fa-star"></i></li>
                            <li class="stars"><i class="fa-solid fa-star"></i></li>
                            <li class="stars"><i class="fa-solid fa-star"></i></li>
                            <li class="stars"><i class="fa-solid fa-star"></i></li>
                          </ul>
                          <?php 
                          if ($result8->num_rows > 0) {
                            echo '<h3 class="client-name">' . htmlspecialchars($row["name"]) . '</h3>';
                            echo '<p class="para-client">' . htmlspecialchars($row["text"]) . '</p>';
                            echo '<h5 class="profession">' . htmlspecialchars($row["profession"]) . '</h5>';
                          } else {
                            echo '<p>No results found</p>';
                          }
                          ?>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">

                <div class="container container-clients">
                  <div class="row">
                    <div class="col-lg-6 col-md-12 my-2">
                      <div class="container-content">

                        <div class="img-client">
                          <?php 
                          if ($result9->num_rows > 0) {
                            $row = $result9->fetch_assoc();
                            echo '<img src="' . htmlspecialchars($row["picture"]) . '" class="image-clients" alt="img">';
                          } else {
                            echo '<p>No results found</p>';
                          }
                          ?>
                        </div>

                        <div class="icons-stars">
                          <ul class="rating">
                            <li class="stars"><i class="fa-solid fa-star"></i></li>
                            <li class="stars"><i class="fa-solid fa-star"></i></li>
                            <li class="stars"><i class="fa-solid fa-star"></i></li>
                            <li class="stars"><i class="fa-solid fa-star"></i></li>
                            <li class="stars"><i class="fa-solid fa-star"></i></li>
                          </ul>
                          <?php 
                          if ($result9->num_rows > 0) {
                            echo '<h3 class="client-name">' . htmlspecialchars($row["name"]) . '</h3>';
                            echo '<p class="para-client">' . htmlspecialchars($row["text"]) . '</p>';
                            echo '<h5 class="profession">' . htmlspecialchars($row["profession"]) . '</h5>';
                          } else {
                            echo '<p>No results found</p>';
                          }
                          ?>
                        </div>

                      </div>
                    </div>

                    <div class="col-lg-6 col-md-12 my-2">
                      <div class="container-content">

                        <div class="img-client">
                          <?php 
                          if ($result10->num_rows > 0) {
                            $row = $result10->fetch_assoc();
                            echo '<img src="' . htmlspecialchars($row["picture"]) . '" class="image-clients" alt="img">';
                          } else {
                            echo '<p>No results found</p>';
                          }
                          ?>
                        </div>

                        <div class="icons-stars">
                          <ul class="rating">
                            <li class="stars"><i class="fa-solid fa-star"></i></li>
                            <li class="stars"><i class="fa-solid fa-star"></i></li>
                            <li class="stars"><i class="fa-solid fa-star"></i></li>
                            <li class="stars"><i class="fa-solid fa-star"></i></li>
                            <li class="stars"><i class="fa-solid fa-star"></i></li>
                          </ul>
                          <?php 
                          if ($result10->num_rows > 0) {
                            echo '<h3 class="client-name">' . htmlspecialchars($row["name"]) . '</h3>';
                            echo '<p class="para-client">' . htmlspecialchars($row["text"]) . '</p>';
                            echo '<h5 class="profession">' . htmlspecialchars($row["profession"]) . '</h5>';
                          } else {
                            echo '<p>No results found</p>';
                          }
                          ?>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
            
          </div>

        </div>

      </div>

    </section>

    <!-- End of testimonials -->

    <!-- Start of contact form -->

    <section class="contact-form" id="contactUs">

      <h3 class="heading-contact">Contact Us</h3>
      <div class="container">
        <div class="row">
          
          <div class="col-lg-6 col-md-12">
            <form class="form-origin" action="openSpaceMessages.php" method="post" id="contactForm">
              
              <div class="row">

                <div class="col-lg-6 col-md-12">
                  <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Full Name*" id="name" name="name" aria-describedby="emailHelp" required>
                  </div>
                </div>

                <div class="col-lg-6 col-md-12">
                  <div class="mb-3">
                    <input type="email" class="form-control" placeholder="Email Address*" id="email" name="email" aria-describedby="emailHelp" required>
                  </div>
                </div>

              </div>

              <div class="row">
                <div class="col-lg-12">
                  <div class="mb-3">
                    <textarea class="form-control" placeholder="Your Message*" id="message" name="message" required></textarea>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                  <div class="mb-3 text-center">
                    <button type="submit" class="btn btn-primary btn-contact">Message Us</button>
                  </div>
                </div>
              </div>

            </form>       

          </div>

          <div class="col-lg 6 col-md-12">
            <div class="content-contact">

              <h2 class="heading-content">More About <span>OpenSpace Academy</span></h2>
              <p class="para-content">Developed in collaboration with industry experts and thought leaders from Gallaghers, OpenSpace Academy was initially conceived to support designers of public-facing multi-use spaces, our mission extends beyond mere compliance with regulations and minimum health standards. We focus on empowering stakeholders to engage in meaningful conversations with both space owners and end-users, thereby co-creating environments that prioritize safety and comfort.</p>
              <p class="para-content">As OpenSpace Academy continues to evolve, we aim to broaden our impact. Our expanded vision includes extending this knowledge to space owners, activity facilitators, and individuals working in co-working spaces.</p>

              <div class="social-links">

              </div>

            </div>
          </div>

        </div>
      </div>

    </section>

    <!-- End of contact form -->

    <!-- Footer -->

    <footer>
      <p class="para-footer"> &#169; By Mikhail Maksimov 2024</p>
    </footer>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="openSpaceScript.js"></script>
</body>
</html>
<?php
  // Close the connection
  $connection->close();
?>