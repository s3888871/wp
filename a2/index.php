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
            <div class="movie-panel" tabindex="0">
               <div>
                  <div class="title-rating">
                     <h3>Barbie.</h3>
                     <h4>Rating: PG</h4>
                  </div>
                  <img src="/~s3888871/media/Barbie-poster.PNG" alt="Barbie Poster">
               </div>
               <div>
                  <p>Barbie suffers a crisis that leads her to question her world and her existence.</p>
                  <ul>
                      <li> Monday - 10 am</li>
                     <li> Tuesday - 10 am</li>
                     <li> Wednesday - 10 am</li>
                     <li> Friday - 10 am</li>
                  </ul>
                  <a href="booking.php?movie=RMC">Book Now</a>
               </div>
            </div>
            <div class="movie-panel" tabindex="1">
               <div>
                  <div class="title-rating">
                     <h3>Oppenheimer.</h3>
                     <h4>Rating: PG</h4>
                  </div>
                  <img src="/~s3888871/media/Oppenheimer-poster.PNG" alt="oppenheimer Poster">
               </div>
               <div>
                  <p>Oppenheimer is an upcoming biographical thriller film written, produced, and directed by Christopher Nolan, based on the 2005 book American Prometheus by Kai Bird and Martin J. Sherwin, about J. Robert Oppenheimer, the theoretical physicist who helped develop the first nuclear weapons.</p>
                  <ul>
                      <li> Monday - 10 am</li>
                     <li> Tuesday - 10 am</li>
                     <li> Wednesday - 10 am</li>
                     <li> Friday - 10 am</li>
                  </ul>
                  <a href="booking.php?movie=DRM">Book Now</a>
               </div>
            </div>
            <div class="movie-panel" tabindex="2">
               <div>
                  <div class="title-rating">
                     <h3>Indiana Jones.</h3>
                     <h4>Rating: M</h4>
                  </div>
                  <img src="/~s3888871/media/indiana-jones-poster.PNG" alt="indiana Poster">
               </div>
               <div>
                  <p>Archaeologist Indiana Jones races against time to retrieve a legendary artifact that can change the course of history.
                    </p>
                  <ul>
                      <li> Monday - 10 am</li>
                     <li> Tuesday - 10 am</li>
                     <li> Wednesday - 10 am</li>
                     <li> Friday - 10 am</li>
                  </ul>
                  <a href="booking.php?movie=ACT">Book Now</a>
               </div>
            </div>
            <div class="movie-panel" tabindex="3" >
               <div>
                  <div class="title-rating">
                     <h3>Teenage Mutant Ninja Turtles.</h3>
                     <h4>Rating: PG</h4>
                  </div>
                  <img src="/~s3888871/media/TMNT-poster.PNG" alt="TMNT Poster">
               </div>
               <div>
                  <p>After years of being sheltered from the human world, the Turtle brothers set out to win the hearts of New Yorkers and be accepted as normal teenagers. Their new friend, April O'Neil, helps them take on a mysterious crime syndicate, but they soon get in over their heads when an army of mutants is unleashed upon them.</p>
                  <ul>
                     <li> Monday - 10 am</li>
                     <li> Tuesday - 10 am</li>
                     <li> Wednesday - 10 am</li>
                     <li> Friday - 10 am</li>
                  </ul>
                  <a href="booking.php?movie=ANM">Book Now</a>
               </div>
            </div>
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
   </body>
</html>