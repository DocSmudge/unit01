<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style/style.css" />
    <link rel="stylesheet" type="text/css" href="slick-1.8.1/slick/slick.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="slick-1.8.1/slick/slick-theme.css"
    />

    <script
      src="https://kit.fontawesome.com/40944757d2.js"
      crossorigin="anonymous"
    ></script>

    <title><?php echo($ptitle);?></title>
  </head>
  <body>
    <header>
      <div id="logo">
        <img
          src="images/logo.png"
          alt="Business Logo"
          srcset="
            ./images/logo1.png 1x,
            ./images/logo2.png 2x,
            ./images/logo3.png 3x
          "
        />
        <h3>Call Now to Book!</h3>
        <a href="tel+801-555-1234">801-555-1234</a>
      </div>
    </header>

    <div id="navWrapper">
      <!-- *ADDED -->
      <div id="nav">
        <nav>
          <button id="hamburgerButton">
            <span>&#9776;</span><span>x</span>
          </button>
          <ul id="primaryNav">
            <li><a href="index.php">Home</a></li>
            <li class="alwaysParent">
              <a href="#">Agents</a>
              <ul>
                <li><a href="agent1.php">Jane Smith</a></li>
                <li><a href="agent2.php">John Doe</a></li>
              </ul>
            </li>
            <!-- end parent nav -->
            <li><a href="cruises.php">Cruises</a></li>
            <li><a href="book.php">Book</a></li>
          </ul>
        </nav>

        <div class="searchBox">
          <form
            action="https://explore.org/livecams/kitten-rescue/kitten-rescue-baby-kittens/"
            method="GET"
            class="form"
          >
            <input type="search" placeholder="Search.." />
            <button type="submit" class="searchButton">
              <img src="./images/search.png" alt="search icon" />
            </button>
          </form>
        </div>
      </div>
    </div>
    <!-- end navWrapperDiv-->
    <main>