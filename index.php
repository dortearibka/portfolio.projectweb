<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles/style.css" />
    <link rel="stylesheet" href="styles/responsive.css" />
    <title>Portfolio - Dortea Tadete</title>
    <style>
        /* Tempelkan CSS untuk pengujian */
        .comment {
            margin: 2rem 0;
            padding: 1rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .comment form {
            display: flex;
            flex-direction: column;
        }

        .comment input[type="text"],
        .comment textarea {
            width: 100%;
            padding: 0.75rem;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }

        .comment input[type="text"]:focus,
        .comment textarea:focus {
            outline: none;
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        .comment button {
            width: 100px;
            padding: 0.75rem;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            font-size: 1rem;
            cursor: pointer;
            align-self: flex-end;
        }

        .comment button:hover {
            background-color: #0056b3;
        }

        .comment-list {
            margin-top: 2rem;
        }

        .comment-item {
            margin-bottom: 1.5rem;
            padding: 1rem;
            border-bottom: 1px solid #ddd;
        }

        .comment-item h4 {
            margin: 0 0 0.5rem 0;
            font-size: 1.25rem;
            color: #333;
        }

        .comment-item p {
            margin: 0 0 0.5rem 0;
            font-size: 1rem;
            color: #555;
        }

        .comment-item small {
            color: #999;
            font-size: 0.875rem;
        }
    </style>
  </head>
  <body>
    <!-- Header -->
    <header>
      <div class="main-container">
        <div class="nav">
          <div class="logo">
            <a href="/">DRT</a>
          </div>

          <nav>
            <ul>
              <li><a href="#about">About</a></li>
              <li><a href="#blogs">Blog</a></li>
              <li><a href="#gallerys">Gallery</a></li>
              <li><a href="#contact">Contact</a></li>
              <li>
                <a href="/">
                  <button class="btn">Learn More</button>
                </a>
              </li>
            </ul>
          </nav>

          <div class="burger">
            <div class="line-1"></div>
            <div class="line-2"></div>
            <div class="line-3"></div>
          </div>
        </div>

        <section id="hero">
          <div class="hero-left">
            <h3 class="pre-title">My name is</h3>
            <h1 class="hero-name">Dortea Ribka <span>Tadete</span></h1>
            <p>
                Informatics Student at Sam Ratulangi University.
            </p>
          </div>

          <div class="hero-right">
            <img src="./images/hero.png" alt="Person" />
          </div>
        </section>
      </div>
    </header>
    <!-- End Header -->

    <!-- me -->
    <section id="about">
      <div class="about main-container">
        <h3 class="pre-title">Tentang Saya</h3>
        <h1 class="section-title about-title">About</h1>

        <div class="grid-3">
          <div class="about">
            <div class="about-icon">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
              >
                <path
                  d="M16.896 10l-4.896-8-4.896 8-7.104-4 3 11v5h18v-5l3-11-7.104 4zm-11.896 10v-2h14v2h-14zm14.2-4h-14.4l-1.612-5.909 4.615 2.598 4.197-6.857 4.197 6.857 4.615-2.598-1.612 5.909z"
                />
              </svg>
            </div>
            <h4>Education</h4>
            <p>
              SAM RATULANGI UNEVERSITY <br> Major Informatics
            </p>
          </div>

          <div class="about">
            <div class="about-icon">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
              >
                <path
                  d="M3 20c.552 0 1 .449 1 1s-.448 1-1 1-1-.449-1-1 .448-1 1-1zm0-2c-1.656 0-3 1.343-3 3s1.344 3 3 3 3-1.343 3-3-1.344-3-3-3zm9 2c.552 0 1 .449 1 1s-.448 1-1 1-1-.449-1-1 .448-1 1-1zm0-2c-1.656 0-3 1.343-3 3s1.344 3 3 3 3-1.343 3-3-1.344-3-3-3zm0-16c.552 0 1 .449 1 1s-.448 1-1 1-1-.449-1-1 .448-1 1-1zm0-2c-1.656 0-3 1.343-3 3s1.344 3 3 3 3-1.343 3-3-1.344-3-3-3zm9 20c.552 0 1 .449 1 1s-.448 1-1 1-1-.449-1-1 .448-1 1-1zm0-2c-1.656 0-3 1.343-3 3s1.344 3 3 3 3-1.343 3-3-1.344-3-3-3zm-1.577-1.721l-6.423-5.028v-3.352c-.323.066-.658.101-1 .101s-.677-.035-1-.101v3.352l-6.424 5.028c.695.233 1.323.602 1.844 1.093l5.58-4.372 5.579 4.373c.522-.492 1.15-.861 1.844-1.094z"
                />
              </svg>
            </div>
            <h4>Skills</h4>
            <p>
             Communication <br> Team Work <br>HTML, CSS and CANVA
            </p>
          </div>

          <div class="about">
            <div class="about-icon">
              <svg
                width="24"
                height="24"
                xmlns="http://www.w3.org/2000/svg"
                fill-rule="evenodd"
                clip-rule="evenodd"
              >
                <path
                d="M12 0c6.623 0 12 5.377 12 12s-5.377 12-12 12-12-5.377-12-12 5.377-12 12-12m2.557 16h-5.115c.546 2.46 1.441 4.114 2.558 5.744 1.194-1.741 2.041-3.41 2.557-5.744m-7.157 0h-4.567c1.236 2.825 3.704 4.972 6.755 5.716-1.048-1.733-1.783-3.658-2.188-5.716m13.767 0h-4.567c-.391 1.988-1.095 3.887-2.175 5.694 3.012-.763 5.517-2.895 6.742-5.694m-14.005-6h-4.962c-.267 1.313-.267 2.685 0 4h4.915c-.119-1.329-.101-2.672.047-4m7.661 0h-5.647c-.165 1.326-.185 2.672-.053 4h5.753c.133-1.328.111-2.673-.053-4m6.977 0h-4.963c.148 1.328.166 2.671.048 4h4.915c.26-1.285.273-2.648 0-4m-12.156-7.729c-3.077.732-5.567 2.886-6.811 5.729h4.653c.435-2.042 1.178-3.985 2.158-5.729m2.355-.048c-1.089 1.77-1.91 3.453-2.463 5.777h4.927c-.534-2.246-1.337-3.948-2.464-5.777m2.368.069c1.013 1.812 1.733 3.76 2.146 5.708h4.654c-1.232-2.816-3.762-4.958-6.8-5.708"
                />
              </svg>
            </div>
            <h4>Interest</h4>
            <p>
                Web Development and Design
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- me -->

    <!-- blog -->
    <section id="blogs">
      <div class="blogs main-container">
        <h3 class="pre-title">Blog saya</h3>
        <h1 class="section-title">Blog</h1>

        <div class="grid-3">
          <!-- blog 1 -->
          <div class="blog">
            <div class="blog-cover">
              <img
                src="./images/blog1.jpg"
                alt="picture blog 1"
              />
            </div>
            <div class="blog-info">
              <div class="blog-title">
                <h4>Blog</h4>
                <a href="https://dortearibkatadete-unsrat.blogspot.com/2024/03/tugas1praktiumjaringandankomunikasidata.html"" class="blog-link">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                  >
                    <path
                      d="M6 17c2.269-9.881 11-11.667 11-11.667v-3.333l7 6.637-7 6.696v-3.333s-6.17-.171-11 5zm12 .145v2.855h-16v-12h6.598c.768-.787 1.561-1.449 2.339-2h-10.937v16h20v-6.769l-2 1.914z"
                    />
                  </svg>
                </a>
              </div>
              <div class="blog-tags">
                <div>Jaringan dan Komunikasi Data</div>
                <div>Education</div>
              </div>
              <p>
              Praktikum jaringan dan komunikasi data
              </p>
            </div>
          </div>

          <!-- blog 2 -->
          <div class="blog">
            <div class="blog-cover">
              <img
                src="./images/blog2.jpg"
                alt=" picture blog 2"
              />
            </div>
            <div class="blog-info">
              <div class="blog-title">
                <h4>Blog</h4>
                <a href="https://dortearibkatadete-unsrat.blogspot.com/2024/04/tugas-jaringan-dan-komunikasi-data.html" class="blog-link">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                  >
                    <path
                      d="M6 17c2.269-9.881 11-11.667 11-11.667v-3.333l7 6.637-7 6.696v-3.333s-6.17-.171-11 5zm12 .145v2.855h-16v-12h6.598c.768-.787 1.561-1.449 2.339-2h-10.937v16h20v-6.769l-2 1.914z"
                    />
                  </svg>
                </a>
              </div>
              <div class="blog-tags">
                <div>Jaringan dan Komunikasi Data</div>
                <div>Education</div>
              </div>
              <p>
              Praktikum Jaringan dan Komunikasi Data
              </p>
            </div>
          </div>

          <!-- blog 3 -->
          <div class="blog">
            <div class="blog-cover">
              <img
                src="./images/blog3.jpg"
                alt="picture blog 3"
              />
            </div>
            <div class="blog-info">
              <div class="blog-title">
                <h4>Articel</h4>
                <a href="https://dortearibkatadete-unsrat.blogspot.com/2024/03/tugas1jaringandankomunikasidata.html" class="portfolio-link">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                  >
                    <path
                      d="M6 17c2.269-9.881 11-11.667 11-11.667v-3.333l7 6.637-7 6.696v-3.333s-6.17-.171-11 5zm12 .145v2.855h-16v-12h6.598c.768-.787 1.561-1.449 2.339-2h-10.937v16h20v-6.769l-2 1.914z"
                    />
                  </svg>
                </a>
              </div>
              <div class="blog-tags">
                <div>Jaringan dan Komunikasi Data</div>
                <div>Education</div>
              </div>
              <p>
                Teori Jaringan dan Komunikasi Data
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- blog -->

       <!-- galleri -->
    <section id="gallerys">
        <div class="gallerys main-container">
          <h3 class="pre-title">gallery saya</h3>
          <h1 class="section-title">Gallery</h1>
  
        <div class="gallery-grid">
            <!-- gallery 1 -->
            <div class="gallery">
              <div class="gallery-cover">
                <img
                  src="./images/photo1.jpg"
                  alt="gallery 1"
                />
              </div> 
            </div>
  
            <!-- gallery 2 -->
            <div class="gallery">
              <div class="gallery-cover">
                <img
                  src="./images/photo2.jpg"
                  alt="galery 2"
                />
              </div>
            </div>

            <!-- gallery 3 -->
            <div class="gallery">
              <div class="gallery-cover">
                <img
                  src="./images/photo3.jpg"
                  alt="gallery 3"
                />
              </div>
            </div>

            <!-- gallery 4 -->
            <div class="gallery">
                <div class="gallery-cover">
                  <img
                    src="./images/photo4.jpg"
                    alt="galery 4"
                  />
                </div>
              </div>

              <!-- gallery 5 -->
              <div class="gallery">
                <div class="gallery-cover">
                  <img
                    src="./images/photo5.jpg"
                    alt="galery 5"
                  />
                </div>
              </div>

              <!-- gallery 6 -->
              <div class="gallery">
                <div class="gallery-cover">
                  <img
                    src="./images/photo6.jpg"
                    alt="galery 6"
                  />
                </div>
              </div>  
    
     </div>
        </div>
    </section>
      <!-- galleri -->

 <!-- Contact -->
 <section id="contact">
      <div class="contact main-container">
        <div class="contact-left">
          <form
            action="https://formspree.io/f/xeqwdykj"
            method="POST"
            class="contact-form"
          >
            <div>
              <input type="text" placeholder="Name" name="name" />
            </div>
            <div>
              <input type="email" placeholder="Email" name="email" />
            </div>
            <div>
              <textarea
                name="message"
                id="message"
                cols="30"
                rows="10"
                placeholder="Message"
              ></textarea>
            </div>
            <div>
              <button class="btn-submit">Send Message</button>
            </div>
          </form>
        </div>

        <div class="contact-right">
          <div class="contact-item">
            <div class="contact-item-icon">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="22"
                height="22"
                viewBox="0 0 24 24"
              >
                <path
                  d="M12 1c-3.148 0-6 2.553-6 5.702 0 3.148 2.602 6.907 6 12.298 3.398-5.391 6-9.15 6-12.298 0-3.149-2.851-5.702-6-5.702zm0 8c-1.105 0-2-.895-2-2s.895-2 2-2 2 .895 2 2-.895 2-2 2zm12 14h-24l4-8h3.135c.385.641.798 1.309 1.232 2h-3.131l-2 4h17.527l-2-4h-3.131c.435-.691.848-1.359 1.232-2h3.136l4 8z"
                />
              </svg>
            </div>
            <div class="contact-item-detail">
              <h4>Address</h4>
              <p>Manado, Sulawesi Utara</p>
            </div>
          </div>

          <div class="contact-item">
            <div class="contact-item-icon">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="22"
                height="22"
                viewBox="0 0 24 24"
              >
                <path
                  d="M20 22.621l-3.521-6.795c-.008.004-1.974.97-2.064 1.011-2.24 1.086-6.799-7.82-4.609-8.994l2.083-1.026-3.493-6.817-2.106 1.039c-7.202 3.755 4.233 25.982 11.6 22.615.121-.055 2.102-1.029 2.11-1.033z"
                />
              </svg>
            </div>
            <div class="contact-item-detail">
              <h4>Phone</h4>
              <p>(+62) 8515953****</p>
            </div>
          </div>

          <div class="contact-item">
            <div class="contact-item-icon">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="22"
                height="22"
                viewBox="0 0 24 24"
              >
                <path
                  d="M0 3v18h24v-18h-24zm21.518 2l-9.518 7.713-9.518-7.713h19.036zm-19.518 14v-11.817l10 8.104 10-8.104v11.817h-20z"
                />
              </svg>
            </div>
            <div class="contact-item-detail">
              <h4>Email</h4>
              <p>dorteatadete026@student.unsrat.ac.id</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Contact -->
 
<div class="comment">
<!-- comment_form.php -->
  <form method="POST" action="submit_comment.php">
    <input type="hidden" name="article_id" value="1"> <!-- Ganti dengan ID artikel yang dinamis -->
    <input type="text" name="name" placeholder="Your Name" required>
    <textarea name="comment" placeholder="Your Comment" required></textarea>
    <button type="submit">Submit</button>
  </form>
</div> 

    <!-- Footer -->
    <footer>
      <div class="footer-icons">
        <a href="#">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="20"
            height="20"
            viewBox="0 0 24 24"
          >
            <path
              d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"
            />
          </svg>
        </a>

        <a href="#">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="20"
            height="20"
            viewBox="0 0 24 24"
          >
            <path
              d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"
            />
          </svg>
        </a>

        <a href="#">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="20"
            height="20"
            viewBox="0 0 24 24"
          >
            <path
              d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"
            />
          </svg>
        </a>

        <a href="#">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="20"
            height="20"
            viewBox="0 0 24 24"
          >
            <path
              d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"
            />
          </svg>
        </a>
      </div>
      <p>&copy; 2024 - Dortea Ribka Tadete</p>
    </footer>
    <!-- End Footer -->

    <script src="js/main.js"></script>
  </body>
</html>
