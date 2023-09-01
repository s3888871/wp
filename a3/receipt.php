<?php
include 'tools.php';

// Check if movie code is set and valid
if (isset($_POST['movie']) && isValidMovie($_POST['movie'])) {
    $seatPrices = [
        'STA' => ['full' => 21.5, 'discount' => 16],
        'STP' => ['full' => 19, 'discount' => 14.5],
        'STC' => ['full' => 17.5, 'discount' => 13],
        'FCA' => ['full' => 31, 'discount' => 25],
        'FCP' => ['full' => 28, 'discount' => 23.5],
        'FCC' => ['full' => 25, 'discount' => 22],
    ];

    $totalPrice = 0;

    // Calculate total price based on seat quantities and prices
    foreach ($_POST['seats'] as $seatType => $quantity) {
        $rate = $_POST['day']['rate'] === 'discount' ? 'discount' : 'full';
        $totalPrice += $seatPrices[$seatType][$rate] * $quantity;
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
        $days[$_POST['day']],
        $_POST['time'],
        $_POST['seats']['STA'],
        $_POST['seats']['STP'],
        $_POST['seats']['STC'],
        $_POST['seats']['FCA'],
        $_POST['seats']['FCP'],
        $_POST['seats']['FCC'],
        $totalPrice,
        $gst
    ];

    $file = fopen('bookings.txt', 'a');
    fputcsv($file, $data);
    fclose($file);


} else {
    echo "Invalid data provided.";
}
?>

<!DOCTYPE html>
<html lang='en'>
   <head>
   <p> receipt page</p>
   </head>
   <body>
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
