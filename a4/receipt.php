<?php
   include 'tools.php';

   $gst = 0;
   $totalPrice = 0;


   if (isset($_POST['day'])) {
       list($dayTime, $rate) = explode(',', $_POST['day']);
       list($day, $time) = explode('-', $dayTime);
   } else {

   }

   // Check if movie code is set and valid
   if (isset($_POST['movie']) && isValidMovie($_POST['movie'])) {
       $seatPrices = [
           'STA' => ['fullprice' => 21.5, 'discprice' => 16],
           'STP' => ['fullprice' => 19, 'discprice' => 14.5],
           'STC' => ['fullprice' => 17.5, 'discprice' => 13],
           'FCA' => ['fullprice' => 31, 'discprice' => 25],
           'FCP' => ['fullprice' => 28, 'discprice' => 23.5],
           'FCC' => ['fullprice' => 25, 'discprice' => 22],
       ];
       $totalPrice = 0;
       // Calculate total price based on seat quantities and prices, while also calculating subtotals for each seat seatType
       $subtotalSTA = 0;
       $subtotalSTP = 0;
       $subtotalSTC = 0;
       $subtotalFCA = 0;
       $subtotalFCP = 0;
       $subtotalFCC = 0;

       foreach ($_POST['seats'] as $seatType => $quantity) {
           $priceRate = $rate === 'discprice' ? 'discprice' : 'fullprice';
           $quantity = intval($quantity);
           if (isset($seatPrices[$seatType][$priceRate])) {
               $totalPrice += $seatPrices[$seatType][$priceRate] * $quantity;
               if ($seatType == 'STA') $subtotalSTA += $seatPrices[$seatType][$priceRate] * $quantity;
               if ($seatType == 'STP') $subtotalSTP += $seatPrices[$seatType][$priceRate] * $quantity;
               if ($seatType == 'STC') $subtotalSTC += $seatPrices[$seatType][$priceRate] * $quantity;
               if ($seatType == 'FCA') $subtotalFCA += $seatPrices[$seatType][$priceRate] * $quantity;
               if ($seatType == 'FCP') $subtotalFCP += $seatPrices[$seatType][$priceRate] * $quantity;
               if ($seatType == 'FCC') $subtotalFCC += $seatPrices[$seatType][$priceRate] * $quantity;
           }
       }

       // Calculate GST
       $gst = $totalPrice * 0.1;

       // Organize data for CSV
       $data = [
           date('Y-m-d H:i:s'),
           $_POST['customer']['name'],
           $_POST['customer']['email'],
           $_POST['customer']['mobile'],
           $_POST['movie'],
           $time,
           $day,
           $_POST['seats']['STA'], $subtotalSTA,
           $_POST['seats']['STP'], $subtotalSTP,
           $_POST['seats']['STC'], $subtotalSTC,
           $_POST['seats']['FCA'], $subtotalFCA,
           $_POST['seats']['FCP'], $subtotalFCP,
           $_POST['seats']['FCC'], $subtotalFCC,
           $totalPrice,
           $gst
       ];
      if (!isset($_POST['view_only'])) {
            $file = fopen('bookings.txt', 'a');
            fputcsv($file, $data);
            fclose($file);
        }
       if (isset($_POST['booking_data'])) {
        $_SESSION['booking_data'] = unserialize($_POST['booking_data']);
        }

       $_SESSION['booking_data'] = $_POST;

   } else {
       echo "Invalid data provided.";
   }
   ?>
<!DOCTYPE html>
<html lang='en'>
   <head>
      <h1>Receipt</h1>
      <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
      <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=<?= filemtime("style.css"); ?>">
      <script src='../wireframe.js'></script>
      <script src='../a4/script.js'></script>
   </head>
   <body>
      <div class="receipt">
         <div class="header">
            <h1>Lunardo Cinema</h1>
            <p>Address: 123 Fake Street, Sydney, Australia</p>
            <p>Email: lunardocinema@cinemas.com</p>
            <p>Phone: +123456789</p>
         </div>
         <div class="customer-details">
            <p>Name: <?php echo $_SESSION['booking_data']['customer']['name']; ?></p>
            <p>Email: <?php echo $_SESSION['booking_data']['customer']['email']; ?></p>
            <p>Mobile: <?php echo $_SESSION['booking_data']['customer']['mobile']; ?></p>
         </div>
         <table>
            <thead>
               <tr>
                  <th>Seat Type</th>
                  <th>Quantity</th>
                  <th>Subtotal</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td>Standard Adult (STA)</td>
                  <td><?php echo $_SESSION['booking_data']['seats']['STA']; ?></td>
                  <td><?php echo $subtotalSTA; ?></td>
               </tr>
               <tr>
                  <td>Standard Concession (STP)</td>
                  <td><?php echo $_SESSION['booking_data']['seats']['STP']; ?></td>
                  <td><?php echo $subtotalSTP; ?></td>
               </tr>
               <tr>
                  <td>Standard Child (STC)</td>
                  <td><?php echo $_SESSION['booking_data']['seats']['STC']; ?></td>
                  <td><?php echo $subtotalSTC; ?></td>
               </tr>
               <tr>
                  <td>First Class Adult (FCA)</td>
                  <td><?php echo $_SESSION['booking_data']['seats']['FCA']; ?></td>
                  <td><?php echo $subtotalFCA; ?></td>
               </tr>
               <tr>
                  <td>First Class Concession (FCP)</td>
                  <td><?php echo $_SESSION['booking_data']['seats']['FCP']; ?></td>
                  <td><?php echo $subtotalFCP; ?></td>
               </tr>
               <tr>
                  <td>First Class Child (FCC)</td>
                  <td><?php echo $_SESSION['booking_data']['seats']['FCC']; ?></td>
                  <td><?php echo $subtotalFCC; ?></td>
               </tr>
               <tr>
                  <td colspan="2">Total (incl. GST)</td>
                  <td><?php echo $totalPrice; ?></td>
               </tr>
               <tr>
                  <td colspan="2">GST</td>
                  <td><?php echo $gst; ?></td>
               </tr>
            </tbody>
         </table>

         <div class="footer">
         </div>
      </div>
      <div class="ticket">
          <?php
                $seatTypes = ['STA' => 'Standard Adult', 'STP' => 'Standard Concession', 'STC' => 'Standard Child', 'FCA' => 'First Class Adult', 'FCP' => 'First Class Concession', 'FCC' => 'First Class Child'];
                foreach ($_SESSION['booking_data']['seats'] as $seatType => $quantity) {
                    for ($i = 0; $i < $quantity; $i++) {
                        ?>
             <div class="ticket">
                <h2>Movie Ticket</h2>
                <p>Seat Type: <?php echo $seatTypes[$seatType]; ?></p>
                <p>Movie: <?php echo $_SESSION['booking_data']['movie'];?></p>
                <p>Time: <?php echo $time;?></p>
                <p>Date: <?php echo $day;?></p>
             </div>
             <?php
                }
                }
                ?>
      </div>

   </body>
   <footer>
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