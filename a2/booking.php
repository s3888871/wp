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
      <script src='../a3/script.js'></script>
   </head>
   <body>
      <header>
         <img src="/~s3888871/media/shutterstock-cinema.png" alt="Lunardo Cinema Logo" width="100" height="50">
         <!-- https://www.shutterstock.com/image-vector/online-cinema-watch-movie-theater-empty-248941924 above image url -->
         <h1>Lunardo Cinema</h1>
      </header>
      <nav>
         <div>
            <a href="https://titan.csit.rmit.edu.au/~s3888871/wp/a2/index.php"> Home Page</a>
         </div>
      </nav>
      <main>
         <h1>Barbie</h1>
         <p>Barbie and Ken are having the time of their lives in the colorful and seemingly perfect world of Barbie Land. However, when they get a chance to go to the real world, they soon discover the joys and perils of living among humans.</p>
         <p>Directed by: Greta Gerwig</p>
         <p>Starring: Margot Robbie, Ryan Gosling,  Emma Mackey</p>
         <iframe width="560" height="315" src="https://www.youtube.com/embed/pBk4NYhWNMM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
         <div>
            <h2>Barbie Booking</h2>
            <form action="booking.php" method="POST" class=center-form>
               <div class="radio-buttons">
                  <div class ="column">
                     <input type="radio" id="mon1" name="day" value="mon-11am" data-pricing="discprice" hidden>
                     <label for="mon1" class="button">Monday 11am</label>
                     <input type="radio" id="mon2" name="day" value="mon-12pm" data-pricing="discprice" hidden>
                     <label for="mon2" class="button">Monday 12pm</label>
                     <input type="radio" id="mon3" name="day" value="mon-3pm" data-pricing="discprice" hidden>
                     <label for="mon3" class="button">Monday 3pm</label>
                  </div>
                  <div class ="column">
                     <input type="radio" id="tue1" name="day" value="tue-11am" data-pricing="fullprice" hidden>
                     <label for="tue1" class="button">Tuesday 11am</label>
                     <input type="radio" id="tue2" name="day" value="tue-1pm" data-pricing="discprice" hidden>
                     <label for="tue2" class="button">Tuesday 1pm</label>
                     <input type="radio" id="tue3" name="day" value="tue-3pm" data-pricing="discprice" hidden>
                     <label for="tue3" class="button">Tuesday 3pm</label>
                  </div>
                  <div class ="column">
                     <input type="radio" id="wed1" name="day" value="wed-11am" data-pricing="fullprice" hidden>
                     <label for="wed1" class="button">Wednesday 11am</label>
                     <input type="radio" id="wed2" name="day" value="wed-1pm" data-pricing="discprice" hidden>
                     <label for="wed2" class="button">Wednesday 1pm</label>
                     <input type="radio" id="wed3" name="day" value="wed-2pm" data-pricing="discprice" hidden>
                     <label for="wed3" class="button">Wednesday 2pm</label>
                  </div>
                  <div class ="column">
                     <input type="radio" id="thur1" name="day" value="thur-11am" data-pricing="fullprice" hidden>
                     <label for="thur1" class="button">Thursday 11am</label>
                     <input type="radio" id="thur2" name="day" value="thur-1pm" data-pricing="discprice" hidden>
                     <label for="thur2" class="button">Thursday 1pm</label>
                     <input type="radio" id="thur3" name="day" value="thur-2pm" data-pricing="discprice" hidden>
                     <label for="thur3" class="button">Thursday 2pm</label>
                  </div>
                  <div class ="column">
                     <input type="radio" id="fri1" name="day" value="fri-11am" data-pricing="fullprice" hidden>
                     <label for="fri1" class="button">Friday 11am</label>
                     <input type="radio" id="fri2" name="day" value="fri-1pm" data-pricing="discprice" hidden>
                     <label for="fri2" class="button">Friday 1pm</label>
                     <input type="radio" id="fri3" name="day" value="fri-2pm" data-pricing="discprice" hidden>
                     <label for="fri3" class="button">Friday 2pm</label>
                  </div>
                  <div class ="column">
                     <input type="radio" id="sat1" name="day" value="sat-11am" data-pricing="fullprice" hidden>
                     <label for="sat1" class="button">Saturday 11am</label>
                     <input type="radio" id="sat2" name="day" value="sat-4pm" data-pricing="fullprice" hidden>
                     <label for="sat2" class="button">Saturday 4pm</label>
                  </div>
                  <div class ="column">
                     <input type="radio" id="sun1" name="day" value="sun-11am" data-pricing="fullprice" hidden>
                     <label for="sun1" class="button">Sunday 11am</label>
                  </div>
               </div>
               <div class="standard-seating">
                  <h3>Standard Seating Tickets</h3>
                  <div>
                     <br>
                     <label for="standardAdultSeats">Standard Adult Seats:</label>
                     <select name="seats[STA]" data-price-full="21.5" data-price-discount="16">
                        <option value="">Please select</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                     </select>
                  </div>
                  <div>
                     <br>
                     <label for="standardConcessionSeats">Standard Concession Seats:</label>
                     <select name="seats[STP]" data-price-full="19" data-price-discount="14.5">
                        <option value="">Please select</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                     </select>
                  </div>
                  <div>
                     <br>
                     <label for="standardChildSeats">Standard Child Seats:</label>
                     <select name="seats[STC]" data-price-full="17.5" data-price-discount="13">
                        <option value="">Please select</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                     </select>
                  </div>
               </div>
               <div class="first-class-seating">
                  <h3>First Class Seating Tickets</h3>
                  <div>
                     <br>
                     <label for="firstClassAdultSeats">First Class Adult Seats:</label>
                     <select name="seats[FCA]" data-price-full="31" data-price-discount="25">
                        <option value="">Please select</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                     </select>
                  </div>
                  <div>
                     <br>
                     <label for="firstClassConcessionSeats">First Class Concession Seats:</label>
                     <select name="seats[FCP]" data-price-full="28" data-price-discount="23.5">
                        <option value="">Please select</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                     </select>
                  </div>
                  <div>
                     <br>
                     <label for="firstClassChildSeats">First Class Child Seats:</label>
                     <select name="seats[FCC]" data-price-full="25" data-price-discount="22">
                        <option value="">Please select</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                     </select>
                  </div>
               </div>
               <div class="customer-details">
                  <input type="hidden" name="movie" value="RMC">
                  <input type="text" name="customer[name]" required placeholder="Full Name" pattern="^[a-zA-Z\s]*$">
                  <input type="email" name="customer[email]" required placeholder="Email" pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]{2,6}$">
                  <input type="tel" name="customer[mobile]" required placeholder="Mobile Number" pattern="^04\s*\d(?:\s?\d){7}$">
                  <input type="checkbox" id="rememberMe" hidden>
                  <label for="rememberMe" class="button" id="rememberMeLabel">Remember Me</label>
                  <div>
                     <div id="totalPrice">Total Price: $0</div>

                  </div>
                  <button type="submit">Submit</button>
               </div>
         </div>
         </form>
         </div>
      </main>
      <footer>
         <div>
            &copy;<script>
               document.write(new Date().getFullYear());
                           document.addEventListener('DOMContentLoaded', function() {
                const nameField = document.querySelector('input[name="customer[name]"]');
                const emailField = document.querySelector('input[name="customer[email]"]');
                const mobileField = document.querySelector('input[name="customer[mobile]"]');
                const rememberMeCheckbox = document.getElementById('rememberMe');
                const rememberMeLabel = document.getElementById('rememberMeLabel');

                // Check if details exist in localStorage
                if (localStorage.getItem('customerName')) {
                    nameField.value = localStorage.getItem('customerName');
                    emailField.value = localStorage.getItem('customerEmail');
                    mobileField.value = localStorage.getItem('customerMobile');
                    rememberMeCheckbox.checked = true;
                    rememberMeLabel.textContent = "Forget Me";
                } else {
                    rememberMeLabel.textContent = "Remember Me";
                }

                rememberMeLabel.addEventListener('click', function() {
                    if (rememberMeCheckbox.checked) {
                        localStorage.setItem('customerName', nameField.value);
                        localStorage.setItem('customerEmail', emailField.value);
                        localStorage.setItem('customerMobile', mobileField.value);
                        rememberMeLabel.textContent = "Forget Me";
                    } else {
                        localStorage.removeItem('customerName');
                        localStorage.removeItem('customerEmail');
                        localStorage.removeItem('customerMobile');
                        rememberMeLabel.textContent = "Remember Me";
                    }
                });
               });


            </script>Joshua Telfer, S3888871. GitHub: https://github.com/s3888871/wp Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.
         </div>
         <div>Disclaimer:This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
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