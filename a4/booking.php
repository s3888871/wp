<?php
include 'tools.php';

if (isset($_GET['movie'])) {
    $movieCode = $_GET['movie'];
} elseif (isset($_POST['movie'])) {
    $movieCode = $_POST['movie'];
} else {
    die("No movie selected. booking");
}

?>

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
      <script src='../a4/script.js'></script>
   </head>
   <body>
      <header>
         <img src="/~s3888871/media/shutterstock-cinema.png" alt="Lunardo Cinema Logo" width="100" height="50">
         <!-- https://www.shutterstock.com/image-vector/online-cinema-watch-movie-theater-empty-248941924 above image url -->
         <h1>Lunardo Cinema</h1>
      </header>
      <nav>
         <div>
            <a href="https://titan.csit.rmit.edu.au/~s3888871/wp/a3/index.php"> Home Page</a>
         </div>
      </nav>
      <main>
         <h1><?php echo $selectedMovie['title']; ?></h1>
         <p><?php echo $selectedMovie['summary']; ?></p>
         <p><?php echo $selectedMovie['plot']; ?></p>
         <p>Starring: <?php echo $selectedMovie['starring']; ?></p>
         <iframe width="560" height="315" src=<?php echo $selectedMovie['movieURL']; ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
         <div>
            <h2>Booking</h2>
            <form action="receipt.php" method="POST" class=center-form>
               <div class="radio-buttons">
                    <?php
                    foreach ($selectedMovie['screenings'] as $dayCode => $screening) {
                        $dayName = $days[$dayCode];
                        $time = $screening['time'];
                        $rate = $screening['rate'] === 'discount' ? 'discprice' : 'fullprice';
                        $id = strtolower($dayCode) . str_replace(':', '', $time);
                    ?>
                    <div class="column">
                        <input type="radio" id="<?php echo $id; ?>" name="day" value="<?php echo strtolower($dayName) . '-' . $time . ',' . $rate; ?>" hidden>
                        <label for="<?php echo $id; ?>" class="button"><?php echo $dayName . ' ' . $time; ?></label>
                    </div>
                    <?php } ?>
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
                  <input type="text" name="customer[name]" required placeholder="Full Name" pattern="^[a-zA-Z\s]*$">
                  <input type="email" name="customer[email]" required placeholder="Email" pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]{2,6}$">
                  <input type="tel" name="customer[mobile]" required placeholder="Mobile Number" pattern="^04\s*\d(?:\s?\d){7}$">
                  <input type="checkbox" id="rememberMe" hidden>
                  <label for="rememberMe" class="button" id="rememberMeLabel">Remember Me</label>
                  <div>
                     <div id="totalPrice">Total Price: $0</div>

                  </div>
                    <input type="hidden" name="movie" value="<?php echo $movieCode; ?>">
                    <p><?php echo $movieCode; ?></p>
                  <button type="submit" >Submit</button>
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
         <h3>Retrieve Your Booking</h3>
            <form action="currentbookings.php" method="post">
                <label for="email">Email:</label>
                <input type="email" name="email" required>
                <label for="mobile">Mobile:</label>
                <input type="text" name="mobile" required>
                <input type="submit" value="Retrieve Booking">
            </form>

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