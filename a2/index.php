<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lunardo Home Page</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=<?= filemtime("style.css"); ?>">
    <script src='../wireframe.js'></script>
  </head>

  <body>

    <header>
        <img src="/~s3888871/media/shutterstock-cinema.png" alt="Lunardo Cinema Logo" width="100" height="50">
   <!-- https://www.shutterstock.com/image-vector/online-cinema-watch-movie-theater-empty-248941924 above image url -->
        <h1>Lunardo Cinema</h1>
    </header>
    <nav id="navbar">
        <a href="#reopening">Reopening</a>
        <a href="#seats">New Seats</a>
        <a href="#system-upgrade">System Upgrade</a>
    </nav>
    <main>
        <section id="about-us">
            <h2>About Us</h2>
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
        </section>
        <section id="seats-prices">
            <h2>Seats and Prices</h2>
            <div id="table-seats-prices">
            <table>
                <thead>
                    <tr>
                        <th>Seat Type</th>
                        <th>Seat Code</th>
                        <th>Discounted Prices</th>
                        <th>Normal Prices</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Standard Adult</th>
                        <td>STA</td>
                        <td>16.00</td>
                        <td>21.50</td>
                    </tr>
                    <tr>
                        <th>Standard Concession</th>
                        <td>STP</td>
                        <td>14.50</td>
                        <td>19.00</td>
                    </tr>
                    <tr>
                        <th>Standard Child</th>
                        <td>STC</td>
                        <td>13.00</td>
                        <td>17.50</td>
                    </tr>
                    <tr>
                        <th>First Class Adult</th>
                        <td>FCA</td>
                        <td>25.00</td>
                        <td>31.00</td>
                    </tr>
                    <tr>
                        <th>First Class Concession</th>
                        <td>FCP</td>
                        <td>23.50</td>
                        <td>28.00</td>
                    </tr>
                    <tr>
                        <th>First Class Child</th>
                        <td>FCC</td>
                        <td>22.00</td>
                        <td>25.00</td>
                    </tr>
                </tbody>
            </table>
        </div>
        </section>
        <section id="now-showing">
            <h2>Now Showing</h2>
            <div class="movie-panel">
                <div>
                    <h3>Barbie.</h3>
                    <h4>Rating: PG</h4>
                    <img src="/~s3888871/media/Barbie-poster.PNG" alt="Barbie Poster" width="250" height="400">
                </div>

                <div>
                    <p>Barbie Story Synopsis. Replace and add full synopsis</p>
                    <ul>
                        <li> 10 July 2023 - 10 am</li>
                        <li> 11 July 2023 - 10 am</li>
                        <li> 12 July 2023 - 10 am</li>
                        <li> 13 July 2023 - 10 am</li>
                    </ul>
                    <a href="booking.php?movie=ACT">Book Now</a>
                </div>
            </div>
        </section>
    </main>

    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script>Joshua Telfer, S3888871. GitHub: https://github.com/s3888871/wp Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>

      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>

      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

  </body>
</html>
