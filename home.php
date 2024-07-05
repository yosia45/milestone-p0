<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
    <script
      src="https://kit.fontawesome.com/60cbb41539.js"
      crossorigin="anonymous"
    ></script>
    <title>Shiranui Corp.</title>
  </head>
  <body id="home-body">
    <!-- navbar section -->
    <div class="navbar">
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#services-container">Our Services</a></li>
        <li><a href="#achievements-container">Achievements</a></li>
        <li><a href="#about-us-container">About Us</a></li>
        <li><a href="#contact-us-container">Contact</a></li>
      </ul>
      <ul>
        <li
          id="sign-out-menu"
          onclick="localStorage.removeItem('isLogin'); alert('Logged Out'); location.reload()"
        >
          <a href="#">Sign Out</a>
        </li>
        <li id="sign-in-menu">
          <a onclick="openLoginModal()" href="#"> Sign In </a>
        </li>
        <li id="register-menu">
          <a href="#" onclick="openRegisterModal()">Register</a>
        </li>
      </ul>
    </div>

    <!-- login-modal section -->
    <div id="id01" class="modal">
      <form class="modal-content animate" action="login.php">
        <div class="imgcontainer">
          <span
            onclick="document.getElementById('id01').style.display='none'"
            class="close"
            title="Close Modal"
            >×</span
          >
        </div>
        <div class="container">
          <label><b>Username</b></label>
          <input
            type="text"
            placeholder="Enter Username"
            name="username"
            required
          />

          <label><b>Password</b></label>
          <input
            type="password"
            placeholder="Enter Password"
            name="password"
            required
          />

          <button type="submit">Login</button>
        </div>

        <div class="container" style="background-color: #f1f1f1">
          <button
            type="button"
            onclick="document.getElementById('id01').style.display='none'"
            class="cancelbtn"
          >
            Cancel
          </button>
        </div>
      </form>
    </div>
    <!-- end of login-modal section -->

    <!-- register-modal section -->
    <div id="id02" class="modal">
      <form class="modal-content animate" action="register.php">
        <div class="imgcontainer">
          <span
            onclick="document.getElementById('id01').style.display='none'"
            class="close"
            title="Close Modal"
            >×</span
          >
        </div>
        <div class="container">
          <label><b>Username</b></label>
          <input
            type="text"
            placeholder="Enter Username"
            name="username"
            required
          />

          <label><b>Password</b></label>
          <input
            type="password"
            placeholder="Enter Password"
            name="password"
            required
          />

          <label><b>Email</b></label>
          <input type="email" placeholder="Enter Email" name="email" required />

          <button type="submit">Register</button>
        </div>

        <div class="container" style="background-color: #f1f1f1">
          <button
            type="button"
            onclick="document.getElementById('id01').style.display='none'"
            class="cancelbtn"
          >
            Cancel
          </button>
        </div>
      </form>
    </div>
    <!-- end of register-modal section -->

    <!-- end of navbar section -->

    <!-- main content section -->
    <section id="content-section">
      <!-- intro section -->
      <div id="intro-container">
        <div class="section-title">
          <h2>Minecraft Company Construction Service</h2>
          <p>
            Witness how Shiranui Constrution change your minecraft
            civilization...
          </p>
        </div>
        <div class="intro-img-container">
          <img
            src="./assets/services/land-clearing-service.png"
            id="intro-img"
          />
        </div>
      </div>
      <!-- end of intro section -->

      <!-- about-us section -->
      <div id="about-us-container">
        <h2 class="section-title">Who Are We</h2>
        <div class="staffs-container">
          <div class="staff-data-container">
            <img src="./assets/staffs/flare.jpeg" class="staff-img-profile" />
            <p>Shiranui Flare</p>
            <p>CEO</p>
          </div>
          <div class="staff-data-container">
            <img src="./assets/staffs/polka.jpeg" class="staff-img-profile" />
            <p>Omaru Polka</p>
            <p>COO</p>
          </div>
          <div class="staff-data-container">
            <img
              src="./assets/staffs/sakura_miko.jpeg"
              class="staff-img-profile"
            />
            <p>Sakura Miko</p>
            <p>Education Head</p>
          </div>
          <div class="staff-data-container">
            <img src="./assets/staffs/suisei.jpeg" class="staff-img-profile" />
            <p>Hoshimachi Suisei</p>
            <p>Marketing Head</p>
          </div>
          <div class="staff-data-container">
            <img src="./assets/staffs/noel.jpeg" class="staff-img-profile" />
            <p>Shirogane Noel</p>
            <p>Intern</p>
          </div>
        </div>
      </div>
      <!-- end of about-us section -->

      <!-- services section -->
      <div id="services-container">
        <h2 class="section-title">What We Do</h2>
        <div class="services-card-container">
          <div class="card-wrap">
            <div class="service-card">
              <img src="./assets/services/transportation.jpg" alt="Service" />
              <h1>Transportation Facility</h1>
              <p>
                We construct and maintain transportation-related facilities that
                including road, surface or/and underground rails and sky bridge.
              </p>
              <p>
                <button onclick="addToCart('Transportation Facility', 100)">
                  Add to Cart
                </button>
              </p>
            </div>
          </div>
          <div class="card-wrap">
            <div class="service-card">
              <img src="./assets/services/public-facility.jpg" alt="Service" />
              <h1>Public Facility Projects</h1>
              <p>
                We aim to improve convenience in the client's area by building
                and maintaining beacons by using Redstone Technology and handled
                by our best engineer.
              </p>
              <p>
                <button onclick="addToCart('Public Facility Projects', 200)">
                  Add to Cart
                </button>
              </p>
            </div>
          </div>
          <div class="card-wrap">
            <div class="service-card">
              <img src="./assets/services/resources.jpg" alt="Service" />
              <h1>Resources Exploration</h1>
              <p>
                We provide resources by exploring your world. Resources
                including diamond, netherite, and redstone. DON'T WASTE YOUR
                TIME!!!
              </p>
              <p>
                <button onclick="addToCart('Resources Exploration', 300)">
                  Add to Cart
                </button>
              </p>
            </div>
          </div>
          <div class="card-wrap">
            <div class="service-card">
              <img
                src="./assets/services/land-clearing-service.png"
                alt="Service"
              />
              <h1>Land Clearing</h1>
              <p>
                Want to make your own city but has bad terrain? Shiranui
                Construction provide service for land clearing that consist of
                flattening terrain and demolish creeper spawner!
              </p>
              <p>
                <button onclick="addToCart('Land Clearing', 400)">
                  Add to Cart
                </button>
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- end of services section -->

      <!-- client section -->
      <div id="client-container">
        <h2 class="section-title">Trusted By</h2>
        <div class="client-img-container">
          <img src="./assets/clients/akukin_logo.png" class="client-img" />
          <img src="./assets/clients/usaken_logo.png" class="client-img" />
          <img
            src="./assets/clients/dorobo_logo.png_large"
            class="client-img"
          />
          <img src="./assets/clients/shikemura_logo.png" class="client-img" />
          <img src="./assets/clients/uber_sheep_logo.jpg" class="client-img" />
        </div>
      </div>
      <!-- end of client section -->

      <!-- achievement section -->
      <div id="achievements-container">
        <h2>Our Success Story</h2>
        <div class="achievement-card-container">
          <div class="achievement-card">
            <img
              src="./assets/services/office-building.jpeg"
              alt="Achievement"
            />
            <div class="achievement-description">
              <h4><b>Shiranui Construction HO</b></h4>
              <p>July 22, 2021</p>
            </div>
          </div>
          <div class="achievement-card">
            <img
              src="./assets/services/shiranui-construction-fest.jpeg"
              alt="Achievement"
            />
            <div class="achievement-description">
              <h4><b>Shiranui Construction Festival</b></h4>
              <p>August 1, 2021</p>
            </div>
          </div>
          <div class="achievement-card">
            <img src="./assets/services/land-clearing.jpeg" alt="Achievement" />
            <div class="achievement-description">
              <h4><b>Land Clearing</b></h4>
              <p>October 13, 2021</p>
            </div>
          </div>
        </div>
      </div>
      <!-- end of achievements section -->

      <!-- contact-us section -->
      <div id="contact-us-container">
        <h2 class="section-title">Ask Us Anything</h2>
        <form action="contact-us.php" method="post">
          <label for="name">Your Name</label>
          <input type="text" id="name" name="name" placeholder="Your name.." />

          <label for="lname">email</label>
          <input
            type="email"
            id="email"
            name="email"
            placeholder="Your email.."
          />

          <label for="topic">Topic</label>
          <select id="topic" name="topic">
            <option disabled selected>Select topic</option>
            <option value="service">Service</option>
            <option value="payment">Payment</option>
          </select>

          <label for="message">Subject</label>
          <textarea
            id="message"
            name="message"
            placeholder="Write something.."
            style="height: 200px"
          ></textarea>

          <input type="submit" value="Submit" />
        </form>
      </div>
      <!-- end of contact-us section -->
    </section>
    <!-- end of main-content section -->

    <!-- cart section -->
    <section id="cart" class="section">
      <h2 class="section-title">Shopping Cart</h2>
      <div id="cart-items"></div>
      <div id="cart-total"></div>
      <button onclick="checkout()">Checkout</button>
    </section>
    <!-- end of cart section -->

    <!-- footer section -->
    <div>
      <footer>
        <div class="footer-container">
          <div class="footer-company-container">
            Copyright Shiranui Construction © 2024
          </div>
          <div class="message-container">
            <p>Made by using</p>
            <div>
              <i class="fa-brands fa-html5"></i>
              <i class="fa-brands fa-css3-alt"></i>
            </div>
          </div>
          <div class="github-container">
            <a href="https://github.com/yosia45" target="_blank">
              <i class="fa-brands fa-github"></i>
            </a>
            <a href="https://x.com/shiraken_pr" target="_blank">
              <i class="fa-brands fa-x-twitter"></i>
            </a>
          </div>
        </div>
      </footer>
    </div>
    <!-- end of footer section -->
  </body>
  <script src="index.js"></script>
</html>
