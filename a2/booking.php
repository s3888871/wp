<!DOCTYPE html>
<html lang='en'>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Lunardo Booking Page</title>
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
      <nav>
         <div>Put website navigation links here</div>
      </nav>
      <h2>Barbie Booking</h2>

      <main>
          <form action="booking.php" method="POST">
              <div class="radio-buttons">
                  <div class ="column">
                      <input type="radio" id="mon" name="day" value="mon" data-pricing="discprice" hidden>
                      <label for="mon" class="button">Monday 11am</label>
                      <input type="radio" id="mon" name="day" value="mon" data-pricing="discprice" hidden>
                      <label for="mon" class="button">Monday 12pm</label>
                      <input type="radio" id="mon" name="day" value="mon" data-pricing="discprice" hidden>
                      <label for="mon" class="button">Monday 3pm</label>
                  </div>
                  <div class ="column">
                      <input type="radio" id="tue" name="day" value="tue" data-pricing="fullprice" hidden>
                      <label for="tue" class="button">Tuesday 11am</label>
                      <input type="radio" id="tue" name="day" value="tue" data-pricing="discprice" hidden>
                      <label for="tue" class="button">Tuesday 1pm</label>
                      <input type="radio" id="tue" name="day" value="tue" data-pricing="discprice" hidden>
                      <label for="tue" class="button">Tuesday 3pm</label>
                  </div>

                  <div class ="column">
                      <input type="radio" id="wed" name="day" value="wed" data-pricing="fullprice" hidden>
                      <label for="wed" class="button">Wednesday 11am</label>
                      <input type="radio" id="wed" name="day" value="wed" data-pricing="discprice" hidden>
                      <label for="wed" class="button">Wednesday 1pm</label>
                      <input type="radio" id="wed" name="day" value="wed" data-pricing="discprice" hidden>
                      <label for="wed" class="button">Wednesday 2pm</label>
                  </div>
                  <div class ="column">
                      <input type="radio" id="thur" name="day" value="thur" data-pricing="fullprice" hidden>
                      <label for="thur" class="button">Thursday 11am</label>
                      <input type="radio" id="thur" name="day" value="thur" data-pricing="discprice" hidden>
                      <label for="thur" class="button">Thursday 1pm</label>
                      <input type="radio" id="thur" name="day" value="thur" data-pricing="discprice" hidden>
                      <label for="thur" class="button">Thursday 2pm</label>
                  </div>
                  <div class ="column">
                      <input type="radio" id="fri" name="day" value="thur" data-pricing="fullprice" hidden>
                      <label for="fri" class="button">Friday 11am</label>
                      <input type="radio" id="fri" name="day" value="thur" data-pricing="discprice" hidden>
                      <label for="fri" class="button">Friday 1pm</label>
                      <input type="radio" id="fri" name="day" value="thur" data-pricing="discprice" hidden>
                      <label for="fri" class="button">Friday 2pm</label>
                  </div>
                  <div class ="column">
                      <input type="radio" id="sat" name="day" value="sat" data-pricing="fullprice" hidden>
                      <label for="sat" class="button">Saturday 11am</label>
                      <input type="radio" id="sat" name="day" value="sat" data-pricing="fullprice" hidden>
                      <label for="sat" class="button">Saturday 4pm</label>
                  </div>
                  <div class ="column">
                      <input type="radio" id="sun" name="day" value="sun" data-pricing="fullprice" hidden>
                      <label for="sun" class="button">Sunday 11am</label>
                  </div>
              </div>
              



              <input type="hidden" name="movie" value="RMC">
              <input type="text" name="customer[name]" required placeholder="Full Name">
              <input type="email" name="customer[email]" required placeholder="Email">
              <input type="tel" name="customer[mobile]" required placeholder="Mobile Number" pattern="[0-9]{10}">
              <button type="submit">Submit</button>

    </form>
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