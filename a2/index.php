<?php
include 'tools.php';
?>
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
      <script src="../a3/script.js"></script>
   </head>
   <body>
      <header>
         <img src="/~s3888871/media/shutterstock-cinema.png" alt="Lunardo Cinema Logo" width="100" height="50">
         <!-- https://www.shutterstock.com/image-vector/online-cinema-watch-movie-theater-empty-248941924 above image url -->
         <h1>Lunardo Cinema</h1>
      </header>
      <nav id="navbar">
         <a href="#about-us" class="nav-link">About Us</a>
         <a href="#seats-prices" class="nav-link">New Seats</a>
         <a href="#now-showing" class="nav-link">Now Showing</a>
      </nav>
      <main>
         <section id="about-us">
            <h2>About Us</h2>
            <p>We are thrilled to announce the grand reopening of Lunardo Cinema! After lengthy renovations and improvements, we have redesigned our cinema aiming to keep our historic charm while providing a model movie-watching experience.</p>
            <br>
            <p>They key highlight of our redesign is the addition of luxurious seating options. Lunardo Cinema now has upgraded, reclinable standard seats, perfect for the casual movie-goer.
               For those who crave the highest class of luxury, we have premium, all leather seats available for out first class customers.
            </p>
            <br>
            <p>We have also made tremendous leaps in terms of our audio visual technology. Our silver screens now have cutting edge 3D Dolby Vision projection and Dolby Atmost sound. This creates and astonishing brightness and colour
               while the Dolby Atmos sound system immerses you with its multi-dimensional sound system. These upgrades make for a truly immersive cinematic experience.
            </p>
            <br>
            <p>For more info on 3D Dolby Vision projection and Dolby Atmos sound, visit the Dolby website <a href="https://professional.dolby.com/cinema/" target="_blank">here</a> and <a href="https://professional.dolby.com/cinema/dolby-atmos" target="_blank">here</a>  </p>
         </section>
         <h2>Seats and Prices</h2>
         <section id="seats-prices">
            <div class="seat-section">
               <h3>Standard Seats</h3>
               <div class="seat-details">
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
                           <td>Standard Adult</td>
                           <td>STA</td>
                           <td>16.00</td>
                           <td>21.50</td>
                        </tr>
                        <tr>
                           <td>Standard Concession</td>
                           <td>STP</td>
                           <td>14.50</td>
                           <td>19.00</td>
                        </tr>
                        <tr>
                           <td>Standard Child</td>
                           <td>STC</td>
                           <td>13.00</td>
                           <td>17.50</td>
                        </tr>
                     </tbody>
                  </table>
                  <img src="/~s3888871/media/Profern-Standard-Twin.png" class="seat-image" alt="Standard Seating Image">
               </div>
            </div>
            <div class="seat-section">
               <h3>First Class Seats</h3>
               <div class="seat-details">
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
                           <td>First Class Adult</td>
                           <td>FCA</td>
                           <td>25.00</td>
                           <td>31.00</td>
                        </tr>
                        <tr>
                           <td>First Class Concession</td>
                           <td>FCP</td>
                           <td>23.50</td>
                           <td>28.00</td>
                        </tr>
                        <tr>
                           <td>First Class Child</td>
                           <td>FCC</td>
                           <td>22.00</td>
                           <td>25.00</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <img src="/~s3888871/media/Profern-Verona-Twin.png" class="seat-image" alt="First Class Seating Image">
            </div>
         </section>
         <section id="now-showing" class="clearfix">
    <h2>Now Showing</h2>

    <?php foreach ($moviesObject as $code => $moviesObject): ?>
        <div class="movie-panel" tabindex="0">
            <div>
                <div class="title-rating">
                    <h3><?php echo $movie['title']; ?></h3>
                    <h4>Rating: <?php echo $movie['rating']; ?></h4>
                </div>
                <img src="<?php echo $movie['image']; ?>" alt="<?php echo $movie['title']; ?> Poster">
            </div>
            <div>
                <p><?php echo $movie['description']; ?></p>
                <ul>
                    <?php foreach ($movie['schedule'] as $time): ?>
                        <li><?php echo $time; ?></li>
                    <?php endforeach; ?>
                </ul>
                <a href="booking.php?movie=<?php echo $code; ?>">Book Now</a>
            </div>
        </div>
    <?php endforeach; ?>

</section>

      </main>
      <footer>
         <div>
            &copy;<script>
               document.write(new Date().getFullYear());
            </script>Joshua Telfer, S3888871. GitHub: https://github.com/s3888871/wp Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.
         </div>
         <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
         <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
      </footer>
            <aside id="debug">
         <hr>
         <h3>Debug Area</h3>
         <pre>
GET Contains:
<?php print_r($_GET) ?>
POST Contains:
<?php print_r($_POST) ?>
SESSION Contains:
<?php print_r($_SESSION) ?>
      </pre>
      </aside>
   </body>
</html>